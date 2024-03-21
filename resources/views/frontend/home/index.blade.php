@extends('frontend.layout.app')

@section('mainsection')
    <!-- main-slider-start -->
    <section class="main-slider-one">
        <div class="main-slider-one__carousel hiredots-owl__carousel owl-carousel"
            data-owl-options='{
"loop": true,
"animateOut": "slideOutDown",
"animateIn": "fadeIn",
"items": 1,
"autoplay": true,
"autoplayTimeout": 6000,
"smartSpeed": 1000,
"nav": true,
"navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
"dots": true,
"dotsData": true,
"margin": 0
}'>
            <div class="item" data-dot="<button>1/</button>">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg" style="background-image: url(assets/images/uhk/slider-1.jpeg);">
                    </div>
                    <div class="main-slider-one__overlay"></div>
                    <div class="main-slider-one__shape"
                        style="background-image: url(assets/images/shapes/slider-1-shape-1.png);"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-slider-one__content">
                                    <div class="main-slider-one__image">
                                        <img src="{{asset('assets/images/shapes/slider-1-shape-2.png')}}" width="20px"
                                            alt="hiredots">
                                        </div>
                                    <!-- slider-layer -->
                                    <h2 class="main-slider-one__title">Empowering <br>Your Team, <br>Elevating Your Success
                                    </h2>
                                    <!-- slider-title -->
                                    <div class="main-slider-one__btn">
                                        <a href="{{url('/services')}}" class="hiredots-btn"><span>Discover
                                                More</span></a><!-- slider-btn -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" data-dot="<button>2/</button>">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg "
                        style="background-image: url(assets/images/uhk/slider-2.jpeg);"></div>
                    <div class="main-slider-one__overlay"></div>
                    <div class="main-slider-one__shape"
                        style="background-image: url(assets/images/shapes/slider-1-shape-1.png);"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-slider-one__content">
                                    <div class="main-slider-one__image"><img src="assets/images/shapes/slider-1-shape-2.png"
                                            alt="hiredots"></div>
                                    <!-- slider-layer -->
                                    <h2 class="main-slider-one__title">Unlocking Potential, Powering Progress</h2>
                                    <!-- slider-title -->
                                    <div class="main-slider-one__btn">
                                        <a href="{{url('/services')}}" class="hiredots-btn"><span>Discover
                                                More</span></a><!-- slider-btn -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" data-dot="<button>3</button>">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg"
                        style="background-image: url(assets/images/uhk/slider-3.1.webp);"></div>
                    <div class="main-slider-one__overlay"></div>
                    <div class="main-slider-one__shape"
                        style="background-image: url(assets/images/shapes/slider-1-shape-1.png);"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-slider-one__content">
                                    <div class="main-slider-one__image"><img src="assets/images/shapes/slider-1-shape-2.png"
                                            alt="hiredots"></div>
                                    <!-- slider-layer -->
                                    <h2 class="main-slider-one__title">Your Partner <br>in Personnel, Precision,<br> and Performance</h2>
                                    <!-- slider-title -->
                                    <div class="main-slider-one__btn">
                                        <a href="{{url('/services')}}" class="hiredots-btn"><span>Discover
                                                More</span></a><!-- slider-btn -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main-slider-end -->
    <!-- Feature Start -->
    {{-- <section class="feature-one">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-one__item text-center">
                        <div class="feature-one__item__img">
                            <img src="assets/images/resources/feature-1-1.jpg" alt="hiredots">
                        </div>
                        <div class="feature-one__item__content">
                            <div class="feature-one__item__ball"></div>
                            <div class="feature-one__item__icon"><span class="icon-solution"></span></div>
                            <h3 class="feature-one__item__title">Recruitement <br>Solutions</h3>
                            <p class="feature-one__item__text">Lorem ipsum dolor sit amet sed consectur adipiscing
                                elit.</p>
                            <a href="about.html" class="hiredots-btn"><span>Find Your Solution</span></a>
                        </div>
                    </div><!-- feature-item -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-one__item text-center">
                        <div class="feature-one__item__img">
                            <img src="assets/images/resources/feature-1-2.jpg" alt="hiredots">
                        </div>
                        <div class="feature-one__item__content">
                            <div class="feature-one__item__ball"></div>
                            <div class="feature-one__item__icon"><span class="icon-creative-idea"></span></div>
                            <h3 class="feature-one__item__title">Improved <br>Resources</h3>
                            <p class="feature-one__item__text">Lorem ipsum dolor sit amet sed consectur adipiscing
                                elit.</p>
                            <a href="about.html" class="hiredots-btn"><span>Find Your Solution</span></a>
                        </div>
                    </div><!-- feature-item -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-one__item text-center">
                        <div class="feature-one__item__img">
                            <img src="assets/images/resources/feature-1-3.jpg" alt="hiredots">
                        </div>
                        <div class="feature-one__item__content">
                            <div class="feature-one__item__ball"></div>
                            <div class="feature-one__item__icon"><span class="icon-mission"></span></div>
                            <h3 class="feature-one__item__title">Leadership <br>Training</h3>
                            <p class="feature-one__item__text">Lorem ipsum dolor sit amet sed consectur adipiscing
                                elit.</p>
                            <a href="about.html" class="hiredots-btn"><span>Find Your Solution</span></a>
                        </div>
                    </div><!-- feature-item -->
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Feature End -->
    <section class="about-one mt-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__image wow fadeInLeft" data-wow-delay="300ms">
                        <div class="about-one__image-one">
                            <img src="assets/images/resources/about-1-1.jpg" alt="hiredots">
                            <img class="about-one__image-one__shape" src="assets/images/resources/about-1-shape-1.png"
                                alt="hiredots">
                        </div>
                        <div class="about-one__image-icon"><img src="assets/images/resources/about-1-bulb.png"
                                alt="hiredots"></div>
                    </div><!-- /.why-choose-two__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="about-one__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline">about our agency</h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title">Reliable & Cost Efficiant
                                Manpower Agency</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-one__content__text">
                            Welcome to Udvah Solutions, your premier partner in manpower solutions. With a commitment to excellence, we specialize in sourcing skilled professionals across industries, ensuring optimal staffing solutions for your business needs. Trust us for reliable, efficient, and tailored workforce solutions that drive success. Your workforce, our expertise."
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="about-one__content__list">
                                    <li><span class="fa fa-check-circle"></span>Understand Your Needs</li>
                                    <li><span class="fa fa-check-circle"></span>Find the Perfect Candidate</li>
                                </ul>
                                <div class="about-one__content__quote">
                                    Pathway for both employer and employee. So they highly efficient manufactured
                                    products.
                                </div>
                                <div class="about-one__content__author">
                                    <div class="about-one__content__author__thumb">
                                        <img src="assets/images/resources/about-1-author.jpg" alt="hiredots">
                                    </div>
                                    <div class="about-one__content__author__meta"><img
                                            src="assets/images/resources/about-sign.png" alt="hiredots">Founder
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-one__award">
                                    <div class="about-one__award__content">
                                        <div class="about-one__award__icon"><i class="icon-trophy"></i></div>
                                        <div class="about-one__award__count count-box">+<span class="count-text"
                                                data-stop="23" data-speed="1500"></span></div>
                                    </div>
                                    <p class="about-one__award__text">Wonderful awards</p>
                                </div>
                                <a href="{{url('/about-us')}}" class="hiredots-btn hiredots-btn--base"><span>Discover
                                        more</span></a>
                            </div>
                        </div>
                    </div><!-- /.why-choose-two__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->
    <section class="funfact-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one__item">
                        <div class="funfact-one__icon"><span class="icon-business-idea"></span></div>
                        <!-- /.funfact-one__icon -->
                        <div class="funfact-one__count count-box"><span class="count-text" data-stop="1350"
                                data-speed="1500"></span></div><!-- /.funfact-one__count -->
                        <p class="funfact-one__text">Employer Solutions</p><!-- /.funfact-one__text -->
                    </div><!-- /.funfact-one__item -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one__item">
                        <div class="funfact-one__icon"><span class="icon-recruit"></span></div>
                        <!-- /.funfact-one__icon -->
                        <div class="funfact-one__count count-box"><span class="count-text" data-stop="1500"
                                data-speed="1500"></span></div><!-- /.funfact-one__count -->
                        <p class="funfact-one__text">People Job Seekers</p><!-- /.funfact-one__text -->
                    </div><!-- /.funfact-one__item -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one__item">
                        <div class="funfact-one__icon"><span class="icon-success"></span></div>
                        <!-- /.funfact-one__icon -->
                        <div class="funfact-one__count count-box"><span class="count-text" data-stop="90"
                                data-speed="1500"></span>%</div><!-- /.funfact-one__count -->
                        <p class="funfact-one__text">Success Rates</p><!-- /.funfact-one__text -->
                    </div><!-- /.funfact-one__item -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one__item">
                        <div class="funfact-one__icon"><span class="icon-customer-review"></span></div>
                        <!-- /.funfact-one__icon -->
                        <div class="funfact-one__count count-box"><span class="count-text" data-stop="350"
                                data-speed="1500"></span></div><!-- /.funfact-one__count -->
                        <p class="funfact-one__text">Happy Customers</p><!-- /.funfact-one__text -->
                    </div><!-- /.funfact-one__item -->
                </div>
            </div><!-- /.list-unstyled funfact-one__list -->
        </div><!-- /.container -->
    </section><!-- /.funfact-one -->
    <section class="service-one" style="background-image: url(assets/images/shapes/service-bg-1.jpg);">
        <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline">Our Service area</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title">Outsourced Hiring & Job <br>Rules Services</h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row gutter-y-30">
                <div class="col-md-6 col-lg-4">
                    <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="service-one-card__image">
                            <img src="assets/images/uhk/hs-1.webp" alt="HR Consulting">
                        </div><!-- /.service-one-card__image -->
                        <div class="service-one-card__content">
                            <div class="service-one-card__icon">
                                <i class="icon-consulting"></i>
                                <a href="services.html" class="service-one-card__cat">Services</a>
                            </div><!-- /.service-one-card__price -->
                            <h3 class="service-one-card__title">
                                <a href="{{url('/services')}}">Complete Facility Management
                                </a>
                            </h3><!-- /.service-one-card__title -->

                            <p class="service-one-card__text">Complete Facility Management involves overseeing all aspects of physical infrastructure, from maintenance and security to cleaning and space management.</p>
                            <!-- /.service-one-card__text -->
                        </div><!-- /.service-one-card__content -->
                        <a href="{{url('/services')}}" class="service-one-card__link">
                            Read More
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.service-one-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="1ms">
                        <div class="service-one-card__image">
                            <img src="assets/images/uhk/hs-2.webp" alt="Tech Resources">
                        </div><!-- /.service-one-card__image -->
                        <div class="service-one-card__content">
                            <div class="service-one-card__icon">
                                <i class="icon-controller"></i>
                                <a href="services.html" class="service-one-card__cat">Services</a>
                            </div><!-- /.service-one-card__price -->
                            <h3 class="service-one-card__title">
                                <a href="{{url('/services')}}">Housekeeping Services
                                </a>
                            </h3><!-- /.service-one-card__title -->

                            <p class="service-one-card__text">Housekeeping services ensure cleanliness in various environments. Housekeeping involves cleaning and organizing interiors for hygiene and comfort.

                            </p>
                            <!-- /.service-one-card__text -->
                        </div><!-- /.service-one-card__content -->
                        <a href="{{url('/services')}}" class="service-one-card__link">
                            Read More
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.service-one-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="1ms">
                        <div class="service-one-card__image">
                            <img src="assets/images/uhk/hs-3.webp" alt="Staffing Solution">
                        </div><!-- /.service-one-card__image -->
                        <div class="service-one-card__content">
                            <div class="service-one-card__icon">
                                <i class="icon-policy"></i>
                                <a href="services.html" class="service-one-card__cat">Services</a>
                            </div><!-- /.service-one-card__price -->
                            <h3 class="service-one-card__title">
                                <a href="{{url('/services')}}">Complete Manpower Supply</a>
                            </h3><!-- /.service-one-card__title -->

                            <p class="service-one-card__text">Complete manpower supply offers both technical and non-technical staffing solutions. Technical roles include engineers and IT professionals, while non-technical roles encompass administrative and customer service positions.</p>
                            <!-- /.service-one-card__text -->
                        </div><!-- /.service-one-card__content -->
                        <a href="{{url('/services')}}" class="service-one-card__link">
                            Read More
                            <i class="icon-right-arrow"></i>
                        </a><!-- /.blog-card__link -->
                    </div><!-- /.service-one-card -->
                </div><!-- /.col-md-6 col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-one -->
    <!-- Call To Action Start -->
    <section class="cta-one" style="background-image: url(assets/images/backgrounds/video-bg-1-1.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-8 wow fadeInLeft" data-wow-delay="200ms">
                    <h2 class="cta-one__title">Manpower Trusted Staffing & Recruitment Agency</h2>
                </div>
                <div class="col-md-4 col-xl-4 text-end wow fadeInRight" data-wow-delay="300ms">
                    <a href="about.html" class="hiredots-btn hiredots-btn--base"><span>Discover
                            more</span></a><!-- /.btn -->
                </div>
            </div>
            <div class="cta-one__text wow fadeInUp" data-wow-delay="400ms">
                <p>We’re Solving Recruitment Problems Using Technology</p>
            </div>
            <div class="row">
                <div class="col-lg-2 col-xl-4 wow fadeInUp">
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
                <div class="col-lg-10 col-xl-8 wow fadeInUp">
                    <div class="cta-one__content">
                        <h3 class="cta-one__content__title">Hiredots Working Advantages</h3>
                        <div class="cta-one__content__list">
                            <div class="cta-one__content__list__icon"><i class="icon-recruitment"></i></div>
                            <h3 class="cta-one__content__list__title">Sourcing Best <br>Resource</h3>
                            <p class="cta-one__content__list__info">Sed non odio non elit porttit sit tincidunt.<br>
                                Donec fermentum, elit sit amet</p>
                        </div>
                        <div class="cta-one__content__list cta-one__content__list--bg">
                            <div class="cta-one__content__list__icon"><i class="icon-background-check"></i></div>
                            <h3 class="cta-one__content__list__title">Save Your <br>Time &amp; Money</h3>
                            <p class="cta-one__content__list__info">Sed non odio non elit porttit sit tincidunt.<br>
                                Donec fermentum, elit sit amet</p>
                        </div>
                        <div class="cta-one__content__list">
                            <div class="cta-one__content__list__icon"><i class="icon-save-time"></i></div>
                            <h3 class="cta-one__content__list__title">Partners in <br>Team Building</h3>
                            <p class="cta-one__content__list__info">Sed non odio non elit porttit sit tincidunt.<br>
                                Donec fermentum, elit sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action End -->
    <div class="client-carousel ">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <h3 class="client-carousel__title">Trusted and funded by more<br> then 800 companies</h3>
                </div>
                <div class="col-xl-9">
                    <div class="client-carousel__one hiredots-owl__carousel owl-theme owl-carousel"
                        data-owl-options='{
            "items": 5,
            "margin": 65,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1,
                    "margin": 0
                },
                "360":{
                    "items":2,
                    "margin": 30
                },
                "575":{
                    "items":3,
                    "margin": 30
                },
                "768":{
                    "items":3,
                    "margin": 40
                },
                "992":{
                    "items": 4,
                    "margin": 40
                },
                "1200":{
                    "items": 5
                }
            }
            }'>
                        <div class="client-carousel__one__item">
                            <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
                        </div><!-- /.owl-slide-item-->
                        <div class="client-carousel__one__item">
                            <img src="assets/images/resources/brand-1-1.png" alt="hiredots">
                        </div><!-- /.owl-slide-item-->
                    </div><!-- /.thm-owl__slider -->
                </div>
            </div>
            <div class="client-carousel__border"></div>
        </div><!-- /.container -->
    </div><!-- /.client-carousel -->
    <div class="project-one">
        <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline">Our projects</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title">Recent Closed Projects</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
        </div>
        <div class="project-one__carousel hiredots-owl__carousel hiredots-owl__carousel--with-shadow hiredots-owl__carousel--basic-nav owl-carousel owl-theme"
            data-owl-options='{
