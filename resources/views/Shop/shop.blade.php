@extends("Shop/shoplayout")
@section("title")
Solar Consult
@endsection
@section("contant")




    <main id="smooth-wrapper">

   
                
    

        <div id="smooth-content">

        <div class="container mt-100">
                        <div class="row">
                            <div class="col-12">
                                <div class="">
                                    <h6 class="sub-title">Shopping</h6>
                                    <h1>Shop.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
            <main class="main-bg">

               



                <!-- ==================== Start shop ==================== -->

                <section class="main-shop section-padding">
                    <div class="container">
                        <div class="row md-marg">
                            <div class="col-lg-3">
                                <div class="sidebar md-mb80">

                                    <div class="item search mb-40">
                                        <form >
                                            <div class="form-group">
                                                <input type="text" placeholder="Search"  id="search">
                                                <button type="submit">
                                                    <span class="pe-7s-search"></span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>


                                    

                                    
                                    

                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="shop-products">
                                    <div class="top-side d-flex align-items-end mb-40">
                                        <div>
                                            <h6 class="fz-16 line-height-1">Affiliate Products</h6>
                                        </div>
                                       
                                    </div>
                                    <div class="row"  id="body">
                                    @foreach($Products as $p)
                                        <div class="col-md-6 col-lg-4">
                                            <div class="item mb-50">
                                                <div class="img">
                                                    <img src="insert-image/{{$p->Pro_Image}}" alt="">
                                                    <a href="{{$p->Pro_Url}}" class="add-cart">Add to Cart</a>
                                                    <span class="fav"><i class="far fa-heart"></i></span>
                                                </div>
                                                <div class="cont">
                                                    <div class="rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <h6>{{$p->Pro_Name}}</h6>
                                                    <h5>{{$p->Pro_Price}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End shop ==================== -->


            </main>


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






 

    <!-- custom scripts -->
    <script src="assets2/js/scripts.js"></script>




    <!-- Add this script to your HTML -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Search Products
    $(document).ready(function () {
        $('#search').keyup(function () {
            var search = $("#search").val();
            var url = "{{ route('product.search', ':search') }}".replace(':search', search);

            if (search !== "") {
                $.get(url, function (data) {
                    const products = JSON.parse(data);
                    var body = '';

                    if (products.length <= 0) {
                        body = "<p class='text-danger'>Product not found</p>";
                    } else {
                        for (let product of products) {
                            body += `
                                <div class="col-md-6 col-lg-4">
                                    <div class="item mb-50">
                                        <div class="img">
                                            <img src="insert-image/${product.Pro_Image}" alt="">
                                            <a href="${product.Pro_Url}" class="add-cart">Add to Cart</a>
                                            <span class="fav"><i class="far fa-heart"></i></span>
                                        </div>
                                        <div class="cont">
                                            <div class="rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6>${product.Pro_Name}</h6>
                                            <h5>${product.Pro_Price}</h5>
                                        </div>
                                    </div>
                                </div>`;
                        }
                    }

                    $("#body").html(body);
                });
            } else {
                url = "{{ route('product.getalldata') }}";

                $.get(url, function (data) {
                    const products = JSON.parse(data);
                    var body = '';

                    if (products.length <= 0) {
                        body = "<p class='text-danger'>Product not found</p>";
                    } else {
                        for (let product of products) {
                            body += `
                                <div class="col-md-6 col-lg-4">
                                    <div class="item mb-50">
                                        <div class="img">
                                            <img src="insert-image/${product.Pro_Image}" alt="">
                                            <a href="${product.Pro_Url}" class="add-cart">Add to Cart</a>
                                            <span class="fav"><i class="far fa-heart"></i></span>
                                        </div>
                                        <div class="cont">
                                            <div class="rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6>${product.Pro_Name}</h6>
                                            <h5>${product.Pro_Price}</h5>
                                        </div>
                                    </div>
                                </div>`;
                        }
                    }

                    $("#body").html(body);
                });
            }
        });
    });
</script>



@endsection