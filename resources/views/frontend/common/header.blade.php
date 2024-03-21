<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    {{-- <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/uhk/udvah-logo-png.png);"></div>
    </div> --}}
    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container-fluid">
                <div class="topbar-one__inner">
                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:udvah.solutions@gmail.com">udvah.solutions@gmail.com</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <i class="fas fa-map-marker"></i>
                            <a href="tel:+91 91230 63227"> Ankurhati Check Post, Domjur,Howrah-711409</a>
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    <div class="topbar-one__right">
                        <div class="topbar-one__nav">
                            <ul>
                                <li>
                                    <a href="{{ url('/about-us') }}">About</a>
                                </li>

                                <li>
                                    <a href="{{ url('/contact-us') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-one__social">
                            <a href="https://twitter.com/">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://facebook.com/">
                                <i class="fab fa-facebook" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>

                            <a href="https://instagram.com/">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        </div><!-- /.topbar-one__social -->
                    </div><!-- /.topbar-one__right -->
                </div><!-- /.topbar-one__inner -->
            </div>
        </div>

        <header class="main-header sticky-header sticky-header--normal">
            <div class="main-header__inner">
                <div class="main-header__logo">
                    <a href="index.html">
                        <img src="assets/images/uhk/udvah-logo-png.png" alt="udvah-logo" width="175">
                    </a>
                </div><!-- /.main-header__logo -->
                {{-- <a href="#" class="search-toggler main-header__search">
                    <i class="icon-magnifying-glass" aria-hidden="true"></i>
                    <span class="sr-only">Search</span>
                </a><!-- /.search-toggler --> --}}
                <div class="main-header__menu">
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">
                            <li class="">
                                <a href="{{ url('/') }}">Home</a>

                            </li>

                            <li>
                                <a href="{{ url('/about-us') }}">About Us</a>
                            </li>

                            <li class="">
                                <a href="{{ url('/services') }}">Services</a>

                            </li>
                            <li class="">
                                <a href="{{ url('/gallery') }}">Gallery</a>

                            </li>


                            <li>
                                <a href="{{ url('/contact-us') }}">Contact Us</a>
                            </li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__call">
                        <a href="tel:+91 91230 63227">
                            <i class="icon-telephone"></i>
                        </a>
                        <a href="tel:+91 91230 63227">+91 91230 63227</a>
                    </div>
                </div>
                <div class="main-header__link">
                    <a class="main-header__btn" href="{{ url('/contact-us') }}">Contact</a>
                </div>
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
            </div>
        </header>
