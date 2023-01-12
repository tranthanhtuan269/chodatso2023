<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'chodatso.com - Một người bán - vạn người mua')</title>

    <meta name="keywords" content="@yield('keywords', 'chodatso.com - Một người bán - vạn người mua')" />
    <meta name="description" content="@yield('description', 'chodatso.com - Một người bán - vạn người mua')">
    <meta name="author" content="@yield('author', 'chodatso.com - Một người bán - vạn người mua')">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="/assets/css/demo8.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/fontawesome-free/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="header-row container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="#" class="pl-0">VND</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">VND</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>

                        <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                            <a href="#"><i class="flag-vn flag"></i>VN</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-vn flag mr-2"></i>VN</a>
                                    </li>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>US</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                    </div>
                    <div class="header-right">
                        <ul class="top-links mega-menu show-arrow d-none d-sm-inline-block">
                            <li class="item-menu narrow"><a href="demo8-about.html">Về chúng tôi</a></li>
                            <li class="item-menu narrow"><a href="blog.html">Tin tức</a></li>
                            @guest
                            <li class="item-menu">
                                <a class="" href="/login">Đăng nhập</a>
                            </li>
                            @else
                            <li class="item-menu">
                                <a class="" href="/account">Tài khoản</a>
                            </li>
                            <li class="item-menu">
                                <a class="" href="/nap-tien">Nạp tiền</a>
                            </li>
                            <li class="item-menu">
                                <a class="" href="/dang-tin">Đăng tin</a>
                            </li>
                            <li class="item-menu">   
                                <a class="" href="/logout">Đăng xuất</a>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>

            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container">
                    <div class="header-left d-lg-block d-none">
                        <div class="header-contact d-none d-lg-flex align-items-center pl-1 mr-lg-5 pr-xl-2">
                            <i class="icon-phone-2"></i>
                            <h6>Hỗ trợ<a href="tel:#" class="text-dark font1">+84 333 102 105</a></h6>
                        </div>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-center">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="/" class="logo">
                            <img src="/assets/images/home.png" alt="Porto Logo" width="68" height="41" />
                        </a>
                    </div>
                    <!-- End .headeer-center -->

                    <div class="header-right">
                        <a href="login.html" class="header-icon header-icon-user"><i class="icon-user-2"></i></a>
                        <a href="#" class="header-icon"><i class="icon-wishlist-2"></i></a>
                        <div class="header-search header-search-popup header-search-category d-none d-sm-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="I'm searching for..." required="">
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="12">- Women</option>
                                            <option value="13">- Men</option>
                                            <option value="66">- Jewellery</option>
                                            <option value="67">- Kids Fashion</option>
                                            <option value="5">Electronics</option>
                                            <option value="21">- Smart TVs</option>
                                            <option value="22">- Cameras</option>
                                            <option value="63">- Games</option>
                                            <option value="7">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="31">- Cars and Trucks</option>
                                            <option value="32">- Motorcycles &amp; Powersports</option>
                                            <option value="33">- Parts &amp; Accessories</option>
                                            <option value="34">- Boats</option>
                                            <option value="57">- Auto Tools &amp; Supplies</option>
                                        </select>
                                    </div>
                                    <!-- End .select-custom -->
                                    <button class="btn icon-search-3" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->
        </header>
        <!-- End .header -->

        <main class="main">
            <div class="container banner-container">
                <div class="row"><h2 class="subtitle">Xu hướng tìm kiếm</h2></div>
                <div class="row justify-content-center">
                    <div class="col-md-2 col-sm-6 mt-3 mt-md-0 appear-animate" data-animation-name="fadeInRightShorter" data-y="200">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="/assets/images/demoes/demo8/banners/banner-living.jpg" style="background-color: #e4ddd7;" width="360" height="270" alt="banner" />
                            </a>
                            <div class="banner-meta">
                                <a href="#">Hai Bà Trưng </a>

                                <span class="banner-price"><strong>3590</strong>p</span>
                            </div>
                            <!-- End .banner-meta -->
                        </div>
                        <!-- End .banner -->
                    </div>
                    <!-- End .col-md-2 -->
                    <div class="col-md-2 col-sm-6 mt-3 mt-md-0 appear-animate" data-animation-name="fadeInRightShorter" data-y="200">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="/assets/images/demoes/demo8/banners/banner-living.jpg" style="background-color: #e4ddd7;" width="360" height="270" alt="banner" />
                            </a>
                            <div class="banner-meta">
                                <a href="#">Cầu Giấy </a>

                                <span class="banner-price"><strong>3590</strong>p</span>
                            </div>
                            <!-- End .banner-meta -->
                        </div>
                        <!-- End .banner -->
                    </div>
                    <!-- End .col-md-2 -->
                    <div class="col-md-2 col-sm-6 mt-3 mt-md-0 appear-animate" data-animation-name="fadeInRightShorter" data-y="200">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="/assets/images/demoes/demo8/banners/banner-living.jpg" style="background-color: #e4ddd7;" width="360" height="270" alt="banner" />
                            </a>
                            <div class="banner-meta">
                                <a href="#">Nam Từ Liêm </a>

                                <span class="banner-price"><strong>3590</strong>p</span>
                            </div>
                            <!-- End .banner-meta -->
                        </div>
                        <!-- End .banner -->
                    </div>
                    <!-- End .col-md-2 -->
                    <div class="col-md-2 col-sm-6 mt-3 mt-md-0 appear-animate" data-animation-name="fadeInRightShorter" data-y="200">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="/assets/images/demoes/demo8/banners/banner-living.jpg" style="background-color: #e4ddd7;" width="360" height="270" alt="banner" />
                            </a>
                            <div class="banner-meta">
                                <a href="#">Đống Đa </a>

                                <span class="banner-price"><strong>3590</strong>p</span>
                            </div>
                            <!-- End .banner-meta -->
                        </div>
                        <!-- End .banner -->
                    </div>
                    <!-- End .col-md-2 -->
                    <div class="col-md-2 col-sm-6 mt-3 mt-md-0 appear-animate" data-animation-name="fadeInRightShorter" data-y="200">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="/assets/images/demoes/demo8/banners/banner-living.jpg" style="background-color: #e4ddd7;" width="360" height="270" alt="banner" />
                            </a>
                            <div class="banner-meta">
                                <a href="#">Hoàng Mai </a>

                                <span class="banner-price"><strong>3590</strong>p</span>
                            </div>
                            <!-- End .banner-meta -->
                        </div>
                        <!-- End .banner -->
                    </div>
                    <!-- End .col-md-2 -->
                    <div class="col-md-2 col-sm-6 mt-3 mt-md-0 appear-animate" data-animation-name="fadeInRightShorter" data-y="200">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="/assets/images/demoes/demo8/banners/banner-living.jpg" style="background-color: #e4ddd7;" width="360" height="270" alt="banner" />
                            </a>
                            <div class="banner-meta">
                                <a href="#">Bắc Từ Liêm </a>

                                <span class="banner-price"><strong>3590</strong>p</span>
                            </div>
                            <!-- End .banner-meta -->
                        </div>
                        <!-- End .banner -->
                    </div>
                    <!-- End .col-md-2 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->

            
            <div class="container banner-container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-sm-6 mt-3">
                        <h2 class="subtitle">Phòng mới nhất</h2>
                    </div>
                    <!-- End .col-md-9 -->
                    <div class="col-md-3 col-sm-6 mt-3">
                        
                    </div>
                    <!-- End .col-md-9 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->

            <div class="mb-3"></div>
            <!-- margin -->

        </main>
        <!-- End .main -->

        <footer class="footer appear-animate">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row row-sm">
                                <div class="col-sm-4">
                                    <div class="widget">
                                        <h4 class="widget-title">CONTACT INFO</h4>
                                        <ul class="contact-info mb-3">
                                            <li>
                                                <span class="contact-info-label">Phone:</span>Toll Free <a href="tel:">(123) 456-7890</a>
                                            </li>
                                            <li>
                                                <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
                                            </li>

                                        </ul>
                                        <div class="social-icons">
                                            <a href="#" class="social-icon social-facebook icon-facebook"></a>
                                            <a href="#" class="social-icon social-twitter icon-twitter"></a>
                                            <a href="#" class="social-icon social-linkedin fab fa-linkedin-in"></a>
                                        </div>

                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-md-3 -->
                                <div class="col-sm-4">
                                    <div class="widget pl-sm-1">
                                        <h4 class="widget-title">CUSTOMER SERVICE</h4>

                                        <ul class="links">
                                            <li><a href="demo8-about.html">About Us</a></li>
                                            <li><a href="demo8-contact.html">Contact Us</a></li>
                                            <li><a href="dashboard.html">My Account</a></li>
                                            <li><a href="#">Orders history</a></li>
                                            <li><a href="#">Advanced search</a></li>
                                        </ul>
                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-md-5 -->

                                <div class="col-sm-4">
                                    <div class="widget pl-sm-2">
                                        <h4 class="widget-title">ABOUT US</h4>
                                        <ul class="links">
                                            <li><a href="demo8-about.html">Super Fast HTML Template</a></li>
                                            <li><a href="demo8-contact.html">Top Rated Theme in Themeforest</a></li>
                                            <li><a href="my-account.html">33 Unique Shop Demos</a></li>
                                            <li><a href="#">Powerful Admin Panel</a></li>
                                            <li><a href="#">Mobile & Retina Optimized</a></li>
                                        </ul>
                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-md-5 -->


                            </div>
                            <!-- End .row -->
                        </div>
                        <!-- End .col-lg-8 -->

                        <div class="col-lg-3">
                            <div class="widget widget-newsletter">
                                <h4 class="widget-title">Subscribe newsletter</h4>
                                <p>Get all the latest information on events, sales and offers. Sign up for newsletter:
                                </p>
                                <form action="#">
                                    <input type="email" class="form-control" placeholder="Email address" required>

                                    <input type="submit" class="btn" value="Go!">
                                </form>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-4 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom d-sm-flex align-items-center">
                    <div class="footer-left">
                        <span class="footer-copyright">© copyright 2021. All Rights Reserved.</span>
                    </div>

                    <div class="footer-right ml-auto mt-1 mt-sm-0">
                        <div class="payment-icons mr-0">
                            <span class="payment-icon visa" style="background-image: url(/assets/images/payments/payment-visa.svg)"></span>
                            <span class="payment-icon paypal" style="background-image: url(/assets/images/payments/payment-paypal.svg)"></span>
                            <span class="payment-icon stripe" style="background-image: url(/assets/images/payments/payment-stripe.png)"></span>
                            <span class="payment-icon verisign" style="background-image:  url(/assets/images/payments/payment-verisign.svg)"></span>
                        </div>
                    </div>
                </div>
                <!-- End .footer-bottom -->
            </div>
            <!-- End .containr -->
        </footer>
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="demo8.html">Home</a></li>
                    <li>
                        <a href="demo8-shop.html">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="category-sidebar-left.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">List Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                        class="tip tip-new">New</span></a></li>
                            <li><a href="category.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="demo8-product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                <ul>
                                    <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                    <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                    <li><a href="product.html">SALE PRODUCT</a></li>
                                    <li><a href="product.html">FEATURED & ON SALE</a></li>
                                    <li><a href="product-sticky-info.html">WIDTH CUSTOM TAB</a></li>
                                    <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                    <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                    <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                <ul>
                                    <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                    <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                    <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                    <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                    <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                    <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                                    <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li>
                                <a href="wishlist.html">Wishlist</a>
                            </li>
                            <li>
                                <a href="cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li>
                        <a href="#">Elements</a>
                        <ul class="custom-scrollbar">
                            <li><a href="element-accordions.html">Accordion</a></li>
                            <li><a href="element-alerts.html">Alerts</a></li>
                            <li><a href="element-animations.html">Animations</a></li>
                            <li><a href="element-banners.html">Banners</a></li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-call-to-action.html">Call to Action</a></li>
                            <li><a href="element-countdown.html">Count Down</a></li>
                            <li><a href="element-counters.html">Counters</a></li>
                            <li><a href="element-headings.html">Headings</a></li>
                            <li><a href="element-icons.html">Icons</a></li>
                            <li><a href="element-info-box.html">Info box</a></li>
                            <li><a href="element-posts.html">Posts</a></li>
                            <li><a href="element-products.html">Products</a></li>
                            <li><a href="element-product-categories.html">Product Categories</a></li>
                            <li><a href="element-tabs.html">Tabs</a></li>
                            <li><a href="element-testimonial.html">Testimonials</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="mobile-menu mt-2 mb-2">
                    <li class="border-0">
                        <a href="#">
                            Special Offer!
                        </a>
                    </li>
                    <li class="border-0">
                        <a href="https://1.envato.market/DdLk5" target="_blank">
                            Buy Porto!
                            <span class="tip tip-hot">Hot</span>
                        </a>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="demo8-contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="demo8.html">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="demo8-shop.html" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="login.html" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>

    <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url(/assets/images/newsletter_popup_bg.jpg)">
        <div class="newsletter-popup-content">
            <img src="/assets/images/logo.png" width="111" height="44" alt="Logo" class="logo-newsletter">
            <h2>Subscribe to newsletter</h2>

            <p>
                Subscribe to the Porto mailing list to receive updates on new arrivals, special offers and our promotions.
            </p>

            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Your email address" required />
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
            </form>
            <div class="newsletter-subscribe">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                    <label for="show-again" class="custom-control-label">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div>
        <!-- End .newsletter-popup-content -->

        <button title="Close (Esc)" type="button" class="mfp-close">
            ×
        </button>
    </div>
    <!-- End .newsletter-popup -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/plugins.min.js"></script>
    <script src="/assets/js/jquery.appear.min.js"></script>
    <!-- Main JS File -->
    <script src="/assets/js/main.min.js"></script>
    <script>
        setTimeout(function() {
            // location.reload();
        }, 5000);
    </script>
</body>

</html>