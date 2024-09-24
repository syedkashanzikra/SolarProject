@extends("Layouts.layout")
@section("title")
Contact
@endsection
@section("contant")
<!-- Start Overlay Top-Bottom -->
<div class="ol-dark-top"></div>
      <div class="ol-dark-bottom"></div>
      <!-- End Overlay Top-Bottom -->

      <!-- Start Main Page -->
      <main id="smooth-wrapper">
         <div id="smooth-content">
            <section class="container-fluid m-section-100">
               <div class="row justify-content-center">
                  <div class="col-9 vh-100 text-center align-cc">
                     <div>
                        <h1 class="fs-15" data-speed="1.04">
                           Contact<span class="f-stroke-w">Us</span>
                        </h1>
                       
                        <h3 class="h6 mb-5 mw-600 mx-auto">
                  Shoot us an email at abbaskasahn234@gmail.com, and we'll promptly get back to you with the information you need. Feel free to share your project details, and our team will offer personalized recommendations.                        </h3>
                     </div>
                  </div>
                  <div class="col-12 col-md-11 mt-8 mb-8 position-relative">
                     <div class="js-parallax-scale vh-90 js-fade-scroll-2">
                        <div class="parallax-img-scale vh-100 cover-bg bg-ol-dark-5" style="background-image: url('../assets/img/carousel-2.jpg');"></div>
                        <div class="text-absolute text-nowrap">
                           <h3 class="js-split-lines-up h3" data-speed="1.12" data-lag="0.1">
                            Contact form
                           </h3>
                           <h3 class="js-split-lines-up h1 text-uppercase" data-speed="1.05" data-lag="0.1">
                               is given below
                           </h3>
                        </div>
                     </div>
                     
                  </div>
                  
                        <!-- contact -->
                        <div class="background">
                           <div class="container">
                              <div class="screen">
                                 
                                 <div class="screen-body">
                                 <div class="screen-body-item left">
                                    <div class="app-title">
                                       <span>CONTACT</span>
                                       <span>US</span>
                                    </div>
                                    <div class="app-contact">CONTACT INFO : +62 81 314 928 595</div>
                                 </div>
                                 <div class="screen-body-item">
                                    <form action="/insert-contact" method="post">
                                       @csrf
                                       <div class="app-form">
                                          <div class="app-form-group">
                                          <input class="app-form-control" type="text" placeholder="NAME" name="nameinp" required>
                                          </div>
                                          <div class="app-form-group">
                                          <input class="app-form-control" type="email" placeholder="EMAIL" name="emailinp" required>
                                          </div>
                                          <div class="app-form-group">
                                          <input class="app-form-control" type="number" placeholder="CONTACT NO" name="phoneinp" required>
                                          </div>
                                          <div class="app-form-group message">
                                          <input class="app-form-control" type="text" placeholder="MESSAGE" name="messageinp" required>
                                          </div>
                                          <div class="app-form-group buttons">
                                          <button class="app-form-button" type="submit" >SEND</button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 </div>
                              </div>
                              
                           </div>
                      </div>

                 
                  
                  
               </div>
            </section>
            
            <div class="js-drag-slider-wrap">
               <div class="js-drag-slider-inner">
                  <div class="js-drag-slider-wrap-img">
                  </div>
               </div>
            </div>
            <div class="parallax-prev"></div>
            <script>
                 function confirmation(ev){
        ev.preventDefault();

        var urlToRedirect=ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect)

        swal({
                     position: 'top-end',
            icon: 'success',
            title: 'Your form has been submitted',
            showConfirmButton: false,
            timer: 1500
        })
        .then((willCancel)=>
        {
            if(willCancel){
                window.location.href=urlToRedirect;
            }
        })
       
    }
            </script>
@endsection