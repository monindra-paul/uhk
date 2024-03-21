@extends('frontend.layout.app')

@section('mainsection')


<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt="hiredots"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">About</h2>
        <ul class="hiredots-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>About</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="why-choose-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="why-choose-two__image">
                    <img src="assets/images/resources/about-circle-1.png" alt="">
                    <img src="assets/images/resources/about-circle-2.png" class="why-choose-two__image__two" alt="">
                    <img src="assets/images/shapes/about-circle-shape.png" class="why-choose-two__image__shape" alt="">
                    <div class="why-choose-two__circle">
                        <span class="video-popups">
                            <i class="icon-talent-search"></i>
                        </span>
                        <div class="curved-circle">
                            <!-- curved-circle start-->
                            <div class="curved-circle--item" data-circle-text-options='{
                        "radius": 92,
                        "forceWidth": true,
                        "forceHeight": true
                    }'>
                                new human resources theme
                            </div>
                        </div><!-- curved-circle end-->
                    </div><!-- /.video-one__btn -->
                </div><!-- /.why-choose-two__image -->
            </div><!-- /.col-lg-6 -->
            <div class="col-xl-6">
                <div class="why-choose-two__content">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline">about our agency</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">Reliable & Cost Efficiant <br> Recruitment Agency</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <p class="why-choose-two__text">Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod
                        tempor incididunt labore dolore magna aliquaenim ad minim. Sed risus augue, commodo ornare felis
                        non, eleifend molestie metus pharetra eleifend.
                    </p>
                    <!-- /.why-choose-two__text -->
                    <ul class="why-choose-two__feature   ">
                        <li><i class="fas fa-check-circle"></i>Understand Your Needs</li>
                        <li><i class="fas fa-check-circle"></i>Find the Perfect Candidate</li>
                    </ul>
                    <div class="why-choose-two__progress">
                        <h4 class="why-choose-two__progress__title">Recruitments</h4>
                        <div class="why-choose-two__progress__bar">
                            <div class="why-choose-two__progress__inner count-bar" data-percent="77%">
                                <div class="why-choose-two__progress__number count-text">77%</div>
                            </div>
                        </div>
                    </div><!-- /.skills-item -->
                    <a href="services.html" class="hiredots-btn"><span>Discover More</span></a>
                </div><!-- /.why-choose-two__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.why-choose-two -->