"items": 1,
"margin": 30,
"loop": false,
"smartSpeed": 700,
"nav": false,
"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
"dots": false,
"autoplay": false,
"responsive": {
    "0": {
        "items": 1
    },
    "576": {
        "items": 2
    },
    "992": {
        "items": 3
    },
    "1300": {
        "items": 3.5
    },
    "1600": {
        "items": 4.83
    }
}
}'>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-1.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-2.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-3.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-4.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-5.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                    <div class="project-one__img">
                        <img src="assets/images/project/project-1-6.jpg" alt="Staffing Solution">
                    </div>
                    <div class="project-one__content">
                        <span class="project-one__tagline">Resources</span>
                        <h3 class="project-one__title"><a href="project-details.html">Staffing Solution</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Start -->
    {{-- <section class="cta-two" style="background-image: url(assets/images/resources/cta-2-2.png);">
        <div class="cta-two__shape-one"><img src="assets/images/shapes/cta-2-shape-1.png" alt="hiredots"></div>
        <div class="cta-two__shape-two"><img src="assets/images/shapes/cta-2-shape-2.png" alt="hiredots"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 wow fadeInLeft" data-wow-delay="200ms">
                    <div class="cta-two__content">
                        <div class="cta-two__sub-title"><img src="assets/images/resources/cta-2-sub-title.png"
                                alt="hiredots"></div>
                        <h2 class="cta-two__title">Hire Your Next Candidate on Hiredots</h2>
                        <a href="about.html" class="hiredots-btn"><span>Discover more</span></a><!-- /.btn -->
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInRight" data-wow-delay="300ms">
                    <div class="cta-two__image">
                        <img src="assets/images/shapes/cta-2-1.png" alt="hiredots">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Call To Action End -->
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

                            <h3 class="sec-title__title">What They’re <br> Talking About?</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="testimonials-one__text">
                            Quisque commodo, magna simply free text available nec accu man euismod tellus mi ornare
                            enim.
                        </p>
                        <div class="testimonials-one__dots"></div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="hiredots-stretch-element-inside-column">
                        <div class="testimonials-one__carousel hiredots-owl__carousel hiredots-owl__carousel--with-shadow hiredots-owl__carousel--basic-nav owl-carousel"
                            data-owl-options='{
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
                                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='000ms'>
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
                                                    Lorem ipsum is simply free text dolor sit amet, consectetur
                                                    adipisicing elit, sed do incididunt ut labore et dolore magna
                                                    aliqua.
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
                                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='100ms'>
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
                                                    Lorem ipsum is simply free text dolor sit amet, consectetur
                                                    adipisicing elit, sed do incididunt ut labore et dolore magna
                                                    aliqua.
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
                                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='000ms'>
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
                                                    Lorem ipsum is simply free text dolor sit amet, consectetur
                                                    adipisicing elit, sed do incididunt ut labore et dolore magna
                                                    aliqua.
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
                                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='100ms'>
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
                                                    Lorem ipsum is simply free text dolor sit amet, consectetur
                                                    adipisicing elit, sed do incididunt ut labore et dolore magna
                                                    aliqua.
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
                                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='000ms'>
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
                                                    Lorem ipsum is simply free text dolor sit amet, consectetur
                                                    adipisicing elit, sed do incididunt ut labore et dolore magna
                                                    aliqua.
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
                                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='100ms'>
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
                                                    Lorem ipsum is simply free text dolor sit amet, consectetur
                                                    adipisicing elit, sed do incididunt ut labore et dolore magna
                                                    aliqua.
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
    {{-- <section class="blog-one">
        <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline">News Updates</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title">Latest Articles & <br>News from the Blogs</h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="blog-one__carousel hiredots-owl__carousel hiredots-owl__carousel--with-shadow hiredots-owl__carousel--basic-nav owl-carousel owl-theme"
                data-owl-options='{
        "items": 1,
        "margin": 0,
        "loop": false,
        "smartSpeed": 700,
        "nav": true,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
        "dots": false,
        "autoplay": false,
        "responsive": {
            "0": {
                "items": 1
            },
            "576": {
                "items": 2,
                "margin": 30
            },
            "992": {
                "items": 3,
                "margin": 30
            }
        }
        }'>
                <div class="item">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                        <div class="blog-card__image">
                            <img src="assets/images/blog/blog-1-1.jpg" alt="Guide to HR Adviser and Clients Lessening">
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date"><span>30</span>
                                Aug</div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="blog.html"><i class="fas fa-tags"></i>Business</a></li>
                                <li><a href="blog-details.html"><i class="fa fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title"><a href="blog-details.html">Guide to HR Adviser and Clients
                                    Lessening</a></h3><!-- /.blog-card__title -->
                            <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing
                                elit.</p>
                            <a href="blog-details.html" class="blog-card__link">
                                Read more
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                        <div class="blog-card__image">
                            <img src="assets/images/blog/blog-1-2.jpg" alt="Top Skin care tips for oily skins">
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date"><span>30</span>
                                Aug</div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="blog.html"><i class="fas fa-tags"></i>Business</a></li>
                                <li><a href="blog-details.html"><i class="fa fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title"><a href="blog-details.html">Top Skin care tips for oily
                                    skins</a></h3><!-- /.blog-card__title -->
                            <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing
                                elit.</p>
                            <a href="blog-details.html" class="blog-card__link">
                                Read more
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                        <div class="blog-card__image">
                            <img src="assets/images/blog/blog-1-3.jpg" alt="Outstanding island for winter sun">
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date"><span>30</span>
                                Aug</div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="blog.html"><i class="fas fa-tags"></i>Business</a></li>
                                <li><a href="blog-details.html"><i class="fa fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title"><a href="blog-details.html">Outstanding island for winter
                                    sun</a></h3><!-- /.blog-card__title -->
                            <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing
                                elit.</p>
                            <a href="blog-details.html" class="blog-card__link">
                                Read more
                                <i class="icon-right-arrow"></i>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.item -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one --> --}}
@endsection
