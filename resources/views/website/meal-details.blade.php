    @extends('website.parent')
    @section('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body {
                direction: rtl;
            }

            .ratings i {

                color: #cecece;
                font-size: 32px;
            }

            .rating-color {
                color: #fbc634 !important;
            }

            .review-count {
                font-weight: 400;
                margin-bottom: 2px;
                font-size: 24px !important;
            }

            .small-ratings i {
                color: #cecece;
            }

            .review-stat {
                font-weight: 300;
                font-size: 18px;
                margin-bottom: 2px;
            }
        </style>
    @endsection
    @section('content')
        <div class="breadcrumbs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="breadcrumbs-content">
                            <h1 class="page-title">{{ $meal->name }}</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html">Home</a></li>
                            <li>{{ $meal->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <section class="item-details section">
            <div class="container">
                <div class="top-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="product-images">
                                <main id="gallery">
                                    <div class="main-img">
                                        <img src="{{ asset('storage/' . $meal->image) }}" id="current" alt="#">
                                    </div>
                                    <div class="images">
                                        <img src="assets/images/item-details/image1.jpg" class="img" alt="#">
                                        <img src="assets/images/item-details/image2.jpg" class="img" alt="#">
                                        <img src="assets/images/item-details/image3.jpg" class="img" alt="#">
                                        <img src="assets/images/item-details/image4.jpg" class="img" alt="#">
                                        <img src="assets/images/item-details/image5.jpg" class="img" alt="#">
                                    </div>
                                </main>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="product-info">
                                <h2 class="title">{{ $meal->name }}</h2>

                                <h3 class="price">{{ $meal->price }}</h3>
                                <div class="list-info">
                                    <h4>المعلومات</h4>
                                    <ul>
                                        <li><span>المطعم:</span> {{ $meal->restaurant->name }}</li>
                                        <li><span>القسم:</span> {{ $meal->category->name }}</li>
                                    </ul>

                                    <div class="mt-10 d-flex justify-content-between align-items-center">
                                        <div class="ratings">
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star rating-color"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h5 class="review-count">12 تقييما</h5>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <ul>
                                        <li>
                                            <a href="tel:+002562352589" class="call">
                                                <i class="lni lni-phone-set"></i>
                                                +00 256 235 2589
                                                <span>Call & Get more info</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://demo.graygrids.com/cdn-cgi/l/email-protection#80e5f8e1edf0ece5c0e7ede1e9ecaee3efed"
                                                class="mail">
                                                <i class="lni lni-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-details-blocks">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-12">

                            <div class="single-block description">
                                <h3>وصف</h3>
                                <p>
                                    {{ $meal->description }}
                                </p>
                                <ul>
                                    <li>Model: Apple MacBook Pro 13.3-Inch MYDA2</li>
                                    <li>Apple M1 chip with 8-core CPU and 8-core GPU</li>
                                    <li>8GB RAM</li>
                                    <li>256GB SSD</li>
                                    <li>13.3-inch 2560x1600 LED-backlit Retina Display</li>
                                </ul>
                                <p>The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                                    non-characteristic words etc.</p>
                            </div>


                            <div class="single-block tags">
                                <h3>العلامات</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">Bike</a></li>
                                    <li><a href="javascript:void(0)">Services</a></li>
                                    <li><a href="javascript:void(0)">Brand</a></li>
                                    <li><a href="javascript:void(0)">Popular</a></li>
                                </ul>
                            </div>


                            <div class="single-block comments">
                                <h3>اراء المستخدمين</h3>

                                <div class="single-comment">
                                    <img src="{{ asset('website/assets/images/testimonial/testi2.jpg') }}" alt="#">
                                    <div class="content">
                                        <h4>عمرو أمين</h4>
                                        <span>25 Feb, 2023</span>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable.
                                        </p>
                                        <a href="javascript:void(0)" class="reply"><i class="lni lni-reply"></i>
                                            Reply</a>
                                    </div>
                                </div>

                            </div>


                            <div class="single-block comment-form">
                                <h3>ادرج تعليقا</h3>
                                <form action="#" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-box form-group">
                                                <input type="text" name="name" class="form-control form-control-custom"
                                                    placeholder="اسمك" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-box form-group">
                                                <input type="email" name="email" class="form-control form-control-custom"
                                                    placeholder="البريد الالكتروني" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-box form-group">
                                                <textarea name="#" class="form-control form-control-custom" placeholder="تعليقاتك"></textarea>
                                            </div>
                                        </div>

                                        <hr>


                                        <div class="col-12 mt-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="review-count">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rate"
                                                            id="flexRadioDefault1">

                                                    </div>
                                                </h5>
                                                <div class="ratings">
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 mt-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="review-count">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rate"
                                                            id="flexRadioDefault1">

                                                    </div>
                                                </h5>
                                                <div class="ratings">
                                                    <i class="fa fa-star "></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-12 mt-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="review-count">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rate"
                                                            id="flexRadioDefault1">

                                                    </div>
                                                </h5>
                                                <div class="ratings">
                                                    <i class="fa fa-star "></i>
                                                    <i class="fa fa-star "></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="review-count">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rate"
                                                            id="flexRadioDefault1">

                                                    </div>
                                                </h5>
                                                <div class="ratings">
                                                    <i class="fa fa-star "></i>
                                                    <i class="fa fa-star "></i>
                                                    <i class="fa fa-star "></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="review-count">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rate"
                                                            id="flexRadioDefault1">
                                                    </div>
                                                </h5>
                                                <div class="ratings">
                                                    <i class="fa fa-star "></i>
                                                    <i class="fa fa-star "></i>
                                                    <i class="fa fa-star "></i>
                                                    <i class="fa fa-star "></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="button">
                                                <button type="submit" class="btn">تعليق</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                        <div class="col-lg-4 col-md-5 col-12">
                            <div class="item-details-sidebar">

                                <div class="single-block author">
                                    <h3>المالك</h3>
                                    <div class="content">
                                        <img src="{{ asset('storage/' . $meal->restaurant->image) }}" alt="#">
                                        <h4>{{ $meal->restaurant->name }}</h4>
                                        <span>{{ $meal->created_at }}</span>
                                    </div>
                                </div>


                                {{-- <div class="single-block contant-seller comment-form ">
                                <h3>Contact Seller</h3>
                                <form action="#" method="POST">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-box form-group">
                                                <input type="text" name="name" class="form-control form-control-custom"
                                                    placeholder="Your Name" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-box form-group">
                                                <input type="email" name="email"
                                                    class="form-control form-control-custom"
                                                    placeholder="Your Email" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-box form-group">
                                                <textarea name="#" class="form-control form-control-custom" placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="button">
                                                <button type="submit" class="btn">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}


                                <div class="single-block ">
                                    <h3>الموقع</h3>
                                    <div class="mapouter">
                                        <div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas"
                                                src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                                href="https://putlocker-is.org/"></a><br>
                                            <style>
                                                .mapouter {
                                                    position: relative;
                                                    text-align: right;
                                                    height: 300px;
                                                    width: 100%;
                                                }
                                            </style><a href="https://www.embedgooglemap.net/">google map code for
                                                website</a>
                                            <style>
                                                .gmap_canvas {
                                                    overflow: hidden;
                                                    background: none !important;
                                                    height: 300px;
                                                    width: 100%;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @section('scripts')
        <script type="text/javascript">
            const current = document.getElementById("current");
            const opacity = 0.6;
            const imgs = document.querySelectorAll(".img");
            imgs.forEach(img => {
                img.addEventListener("click", (e) => {
                    //reset opacity
                    imgs.forEach(img => {
                        img.style.opacity = 1;
                    });
                    current.src = e.target.src;
                    //adding class 
                    //current.classList.add("fade-in");
                    //opacity
                    e.target.style.opacity = opacity;
                });
            });
        </script>
    @endsection
