<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from webgraphicart.com/artik/html/dark/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Aug 2023 16:12:49 GMT -->
<head>
      <meta charset="UTF-8">
      <meta name="description" content="Artik | Business Template">
      <meta name="keywords" content="HTML, CSS, template">
      <meta name="author" content="Umberto">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="theme-color" content="#000000">
      <title>@yield("title")</title>

      <link rel="icon" type="image/x-icon" href="../assets/img/favicons/abc.jpg">

      <link rel="preload" href="https://webgraphicart.com/artik/html/assets/fonts/Butler-UltraLight.woff2" as="font" type="font/woff2" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com/"> 
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> 
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../assets/css/plugin.min.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/style0b84.css?fsfsdsdgsdgsdgsdg">
      <link rel="stylesheet" type="text/css" href="../assets/css/dark0b84.css?fsfsdsdgsdgsdgsdg">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <link rel="stylesheet" type="text/css" href="../assets/css/contact.css?fsfsdsdgsdgsdgsdg">
   
      
      
   </head>

   <body>
      
      <!-- Start Preload -->
      <div class="loader-bg" style="font-family: Arial, Helvetica, sans-serif;">
         <div class="percentage">' 0% '</div>
         <div class="loader-text" >
            <span>S</span>
            <span>o</span>
            <span>l</span>
            <span>a</span>
            <span>r</span>
            <span>X</span>
            
         </div>
      </div>
      <!-- End Preload -->
      
      <header>
         <!-- Start Toolbar -->
         <div class="header-toolbar">
            <div class="js-toolbar">
               <a href="/" class="link-1 link-hover-1 logo" data-cursor="-exclusion -sm">
                  SOLAR X
               </a>
               <div class="nav-icon js-nav-open-close">
                  <div class="nav-icon-wrap" data-cursor="-opaque">
                     <span class="nav-line-t"></span>
                     <span class="nav-line-c"></span>
                     <span class="nav-line-b"></span>
                     <div class="nav-icon-close"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Toolbar -->
         
         <!-- Start Nav Bar -->
         <nav class="nav-container js-submenu-view">
            <div class="submenu-close" data-magnetic data-cursor="-opaque">
               <div class="submenu-close-img js-submenu-close">
                  <img src="../assets/img/arrow-w-l.png" alt="arrow-left">
               </div>
            </div>
            <div class="nav-v">
               <div>
                  <!-- Start Menu -->
                  <div class="nav-link-out ">
                     <div class="nav-link-in nav-menu-link submenu-hidden">
                        <div class="nav-link-in-out" data-cursor="-exclusion -sm">
                           <a href="/">Home</a>
                        </div>
                  </div>
                  <!-- End Menu -->

                  <!-- Start Menu -->
                  <div class="nav-link-out ">
                     <div class="nav-link-in nav-menu-link submenu-hidden">
                        <div class="nav-link-in-out" data-cursor="-exclusion -sm">
                           <a href="/shop">Shop</a>
                        </div>
                     </div>
                  </div>
                  <!-- End Menu -->

                  <!-- Start Menu -->
                  <div class="nav-link-out ">
                     <div class="nav-link-in nav-menu-link submenu-hidden">
                        <div class="nav-link-in-out" data-cursor="-exclusion -sm">
                           <a href="/consult">Consult</a>
                        </div>
                     </div>
                  </div>
                  <!-- End Menu -->

                  <!-- Start Menu -->
                  <div class="nav-link-out ">
                     <div class="nav-link-in nav-menu-link submenu-hidden">
                        <div class="nav-link-in-out" data-cursor="-exclusion -sm">
                           <a href="/about">About</a>
                        </div>
                     </div>
                  </div>
                  <!-- End Menu -->

                  <!-- Start Menu -->
                  <div class="nav-link-out ">
                     <div class="nav-link-in nav-menu-link submenu-hidden">
                        <div class="nav-link-in-out" data-cursor="-exclusion -sm">
                           <a href="/contact">Contact</a>
                        </div>
                     </div>
                  </div>
                  <!-- End Menu -->

                  <!-- Start Menu -->
                  <div class="nav-link-out js-submenu-open">
                     <div class="nav-link-in nav-menu-link submenu-hidden">
                        <div class="nav-link-in-out" data-cursor="-exclusion -sm">
                           <a href="#">User</a>
                        </div>
                     </div>
                     <!-- Start Submenu -->
                     <div class="nav-v submenu js-submenu">
                        <div data-cursor="-exclusion -sm">
                           
                           <div class="nav-link-out">
                              <div class="nav-link-in nav-submenu-link">
                                 <div class="nav-link-in-out">
                                    <a href="/login">Login</a>
                                 </div>
                              </div>
                           </div>
                           <div class="nav-link-out">
                              <div class="nav-link-in nav-submenu-link">
                                 <div class="nav-link-in-out">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
                                                     Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                 </div>
                              </div>
                           </div>
                           
                           
                        </div>
                     </div>
                     <!-- End Submenu -->
                  </div>
                  <!-- End Menu -->
               </div>
            </div>
         </nav>
         <!-- End Nav Bar -->
      </header>

      <!-- Start Overlay Top-Bottom -->
      <div class="ol-dark-top"></div>
      <div class="ol-dark-bottom"></div>
      <!-- End Overlay Top-Bottom -->

      @yield("contant")

      <footer>
               <div class="footer-1 js-parallax-section cover-bg bg-ol-dark-7" style="background-image: url('../assets/img/img-370.jpg');">
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-md-9">
                           <h4 class="js-split-words-up f1-mail">
                              <a href="mailto:ubaidullah2206f@gmail.com" class="link-1 link-hover-1" aria-label="Contact Us" data-cursor-text="MAIL" data-cursor="-lg">SOLAR X. Ltd</a>
                           </h4>
                        </div>
                        <div class="col-md-11">
                           <div class="row">
                             
                              <div class="col-md-4">
                                 <div class="f1-info">
                                    <h5 class="f1-address">
                                       <a href="#" class="link-1 link-hover-1" data-cursor="-opaque">Karachi</a>
                                    </h5>
                                    <h5 class="f1-t-address">
                                       Aptech Garden Center
                                    </h5>
                                    <p>
                                    APWA Complex, 1st Floor, Agha Khan 3 Rd, <br>
                                    Garden East Saddar Town, Karachi, Sindh 74400<br>
                                       phone: (021) 32237040
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-4 align-jc">
                                 <div class="align-self-end d-inline-block me-5" data-cursor="-exclusion -sm">
                                    <h6 class="f1-link">
                                       <a href="/" class="link-1 link-hover-1">Home</a>
                                    </h6>
                                    <h6 class="f1-link">
                                       <a href="/consult" class="link-1 link-hover-1">Consultion</a>
                                    </h6>
                                    <h6 class="f1-link">
                                       <a href="/shop" class="link-1 link-hover-1">Shop</a>
                                    </h6>
                                    <h6 class="f1-link">
                                       <a href="/about" class="link-1 link-hover-1">About</a>
                                    </h6>
                                    <h6 class="f1-link">
                                       <a href="/contact" class="link-1 link-hover-1">Contact</a>
                                    </h6>
                                    <h6 class="f1-link">
                                       <a href="/login" class="link-1 link-hover-1">Login</a>
                                    </h6>
                                    
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-11">
                           <div class="ms-4">
                              <h6 class="js-fade f1-social">
                                 <a href="#" class="link-1 link-hover-1" data-cursor="-opaque">SOLAR X</a>
                              </h6>
                              
                           </div>
                        </div>
                        <div class="col-md-11">
                           <div class="align-jb ms-4 me-4">
                              <h6 class="f1-text-end">
                                 Service &amp;
                                 <a href="#" class="link-1 link-hover-1" data-cursor="-exclusion -sm">Wga Support</a>
                              </h6>
                              <h6 class="f1-text-end">
                                 &copy; 2023
                                 <a href="#" class="link-1 link-hover-1" data-cursor="-exclusion -sm">SOLAR X</a>
                              </h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </main>
      <!-- End Main Page -->



      <!-- Start Javascript Libraries -->
      <script src="../assets/js/jquery-3.6.0.min.js"></script>
      <script src="../assets/js/plugin.min.js"></script>
      <script src="../assets/js/three.min.js"></script>
      <script src="../assets/js/vendors.min.js"></script>
      <script src="../assets/js/slider-1.js"></script>
      <script src="../assets/js/script0b84.js?fsfsdsdgsdgsdgsdg"></script>
      <!-- End Javascript Libraries -->
      
   </body>

<!-- Mirrored from webgraphicart.com/artik/html/dark/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Aug 2023 16:13:11 GMT -->
</html>