@extends('website.parent')
@section('styles')
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
@endsection
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">{{ $resturant->name ?? ''}}</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>{{ $resturant->name ?? '' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="category-page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="category-sidebar">

                        <div class="single-widget search">
                            <h3>ابحث </h3>
                            <form action="#">
                                <input type="text" placeholder="ابحث هنا ..">
                                <button type="submit"><i class="lni lni-search-alt"></i></button>
                            </form>
                        </div>


                        <div class="single-widget">
                            <h3>كل الأقسام</h3>
                            <ul class="list">
                                <li>
                                    <a href="javascript:void(0)"><i class="lni lni-dinner"></i> Hotel &
                                        Travels<span>15</span></a>
                                </li>
                               
                               
                            </ul>
                        </div>


                      
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="category-grid-list">
                        <div class="row">
                            <div class="col-12">
                                <div class="category-grid-topbar">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <h3 class="title">Showing 1-12 of 21 ads found</h3>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-grid" type="button" role="tab"
                                                        aria-controls="nav-grid" aria-selected="true"><i
                                                            class="lni lni-grid-alt"></i></button>
                                                    <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-list" type="button" role="tab"
                                                        aria-controls="nav-list" aria-selected="false"><i
                                                            class="lni lni-list"></i></button>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-grid" role="tabpanel"
                                        aria-labelledby="nav-grid-tab">
                                        <div class="row">
                                            

                                            {{-- @foreach ($resturant->meals as $meal)
                                            <div class="col-lg-4 col-md-6 col-12">

                                                <div class="single-item-grid">
                                                    <div class="image">
                                                        <a href="{{route('ShowProduct' , $meal->id)}}"><img
                                                                src="{{asset('storage/' . $meal->image)}}" alt="#"></a>
                                                        <i class=" cross-badge lni lni-bolt"></i>
                                                        <span class="flat-badge sale">Sale</span>
                                                    </div>
                                                    <div class="content">
                                                        <a href="javascript:void(0)" class="tag">{{$meal->category->name}}</a>
                                                        <h3 class="title">
                                                            <a href="{{route('ShowProduct' , $meal->id)}}">{{$meal->name}}</a>
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
                                            @endforeach --}}
                                          
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-12">

                                                <div class="pagination left">
                                                    <ul class="pagination-list">
                                                        <li><a href="javascript:void(0)">1</a></li>
                                                        <li class="active"><a href="javascript:void(0)">2</a></li>
                                                        <li><a href="javascript:void(0)">3</a></li>
                                                        <li><a href="javascript:void(0)">4</a></li>
                                                        <li><a href="javascript:void(0)"><i
                                                                    class="lni lni-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-list" role="tabpanel"
                                        aria-labelledby="nav-list-tab">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12">

                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="item-details.html"><img
                                                                        src="assets/images/items-tab/item-2.jpg"
                                                                        alt="#"></a>
                                                                <i class=" cross-badge lni lni-bolt"></i>
                                                                <span class="flat-badge sale">Sale</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)"
                                                                    class="tag">Others</a>
                                                                <h3 class="title">
                                                                    <a href="item-details.html">Travel Kit</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>San Francisco</a></p>
                                                                <ul class="info">
                                                                    <li class="price">$580.00</li>
                                                                    <li class="like"><a
                                                                            href="javascript:void(0)"><i
                                                                                class="lni lni-heart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">

                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="item-details.html"><img
                                                                        src="assets/images/items-tab/item-3.jpg"
                                                                        alt="#"></a>
                                                                <i class=" cross-badge lni lni-bolt"></i>
                                                                <span class="flat-badge sale">Sale</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)"
                                                                    class="tag">Electronic</a>
                                                                <h3 class="title">
                                                                    <a href="item-details.html">Nikon DSLR Camera</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>Alaska, USA</a></p>
                                                                <ul class="info">
                                                                    <li class="price">$560.00</li>
                                                                    <li class="like"><a
                                                                            href="javascript:void(0)"><i
                                                                                class="lni lni-heart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">

                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="item-details.html"><img
                                                                        src="assets/images/items-tab/item-1.jpg"
                                                                        alt="#"></a>
                                                                <i class=" cross-badge lni lni-bolt"></i>
                                                                <span class="flat-badge sale">Sale</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)"
                                                                    class="tag">Mobile</a>
                                                                <h3 class="title">
                                                                    <a href="item-details.html">Apple Iphone X</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>Boston</a></p>
                                                                <ul class="info">
                                                                    <li class="price">$890.00</li>
                                                                    <li class="like"><a
                                                                            href="javascript:void(0)"><i
                                                                                class="lni lni-heart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">

                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="item-details.html"><img
                                                                        src="assets/images/items-tab/item-4.jpg"
                                                                        alt="#"></a>
                                                                <i class=" cross-badge lni lni-bolt"></i>
                                                                <span class="flat-badge sale">Sale</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)"
                                                                    class="tag">Furniture</a>
                                                                <h3 class="title">
                                                                    <a href="item-details.html">Poster Paint</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>Las Vegas</a></p>
                                                                <ul class="info">
                                                                    <li class="price">$85.00</li>
                                                                    <li class="like"><a
                                                                            href="javascript:void(0)"><i
                                                                                class="lni lni-heart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">

                                                <div class="single-item-grid">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-5 col-md-7 col-12">
                                                            <div class="image">
                                                                <a href="item-details.html"><img
                                                                        src="assets/images/items-tab/item-6.jpg"
                                                                        alt="#"></a>
                                                                <i class=" cross-badge lni lni-bolt"></i>
                                                                <span class="flat-badge rent">Rent</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-5 col-12">
                                                            <div class="content">
                                                                <a href="javascript:void(0)" class="tag">Books &
                                                                    Magazine</a>
                                                                <h3 class="title">
                                                                    <a href="item-details.html">Story Book</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>New York, USA</a></p>
                                                                <ul class="info">
                                                                    <li class="price">$120.00</li>
                                                                    <li class="like"><a
                                                                            href="javascript:void(0)"><i
                                                                                class="lni lni-heart"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">

                                                <div class="pagination left">
                                                    <ul class="pagination-list">
                                                        <li><a href="javascript:void(0)">1</a></li>
                                                        <li class="active"><a href="javascript:void(0)">2</a></li>
                                                        <li><a href="javascript:void(0)">3</a></li>
                                                        <li><a href="javascript:void(0)">4</a></li>
                                                        <li><a href="javascript:void(0)"><i
                                                                    class="lni lni-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-block comment-form">
                        <h4 class="mb-2">رأيك يهمنا</h4>
                        <form action="{{route('comment.store')}}" method="POST">
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
                                                <input class="form-check-input" type="radio" name="rate" id="flexRadioDefault1">
                                                
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
                                                <input class="form-check-input" type="radio" name="rate" id="flexRadioDefault1">
                                                
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
                                                <input class="form-check-input" type="radio" name="rate" id="flexRadioDefault1">
                                                
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
                                                <input class="form-check-input" type="radio" name="rate" id="flexRadioDefault1">
                                                
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
                                                <input class="form-check-input" type="radio" name="rate" id="flexRadioDefault1">
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
            </div>
        </div>
    </section>


   
@endsection
