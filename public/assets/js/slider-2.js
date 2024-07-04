//    Theme Name: Artik
//    Description: Template for Photographers or any Creative Agency
//    Author: WebGraphicArt
//    Version: 2.0


/*--------------- SLIDESHOW ---------------*/

// From https://davidwalsh.name/javascript-debounce-function.
function debounce(func, wait, immediate) {
   var timeout;
   return function() {
      var context = this, args = arguments;
      var later = function() {
         timeout = null;
         if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
   };
 }

// SLIDESHOW 2

class Slideshow2 {
   constructor(el, settings) {
      this.DOM = {};
      this.DOM.el = el;
      this.settings = {
          animation: {
              slides: {
                  duration: 600,
                  easing: 'easeOutQuint'
              },
              shape: {
                  duration: 300,
                  easing: {in: 'easeOutQuad', out: 'easeOutQuad'}
              }
          },
          frameFill: '#111'
      }
      this.settings.autoSlide = settings.autoSlide || false;
      this.settings.autoSlideTimeout = settings.autoSlideTimeout || 4000;
      this.settings.animation.slides.duration = settings.duration;
      this.settings.animation.shape.duration = settings.shape_duration;
      this.settings.frameFill = settings.frameFill; 

      this.init();
   }
   init() {
      this.DOM.slides = Array.from(this.DOM.el.querySelectorAll('.slides > .slide-wrap'));
      this.slidesTotal = this.DOM.slides.length;
      this.DOM.nav = this.DOM.el.querySelector('.slidenav');
      this.DOM.nextCtrl = this.DOM.nav.querySelector('.slidenav-item-next');
      this.DOM.prevCtrl = this.DOM.nav.querySelector('.slidenav-item-prev');
      this.current = 0;
      this.createFrame(); 
      this.initEvents();
   }
   createFrame() {
      this.rect = this.DOM.el.getBoundingClientRect();
      this.frameSize = this.rect.width/12;
      this.paths = {
          initial: this.calculatePath('initial'),
          final: this.calculatePath('final')
      };
      this.DOM.svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
      this.DOM.svg.setAttribute('class', 'slideshow-shape-2');
      this.DOM.svg.setAttribute('width','100%');
      this.DOM.svg.setAttribute('height','100%');
      this.DOM.svg.setAttribute('viewbox',`0 0 ${this.rect.width} ${this.rect.height}`);
      this.DOM.svg.innerHTML = `<path fill="${this.settings.frameFill}" d="${this.paths.initial}"/>`;
      this.DOM.el.insertBefore(this.DOM.svg, this.DOM.nav);
      this.DOM.shape = this.DOM.svg.lastElementChild;
   }
   updateFrame() {
      this.paths.initial = this.calculatePath('initial');
      this.paths.final = this.calculatePath('final');
      this.DOM.svg.setAttribute('viewbox',`0 0 ${this.rect.width} ${this.rect.height}`);
      this.DOM.shape.setAttribute('d', this.isAnimating ? this.paths.final : this.paths.initial);
   }
   calculatePath(path = 'initial') {
      if ( path === 'initial' ) {
          return `M 0,0 0,${this.rect.height} ${this.rect.width},${this.rect.height} ${this.rect.width},0 0,0 Z M 0,0 ${this.rect.width},0 ${this.rect.width},${this.rect.height} 0,${this.rect.height} Z`;
      }
      else {
          return {
              next: `M 0,0 0,${this.rect.height} ${this.rect.width},${this.rect.height} ${this.rect.width},0 0,0 Z M ${this.frameSize},${this.frameSize} ${this.rect.width-this.frameSize},${this.frameSize/2} ${this.rect.width-this.frameSize},${this.rect.height-this.frameSize/2} ${this.frameSize},${this.rect.height-this.frameSize} Z`,
              prev: `M 0,0 0,${this.rect.height} ${this.rect.width},${this.rect.height} ${this.rect.width},0 0,0 Z M ${this.frameSize},${this.frameSize/2} ${this.rect.width-this.frameSize},${this.frameSize} ${this.rect.width-this.frameSize},${this.rect.height-this.frameSize} ${this.frameSize},${this.rect.height-this.frameSize/2} Z`
          }
      }
   }
   initEvents() {
      this.DOM.nextCtrl.addEventListener('click', () => this.navigate('next'));
      this.DOM.prevCtrl.addEventListener('click', () => this.navigate('prev'));

      window.addEventListener('resize', debounce(() => {
          this.rect = this.DOM.el.getBoundingClientRect();
          this.updateFrame();
      }, 20));

      document.addEventListener('keydown', (ev) => {
          const keyCode = ev.keyCode || ev.which;
          if ( keyCode === 37 ) {
              this.navigate('prev');
          }
          else if ( keyCode === 39 ) {
              this.navigate('next');
          }
      });
         if(this.settings.autoSlide) {
             setInterval(() => this.navigate('next'), this.settings.autoSlideTimeout);
         }
   }
   navigate(dir = 'next') {
      if ( this.isAnimating ) return false;
      this.isAnimating = true;

      const animateShapeIn = anime({
          targets: this.DOM.shape,
          duration: this.settings.animation.shape.duration,
          easing: this.settings.animation.shape.easing.in,
          d: dir === 'next' ? this.paths.final.next : this.paths.final.prev
      });

      const animateSlides = () => {
          return new Promise((resolve, reject) => {
              const currentSlide = this.DOM.slides[this.current];
              anime({
                  targets: currentSlide,
                  duration: this.settings.animation.slides.duration,
                  easing: this.settings.animation.slides.easing,
                  translateX: dir === 'next' ? -1*this.rect.width : this.rect.width,
                  complete: () => {
                      currentSlide.classList.remove('slide-current');
                      resolve();
                  }
              });

              this.current = dir === 'next' ? 
                  this.current < this.slidesTotal-1 ? this.current + 1 : 0 :
                  this.current > 0 ? this.current - 1 : this.slidesTotal-1; 

              const newSlide = this.DOM.slides[this.current];
              newSlide.classList.add('slide-current');
              anime({
                  targets: newSlide,
                  duration: this.settings.animation.slides.duration,
                  easing: this.settings.animation.slides.easing,
                  translateX: [dir === 'next' ? this.rect.width : -1*this.rect.width,0]
              });

              const newSlideImg = newSlide.querySelector('.slide-img');
              newSlideImg.style.transformOrigin = dir === 'next' ? '-10% 50%' : '110% 50%';
              anime.remove(newSlideImg);
              anime({
                  targets: newSlideImg,
                  duration: this.settings.animation.slides.duration*4,
                  easing: 'easeOutElastic',
                  elasticity: 350,
                  scale: [1.2,1],
                  rotate: [dir === 'next' ? 4 : -4,0]
              });

              anime({
                  targets: [newSlide.querySelector('.slide-title'), newSlide.querySelector('.slide-desc'), newSlide.querySelector('.slide-link')],
                  duration: this.settings.animation.slides.duration,
                  easing: this.settings.animation.slides.easing,
                  delay: (t,i,total) => dir === 'next' ? i*100+750 : (total-i-1)*100+750,
                  translateY: [dir === 'next' ? 300 : -300,0],
                  rotate: [15,0],
                  opacity: [0,1],
                  scale: [0.8,1], // Mio
              });
          });
      };

      const animateShapeOut = () => {
          anime({
              targets: this.DOM.shape,
              duration: this.settings.animation.shape.duration,
              delay: 150,
              easing: this.settings.animation.shape.easing.out,
              d: this.paths.initial,
              complete: () => this.isAnimating = false
          });
      }

      animateShapeIn.finished.then(animateSlides).then(animateShapeOut);
   }
}

new Slideshow2(document.querySelector('.slideshow-2'), { autoSlide: false, autoSlideTimeout: 8000, duration: 2000, shape_duration: 700 });

imagesLoaded('.slide-img', { background: true }); 