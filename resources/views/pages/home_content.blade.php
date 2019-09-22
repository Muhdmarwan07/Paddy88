@extends('layout')
@section('content')

<!-- Start of slider area -->
        <section class="slider-container">
            <!-- Slider Image -->
            <div id="mainSlider" class="nivoSlider slider-image">
                <?php
                     $all_published_slider=DB::table('tbl_slider')
                                    ->where('publication_status',1)
                                     ->get();
                     foreach ($all_published_slider as $v_slider) {?>
                <img src="{{URL::to($v_slider->slider_image)}}"alt="main slider" title="#htmlcaption1"/>
                <!-- <img src="{{asset('frontend/images/slider/3.jpg')}}" alt="main slider" title="#htmlcaption2"/> -->
                <?php }?>
            </div>
            <!-- Slider Caption 1 -->
            <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                <div class="slider-progress"></div> 
                <div class="container slider-height">
                    <div class="row slider-height">
                        <div class="col-xs-offset-6 col-xs-6 slider-height">
                            <div class="slide-text">
                                <div class="middle-text">
                                    <div class="cap-dec text-black text-uppercase wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0s">
                                         <?php
                                        $all_published_slider=DB::table('tbl_slider')
                                            ->where('publication_status',1)
                                            ->get();
                                         foreach ($all_published_slider as $v_slider) {?>

                                        <h3>{{$v_slider->slider_title}}</h3>

                                        <?php }?>
                                    </div>  
                                    <!-- <div class="cap-title text-black text-uppercase wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                        <h2>FOR WOMEN - 2020</h2>
                                    </div>  --> 
                                    <!-- <div class="cap-para wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
                                        <p>saya anak malaysia </p>
                                    </div> -->
                                    <div class="cap-shop wow text-uppercase fadeInDown" data-wow-duration="2.5s" data-wow-delay="1.5s">
                                        <a href="#">Shop now</a>
                                    </div>  
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>                      
            </div>
            <!-- Slider Caption 2 -->
            <!-- <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
                <div class="slider-progress"></div> 
                <div class="container slider-height">
                    <div class="row slider-height">
                        <div class="col-xs-offset-5 col-xs-7 slider-height">
                            <div class="slide-text">
                                <div class="middle-text">
                                    <div class="cap-dec text-black text-uppercase wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0s">
                                        <h3>EXCLUSIVE COLLETIONS</h3>
                                    </div>  
                                    <div class="cap-title text-black text-uppercase wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                        <h2>OVER COATS FOR MAN</h2>
                                    </div>  
                                    <div class="cap-para wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
                                        <p>saya anak malaysia</p>
                                    </div>
                                    <div class="cap-shop wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="1.5s">
                                        <a href="#">Shop now</a>
                                    </div>  
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <!-- End of slider area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">  
            <!-- Start About us Area -->
            <div class="why-us section-padding text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="why-us-inner">
                                <div class="why-us-icon mb-20">
                                    <img src="{{asset('frontend/images/why-us/1.png')}}" alt="">
                                </div>
                                <h5 class="text-uppercase m-0 text-defualt"><strong>FREE SHIPPING</strong></h5>
                                <p class="why-us-title m-0">Free for all product</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="why-us-inner">
                                <div class="why-us-icon mb-20">
                                    <img src="{{asset('frontend/images/why-us/2.png')}}" alt="">
                                </div>
                                <h5 class="text-uppercase m-0 text-defualt"><strong>ORDER ONLINE</strong></h5>
                                <p class="why-us-title m-0">www.forge.com</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="why-us-inner">
                                <div class="why-us-icon mb-20">
                                    <img src="{{asset('frontend/images/why-us/3.png')}}" alt="">
                                </div>
                                <h5 class="text-uppercase m-0 text-defualt"><strong>MONEY BACK</strong></h5>
                                <p class="why-us-title m-0">Money back guarantee</p>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm">
                            <div class="why-us-inner m-0">
                                <div class="why-us-icon mb-20">
                                    <img src="{{asset('frontend/images/why-us/4.png')}}" alt="">
                                </div>
                                <h5 class="text-uppercase m-0 text-defualt"><strong>GIFT COUPON</strong></h5>
                                <p class="why-us-title m-0">Surprise gift coupon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About us Area -->
            <!-- Start Banner Area -->
            <div class="banner-area">
                <div class="container">
                    <div class="row rp-style">
                        <div class="col-sm-4 cp-style">
                            <div class="banner-inner">
                                <a class="test-popup-link banner-img" href="{{asset('frontend/images/banner/1-1.jpg')}}">
                                    <img src="{{asset('frontend/images/banner/1-1.jpg')}}" alt="">
                                </a>
                                <div class="banner-text banner-text-1">
                                    <a href="#" class="banner-heading text-uppercase text-right">new trend for women's</a>
                                    <h3 class="banner-title text-uppercase text-right">special offer 25% off</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 cp-style">
                            <div class="row rp-style">
                                <div class="col-sm-8 cp-style">
                                    <div class="banner-inner">
                                        <a class="test-popup-link banner-img" href="{{asset('frontend/images/banner/2.jpg')}}">
                                            <img src="{{asset('frontend/images/banner/2-1.jpg')}}" alt="">
                                        </a>
                                        <div class="banner-text banner-text-2 text-center">
                                            <a href="#" class="banner-heading text-uppercase text-right">man's</a>
                                            <h3 class="banner-title-x text-uppercase">summer</h3>
                                            <h3 class="banner-title text-uppercase text-right">collection</h3>
                                        </div>
                                    </div>                                      
                                </div>
                                <div class="col-sm-4 cp-style">
                                    <div class="banner-inner">
                                        <a class="test-popup-link banner-img" href="{{asset('frontend/images/banner/3.jpg')}}">
                                            <img src="{{asset('frontend/images/banner/3.jpg')}}" alt="">
                                        </a>
                                        <div class="banner-text banner-text-3">
                                            <a href="#" class="banner-heading text-uppercase text-right">shoes</a>
                                            <h3 class="banner-title text-uppercase text-right">35% off</h3>
                                        </div>
                                    </div>                                      
                                </div>
                            </div>
                            <div class="row rp-style mt-8">
                                <div class="col-sm-4 cp-style">
                                    <div class="banner-inner">
                                        <a class="test-popup-link banner-img" href="{{asset('frontend/images/banner/4.jpg')}}">
                                            <img src="{{asset('frontend/images/banner/4.jpg')}}" alt="">
                                        </a>
                                        <div class="banner-text banner-text-4 text-right">
                                            <a href="#" class="banner-heading text-uppercase text-right">bag's</a>
                                            <h3 class="banner-title text-uppercase text-right">promotion</h3>
                                        </div>
                                    </div>                                      
                                </div>
                                <div class="col-sm-8 cp-style">
                                    <div class="banner-inner m-0">
                                        <a class="test-popup-link banner-img" href="{{asset('frontend/images/banner/5.jpg')}}">
                                            <img src="{{asset('frontend/images/banner/5.jpg')}}" alt="">
                                        </a>
                                        <div class="banner-text banner-text-5 text-center">
                                            <a href="#" class="banner-heading text-uppercase text-right">kid's</a>
                                            <h3 class="banner-title text-uppercase text-right">collection</h3>
                                        </div>
                                    </div>                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Area -->
            <!-- Start Featured product Area -->
            <div class="featured-product-area section-padding">
                <div class="container">
                    <div class="row rp-style">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>FEATURED PRODUCTS</strong></h2>
                                <p class="text-defualt">Best Collection for you</p>
                                <img alt="" src="{{asset('frontend/images/section-border.png')}}">
                            </div>
                        </div>
                    </div>
                     
                    <div class="row rp-style">
                      
                        <div class="featured-carousel indicator-style">
                            <?php foreach ($all_published_product as $v_published_product) {?>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img alt="" src="{{asset($v_published_product->product_image)}}" style="height: 200px;">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase black-bg">new</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                    <div class="product-text pt-15">
                                        <ul class="pull-left list-inline ratings">
                                            <!-- <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li> -->
                                            <li>{{$v_published_product->manufacture_name}}</li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">RM {{$v_published_product->product_price}}</li>
                                            <!-- <li class="text-right p-price">$180</li> -->
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="Eletria ostma" href="{{URL::to('/view_product/'.$v_published_product->product_id)}}">{{$v_published_product->product_name}}</a>
                                        </h6>
                                    </div>  
                                </div>
                            </div>
                          <?php } ?> 
                        </div>  
                    </div>

                </div>
            </div>
            <!-- Start Featured product Area -->
            <!-- Start Offer  Area -->
            <!-- <div class="offer-area">
                <div class="offer-banner banner-style-1 pull-left">
                    <a href="#">
                        <img src="{{asset('frontend/images/offer/1.jpg')}}" alt="">
                    </a>
                    <div class="offer-banner-text text-uppercase text-white">
                        <h2>coats</h2>
                        <h3>FOR <span class="text-defualt"> MEN</span></h3>
                    </div>
                </div>
                <div class="offer-inner top-right-sale ">
                    <h3>BIG SALE </h3>
                    <h1>OFFER</h1>
                    <h2>35% <span>off</span></h2>
                    <span class="bottom-border-style"></span>
                </div>
                <div class="offer-banner banner-style-2 pull-right">
                    <a href="#">
                        <img alt="" src="{{asset('frontend/images/offer/2.jpg')}}">
                    </a>
                    <div class="offer-banner-text-2 text-uppercase">
                        <h2 class="text-defualt">WINTER</h2>
                        <h3 class="medium text-white">COLLECTION</h3>
                        <h3 class="blod text-white">FOR <span class="text-defualt">WOMEN</span></h3>
                    </div>
                </div>
            </div> -->
            <!-- End Offer Area -->
            <!-- Start Upcomming Area -->
            <!-- <div class="up-comming-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="single-up-comming ash-bg">
                                <div class="product-cuntdown pull-left">
                                    <div class="timer p-20">
                                        <div data-countdown="2017/06/01"></div>
                                    </div>                                    
                                </div> 
                                <div class="product-inner pull-right">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/cuntdown/1.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                </div>
                                <div class="clear"></div>
                                <div class="product-text white-bg pt-15">
                                    <ul class="pricing list-inline pull-right">
                                        <li class="text-defualt c-price">$130</li>
                                        <li class="text-right p-price">$150</li>
                                    </ul>
                                    <h6 class="product-name">
                                        <a href="#" title="Eletria ostma">Tletria postma</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-up-comming ash-bg">
                                <div class="product-cuntdown pull-left">
                                    <div class="timer p-20">
                                        <div data-countdown="2018/06/01"></div>
                                    </div>                                    
                                </div> 
                                <div class="product-inner pull-right">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/cuntdown/2.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                </div>
                                <div class="clear"></div>
                                <div class="product-text white-bg pt-15">
                                    <ul class="pricing list-inline pull-right">
                                        <li class="text-defualt c-price">$150</li>
                                        <li class="text-right p-price">$180</li>
                                    </ul>
                                    <h6 class="product-name">
                                        <a href="#" title="Restalomen Santiloma">Restalomen Santiloma</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm">
                            <div class="single-up-comming ash-bg m-0">
                                <div class="product-cuntdown pull-left">
                                    <div class="timer p-20">
                                        <div data-countdown="2018/06/01"></div>
                                    </div>                                    
                                </div> 
                                <div class="product-inner pull-right">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/cuntdown/3.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>   
                                </div>
                                <div class="clear"></div>
                                <div class="product-text white-bg pt-15">
                                    <ul class="pricing list-inline pull-right">
                                        <li class="text-defualt c-price">$180</li>
                                        <li class="text-right p-price">$200</li>
                                    </ul>
                                    <h6 class="product-name">
                                        <a href="#" title="Eletriaostma Santiloma">Eletriaostma Santiloma</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Upcomming Area -->
            <!-- Start New Arrival Area  -->
            <div class="new-arrival-area">
                <div class="container">
                    <div class="row rp-style-2">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>FRESH NEW ARRIVAL</strong></h2>
                                <p class="text-defualt">ALL NEW ITEAMS</p>
                                <img alt="" src="{{asset('frontend/images/section-border.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row rp-style-2">
                        <div class="featured-carousel indicator-style">
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/1.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Teletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/2.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/3.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase black-bg">new</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Wetria postma">Wetria postma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/4.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/5.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Kelletria ostma">Kelletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/6.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase black-bg">new</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/7.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Celletria ostma">Celletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/8.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/9.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Celletria ostma">Celletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/10.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/1.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Teletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/2.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/3.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase black-bg">new</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Wetria postma">Wetria postma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/4.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase orang-bg">-20%</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/5.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$170</li>
                                            <li class="text-right p-price">$190</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Kelletria ostma">Kelletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="product-inner mt-35">
                                    <a href="#">
                                        <div class="product-img b-img">
                                            <img src="{{asset('frontend/images/product/arrival/6.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    <span class="product-tag text-uppercase black-bg">new</span>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                    <div class="product-text">
                                        <ul class="pull-left list-inline ratings">
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                            <li><i class="rated fa fa-star"></i></li>
                                        </ul>
                                        <ul class="pricing list-inline pull-right">
                                            <li class="text-right c-price">$160</li>
                                            <li class="text-right p-price">$180</li>
                                        </ul>
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="#" title="Eletria ostma">Eletria ostma</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of New Arrival Area  -->



            <!-- Start Offer Banner Area -->
            <!-- <div class="offer-banner-area section-padding clearfix">
                <figure class="single-offer-banner b-img">
                    <img src="{{asset('frontend/images/offer-banner/1.jpg')}}" alt="">
                    <figcaption>
                        <div class="figcation-text left-top text-uppercase text-left text-white">
                            <h1>new</h1>
                            <h1>Arrival</h1>
                            <h1>20% off</h1>
                        </div>
                        <div class="figcation-text text-uppercase right-bottom text-white">
                            <h1>BAGS</h1>
                        </div>
                    </figcaption>
                </figure>
                <figure class="single-offer-banner b-img">
                    <img src="{{asset('frontend/images/offer-banner/2.jpg')}}" alt="">
                    <figcaption>
                        <div class="figcation-text left-top text-uppercase text-left text-white">
                            <h1>WATCHES</h1>
                        </div>
                        <div class="figcation-text text-uppercase right-bottom text-white text-right">
                            <h1>EXCLUSIVE</h1>
                            <h1>COLLECTIONS</h1>
                        </div>
                    </figcaption>
                </figure>
                <figure class="single-offer-banner b-img m-0">
                    <img src="{{asset('frontend/images/offer-banner/3.jpg')}}" alt="">
                    <figcaption>
                        <div class="figcation-text right-top text-uppercase text-left text-white text-right">
                            <h1>BIG OFFER</h1>
                            <h1>35% OFF</h1>
                        </div>
                        <div class="figcation-text left-bottom text-uppercase text-white">
                            <h1>SHOES</h1>
                        </div>
                    </figcaption>
                </figure>
            </div> -->   
            <!-- End Offer Banner Area -->


            <!-- Start Best Seller Iteams Area -->
            <!-- <div class="best-saller-iteam-area pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 cp-style-2">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>BEST SELLER</strong></h2>
                                <p class="text-defualt">TOP COLLECTION</p>
                                <img src="{{asset('frontend/images/section-border.png')}}" alt="">
                            </div>
                            <div class="best-seller-carousel indicator-style-two">
                                <div class="product-container">
                                    <div class="best-product-inner mb-35 row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img b-img">
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/best-seller/2.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-product-inner row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/best-seller/3.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-container">
                                    <div class="best-product-inner mb-35 row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/best-seller/4.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-product-inner row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/best-seller/1.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-container">
                                    <div class="best-product-inner mb-35 row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/best-seller/2.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-product-inner row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/best-seller/1.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 cp-style-2">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>TRENDY ITEAMS</strong></h2>
                                <p class="text-defualt">NEW TREND</p>
                                <img src="{{asset('frontend/images/section-border.png')}}" alt="">
                            </div>
                            <div class="best-seller-carousel indicator-style">
                                <div class="product-container">
                                    <div class="best-product-inner mb-35 row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/best-seller/4.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-product-inner row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/best-seller/1.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-container">
                                    <div class="best-product-inner mb-35 row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/best-seller/2.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-product-inner row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/best-seller/3.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-container">
                                    <div class="best-product-inner mb-35 row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/best-seller/4.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-product-inner row rp-style-3 clearfix">
                                        <div class="col-xs-5 cp-style-3">
                                            <div class="best-product-img b-img">
                                                <a href="#">
                                                    <img src="{{asset('frontend/images/best-seller/1.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7 cp-style-3">
                                            <div class="best-product-text">
                                                <h6 class="product-name m-0 p-0">
                                                    <a href="#">Palletria ostma</a>
                                                </h6>
                                                <ul class="list-inline ratings">
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                    <li><i class="rated fa fa-star"></i></li>
                                                </ul>
                                                <ul class="pricing">
                                                    <li class="c-price">$180</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Of Best Seller Iteams Area -->


            <!-- Start Subscribe Area -->
            <!-- <div class="subscribe-area text-center section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-white">
                                <h1>SUBSCRIBE OUR MONTHLY NEWSLETTER</h1>
                                <p class="mb-40">SELAMAT MENYAMBUT HARI KEMERDEKAAN</p>   
                            </div>
                            <form class="subscribe-box" action="#">
                                <div class="subscribe-box">
                                    <input type="email" required="" placeholder="Enter your Email here...">
                                    <button type="submit" id="search-letter-btn" class="btn-default btn-search">SUBSCRIBE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Of Subscribe Area -->

@endsection
