<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.graygrids.com/themes/classigrids-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Mar 2022 22:30:06 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>أفضل مطعم بجوارك</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/assets/css/main.css') }}" />
    @yield('styles')
    
</head>

<body>
    <!--[if lte IE 9]>t
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{asset('website/assets/images/logo/logo.svg')}}" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="active dd-menu collapsed" href="javascript:void(0)"
                                            data-bs-toggle="collapse" data-bs-target="#submenu-1-1"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation">الرئيسية</a>
                                        <ul class="sub-menu collapse" id="submenu-1-1">
                                            <li class="nav-item active"><a href="index.html">Home Default</a></li>
                                            <li class="nav-item"><a href="index2.html">Home Version 2</a></li>
                                            <li class="nav-item"><a href="index3.html">Home Version 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="category.html" aria-label="Toggle navigation">الأقسام</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="category.html" aria-label="Toggle navigation">المطاعم</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">العروض</a>
                                        <ul class="sub-menu collapse" id="submenu-1-3">
                                            <li class="nav-item"><a href="item-listing-grid.html">Ad Grid</a></li>
                                            <li class="nav-item"><a href="item-listing-list.html">Ad Listing</a>
                                            </li>
                                            <li class="nav-item"><a href="item-details.html">Ad Details</a></li>
                                        </ul>
                                    </li>
                                   
                                </ul>
                            </div>
                            <div class="login-button">
                                

                                @if (!Auth::id() != null)
                                <ul>
                                    <li>
                                        <a href="login.html"><i class="lni lni-enter"></i>  دخول</a>
                                    </li>
                                    <li>
                                        <a href="registration.html"><i class="lni lni-user"></i> تسجيل</a>
                                    </li>
                                </ul>  
                                @else
                                <ul>
                                   
                                    <li>
                                        <a href="registration.html"><i class="lni lni-user"></i>{{Auth::user()->name}}</a>
                                    </li>
                                </ul>
                                @endif
                            </div>
                            <div class="button header-button">
                                <a href="post-item.html" class="btn">قم بالحجز الان</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    {{-- <section class="how-works section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">How it Works</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="single-work wow fadeInUp" data-wow-delay=".2s">
                        <span class="serial">01</span>
                        <h3>Create Account</h3>
                        <p>Lorem ipsum dolor sit amet constur adipisicing sed do eiusmod tempor incididunt labore.</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="single-work wow fadeInUp" data-wow-delay=".4s">
                        <span class="serial">02</span>
                        <h3>Post Your Ads</h3>
                        <p>Lorem ipsum dolor sit amet constur adipisicing sed do eiusmod tempor incididunt labore.</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="single-work wow fadeInUp" data-wow-delay=".6s">
                        <span class="serial">03</span>
                        <h3>Sell Your Item</h3>
                        <p>Lorem ipsum dolor sit amet constur adipisicing sed do eiusmod tempor incididunt labore.</p>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}


    {{-- <div class="latest-news-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">latest news</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-news wow fadeInUp" data-wow-delay=".3s">
                        <div class="image">
                            <a href="blog-single-sidebar.html"><img class="thumb"
                                    src="assets/images/blog/blog1.jpg" alt="#"></a>
                        </div>
                        <div class="content-body">
                            <h4 class="title"><a href="blog-single-sidebar.html">10 Things Successful
                                    Mompreneurs Do
                                    Different</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis soluta libero molestiae,
                                id reiciendis ipsum. </p>
                            <div class="meta-details">
                                <ul>
                                    <li><a href="javascript:void(0)">Jan 24,2023</a></li>
                                    <li><a href="javascript:void(0)">Technology</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-news wow fadeInUp" data-wow-delay=".5s">
                        <div class="image">
                            <a href="blog-single-sidebar.html"><img class="thumb"
                                    src="assets/images/blog/blog2.jpg" alt="#"></a>
                        </div>
                        <div class="content-body">
                            <h4 class="title"><a href="blog-single-sidebar.html">A digital prescription for
                                    the industry.</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis soluta libero molestiae,
                                id reiciendis ipsum. </p>
                            <div class="meta-details">
                                <ul>
                                    <li><a href="javascript:void(0)">Feb 20,2023</a></li>
                                    <li><a href="javascript:void(0)">Magazine</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-news wow fadeInUp" data-wow-delay=".7s">
                        <div class="image">
                            <a href="blog-single-sidebar.html"><img class="thumb"
                                    src="assets/images/blog/blog3.jpg" alt="#"></a>
                        </div>
                        <div class="content-body">
                            <h4 class="title"><a href="blog-single-sidebar.html">Strategic & commercial
                                    approach with
                                    issues.</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis soluta libero molestiae,
                                id reiciendis ipsum. </p>
                            <div class="meta-details">
                                <ul>
                                    <li><a href="javascript:void(0)">Mar 15,2023</a></li>
                                    <li><a href="javascript:void(0)">Technology</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}


    <div class="newsletter section">
        <div class="container">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="title">
                            <i class="lni lni-alarm"></i>
                            <h2>Newsletter</h2>
                            <p>We don't send spam so don't worry.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form">
                            <form action="#" method="get" target="_blank" class="newsletter-form">
                                <input name="EMAIL" placeholder="Your email address" type="email">
                                <div class="button">
                                    <button class="btn">Subscribe<span
                                            class="dir-part"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer mobile-app">
                            <h3>Mobile Apps</h3>
                            <div class="app-button">
                                <a href="javascript:void(0)" class="btn">
                                    <i class="lni lni-play-store"></i>
                                    <span class="text">
                                        <span class="small-text">Get It On</span>
                                        Google Play
                                    </span>
                                </a>
                                <a href="javascript:void(0)" class="btn">
                                    <i class="lni lni-apple"></i>
                                    <span class="text">
                                        <span class="small-text">Get It On</span>
                                        App Store
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer f-link">
                            <h3>Locations</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)">Chicago</a></li>
                                        <li><a href="javascript:void(0)">New York City</a></li>
                                        <li><a href="javascript:void(0)">San Francisco</a></li>
                                        <li><a href="javascript:void(0)">Washington</a></li>
                                        <li><a href="javascript:void(0)">Boston</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)">Los Angeles</a></li>
                                        <li><a href="javascript:void(0)">Seattle</a></li>
                                        <li><a href="javascript:void(0)">Las Vegas</a></li>
                                        <li><a href="javascript:void(0)">San Diego</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer f-link">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="javascript:void(0)">About Us</a></li>
                                <li><a href="javascript:void(0)">How It's Works</a></li>
                                <li><a href="javascript:void(0)">Login</a></li>
                                <li><a href="javascript:void(0)">Signup</a></li>
                                <li><a href="javascript:void(0)">Help & Support</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer f-contact">
                            <h3>Contact</h3>
                            <ul>
                                <li>23 New Design Str, Lorem Upsum 10<br> Hudson Yards, USA</li>
                                <li>Tel. +(123) 1800-567-8990 <br> Mail. <a
                                        href="https://demo.graygrids.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="abd8dedbdbc4d9dfebc8c7cad8d8c2ccd9c2cfd885c8c4c6">[email&#160;protected]</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="footer-bottom">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="content">
                                <ul class="footer-bottom-links">
                                    <li><a href="javascript:void(0)">Terms of use</a></li>
                                    <li><a href="javascript:void(0)"> Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)">Advanced Search</a></li>
                                    <li><a href="javascript:void(0)">Site Map</a></li>
                                    <li><a href="javascript:void(0)">Information</a></li>
                                </ul>
                                <p class="copyright-text">Designed and Developed by <a href="https://graygrids.com/"
                                        rel="nofollow" target="_blank">GrayGrids</a>
                                </p>
                                <ul class="footer-social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('website/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('website/assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/main.js') }}"></script>
    @yield('scripts')
    <script type="text/javascript">
        //========= Category Slider 
        tns({
            container: '.category-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 2,
                },
                768: {
                    items: 4,
                },
                992: {
                    items: 5,
                },
                1170: {
                    items: 6,
                }
            }
        });

        //========= testimonial 
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1170: {
                    items: 2,
                }
            }
        });
    </script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/classigrids-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Mar 2022 22:30:34 GMT -->

</html>
