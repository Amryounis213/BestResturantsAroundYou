@extends('website.parent')
@section('styles')
    <style>
        .image img {
            height: 200px;
        }
    </style>
@endsection
@section('content')
    <section class="hero-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="hero-text text-center">

                        <div class="section-heading">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">مرحبا بك في كلاسي</h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s">اكتشف مطعمك المناسب من خلال رؤية عروضنا ،
                                وجباتنا المميزة</p>
                        </div>


                        <div class="search-form wow fadeInUp" data-wow-delay=".7s">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-12 p-0">
                                    <div class="search-btn button">
                                        <button class="btn"><i class="lni lni-search-alt"></i>
                                            بحث</button>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 p-0">
                                    <div class="search-input">
                                        <label for="keyword"><i class="lni lni-search-alt theme-color"></i></label>
                                        <input type="text" name="keyword" id="keyword" placeholder="كلمة مفتاحية">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12 p-0">
                                    <div class="search-input">
                                        <label for="category"><i class="lni lni-grid-alt theme-color"></i></label>
                                        <select name="category" id="category">
                                            <option value="none" selected disabled>اقسامنا</option>
                                            <option value="none">مطاعم</option>
                                            <option value="none">وجبات</option>
                                            <option value="none">عروض</option>
                                            <option value="none">Furniture</option>
                                            <option value="none">Fashion</option>
                                            <option value="none">Jobs</option>
                                            <option value="none">Real Estate</option>
                                            <option value="none">Animals</option>
                                            <option value="none">Education</option>
                                            <option value="none">Matrimony</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12 p-0">
                                    <div class="search-input">
                                        <label for="location"><i class="lni lni-map-marker theme-color"></i></label>
                                        <select name="location" id="location">
                                            <option value="none" selected disabled>موقع </option>
                                            <option value="none">New York</option>
                                            <option value="none">California</option>
                                            <option value="none">Washington</option>
                                            <option value="none">Birmingham</option>
                                            <option value="none">Chicago</option>
                                            <option value="none">Phoenix</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="categories">
        <div class="container">
            <div class="cat-inner">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="category-slider">

                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/categories/car.svg') }}" alt="#">
                                </div>
                                <h3>اقسامنا</h3>
                                <h5 class="total">35</h5>
                            </a>


                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/categories/laptop.svg') }}" alt="#">
                                </div>
                                <h3>مطاعمنا</h3>
                                <h5 class="total">22</h5>
                            </a>


                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/categories/matrimony.svg') }}" alt="#">
                                </div>
                                <h3>وجباتنا</h3>
                                <h5 class="total">55</h5>
                            </a>


                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/categories/furniture.svg') }}" alt="#">
                                </div>
                                <h3>Furnitures</h3>
                                <h5 class="total">21</h5>
                            </a>


                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/categories/jobs.svg') }}" alt="#">
                                </div>
                                <h3>Jobs</h3>
                                <h5 class="total">44</h5>
                            </a>


                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/categories/real-estate.svg') }}" alt="#">
                                </div>
                                <h3>Real Estate</h3>
                                <h5 class="total">65</h5>
                            </a>


                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/categories/laptop.svg') }}" alt="#">
                                </div>
                                <h3>Education</h3>
                                <h5 class="total">35</h5>
                            </a>


                            <a href="category.html" class="single-cat">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/categories/hospital.svg') }}" alt="#">
                                </div>
                                <h3>Health & Beauty</h3>
                                <h5 class="total">22</h5>
                            </a>


                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="items-grid section custom-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">أحدث المطاعم</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">لدينا احدث وافضل الوجبات التى تراها من مطاعمنا
                            المختلفة</p>
                    </div>
                </div>
            </div>
            <div class="single-head">
                <div class="row">

                    @foreach (\App\Models\Resturant::latest()->get() as $restaurant)
                        <div class="col-lg-4 col-md-6 col-12">

                            <div class="single-grid wow fadeInUp" data-wow-delay=".2s">
                                <div class="image">
                                    <a href="{{ route('resturant.product', $restaurant->id) }}" class="thumbnail"><img
                                            src="{{ asset('storage/' . $restaurant->image) }}" alt="#"></a>
                                    <div class="author">
                                        <div class="author-image">
                                            <a href="javascript:void(0)"><img
                                                    src="{{ asset('website/assets/images/items-grid/author-1.jpg') }}"
                                                    alt="#">
                                                <span>{{ $restaurant->name }}</span></a>
                                        </div>
                                        <p class="sale">عرض</p>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="top-content">
                                        <a href="javascript:void(0)" class="tag">{{ $restaurant->name }}</a>
                                        <h3 class="title">
                                            <a
                                                href="{{ route('resturant.product', $restaurant->id) }}">{{ $restaurant->name }}</a>
                                        </h3>
                                        <p class="update-time">أخر تحديث :
                                            {{ $restaurant->updated_at->diffForHumans() }}</p>
                                        <ul class="rating">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><a href="javascript:void(0)">(35)</a></li>
                                        </ul>
                                        <ul class="info-list">
                                            <li><a href="javascript:void(0)"><i class="lni lni-map-marker"></i> New York,
                                                    US</a></li>
                                            <li><a href="javascript:void(0)"><i class="lni lni-timer"></i> Feb 18,
                                                    2023</a></li>
                                        </ul>
                                    </div>
                                    <div class="bottom-content">
                                        <p class="price">يبدأ من: <span>30 شيكل</span></p>
                                        <a href="javascript:void(0)" class="like"><i
                                                class="lni lni-heart"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach

                    {{-- <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-grid wow fadeInUp" data-wow-delay=".4s">
                        <div class="image">
                            <a href="item-details.html" class="thumbnail"><img
                                    src="assets/images/items-grid/img2.jpg" alt="#"></a>
                            <div class="author">
                                <div class="author-image">
                                    <a href="javascript:void(0)"><img src="assets/images/items-grid/author-2.jpg"
                                            alt="#">
                                        <span>Alex Jui</span></a>
                                </div>
                                <p class="sale">For Sale</p>
                            </div>
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <a href="javascript:void(0)" class="tag">Real Estate</a>
                                <h3 class="title">
                                    <a href="item-details.html">Amazing Room for Rent</a>
                                </h3>
                                <p class="update-time">Last Updated: 2 hours ago</p>
                                <ul class="rating">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><a href="javascript:void(0)">(20)</a></li>
                                </ul>
                                <ul class="info-list">
                                    <li><a href="javascript:void(0)"><i class="lni lni-map-marker"></i> Dallas,
                                            Washington</a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-timer"></i> Jan 7, 2023</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="bottom-content">
                                <p class="price">Start From: <span>$450.00</span></p>
                                <a href="javascript:void(0)" class="like"><i
                                        class="lni lni-heart"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-grid wow fadeInUp" data-wow-delay=".6s">
                        <div class="image">
                            <a href="item-details.html" class="thumbnail"><img
                                    src="assets/images/items-grid/img3.jpg" alt="#"></a>
                            <div class="author">
                                <div class="author-image">
                                    <a href="javascript:void(0)"><img src="assets/images/items-grid/author-3.jpg"
                                            alt="#">
                                        <span>Devid Milan</span></a>
                                </div>
                                <p class="sale">For Sale</p>
                            </div>
                            <p class="item-position"><i class="lni lni-bolt"></i> Featured</p>
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <a href="javascript:void(0)" class="tag">Mobile Phones</a>
                                <h3 class="title">
                                    <a href="item-details.html">Canon SX Powershot D-SLR</a>
                                </h3>
                                <p class="update-time">Last Updated: 3 hours ago</p>
                                <ul class="rating">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><a href="javascript:void(0)">(55)</a></li>
                                </ul>
                                <ul class="info-list">
                                    <li><a href="javascript:void(0)"><i class="lni lni-map-marker"></i> New York,
                                            US</a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-timer"></i> Mar 18,
                                            2023</a></li>
                                </ul>
                            </div>
                            <div class="bottom-content">
                                <p class="price">Start From: <span>$700.00</span></p>
                                <a href="javascript:void(0)" class="like"><i
                                        class="lni lni-heart"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-grid wow fadeInUp" data-wow-delay=".2s">
                        <div class="image">
                            <a href="item-details.html" class="thumbnail"><img
                                    src="assets/images/items-grid/img4.jpg" alt="#"></a>
                            <div class="author">
                                <div class="author-image">
                                    <a href="javascript:void(0)"><img src="assets/images/items-grid/author-4.jpg"
                                            alt="#">
                                        <span>Jesia Jully</span></a>
                                </div>
                                <p class="sale">For Sale</p>
                            </div>
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <a href="javascript:void(0)" class="tag">Vehicles</a>
                                <h3 class="title">
                                    <a href="item-details.html">BMW 5 Series GT Car</a>
                                </h3>
                                <p class="update-time">Last Updated: 4 hours ago</p>
                                <ul class="rating">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><a href="javascript:void(0)">(35)</a></li>
                                </ul>
                                <ul class="info-list">
                                    <li><a href="javascript:void(0)"><i class="lni lni-map-marker"></i> New York,
                                            US</a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-timer"></i> Apr 12,
                                            2023</a></li>
                                </ul>
                            </div>
                            <div class="bottom-content">
                                <p class="price">Start From: <span>$1000.00</span></p>
                                <a href="javascript:void(0)" class="like"><i
                                        class="lni lni-heart"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-grid wow fadeInUp" data-wow-delay=".4s">
                        <div class="image">
                            <a href="item-details.html" class="thumbnail"><img
                                    src="assets/images/items-grid/img5.jpg" alt="#"></a>
                            <div class="author">
                                <div class="author-image">
                                    <a href="javascript:void(0)"><img src="assets/images/items-grid/author-5.jpg"
                                            alt="#">
                                        <span>Thomas Deco</span></a>
                                </div>
                                <p class="sale">For Sale</p>
                            </div>
                            <p class="item-position"><i class="lni lni-bolt"></i> Featured</p>
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <a href="javascript:void(0)" class="tag">Apple</a>
                                <h3 class="title">
                                    <a href="item-details.html">Apple Macbook Pro 13 Inch</a>
                                </h3>
                                <p class="update-time">Last Updated: 5 hours ago</p>
                                <ul class="rating">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><a href="javascript:void(0)">(35)</a></li>
                                </ul>
                                <ul class="info-list">
                                    <li><a href="javascript:void(0)"><i class="lni lni-map-marker"></i> Louis,
                                            Missouri, US</a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-timer"></i> May 25,
                                            2023</a></li>
                                </ul>
                            </div>
                            <div class="bottom-content">
                                <p class="price">Start From: <span>$550.00</span></p>
                                <a href="javascript:void(0)" class="like"><i
                                        class="lni lni-heart"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-grid wow fadeInUp" data-wow-delay=".6s">
                        <div class="image">
                            <a href="item-details.html" class="thumbnail"><img
                                    src="assets/images/items-grid/img6.jpg" alt="#"></a>
                            <div class="author">
                                <div class="author-image">
                                    <a href="javascript:void(0)"><img src="assets/images/items-grid/author-6.jpg"
                                            alt="#">
                                        <span>Jonson zack</span></a>
                                </div>
                                <p class="sale">For Sale</p>
                            </div>
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <a href="javascript:void(0)" class="tag">Restaurant</a>
                                <h3 class="title">
                                    <a href="item-details.html">Cream Restaurant</a>
                                </h3>
                                <p class="update-time">Last Updated: 7 hours ago</p>
                                <ul class="rating">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><a href="javascript:void(0)">(20)</a></li>
                                </ul>
                                <ul class="info-list">
                                    <li><a href="javascript:void(0)"><i class="lni lni-map-marker"></i> New York,
                                            US</a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-timer"></i> Feb 18,
                                            2023</a></li>
                                </ul>
                            </div>
                            <div class="bottom-content">
                                <p class="price">Start From: <span>$500.00</span></p>
                                <a href="javascript:void(0)" class="like"><i
                                        class="lni lni-heart"></i></a>
                            </div>
                        </div>
                    </div>

                </div> --}}
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">لماذا اخترتنا</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="choose-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">

                            <div class="single-list wow fadeInUp" data-wow-delay=".2s">
                                <i class="lni lni-book"></i>
                                <h4>Fully Documented</h4>
                                <p>Buy and sell everything from used cars to mobile phones and computer or search
                                    for property.</p>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6 col-12">

                            <div class="single-list wow fadeInUp" data-wow-delay=".4s">
                                <i class="lni lni-leaf"></i>
                                <h4>Clean & Modern Design</h4>
                                <p>Buy and sell everything from used cars to mobile phones and computer or search
                                    for property.</p>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6 col-12">

                            <div class="single-list wow fadeInUp" data-wow-delay=".6s">
                                <i class="lni lni-cog"></i>
                                <h4>Completely Customizable</h4>
                                <p>Buy and sell everything from used cars to mobile phones and computer or search
                                    for property.</p>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6 col-12">

                            <div class="single-list wow fadeInUp" data-wow-delay=".2s">
                                <i class="lni lni-pointer-up"></i>
                                <h4>User Friendly</h4>
                                <p>Buy and sell everything from used cars to mobile phones and computer or search
                                    for property.</p>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6 col-12">

                            <div class="single-list wow fadeInUp" data-wow-delay=".4s">
                                <i class="lni lni-layout"></i>
                                <h4>Awesome Layout</h4>
                                <p>Buy and sell everything from used cars to mobile phones and computer or search
                                    for property.</p>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6 col-12">

                            <div class="single-list wow fadeInUp" data-wow-delay=".6s">
                                <i class="lni lni-laptop-phone"></i>
                                <h4>Fully Responsive</h4>
                                <p>Buy and sell everything from used cars to mobile phones and computer or search
                                    for property.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


    <section class="browse-cities section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">مدننا</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">لدينا العديد من المطاعم .</p>
                    </div>
                </div>
            </div>
            <div class="row ">

                @foreach (\App\Models\City::withCount('Resturant')->get() as $city)
                    <div class="col-lg-4 col-md-4 col-12">

                        <div class="single-city wow fadeInUp" data-wow-delay=".2s">
                            <a href="{{route('city.resturants' , $city->id)}}" class="info-box">
                                <div class="image">
                                    <img src="{{ $city->image }}" alt="#">
                                </div>
                                <div class="content">
                                    <h4 class="name">
                                        {{ $city->name }}
                                        <span>{{ $city->resturant_count }} مطاعم</span>
                                    </h4>
                                </div>
                                <div class="more-btn">
                                    <i class="lni lni-circle-plus"></i>
                                </div>
                            </a>
                        </div>

                    </div>
                @endforeach





                <div class="col-lg-6 col-md-6 col-12">

                    <div class="single-city wow fadeInUp" data-wow-delay=".2s">
                        <a href="category.html" class="info-box">
                            <div class="image">
                                <img src="assets/images/cities/img4.jpg" alt="#">
                            </div>
                            <div class="content">
                                <h4 class="name">
                                    San Francisco
                                    <span>355 Ads</span>
                                </h4>
                            </div>
                            <div class="more-btn">
                                <i class="lni lni-circle-plus"></i>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-12">

                    <div class="single-city wow fadeInUp" data-wow-delay=".4s">
                        <a href="category.html" class="info-box">
                            <div class="image">
                                <img src="assets/images/cities/img5.jpg" alt="#">
                            </div>
                            <div class="content">
                                <h4 class="name">
                                    Newe Orleans
                                    <span>76 Ads</span>
                                </h4>
                            </div>
                            <div class="more-btn">
                                <i class="lni lni-circle-plus"></i>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- <section class="call-action overlay section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="inner">
                    <div class="content">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Do you have something to sell?</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Post your ad for free on ClassiGrids</p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="javascript:void(0)" class="btn">Post an ad now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


    <section class="items-tab section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">وجبات عشوائية</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-latest-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-latest" type="button" role="tab" aria-controls="nav-latest"
                                aria-selected="true">Latest Ads</button>
                            <button class="nav-link" id="nav-popular-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular"
                                aria-selected="false">Popular Ads</button>
                            <button class="nav-link" id="nav-random-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-random" type="button" role="tab" aria-controls="nav-random"
                                aria-selected="false">Random Ads</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-latest" role="tabpanel"
                            aria-labelledby="nav-latest-tab">
                            <div class="row">

                                @foreach (\App\Models\Meal::latest()->get() as $pro)
                                    <div class="col-lg-3 col-md-4 col-12">

                                        <div class="single-item-grid">
                                            <div class="image">
                                                <a href="item-details.html"><img
                                                        src="{{ asset('storage/' . $pro->image) }}" alt="#"></a>
                                                <i class=" cross-badge lni lni-bolt"></i>
                                                <span class="flat-badge sale">Sale</span>
                                            </div>
                                            <div class="content">
                                                <a href="javascript:void(0)" class="tag">Mobile</a>
                                                <h3 class="title">
                                                    <a href="item-details.html">{{ $pro->name }}</a>
                                                </h3>
                                                <p class="location"><a href="javascript:void(0)"><i
                                                            class="lni lni-map-marker">
                                                        </i>Boston</a></p>
                                                <ul class="info">
                                                    <li class="price">{{ $pro->price }}</li>
                                                    <li class="like"><a href="javascript:void(0)"><i
                                                                class="lni lni-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-2.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Others</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Travel Kit</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>San Francisco</a></p>
                                            <ul class="info">
                                                <li class="price">$580.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-3.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Electronic</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Nikon DSLR Camera</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Alaska, USA</a></p>
                                            <ul class="info">
                                                <li class="price">$560.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-1.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Mobile</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Apple Iphone X</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Boston</a></p>
                                            <ul class="info">
                                                <li class="price">$890.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-4.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Furniture</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Poster Paint</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Las Vegas</a></p>
                                            <ul class="info">
                                                <li class="price">$85.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-7.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Electronic</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Cctv camera</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Delhi, India</a></p>
                                            <ul class="info">
                                                <li class="price">$350.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-8.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Mobile</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Samsung Glalaxy S8</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Delaware, USA</a></p>
                                            <ul class="info">
                                                <li class="price">$299.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-5.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Furniture</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Official Metting Chair</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Alaska, USA</a></p>
                                            <ul class="info">
                                                <li class="price">$750.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-6.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge rent">Rent</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Books & Magazine</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Story Book</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>New York, USA</a></p>
                                            <ul class="info">
                                                <li class="price">$120.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-random" role="tabpanel" aria-labelledby="nav-random-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-3.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Electronic</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Nikon DSLR Camera</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Alaska, USA</a></p>
                                            <ul class="info">
                                                <li class="price">$560.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-4.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Furniture</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Poster Paint</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Las Vegas</a></p>
                                            <ul class="info">
                                                <li class="price">$85.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-5.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Furniture</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Official Metting Chair</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Alaska, USA</a></p>
                                            <ul class="info">
                                                <li class="price">$750.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-1.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Mobile</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Apple Iphone X</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Boston</a></p>
                                            <ul class="info">
                                                <li class="price">$890.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-2.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Others</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Travel Kit</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>San Francisco</a></p>
                                            <ul class="info">
                                                <li class="price">$580.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-6.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge rent">Rent</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Books & Magazine</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Story Book</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>New York, USA</a></p>
                                            <ul class="info">
                                                <li class="price">$120.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-7.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Electronic</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Cctv camera</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Delhi, India</a></p>
                                            <ul class="info">
                                                <li class="price">$350.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="assets/images/items-tab/item-8.jpg"
                                                    alt="#"></a>
                                            <i class=" cross-badge lni lni-bolt"></i>
                                            <span class="flat-badge sale">Sale</span>
                                        </div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="tag">Mobile</a>
                                            <h3 class="title">
                                                <a href="item-details.html">Samsung Glalaxy S8</a>
                                            </h3>
                                            <p class="location"><a href="javascript:void(0)"><i
                                                        class="lni lni-map-marker">
                                                    </i>Delaware, USA</a></p>
                                            <ul class="info">
                                                <li class="price">$299.00</li>
                                                <li class="like"><a href="javascript:void(0)"><i
                                                            class="lni lni-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Pricing Plan</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-table wow fadeInUp" data-wow-delay=".2s">

                    <div class="table-head">
                        <div class="price">
                            <h2 class="amount">$00<span class="duration">/ Month</span></h2>
                        </div>
                        <h4 class="title">Free</h4>
                    </div>


                    <ul class="table-list">
                        <li>One Listing</li>
                        <li>Contact Display</li>
                        <li>Image Gallery</li>
                        <li>30 Days Availablity</li>
                        <li>Non-Featured</li>
                        <li>Business Tagline</li>
                    </ul>


                    <div class="button">
                        <a class="btn" href="javascript:void(0)">Select Plan</a>
                    </div>

                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-table wow fadeInUp" data-wow-delay=".4s">

                    <div class="table-head">
                        <div class="price">
                            <h2 class="amount">$59<span class="duration">/ Month</span></h2>
                        </div>
                        <h4 class="title">Standard</h4>
                    </div>


                    <ul class="table-list">
                        <li>One Listing</li>
                        <li>Contact Display</li>
                        <li>Image Gallery</li>
                        <li>60 Days Availablity</li>
                        <li>Non-Featured</li>
                        <li>Business Tagline</li>
                    </ul>


                    <div class="button">
                        <a class="btn" href="javascript:void(0)">Select Plan</a>
                    </div>

                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-table wow fadeInUp" data-wow-delay=".6s">

                    <div class="table-head">
                        <div class="price">
                            <h2 class="amount">$99<span class="duration">/ Month</span></h2>
                        </div>
                        <h4 class="title">Premium</h4>
                    </div>


                    <ul class="table-list">
                        <li>One Listing</li>
                        <li>Contact Display</li>
                        <li>Image Gallery</li>
                        <li>90 Days Availablity</li>
                        <li>Non-Featured</li>
                        <li>Business Tagline</li>
                    </ul>


                    <div class="button">
                        <a class="btn" href="javascript:void(0)">Select Plan</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section> --}}


    <section class="testimonials section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title align-center gray-bg">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">What People Say</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row testimonial-slider">
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi1.jpg" alt="#">
                            <h4 class="name">
                                Jane Anderson
                                <span class="deg">Founder & CEO</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections. I have the exact same personality, the only thing that has changed is my
                                mindset and a few behaviors."</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi2.jpg" alt="#">
                            <h4 class="name">
                                Devid Samuyel
                                <span class="deg">Web Developer</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections. I have the exact same personality, the only thing that has changed is my
                                mindset and a few behaviors."</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="single-testimonial">
                        <div class="quote-icon">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="author">
                            <img src="assets/images/testimonial/testi3.jpg" alt="#">
                            <h4 class="name">
                                Jully Sulli
                                <span class="deg">Ui/Ux Designer</span>
                            </h4>
                        </div>
                        <div class="text">
                            <p>"It’s amazing how much easier it has been to meet new people and create instant
                                connections. I have the exact same personality, the only thing that has changed is my
                                mindset and a few behaviors."</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
