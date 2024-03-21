@extends('frontend.layout.app')
@section('mainsection')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt="hiredots"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">Gallery</h2>
            <ul class="hiredots-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>Gallery</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <div class="project-one project--page" >
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-md-6 col-lg-4">
                    <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                        <div class="project-one__img">
                            <img src="assets/images/uhk/1.webp" alt="Staffing Solution">
                        </div>
                        <div class="project-one__content">
                            <span class="project-one__tagline">Services</span>
                            <h3 class="project-one__title"><a href="#">Security Guard</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                        <div class="project-one__img">
                            <img src="assets/images/uhk/gal-2.webp" alt="Staffing Solution">
                        </div>
                        <div class="project-one__content">
                            <span class="project-one__tagline">Services</span>
                            <h3 class="project-one__title"><a href="#">HOUSEKEEPING</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                        <div class="project-one__img">
                            <img src="assets/images/uhk/gal-3.webp" alt="Staffing Solution">
                        </div>
                        <div class="project-one__content">
                            <span class="project-one__tagline">Services</span>
                            <h3 class="project-one__title"><a href="#">Bouncer</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                        <div class="project-one__img">
                            <img src="assets/images/uhk/gal-4.webp" alt="Staffing Solution">
                        </div>
                        <div class="project-one__content">
                            <span class="project-one__tagline">Services</span>
                            <h3 class="project-one__title"><a href="#">Event Staff</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                        <div class="project-one__img">
                            <img src="assets/images/uhk/gal-5.webp" alt="Staffing Solution">
                        </div>
                        <div class="project-one__content">
                            <span class="project-one__tagline">Services</span>
                            <h3 class="project-one__title"><a href="#">CCTV</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-one__card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
                        <div class="project-one__img">
                            <img src="assets/images/uhk/gal-6.webp" alt="Staffing Solution">
                        </div>
                        <div class="project-one__content">
                            <span class="project-one__tagline">Services</span>
                            <h3 class="project-one__title"><a href="#">Event Management</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
