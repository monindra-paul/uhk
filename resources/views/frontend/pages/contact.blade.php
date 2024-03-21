@extends('frontend.layout.app')
@section('mainsection')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt="hiredots"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">Contact</h2>
            <ul class="hiredots-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>Contact</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="contact-one pt-100 pb-100">
        <div class="container">
            <div class="contact-one__inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-one__content">
                            <div class="sec-title text-@@textAlign">

                                <h6 class="sec-title__tagline">Contact us</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Feel Free to Get in Touch <br> with Udvah Solutions</h3>
                                <!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="contact-one__text">Aliquam hendrerit a augue insuscipit. Etiam aliquam massa
                                quis des
                                mauris commodo venenatis ligula commodo leez sed blandit convallis dignissim onec
                                vel
                                pellentesque neque.
                            </p><!-- /.contact-one__text -->
                            <ul class="list-unstyled contact-one__info">
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-phone-call-1"></i>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Have Question?</p>
                                        <!-- /.contact-one__info__text -->
                                        <h4 class="contact-one__info__title">Free <a href="tel:+91 91230 63227">+91 91230
                                                63227</a></h4><!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-message"></i>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Write Email </p>
                                        <!-- /.contact-one__info__text -->
                                        <h4 class="contact-one__info__title"><a
                                                href="mailto:
                                                udvah.solutions@gmail.com">
                                                udvah.solutions@gmail.com</a></h4>
                                        <!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-placeholder"></i>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Visit Anytime</p>
                                        <!-- /.contact-one__info__text -->
                                        <h4 class="contact-one__info__title"><a href="#">
                                                Ankurhati Check Post, Domjur,Howrah-711409</a></h4>
                                        <!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="contact-one__left">
                            <form class="contact-one__form contact-form-validated form-one background-base wow fadeInUp"
                                data-wow-duration="1500ms" action="{{ url('/contact-uus') }}">
                                <div class="form-one__group">
                                    <div class="form-one__control form-one__control--full">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div><!-- /.form-one__control form-one__control--full -->
                                    <div class="form-one__control form-one__control--full">
                                        <input type="email" name="email" placeholder="Email address">
                                    </div><!-- /.form-one__control form-one__control--full -->
                                    <div class="form-one__control form-one__control--full">
                                        <input type="text" name="phone" placeholder="Phone number">
                                    </div><!-- /.form-one__control form-one__control--full -->

                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Write  a message"></textarea><!-- /# -->
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="hiredots-btn hiredots-btn--white"><span>send a
                                                message</span></button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->
                            </form>
                        </div>

                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.contact-one__inner -->
        </div><!-- /.container -->
    </section><!-- /.contact-one -->

    <section class="contact-map">
        <div class="container">
            <div class="google-map google-map__contact">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117864.98533787929!2d88.16308064488483!3d22.605987382234396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027731b5ec66ff%3A0x69c809a658a312b4!2sUHK%20Manpower%20Services%20Pvt.%20Ltd!5e0!3m2!1sen!2sin!4v1710065424282!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- /.google-map -->
        </div><!-- /.container-fluid -->
    </section><!-- /.contact-map -->
@endsection
