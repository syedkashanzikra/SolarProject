//    Theme Name: Artik
//    Description: Template for Photographers or any Creative Agency
//    Author: WebGraphicArt
//    Version: 2.0

(function() {
   "use strict";
   
   gsap.registerPlugin(ScrollTrigger, ScrollSmoother, CustomEase, Draggable, InertiaPlugin, SplitText);
   
   const mm = gsap.matchMedia();
   
    
   /*--------------- SCROLLSMOOTHER ---------------*/

   let smoother = ScrollSmoother.create({
      wrapper: "#smooth-wrapper",
      content: "#smooth-content",
      smooth: 2.5,
      ignoreMobileResize: true,
      effects: true,
   });
   
   smoother.paused(true);
   

   /*--------------- PRELOAD ---------------*/
  
   const wrapImg = gsap.utils.toArray("img");
   const percentage = document.querySelector(".percentage");
   const loaderText = document.querySelectorAll(".loader-text span");
   const loaderBg = document.querySelector(".loader-bg");
   const introPage = document.querySelector(".intro-eff");
   const navIcon = document.querySelectorAll(".nav-icon");
   const logoText = document.querySelectorAll(".logo");
   const updateProgress = (instance) => percentage.textContent = `' ${Math.round(instance.progressedCount * 100 / wrapImg.length)}%`;
   const Preload = () => {
      document.scrollingElement.scrollTo(0, 0);
      var tl = gsap.timeline({
         onComplete: () => {
            document.body.style.overflow = "auto";
            window.scrollTo(0,0);
            smoother.paused(false);
         },
      });
      tl.to(percentage, {
         yPercent: -10,
         autoAlpha: 0,
         duration: 1
      })
      .set(loaderText, { perspective: 400 })
      .from(loaderText, {
         autoAlpha: 0,
         color: "random(['#ccd0db', '#615651', '#BF9865', '#455d7a', '#fbf2d5'])",
         duration: 0.4,
         scale: 0,
         y: 80,
         rotationX: 270,
         transformOrigin: "0% 50% -50",
         ease: "back",
         stagger: 0.3,
      }, "-=.6")
      .to(loaderText, {
         autoAlpha: 0,
         y: -50,
         color: "random(['#ccd0db', '#615651', '#BF9865', '#455d7a', '#fbf2d5'])",
         stagger: 0.2,
         duration: 0.4
      }, "-=.6")
      .to(loaderBg, {
         autoAlpha: 1,
         yPercent: -100,
         duration: 0.4,
         ease: "expo.inOut"
      }, "-=.4")
      .set(introPage, { 
         autoAlpha: 0, 
         scale: 1.2 
      }, "-=1.4")
      .to(introPage, {
         autoAlpha: 1,
         scale: 1,
         duration: 1.5,
         ease: "expo.inOut"
      }, "-=1.4")
      .from(navIcon, {
         autoAlpha: 0,
         x: 30,
         duration: 1.8,
         ease: "circ.out"
      }, "-=1.9")
      .from(logoText, {
         autoAlpha: 0,
         x: -10,
         duration: 1.8,
         ease: "circ.out"
      }, "-=1.4")
   };
   
   imagesLoaded(wrapImg).on("progress", updateProgress).on("always", Preload);
   

   /*--------------- TOOLBAR ---------------*/

   const Toolbar = gsap.from(".js-toolbar", {
      yPercent: -100,
      paused: true,
      duration: .3,
   })
   .progress(1);
   ScrollTrigger.create({
      start: "top top",
      end: 99999,
      delay: 1,
      toggleClass: {
         targets: ".js-toolbar",
         className: "js-toolbar-fix"
      },
      onUpdate: (self) => {
         self.direction === -1 ? Toolbar.play() : Toolbar.reverse();
      }
   });
   
   
   /* --------------------- SCROLLSMOOTHER RESET EFFECTS --------------------- */
   
   mm.add("(min-width: 768px)", () => {

      smoother.effects("[data-speed], [data-lag]");
      
   });
   
   mm.add("(max-width: 767px)", () => {

      smoother.effects().forEach(t => t.kill());
      
   });
   
   /*--------------- MENU NAVIGATION ---------------*/

   $(document).ready(function() {
      // Navigation open/close
      $(".js-nav-open-close").on("click", function() {
         $("body").toggleClass("js-nav-active");
      });
      // Stop Scroll
      document.querySelector(".js-nav-open-close").addEventListener("click", () => {
         smoother.paused(!smoother.paused());
      });
      // Drop-down menu
      $(".js-submenu-open").on("click", function() {
         $(".js-submenu-view").addClass("js-submenu-active");
         $(this).find(".js-submenu").addClass("js-submenu-active");
      });
      // Submenu Close
      $(".js-submenu-close").on("click", function() {
         $(".js-submenu-view").removeClass("js-submenu-active");
         $(".js-submenu").removeClass("js-submenu-active");
      });
   });


   /*--------------- VIDEO ---------------*/
      
   const jarallaxPlugin = $.fn.jarallax.noConflict() // return $.fn.jarallax to previously assigned value
   $.fn.newJarallax = jarallaxPlugin // give $().newJarallax the Jarallax functionality
      
   jarallax(document.querySelectorAll(".js-slider-parallax"), {
      disableParallax: /iPad|iPhone|iPod|Android/,
   });
   jarallax(document.querySelectorAll(".js-video-1"), {
      videoStartTime: 30,
      disableParallax: /iPad|iPhone|iPod|Android/,
      /*disableVideo: /iPad|iPhone|iPod|Android/*/
   });
   jarallax(document.querySelectorAll(".js-video-2"), {
      videoStartTime: 0,
      disableParallax: /iPad|iPhone|iPod|Android/,
      /*disableVideo: /iPad|iPhone|iPod|Android/*/
   });
   jarallax(document.querySelectorAll(".js-video-3"), {
      videoStartTime: 28,
      disableParallax: /iPad|iPhone|iPod|Android/,
      /*disableVideo: /iPad|iPhone|iPod|Android/*/
   });
   jarallax(document.querySelectorAll(".js-video-4"), {
      videoStartTime: 100,
      disableParallax: /iPad|iPhone|iPod|Android/,
      /*disableVideo: /iPad|iPhone|iPod|Android/*/
   });
   jarallax(document.querySelectorAll(".js-video-5"), {
      videoStartTime: 71,
      disableParallax: /iPad|iPhone|iPod|Android/,
      /*disableVideo: /iPad|iPhone|iPod|Android/*/
   });
   jarallax(document.querySelectorAll(".js-video-6"), {
      videoStartTime: 1680,
      disableParallax: /iPad|iPhone|iPod|Android/,
      /*disableVideo: /iPad|iPhone|iPod|Android/*/
   });
   jarallax(document.querySelectorAll(".js-video-7"), {
      videoStartTime: 0,
      disableParallax: /iPad|iPhone|iPod|Android/,
      /*disableVideo: /iPad|iPhone|iPod|Android/*/
   });
   jarallax(document.querySelectorAll(".js-video-8"), {
      videoStartTime: 0,
      disableParallax: /iPad|iPhone|iPod|Android/,
      /*disableVideo: /iPad|iPhone|iPod|Android/*/
   });
   jarallax(document.querySelectorAll(".js-video-9"), {
      videoStartTime: 3,
      disableParallax: /iPad|iPhone|iPod|Android/,
      /*disableVideo: /iPad|iPhone|iPod|Android/*/
   });
   jarallax(document.querySelectorAll(".js-video-10"), {
      videoStartTime: 7,
      disableParallax: /iPad|iPhone|iPod|Android/,
      /*disableVideo: /iPad|iPhone|iPod|Android/*/
   });


   /*--------------- LIGHTBOX ---------------*/

   var lightbox = GLightbox();
   lightbox.on("open", (target) => {
      console.log("lightbox opened");
   });
   
   var lightboxDescription = GLightbox({
      selector: ".glightbox-1",
      touchNavigation: true,
      loop: true,
      autoplayVideos: true,
      slideEffect: "slide",
      openEffect: "zoom",
      dragAutoSnap: true,
   });
   
   var lightboxInlineIframe = GLightbox({
      selector: ".glightbox-2"
   });
   
   var lightboxVideo = GLightbox({
      selector: ".glightbox-vid",
      autoplayVideos: true,
   });
   lightboxVideo.on("slide_changed", ({
      prev,
      current
   }) => {
      console.log("Prev slide", prev);
      console.log("Current slide", current);
      const  {
         slideIndex,
         slideNode,
         slideConfig,
         player
      } = current;
      if (player) {
         if (!player.ready) {
            player.on("ready", (event) => {
            });
         }
         player.on("play", (event) => {
            console.log("Started play");
         });
         player.on("volumechange", (event) => {
            console.log("Volume change");
         });
         player.on("ended", (event) => {
            console.log("Video ended");
         });
      }
   });


   /*--------------- CURSOR ---------------*/

   const cursor = new Cursor({
      container: "body",
      speed: 0.7,
      ease: "expo.out",
      visibleTimeout: 300
   });
   $("[data-magnetic]").each(function() {
      new Magnetic(this);
   });


   /*--------------- IMAGE DISTORTION HOVER ---------------*/

   imagesLoaded(document.querySelectorAll("img"));
   
   Array.from(document.querySelectorAll(".grid-item-img-h")).forEach((el) => {
      const imgs = Array.from(el.querySelectorAll("img"));
      new hoverEffect({
         parent: el,
         imagesRatio: 1280 / 1920,
         intensity1: el.dataset.intensity1 || undefined,
         intensity2: el.dataset.intensity2 || undefined,
         angle1: el.dataset.angle1 || undefined,
         angle2: el.dataset.angle2 || undefined,
         speedIn: 1,
         speedOut: 1,
         ease: el.dataset.ease || undefined,
         image1: imgs[0].getAttribute("src"),
         image2: imgs[1].getAttribute("src"),
         displacementImage: el.dataset.displacement
      });
   });

   Array.from(document.querySelectorAll(".grid-item-img-v")).forEach((el) => {
      const imgs = Array.from(el.querySelectorAll("img"));
      new hoverEffect({
         parent: el,
         imagesRatio: 1440 / 1200,
         intensity1: el.dataset.intensity1 || undefined,
         intensity2: el.dataset.intensity2 || undefined,
         angle1: el.dataset.angle1 || undefined,
         angle2: el.dataset.angle2 || undefined,
         speedIn: 1,
         speedOut: 1,
         ease: el.dataset.ease || undefined,
         image1: imgs[0].getAttribute("src"),
         image2: imgs[1].getAttribute("src"),
         displacementImage: el.dataset.displacement
      });
   });

   Array.from(document.querySelectorAll(".grid-item-video")).forEach((el) => {
      const imgs = Array.from(el.querySelectorAll("source"));
      new hoverEffect({
         parent: el,
         imagesRatio: 3600 / 2400,
         intensity1: el.dataset.intensity1 || undefined,
         intensity2: el.dataset.intensity2 || undefined,
         angle1: el.dataset.angle1 || undefined,
         angle2: el.dataset.angle2 || undefined,
         speedIn: 1,
         speedOut: 1,
         ease: el.dataset.ease || undefined,
         image1: imgs[0].getAttribute("src"),
         image2: imgs[1].getAttribute("src"),
         displacementImage: el.dataset.displacement,
         video: true,
      });
   });
   
   
   /*--------------- IMAGE HOVER EFFECT ---------------*/

   mm.add("(min-width: 768px)", () => { // Start Media Query

      const container = document.querySelector("#smooth-wrapper")
      const RGBShift1 = document.querySelector(".grid-rgb-1")
      const RGBShift2 = document.querySelector(".grid-rgb-2")
      const RGBShift3 = document.querySelector(".grid-rgb-3")
      const Trails1 = document.querySelector(".grid-trails-1")
      const Trails2 = document.querySelector(".grid-trails-2")
      const Trails3 = document.querySelector(".grid-trails-3")
      const Stretch1 = document.querySelector(".grid-stretch-1")
      
      const preloadImages = () => {
         return new Promise((resolve, reject) => {
            imagesLoaded(document.querySelectorAll("img"), resolve);
         });
      };
      preloadImages().then(() => {
         const gridRgb1 = new RGBShiftEffect(container, RGBShift1, {
            strength: 0.55
         })
         const gridRgb2 = new RGBShiftEffect(container, RGBShift2, {
            strength: 0.55
         })
         const gridRgb3 = new RGBShiftEffect(container, RGBShift3, {
            strength: 0.55
         })
         const gridTrails1 = new TrailsEffect(container, Trails1, {
            strength: 0.25,
            amount: 5,
            duration: .5
         })
         const gridTrails2 = new TrailsEffect(container, Trails2, {
            strength: 0.25,
            amount: 5,
            duration: .5
         })
         const gridTrails3 = new TrailsEffect(container, Trails3, {
            strength: 0.25,
            amount: 5,
            duration: .5
         })
         const gridStretch1 = new StretchEffect(container, Stretch1, {
            strength: 0.45
         })
      });
      
   }); // End Media Query
   

   /*--------------- SMOOTH SCROLL ELEMENTS ---------------*/

   mm.add("(min-width: 992px)", () => { // Start Media Query

      const scrollXY = gsap.utils.toArray(".smooth-xy");
      gsap.set(scrollXY, { xPercent: 0, yPercent: 0 })
      scrollXY.forEach((scroll, i) => {
         gsap.timeline({
            scrollTrigger: {
               trigger: scroll,
               scrub: true,
            },
            ease: "none",
         })
         .to(scroll, {
            y: (i, target) => -180 * target.dataset.speedy,
            x: (i, target) => -80 * target.dataset.speedx,
         });
      });
      
   }); // End Media Query


   /*--------------- COUNTER ---------------*/

   const items = gsap.utils.toArray(".js-counter");
   const itemValues = items.map(item => item.textContent);
   const revertItems = () => {
      items.forEach((item, i) => item.textContent = itemValues[i]);
   }
   const counter = items.map(item => item.textContent);
   items.forEach(function(item) {
      gsap.from(item, {
         scrollTrigger: {
            trigger: item,
         },
         textContent: 0,
         duration: 5,
         ease: "expo.out",
         snap: {
            textContent: 1
         },
         stagger: {
            each: 1.0,
            onUpdate: function() {
               this.targets()[0].innerHTML = numberWithCommas(
               Math.ceil(this.targets()[0].textContent)
               );
            }
         }
      });
   });
   function numberWithCommas(x) {
      return x.toString().replace(/\B(?=(\d {3})+(?!\d))/g, ",");
   }
      

   /*--------------- HORIZONTAL ANIMATION 1 ---------------*/

   const dur = 50;
   const wrap = gsap.utils.wrap(0, 1);
   document.querySelectorAll(".js-horiz-loop .wrap-horiz-loop").forEach(ticker => {
      let totalDistance;
      $(ticker).append($(ticker.querySelectorAll("li")).clone());
      const itemsHoriz = ticker.querySelectorAll("li");
      let anim;
      let startPos;
      const draggable = new Draggable(ticker, {
         type: "x",
         trigger: ticker,
         inertia: true,
         throwResistance: 8000,
         dragResistance: 0.2,
         edgeResistance: 0.65,
         onPressInit: function() {
            anim.pause();
            startPos = this.x;
         },
         onDrag: function() {
            let prog = wrap(-this.x / totalDistance);
            anim.progress(prog);
         },
         onThrowUpdate: function() {
            let prog = wrap(-this.x / totalDistance);
            anim.progress(prog);
         },
         onThrowComplete: function() {
            anim.play();
            gsap.fromTo(anim, {
               timeScale: 0
            },
            {
               duration: 2,
               timeScale: 1,
               ease: "power1.in"
            });
         },
      });
      function resize() {
         if (anim) anim.play(0);
         totalDistance = $(ticker).width() / 2;
         anim = gsap.to(ticker, {
            duration: dur,
            x: -totalDistance,
            ease: "none",
            repeat: -1,
            overwrite: true
         });
      }
      $(window).resize(resize);
      resize();
   });


   /*--------------- HORIZONTAL ANIMATION 2 ---------------*/

   const textH = gsap.utils.toArray(".js-scroll-horiz")
   textH.forEach(function(sec, i) {
      gsap.fromTo(sec, {
         x: () => i % 2 === 0 ? 0 : -(sec.scrollWidth - window.innerWidth)
      },
      {
         x: () => i % 2 === 0 ? -(sec.scrollWidth - window.innerWidth) : 0,
         scrollTrigger: {
            trigger: sec,
            start: () => "top bottom",
            end: () => "bottom top",
            invalidateOnRefresh: true,
            scrub: 2,
         },
         ease: "none",
      });
   });


   /*--------------- ACCORDION ---------------*/

   let accordion = document.querySelectorAll("[data-collapse");
   accordion.forEach((element) => {
      let clickTarget = element.querySelector("*");
      let collapseEl = element.nextElementSibling;
      let collapseElChildren = collapseEl.children;
      let tl = gsap.timeline({
         reversed: true,
         paused: true
      });
      tl.from(collapseEl, {
         ease: "back",
         y: 0,
         height: "0",
         onComplete: () => ScrollTrigger.refresh(),
         duration: 1.6
      })
      .from(collapseElChildren, {
         autoAlpha: 0,
         y: 100,
         stagger: 0.2,
         ease: "back",
         duration: 1,
      },
      "-=0.8");
      clickTarget.addEventListener("click", () => {
         tl.reversed() ? tl.play() : tl.reverse();
      });
   });


   /*--------------- BACKGROUND COLOR CHANGE ---------------*/

   const scrollColorBg = document.querySelectorAll("[data-bgcolor]");
   scrollColorBg.forEach((colorSection, i) => {
      const prevBg = i === 0 ? "" : scrollColorBg[i - 1].dataset.bgcolor;
      const prevText = i === 0 ? "" : scrollColorBg[i - 1].dataset.textcolor;
      ScrollTrigger.create({
         trigger: colorSection,
         start: "top 50%",
         onEnter: () =>
         gsap.to("body", {
            backgroundColor: colorSection.dataset.bgcolor,
            color: colorSection.dataset.textcolor,
            overwrite: "auto",
            duration: 1
         }),
         onLeaveBack: () =>
         gsap.to("body", {
            backgroundColor: prevBg,
            color: prevText,
            overwrite: "auto",
            duration: 1
         })
      });
   });

   const changeBg = document.querySelectorAll("[data-bgcolorfix]");
   changeBg.forEach((colorSection) => {
      ScrollTrigger.create({
         trigger: colorSection,
         start: "top 80%",
         onEnter: () =>
         gsap.to(".js-bgfix", {
            backgroundColor: colorSection.dataset.bgcolorfix,
            color: colorSection.dataset.textcolorfix,
            overwrite: "auto",
            duration: 1
         }),
      });
   });


   /*--------------- SPLIT TEXT ANIMATION ---------------*/

   function splitTextTlFunction(targetOne, targetTwo, splitRevert) {
      const splitTextFadeUpTl = gsap.timeline({
         defaults: {
            duration: 1.1,
            ease: 'circ.out'
         },
         onComplete: () => {
            console.log(splitRevert);
            splitRevert.revert();
         },
      });
      splitTextFadeUpTl
         .set(targetOne, {
            autoAlpha: 1
         })
         .set(targetTwo, {
            autoAlpha: 0,
            yPercent: 100
         })
         .to(targetTwo, {
            autoAlpha: 1,
            yPercent: 0,
            stagger: 0.3
         });
   }
   function splitTextFadeUpExport() {
      const splitTextFadeUpTargets = gsap.utils.toArray('.js-split-lines-fade-up');
      splitTextFadeUpTargets.forEach((elem) => {
         const splitFadeUpElements = new SplitText(elem, {
            type: 'lines'
         });
         const splitTextLines = splitFadeUpElements.lines;
         gsap.set(splitTextLines, {
            autoAlpha: 0,
            yPercent: 100
         });
         ScrollTrigger.create({
            trigger: elem,
            start: 'top 80%',
            end: 'bottom top',
            onEnter: () => splitTextTlFunction(elem, splitTextLines, splitFadeUpElements),
         });
      });
   }
   splitTextFadeUpExport();
   
   gsap.utils.toArray(".js-split-lines-up").forEach(function (elem) {
      const splitTimeline = gsap.timeline({
         scrollTrigger: {
            trigger: elem,
            start: "top 80%",
            end: "bottom 0%",
            onComplete: () => {
               innerSplit.revert()
               outerSplit.revert()
            }
         }
      });
      const innerSplit = new SplitText(elem, {
         type: "lines",
         linesClass: "split-inner"
      });
      const outerSplit = new SplitText(elem, {
         type: "lines",
         linesClass: "split-outer"
      });
      splitTimeline.from(innerSplit.lines, {
         duration: 1.1,
         yPercent: 100,
         ease: "circ.out",
         stagger: 0.3,
         opacity: 0
      });
   });

   const SplitWordsUp = document.querySelectorAll(".js-split-words-up");
   SplitWordsUp.forEach(quote => {
      if (quote.anim) {
         quote.anim.progress(1).kill();
         quote.splitout.revert();
         quote.split.revert();
      }
      quote.split = new SplitText(quote, {
         type: "lines, words",
         linesClass: "split-inner"
      });
      quote.splitout = new SplitText(quote, {
         type: "lines",
         linesClass: "split-outer"
      });
      quote.anim = gsap.from(quote.split.words, {
         scrollTrigger: {
            trigger: quote,
            start: "top 85%",
            end: "bottom 0%",
         },
         duration: 1.1,
         ease: "circ.out",
         yPercent: 100,
         stagger: 0.3,
         opacity: 0
      });
   });

   const SplitCharsUp = document.querySelectorAll(".js-split-chars-up");
   SplitCharsUp.forEach(quote => {
      if (quote.anim) {
         quote.anim.progress(1).kill();
         quote.splitout.revert();
         quote.split.revert();
      }
      quote.split = new SplitText(quote, {
         type: "lines, words, chars",
         linesClass: "split-inner"
      });
      quote.splitout = new SplitText(quote, {
         type: "lines",
         linesClass: "split-outer"
      });
      quote.anim = gsap.from(quote.split.chars, {
         scrollTrigger: {
            trigger: quote,
            start: "top 85%",
            end: "bottom 0%",
         },
         duration: 2,
         ease: "circ.out",
         yPercent: 100,
         stagger: 0.02,
         opacity: 0
      });
   });

   const SplitCharsLetter = document.querySelectorAll(".js-split-chars-letter-up");
   SplitCharsLetter.forEach(quote => {
      if (quote.anim) {
         quote.anim.progress(1).kill();
         quote.splitout.revert();
         quote.split.revert();
      }
      quote.split = new SplitText(quote, {
         type: "lines, words, chars",
         linesClass: "split-inner"
      });
      quote.splitout = new SplitText(quote, {
         type: "lines",
         linesClass: "split-outer"
      });
      quote.anim = gsap.from(quote.split.chars, {
         scrollTrigger: {
            trigger: quote,
            start: "top 85%",
            end: "bottom 0%",
         },
         duration: 2,
         ease: "circ.out",
         yPercent: 100,
         stagger: 0.3,
         opacity: 0
      });
   });

   const SplitCharsLeft = document.querySelectorAll(".js-split-chars-left");
   SplitCharsLeft.forEach(quote => {
      if (quote.anim) {
         quote.anim.progress(1).kill();
         quote.splitout.revert();
         quote.split.revert();
      }
      quote.split = new SplitText(quote, {
         type: "lines, words, chars",
         linesClass: "split-inner"
      });
      quote.splitout = new SplitText(quote, {
         type: "lines",
         linesClass: "split-outer"
      });
      quote.anim = gsap.from(quote.split.chars, {
         scrollTrigger: {
            trigger: quote,
            start: "top 85%",
            end: "bottom 0%",
         },
         duration: 2,
         ease: "circ.out",
         xPercent: -100,
         stagger: 0.02,
         opacity: 0
      });
   });

   const SplitRotate = document.querySelectorAll(".js-split-rotate");
   SplitRotate.forEach(quote => {
      if (quote.anim) {
         quote.anim.progress(1).kill();
         quote.split.revert();
      }
      quote.split = new SplitText(quote, {
         type: "words, chars",
         linesClass: "split-inner"
      });
      quote.anim = gsap.from(quote.split.chars, {
         scrollTrigger: {
            trigger: quote,
            start: "top 85%",
            end: "bottom 0%",
         },
         duration: 1.3,
         scale: 0,
         y: 80,
         rotationX: 180,
         transformOrigin: "0% 50% -50",
         ease: "back",
         stagger: 0.01,
         opacity: 0
      });
   });

   const SplitLeft = document.querySelectorAll(".js-split-chars-l");
   SplitLeft.forEach(quote => {
      if (quote.anim) {
         quote.anim.progress(1).kill();
         quote.split.revert();
      }
      quote.split = new SplitText(quote, {
         type: "words, chars",
         linesClass: "point"
      });
      quote.anim = gsap.from(quote.split.chars, {
         scrollTrigger: {
            trigger: quote,
            start: "top 85%",
            end: "bottom 0%",
         },
         autoAlpha: 0,
         duration: 0.8,
         xPercent: -100,
         stagger: {
            each: -0.02
         },
         ease: "back",
      })
   });
   

   /*--------------- IMAGE REVEAL ANIMATION ---------------*/
      
   let revealLeft = gsap.utils.toArray(".js-reveal-img-l");
   revealLeft.forEach((item) => {
      const img = item.querySelector(".reveal-img-l"),
      tl = gsap.timeline({ paused: true });
      tl.set(item, { autoAlpha: 1 })
      .from(item, {
         xPercent: -100,
         ease: "circ.out",
         duration: 2,
         autoAlpha: 0
      })
      .from(img, {
         xPercent: 100,
         scale: 2,
         delay: -2,
         ease: "circ.out",
         duration: 2,
      });
      item.animation = tl;
   });
   ScrollTrigger.batch(revealLeft, {
      start: "top 80%",
      onEnter: elem => elem.forEach((j, k) => j.animation.delay(k * 0.9).restart(true)),
      once: true
   });

   let revealRight = gsap.utils.toArray(".js-reveal-img-r");
   revealRight.forEach((item) => {
      const img = item.querySelectorAll(".reveal-img-r"),
      tl = gsap.timeline({ paused: true });
      tl.set(item, { autoAlpha: 1 })
      .from(item, {
         xPercent: 100,
         ease: "circ.out",
         duration: 2,
         autoAlpha: 0
      })
      .from(img, {
         xPercent: -100,
         scale: 2,
         delay: -2,
         ease: "circ.out",
         duration: 2
      });
      item.animation = tl;
   });
   ScrollTrigger.batch(revealRight, {
      start: "top 80%",
      onEnter: elem => elem.forEach((x, z) => x.animation.delay(z * 0.9).restart(true)),
      once: true,
   });

   let reveaParallaxlLeft = gsap.utils.toArray(".js-reveal-parallax-l");
   reveaParallaxlLeft.forEach((item) => {
      const img = item.querySelector(".reveal-parallax-l"),
      tl = gsap.timeline({ paused: true });
      tl.set(item, { autoAlpha: 1 })
      .from(item, {
         xPercent: -100,
         ease: "circ.out",
         duration: 2,
         autoAlpha: 0
      })
      .from(img, {
         xPercent: 100,
         delay: -2,
         ease: "circ.out",
         duration: 2,
      });
      item.animation = tl;
   });
   ScrollTrigger.batch(reveaParallaxlLeft, {
      start: "top 80%",
      onEnter: elem => elem.forEach((j, k) => j.animation.delay(k * 0.9).restart(true)),
      once: true,
   });

   let revealParallaxRight = gsap.utils.toArray(".js-reveal-parallax-r");
   revealParallaxRight.forEach((item) => {
      const img = item.querySelectorAll(".reveal-parallax-r"),
      tl = gsap.timeline({ paused: true });
      tl.set(item, { autoAlpha: 1 })
      .from(item, {
         xPercent: 100,
         ease: "circ.out",
         duration: 2,
         autoAlpha: 0
      })
      .from(img, {
         xPercent: -100,
         delay: -2,
         ease: "circ.out",
         duration: 2
      });
      item.animation = tl;
   });
   ScrollTrigger.batch(revealParallaxRight, {
      start: "top 80%",
      onEnter: elem => elem.forEach((x, z) => x.animation.delay(z * 0.9).restart(true)),
      once: true,
   });

   let revealVert = gsap.utils.toArray(".js-reveal-img-v");
   revealVert.forEach((item) => {
      const img = item.querySelector(".reveal-img-v"),
      tl = gsap.timeline({ paused: true });
      tl.set(item, { autoAlpha: 1 })
      .from(item, {
         yPercent: 100,
         ease: "circ.out",
         duration: 2,
         autoAlpha: 0
      })
      .from(img, {
         yPercent: -100,
         scale: 2,
         delay: -2,
         ease: "circ.out",
         duration: 2
      });
      item.animation = tl;
   });
   ScrollTrigger.batch(revealVert, {
      start: "top 100%",
      onEnter: elem => elem.forEach((x, z) => x.animation.delay(z * 0.9).restart(true)),
      once: true,
   });

   let revealRotate = gsap.utils.toArray(".js-reveal-img-rotate");
   revealRotate.forEach((item) => {
      const img = item.querySelector(".reveal-img-rotate"),
      tl = gsap.timeline({ paused: true });
      tl.set(item, { autoAlpha: 1 })
      .from(item, {
         yPercent: 100,
         xPercent: 100,
         ease: "circ.out",
         duration: 2.5,
         rotation: 6,
         autoAlpha: 0
      })
      .from(img, {
         yPercent: -100,
         xPercent: -100,
         scale: 1.5,
         delay: -2.5,
         ease: "circ.out",
         duration: 2.5,
         rotation: 30
      });
      item.animation = tl;
   });
   ScrollTrigger.batch(revealRotate, {
      start: "top 115%",
      onEnter: elem => elem.forEach((x, z) => x.animation.delay(z * 0.9).restart(true)),
      once: true,
   });

   let revealScroll = gsap.utils.toArray(".js-reveal-img-l2");
   revealScroll.forEach((item) => {
      let img = item.querySelector(".reveal-img-l2"),
      tl = gsap.timeline({
         scrollTrigger: {
            trigger: item,
            start: "top 50%",
            scrub: 4
         },
      });
      tl.set(item, { autoAlpha: 1 })
      .from(item, {
         xPercent: -100,
         ease: "circ.out",
         duration: 2.5,
         autoAlpha: 0
      })
      .from(img, {
         xPercent: 100,
         scale: 1.3,
         delay: -2.5,
         ease: "circ.out",
         duration: 2.5
      });
   });

   
   /*--------------- ANIMATION EFFECTS ---------------*/

   const zoomIn = gsap.utils.toArray(".js-zoom-in");
   zoomIn.forEach((item) => {
      const tl = gsap.timeline({
         scrollTrigger: {
            trigger: item,
            start: "top 90%",
         },
      })
      tl.set(item, { scale: 0.9 })
      .to(item, {
         scale: 1,
         duration: 4,
         autoAlpha: 1,
         ease: "back",
         once: true,
      })
   });

   const zoomOut = gsap.utils.toArray(".js-zoom-out");
   zoomOut.forEach((item) => {
      const tl = gsap.timeline({
         scrollTrigger: {
            trigger: item,
            start: "top 90%",
         },
      })
      tl.set(item, { scale: 1 })
      .from(item, {
         scale: 1.1,
         duration: 4,
         autoAlpha: 0,
         ease: "back",
         once: true,
      })
   });

   let Fade = gsap.utils.toArray(".js-fade");
   Fade.forEach((item) => {
      const tl = gsap.timeline({ paused: true });
      tl.set(item, { autoAlpha: 1 })
      .from(item, {
         ease: "expo.inOut",
         duration: 1.5,
         autoAlpha: 0,
      });
      item.animation = tl;
   });
   ScrollTrigger.batch(Fade, {
      start: "top 90%",
      onEnter: elem => elem.forEach((x, z) => x.animation.delay(z * 0.1).restart(true)),
      once: true,
   });

   let FadeLeft = gsap.utils.toArray(".js-fade-left");
   FadeLeft.forEach((item) => {
      const tl = gsap.timeline({ paused: true });
      tl.set(item, { autoAlpha: 1 })
      .from(item, {
         x: -50,
         ease: "expo.inOut",
         duration: 2.5,
         autoAlpha: 0,
      });
      item.animation = tl;
   });
   ScrollTrigger.batch(FadeLeft, {
      start: "top 90%",
      onEnter: elem => elem.forEach((x, z) => x.animation.delay(z * 0.9).restart(true)),
      once: true,
   });

   let FadeRight = gsap.utils.toArray(".js-fade-right");
   FadeRight.forEach((item) => {
      const tl = gsap.timeline({ paused: true });
      tl.set(item, { autoAlpha: 1 })
      .from(item, {
         x: 50,
         ease: "expo.inOut",
         duration: 2.5,
         autoAlpha: 0,
      });
      item.animation = tl;
   });
   ScrollTrigger.batch(FadeRight, {
      start: "top 90%",
      onEnter: elem => elem.forEach((x, z) => x.animation.delay(z * 0.9).restart(true)),
      once: true,
   });

   const zoomInScroll = gsap.utils.toArray(".js-zoom-in-scroll");
   zoomInScroll.forEach((item) => {
      const tl = gsap.timeline({
         scrollTrigger: {
            trigger: item,
            scrub: true,
         },
      })
      tl.set(item, { scale: 1 })
      .to(item, {
         scale: 1.4,
         ease: "none",
      })
   });

   const zoomOutScroll = gsap.utils.toArray(".js-zoom-out-scroll");
   zoomOutScroll.forEach((item) => {
      const tl = gsap.timeline({
         scrollTrigger: {
            trigger: item,
            scrub: true,
         },
      })
      tl.set(item, { scale: 1.4 })
      .to(item, {
         scale: 1,
         ease: "sine.inOut",
      })
   });


   /*--------------- PARALLAX ---------------*/
   
   mm.add("(min-width: 768px)", () => { // Start Media Query

      let parallaxZoom = document.querySelectorAll(".js-parallax-scale");
      parallaxZoom.forEach((contscale) => {
         let parallaxScale = contscale.querySelector(".parallax-img-scale");
         let tl = gsap.timeline({
            scrollTrigger: {
               trigger: contscale,
               scrub: true,
               pin: false,
            },
         });
         tl.from(parallaxScale, {
            yPercent: -50,
            ease: "none",
            scale: 1.4
         })
         .to(parallaxScale, {
            yPercent: 50,
            ease: "none",
            scale: 1.4
         });
      });
      
   }); // End Media Query
   
      
   /*--------------- LINE BAR ---------------*/

   const LineBar = gsap.utils.toArray(".line-bar");
   LineBar.forEach((item) => {
      const tl = gsap.timeline({
         scrollTrigger: {
            trigger: item,
            start: "top 80%",
            toggleActions: "restart pause resume reverse",
         },
      })
      tl.from(item, {
         scaleX: 0,
         duration: 1.2,
         ease: "power4",
         stagger: 0.65,
      })
   });


   /*--------------- SCROLL ANIMATION ---------------*/

   const scaleImg = gsap.utils.toArray(".js-scale-scroll");
   scaleImg.forEach((item) => {
      const tl = gsap.timeline({
         scrollTrigger: {
            trigger: ".wrap-scale",
            pin: ".wrap-scale",
            scrub: true,
         },
      })
      tl.set(scaleImg, { xPercent: -50, yPercent: -50 })
      .to(item, {
         scale: 0.6667,
         ease: "back",
      })
   });

   const scaleImg2 = gsap.utils.toArray(".js-scale-scroll-2");
   scaleImg2.forEach((item) => {
      const tl = gsap.timeline({
         scrollTrigger: {
            trigger: ".wrap-scale",
            pin: ".wrap-scale",
            scrub: true,
         },
      })
      tl.set(scaleImg2, { autoAlpha: 0, xPercent: -50, yPercent: -50 })
      .to(item, {
         scale: 0.6667,
         ease: "back",
         autoAlpha: 1,
      })
   });


   /*--------------- SCROLL FADE ANIMATION ---------------*/

   const fadescroll = gsap.utils.toArray(".js-fade-scroll-1");
   fadescroll.forEach((elem) => {
      const tl = gsap.timeline({
         scrollTrigger: {
            trigger: elem,
            start: "+=10 95%",
            end: "+=10 2%",
            scrub: true,
            toggleActions: "play reverse play reverse",
         }
      });
      tl.set(elem, { opacity: 0 })
      .to(elem, {
         opacity: 1,
         duration: 3.2,
         stagger: 2.1
      })
      .to(elem, {
         opacity: 0,
         duration: 3.2,
         stagger: 2.1
      }, 4.8);
   });

   mm.add("(min-width: 768px)", () => { // Start Media Query
      
      const fadeImage = gsap.utils.toArray(".js-fade-scroll-2");
      fadeImage.forEach((image) => {
         const tl = gsap.timeline({
            scrollTrigger: {
               trigger: image,
               end: "+=250%",
               scrub: true,
            }
         });
         tl.set(image, { autoAlpha: 0, scale: .8 })
         .fromTo(image, {
            autoAlpha: 0
         },
         {
            autoAlpha: 1,
            scale: 1
         })
         .to(image, {
            autoAlpha: 0,
            scale: 1
         })
      });
      
   }); // End Media Query


   /*--------------- DRAG SLIDER ---------------*/

   window.addEventListener('load', (event) => { 
      const wrapCont = document.querySelector(".js-drag-slider-wrap");
      const DragProxy = wrapCont.querySelector(".js-drag-proxy");
      const slider = document.querySelector(".js-drag-slider-inner");
      const sliderContent = document.querySelector(".js-drag-slider-content");
      const slides = [...wrapCont.querySelectorAll(".js-drag-slider-wrap-img")];
      let sliderWidth = 0;
      let prevSliderWidth = 0;
      let offset = 0;
      const setBounds = () => {
         prevSliderWidth = sliderWidth;
         sliderWidth = slides[0].offsetWidth * slides.length;
         const newX = (sliderWidth / 100) * (gsap.getProperty(DragProxy, "x") / (prevSliderWidth / 100));
         gsap.to([slider, DragProxy], {
            width: sliderWidth,
            x: newX
         });
      };
      setBounds();
      window.addEventListener("resize", throttle(300, false, setBounds));
      const draggable = Draggable.create(DragProxy, {
         type: "x",
         trigger: wrapCont,
         bounds: wrapCont,
         zIndexBoost: false,
         throwProps: true,
         edgeResistance: 0.75,
         dragResistance: 0.4,
         onPress: function(e) {
            var bounds = this.target.getBoundingClientRect();
            offset = this.x - gsap.getProperty(DragProxy, "x");
            gsap.killTweensOf(slider);
            gsap.to(slider, {
               skewX: 0,
               duration: 0.2
            });
         },
         onDrag: function() {
            gsap.to(slider, {
               duration: 0.8,
               x: () => this.x - offset,
               skewX: function(v) {
                  var skew = InertiaPlugin.getVelocity(DragProxy, "x") / 200;
                  return gsap.utils.clamp(-10, 10, skew);
               },
               overwrite: "auto",
               ease: "power2",
            });
         },
         onRelease: function() {
            let velocity = InertiaPlugin.getVelocity(DragProxy, "x");
            if (this.tween && Math.abs(velocity) > 20) {
               gsap.to(slider, {
                  overwrite: "auto",
                  inertia: {
                     x: {
                        velocity,
                        end: this.endX
                     }
                  },
               });
            }
            gsap.to(slider, {
               skewX: 0,
               duration: 0.5,
               overwrite: "auto"
            });
         },
      });
   });

   
   /*--------------- PARALLAX FOOTER ---------------*/    
   
   mm.add("(min-width: 768px)", () => { // Start Media Query
      
      gsap.set(".js-parallax-section", { yPercent: -50 });
      const cover = gsap.timeline({ paused: true });
      cover.to(".js-parallax-section", {
         yPercent: 0,
         ease: "none",
         onUpdate: function () {
            console.log("update", this.progress());
         }
      });
      ScrollTrigger.create({
         trigger: ".parallax-prev",
         start: "top bottom",
         end: "+=75%",
         animation: cover,
         scrub: true,
      });
      
   }); // End Media Query
   
   mm.add("(max-width: 767px)", () => { // Start Media Query
      
      gsap.set(".js-parallax-section", { yPercent: 0 });
      const cover = gsap.timeline({ paused: true });
      cover.to(".js-parallax-section", {
         yPercent: 0,
         ease: "none",
         onUpdate: function () {
            console.log("update", this.progress());
         }
      });
      ScrollTrigger.create({
         trigger: ".parallax-prev",
         start: "top bottom",
         end: "+=0%",
         animation: cover,
         scrub: true,
      });
      
   }); // End Media Query
   
   
   /*--------------- SCROLLTRIGGER REFRESH ---------------*/

   ScrollTrigger.refresh()
   
})(); // End "use strict";