<div class="testimonials-one background-gray">
    <div class="testimonials-one__shape">
        <img src="assets/images/shapes/testimonail-share.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="testimonials-one__sec-title">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline">our testimonials</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">What They’re <br> Talking About?</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <p class="testimonials-one__text">
                        Quisque commodo, magna simply free text available nec accu man euismod tellus mi ornare enim.
                    </p>
                    <div class="testimonials-one__dots"></div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="hiredots-stretch-element-inside-column">
                    <div class="testimonials-one__carousel hiredots-owl__carousel hiredots-owl__carousel--with-shadow hiredots-owl__carousel--basic-nav owl-carousel" data-owl-options='{
                    "items": 1,
                    "margin": 30,
                    "loop": true,
                    "smartSpeed": 700,
                    "nav": false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "dots": true,
                    "dotsContainer":".testimonials-one__dots",
                    "autoplay": false,
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 1.93
                        }
                    }
                }'>
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="testimonials-card__inner">
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="assets/images/resources/testi-1-1.jpg" alt="Kevin martin">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__top__left">
                                            <div class="testimonials-card__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-card__rating -->
                                            <div class="testimonials-card__content">
                                                Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.
                                            </div><!-- /.testimonials-card__content -->
                                            <div class="testimonials-card__author">
                                                <div class="testimonials-card__icon">
                                                    <i class="icon-quote"></i>
                                                </div>
                                                <div class="testimonials-card__autor__info">
                                                    <h3 class="testimonials-card__name">
                                                        Kevin martin
                                                    </h3><!-- /.testimonials-card__name -->
                                                    <p class="testimonials-card__designation">Market Manager</p>
                                                    <!-- /.testimonials-card__designation -->
                                                </div>
                                            </div>
                                        </div><!-- /.testimonials-card__top__left -->
                                    </div><!-- /.testimonials-card__top -->
                                </div><!-- /.testimonials-card__inner -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="testimonials-card__inner">
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="assets/images/resources/testi-1-2.jpg" alt="Sarah albert">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__top__left">
                                            <div class="testimonials-card__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-card__rating -->
                                            <div class="testimonials-card__content">
                                                Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.
                                            </div><!-- /.testimonials-card__content -->
                                            <div class="testimonials-card__author">
                                                <div class="testimonials-card__icon">
                                                    <i class="icon-quote"></i>
                                                </div>
                                                <div class="testimonials-card__autor__info">
                                                    <h3 class="testimonials-card__name">
                                                        Sarah albert
                                                    </h3><!-- /.testimonials-card__name -->
                                                    <p class="testimonials-card__designation">Co Founder</p>
                                                    <!-- /.testimonials-card__designation -->
                                                </div>
                                            </div>
                                        </div><!-- /.testimonials-card__top__left -->
                                    </div><!-- /.testimonials-card__top -->
                                </div><!-- /.testimonials-card__inner -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="testimonials-card__inner">
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="assets/images/resources/testi-1-3.jpg" alt="Kevin martin">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__top__left">
                                            <div class="testimonials-card__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-card__rating -->
                                            <div class="testimonials-card__content">
                                                Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.
                                            </div><!-- /.testimonials-card__content -->
                                            <div class="testimonials-card__author">
                                                <div class="testimonials-card__icon">
                                                    <i class="icon-quote"></i>
                                                </div>
                                                <div class="testimonials-card__autor__info">
                                                    <h3 class="testimonials-card__name">
                                                        Kevin martin
                                                    </h3><!-- /.testimonials-card__name -->
                                                    <p class="testimonials-card__designation">Market Manager</p>
                                                    <!-- /.testimonials-card__designation -->
                                                </div>
                                            </div>
                                        </div><!-- /.testimonials-card__top__left -->
                                    </div><!-- /.testimonials-card__top -->
                                </div><!-- /.testimonials-card__inner -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="testimonials-card__inner">
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="assets/images/resources/testi-1-4.jpg" alt="Sarah albert">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__top__left">
                                            <div class="testimonials-card__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-card__rating -->
                                            <div class="testimonials-card__content">
                                                Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.
                                            </div><!-- /.testimonials-card__content -->
                                            <div class="testimonials-card__author">
                                                <div class="testimonials-card__icon">
                                                    <i class="icon-quote"></i>
                                                </div>
                                                <div class="testimonials-card__autor__info">
                                                    <h3 class="testimonials-card__name">
                                                        Sarah albert
                                                    </h3><!-- /.testimonials-card__name -->
                                                    <p class="testimonials-card__designation">Co Founder</p>
                                                    <!-- /.testimonials-card__designation -->
                                                </div>
                                            </div>
                                        </div><!-- /.testimonials-card__top__left -->
                                    </div><!-- /.testimonials-card__top -->
                                </div><!-- /.testimonials-card__inner -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="testimonials-card__inner">
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="assets/images/resources/testi-1-5.jpg" alt="Kevin martin">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__top__left">
                                            <div class="testimonials-card__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-card__rating -->
                                            <div class="testimonials-card__content">
                                                Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.
                                            </div><!-- /.testimonials-card__content -->
                                            <div class="testimonials-card__author">
                                                <div class="testimonials-card__icon">
                                                    <i class="icon-quote"></i>
                                                </div>
                                                <div class="testimonials-card__autor__info">
                                                    <h3 class="testimonials-card__name">
                                                        Kevin martin
                                                    </h3><!-- /.testimonials-card__name -->
                                                    <p class="testimonials-card__designation">Market Manager</p>
                                                    <!-- /.testimonials-card__designation -->
                                                </div>
                                            </div>
                                        </div><!-- /.testimonials-card__top__left -->
                                    </div><!-- /.testimonials-card__top -->
                                </div><!-- /.testimonials-card__inner -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                <div class="testimonials-card__inner">
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="assets/images/resources/testi-1-6.jpg" alt="Sarah albert">
                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__top__left">
                                            <div class="testimonials-card__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><!-- /.testimonials-card__rating -->
                                            <div class="testimonials-card__content">
                                                Lorem ipsum is simply free text dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.
                                            </div><!-- /.testimonials-card__content -->
                                            <div class="testimonials-card__author">
                                                <div class="testimonials-card__icon">
                                                    <i class="icon-quote"></i>
                                                </div>
                                                <div class="testimonials-card__autor__info">
                                                    <h3 class="testimonials-card__name">
                                                        Sarah albert
                                                    </h3><!-- /.testimonials-card__name -->
                                                    <p class="testimonials-card__designation">Co Founder</p>
                                                    <!-- /.testimonials-card__designation -->
                                                </div>
                                            </div>
                                        </div><!-- /.testimonials-card__top__left -->
                                    </div><!-- /.testimonials-card__top -->
                                </div><!-- /.testimonials-card__inner -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->

                    </div><!-- /.testimonials-one__carousel -->
                </div>
            </div>
        </div>
    </div>
</div>


@endsection