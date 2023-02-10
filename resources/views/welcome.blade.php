<!doctype html>
<html class="no-js" lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Odeha Solutions</title>
    <meta name="description" content="We are a company with a professional team that provides mobile, desktop, web, graphic and web design solutions.">
    <meta name="keywords"
          content="website,sayt,mobile application,erp,erp mehsullar,portfolio,ecommerce website and applications,ekommersiya saytlari,xeber saytlari,elan saytlari">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Odeha Developers">
{{--    <meta http-equiv="refresh" content="30">--}}
{{--    <meta property="og:locale" content="{{ app()->getLocale() }}"/>--}}

    <meta property="og:site_name" content="Odeha">
    <meta property="og:title" content="Odeha Solutions" />
    <meta property="og:url" content="http://grinduck.com/">
    <meta property="og:title" content="Odeha solutions">
{{--    <meta property="og:image" itemprop="image" content="{{ asset("assets/img/logo/grinduckcom.png") }}">--}}
{{--    <meta property="og:image:width" content="1280">--}}
{{--    <meta property="og:image:height" content="720">--}}

    <meta property="og:description" content="We are a company with a professional team that provides mobile, desktop, web, graphic and web design solutions.">
    <meta property="og:updated_time" content="1586345143" />

    <meta property="og:type" content="website">



    <meta property="fb:app_id" content="87741124305">

    <meta name="twitter:card" content="Odeha">
    <meta name="twitter:site" content="Odeha">
    <meta name="twitter:url" content="http://grinduck.com/">
    <meta name="twitter:title" content="Odeha solutions">
    <meta name="twitter:description" content="We are a company with a professional team that provides mobile, desktop, web, graphic and web design solutions.">
    <meta name="twitter:image" content="{{ asset("assets/img/logo/grinduckcom.png") }}">
{{--    <meta name="twitter:app:name:iphone" content="YouTube">--}}
{{--    <meta name="twitter:app:id:iphone" content="544007664">--}}
{{--    <meta name="twitter:app:name:ipad" content="YouTube">--}}
{{--    <meta name="twitter:app:id:ipad" content="544007664">--}}
{{--    <meta name="twitter:app:url:iphone" content="vnd.youtube://www.youtube.com/watch?v=9Za8i1pjPDw&amp;feature=applinks">--}}
{{--    <meta name="twitter:app:url:ipad" content="vnd.youtube://www.youtube.com/watch?v=9Za8i1pjPDw&amp;feature=applinks">--}}
{{--    <meta name="twitter:app:name:googleplay" content="YouTube">--}}
{{--    <meta name="twitter:app:id:googleplay" content="com.google.android.youtube">--}}
{{--    <meta name="twitter:app:url:googleplay" content="https://www.youtube.com/watch?v=9Za8i1pjPDw">--}}
{{--    <meta name="twitter:player" content="https://www.youtube.com/embed/9Za8i1pjPDw">--}}
{{--    <meta name="twitter:player:width" content="1280">--}}
{{--    <meta name="twitter:player:height" content="720">--}}


    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("favicon.ico") }}">

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/owl.transitions.css") }}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset("assets/css/animate.css") }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset("assets/css/meanmenu.min.css") }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset("assets/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/icon.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/flaticon.css") }}">
    <!-- magnific css -->
    <link rel="stylesheet" href="{{ asset("assets/css/magnific.min.css") }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset("assets/css/responsive.css") }}">

    <!-- modernizr css -->
    <script src="{{ asset("assets/js/vendor/modernizr-2.8.3.min.js") }}"></script>

    <style>
        .wp-circle {
            -webkit-animation: grow 2s infinite;

        }

        @-webkit-keyframes grow {
            0% {
                -webkit-transform: scale(0.6);
                -moz-transform: scale(0.6);
                -o-transform: scale(0.6);
                -ms-transform: scale(0.6);
                transform: scale(0.6);
            }

            25% {
                -webkit-transform: scale(0.8);
                -moz-transform: scale(0.8);
                -o-transform: scale(0.8);
                -ms-transform: scale(0.8);
                transform: scale(0.8);
            }

            50% {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -o-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            75% {
                -webkit-transform: scale(1.2);
                -moz-transform: scale(1.2);
                -o-transform: scale(1.2);
                -ms-transform: scale(1.2);
                transform: scale(1.2);
            }

            100% {
                -webkit-transform: scale(1.4);
                -moz-transform: scale(1.4);
                -o-transform: scale(1.4);
                -ms-transform: scale(1.4);
                transform: scale(1.4);
            }
        }
    </style>
</head>
<body>
<div id="preloader"></div>
<header class="header-one">
    <div class="header-title">
        <div style="margin-right: 30px;margin-left: 8%;"><i class="fa fa-phone"></i>
            <a href="tel:{{ app()->getLocale() === 'az' || app()->getLocale() === 'ru' ? ' +994 70 246 44 94' : ' +1 (347) 403-6140' }}"
               class="contact-info">
                {{ app()->getLocale() === 'az' || app()->getLocale() === 'ru' ? ' +994 70 246 44 94' : ' +994 70 246 44 94' }}
            </a></div>
        <div><i class="fa fa-envelope"></i>
            <a href="mailto:contact@odeha.az" class="contact-info">contact@odeha.az</a></div>
        <div class="lang-text">
            {{ mb_strtoupper(app()->getlocale()) }}
            <i class="fa fa-language"></i>
        </div>
        <ul class="lang-select" style="display:none;">
            <li class="{{ app()->getLocale() === "az" ? "active" : "" }}"><a
                    href="{{ route('change_lang','az') }}">AZ</a></li>
            <li class="{{ app()->getLocale() === "en" ? "active" : "" }}"><a
                    href="{{ route('change_lang','en') }}">EN</a></li>
            <li class="{{ app()->getLocale() === "ru" ? "active" : "" }}"><a
                    href="{{ route('change_lang','ru') }}">RU</a></li>
        </ul>
    </div>
    <div class="header-mobile-title" style="display: none;">
        <div class="mb-contact">
            <div style="margin-right: 30px;margin-left: 8%;"><i class="fa fa-phone"></i>
                <a href="tel:{{ app()->getLocale() === 'az' || app()->getLocale() === 'ru' ? ' +994 70 246 44 94' : ' +994 70 246 44 94' }}"
                   class="contact-info">
                    {{ app()->getLocale() === 'az' || app()->getLocale() === 'ru' ? ' +994 70 246 44 94' : '+1 (347) 403-6140' }}
                </a>
            </div>
            <div class="mb-email"><i class="fa fa-envelope"></i>
                <a href="mailto:contact@odeha.az" class="contact-info">contact@odeha.az</a>
            </div>
        </div>
        <div class="lang-text">
            {{ mb_strtoupper(app()->getlocale()) }}
            <i class="fa fa-language"></i>
        </div>
        <ul class="lang-select" style="display:none;">
            <li class="{{ app()->getLocale() === "az" ? "active" : "" }}"><a
                    href="{{ route('change_lang','az') }}">AZ</a></li>
            <li class="{{ app()->getLocale() === "en" ? "active" : "" }}"><a
                    href="{{ route('change_lang','en') }}">EN</a></li>
            <li class="{{ app()->getLocale() === "ru" ? "active" : "" }}"><a
                    href="{{ route('change_lang','ru') }}">RU</a></li>
        </ul>
    </div>
    <!-- header-area start -->
    <div id="sticker" class="header-area hidden-xs">
        <div class="container">
            <div class="row">
                <!-- logo start -->
                <div class="col-md-3 col-sm-3">
                    <div class="logo">
                        <!-- Brand -->
                        <a class="navbar-brand page-scroll black-logo" href="/">
                            <img style="width: 75px;" src="{{ asset("assets/img/logo/grinduck.png") }}"/>
                        </a>
                    </div>
                    <!-- logo end -->
                </div>
                <div class="col-md-9 col-sm-9">
                    <!-- <div class="header-right-link">
                        <a class="s-menu" href="login.html">Sign in</a>
                    </div> -->
                    <!-- mainmenu start -->
                    <nav class="navbar navbar-default">
                        <div class="collapse navbar-collapse" id="navbar-example">
                            <div class="main-menu">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="pagess" href="#home">{{ __('setting.menu.home') }}</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index-2.html">Home 02</a></li>
                                            <li><a href="index-3.html">Home 03</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="#about">{{ __('setting.menu.about') }}</a></li>
{{--                                    <li><a href="#our-team">{{ __('setting.menu.our_team') }}</a></li>--}}
                                    <li><a href="#services">{{ __('setting.menu.services') }}</a></li>
                                    <!-- <li><a class="pagess" href="javascript:void(0)">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="team.html">team</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="review.html">Review</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li><a class="pagess" href="javascript:void(0)">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog grid</a></li>
                                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="#contact">{{ __('setting.menu.contact') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- mainmenu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <div class="logo">
                            <a href="/">
                                <img style="width: 60px;margin-top: 5px;"
                                     src="{{ asset("assets/img/logo/grinduck.png") }}" alt=""/>
                            </a>
                        </div>
                        <nav id="dropdown">
                            <ul>
                                <li><a class="pagess" href="javascript:void(0)">Home</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#services">Services</a></li>
                                <!-- <li><a class="pagess" href="javascript:void(0)">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="team.html">team</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="review.html">Review</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li><a class="pagess" href="javascript:void(0)">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog grid</a></li>
                                        <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
<div id="home"></div>
<!-- header end -->
<!-- Start Slider Area -->
<div class="intro-area">
    <div class="bg-wrapper">
        <img src="{{ asset("assets/img/background/bg.jpg") }}" alt="">
    </div>
    <div class="intro-bg">
        <img src="{{ asset("assets/img/background/bgp.png") }}" alt="">
    </div>
    <div class="intro-content">
        <div class="slider-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- layer 1 -->
                        <div class="layer-1 wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="title2">{{ __('setting.goal.title') }}</h2>
                            <!--									<h2 class="title2">Software and It <span class="color-text">solution services</span> for worldwide customer</h2>-->
                        </div>
                        <!-- layer 2 -->
                        <div class="layer-2 wow fadeInUp" data-wow-delay="0.5s">
                            <p>{{ __('setting.goal.description') }}</p>
                        </div>
                        <!-- layer 3 -->
                        <div class="layer-3 wow fadeInUp" data-wow-delay="0.7s">
                            <a href="#services" class="ready-btn left-btn">{{ __('setting.services.button') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="about"></div>

<!-- Start Brand Area -->
<div class="about-area video-banner fix area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-content">
                    <div class="about-images">
                        <img src="{{ asset("assets/img/about/vd.jpg") }}" alt="">
                        <div class="video-content">
                            <!--                                    <a href="javascript:void(0)" class="video-play vid-zone">-->
                            <!--                                        <i class="fa fa-play"></i>-->
                            <!--                                    </a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="support-all" style="
    font-size: 25px;
    line-height: 50px;
    margin-top: 35px;">
                    {{ __('setting.about.description') }}
                </div>
                <!-- Start services -->
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area -->

<div id="our-team"></div>
<div class="welcome-area area-padding">
    <div class="container">
        <div class="row">
            <h3 style="text-align: center;padding-bottom: 20px;">{{ __('setting.our_team.title') }}</h3>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <img class="avatar-team" src="{{ asset("assets/img/teams/emin.jpg") }}"
                     alt="grinduck.com our team emin xalilbek">
                <h5 style="text-align: center;margin-top: 12px;font-size:17px;margin-bottom: -4px;">Emin Xalilov</h5>
                <h6 style="text-align: center;font-size:14px;">Product Manager</h6>
                <div class="footer-icons" style="margin-top:0;margin-bottom: 15px;text-align:center;">
                    <ul>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/eminxalilbek">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.linkedin.com/in/emin-xalilov">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <img class="avatar-team" src="{{ asset("assets/img/teams/ba.jpg") }}"
                     alt="grinduck.com our team rasul havan">
                <h5 style="text-align: center;margin-top: 12px;font-size:17px;margin-bottom: -4px;">Elchin Jabbarli</h5>
                <h6 style="text-align: center;font-size:14px;">Business Analyst</h6>
                <div class="footer-icons" style="margin-top:0;margin-bottom: 15px;text-align:center;">
                    <ul>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/cabbarli.elchin">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.linkedin.com/in/jabbarlielchin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
{{--            <div class="col-md-2 col-sm-6 col-xs-12">--}}
{{--                <img class="avatar-team" src="{{ asset("assets/img/teams/axmed.jpg") }}"--}}
{{--                     alt="grinduck.com our team ahmad mammadli">--}}
{{--                <h5 style="text-align: center;margin-top: 12px;font-size:17px;margin-bottom: -4px;">Ahmad Mammadli</h5>--}}
{{--                <h6 style="text-align: center;font-size:14px;">Co-Founder & CTO</h6>--}}
{{--                <div class="footer-icons" style="margin-top:0;margin-bottom: 15px;text-align:center;">--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a target="_blank" href="https://www.facebook.com/axmedbek">--}}
{{--                                <i class="fa fa-facebook"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a target="_blank" href="https://www.linkedin.com/in/axmedbek/">--}}
{{--                                <i class="fa fa-linkedin"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a target="_blank" href="https://www.gitlab.com/axmedbek/">--}}
{{--                                <i class="fa fa-github"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-md-2 col-sm-6 col-xs-12">
                <img class="avatar-team" src="{{ asset("assets/img/teams/inad_sa.jpg") }}"
                     alt="grinduck.com our team inad sahiboglu">
                <h5 style="text-align: center;margin-top: 12px;font-size:17px;margin-bottom: -4px;">Inad Sahiboglu</h5>
                <h6 style="text-align: center;font-size:14px;">DevOps Engineer</h6>
                <div class="footer-icons" style="margin-top:0;margin-bottom: 15px;text-align:center;">
                    <ul>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/inadinyo">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.linkedin.com/in/inad-sahiboglu-24026119a/">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://github.com/inad1991">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <img class="avatar-team" src="{{ asset("assets/img/teams/akif.jpg") }}"
                     alt="grinduck.com our team akif huseynzade">
                <h5 style="text-align: center;margin-top: 12px;font-size:17px;margin-bottom: -4px;">Akif Huseynzade</h5>
                <h6 style="text-align: center;font-size:14px;">UI/UX Designer</h6>
                <div class="footer-icons" style="margin-top:0;margin-bottom: 15px;text-align:center;">
                    <ul>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/akif.huseynzade15">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.behance.net/akifhuseynzade">
                                <i class="fa fa-behance"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://dribbble.com/akifhuseynzade">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <img style="width : 1000px;" class="avatar-team" src="{{ asset("assets/img/teams/xayyam.jpg") }}"
                     alt="grinduck.com our team emil abbasov">
                <h5 style="text-align: center;margin-top: 12px;font-size:17px;margin-bottom: -4px;">Khayyam Abdinov</h5>
                <h6 style="text-align: center;font-size:14px;">Mobile Developer</h6>
                <div class="footer-icons" style="margin-top:0;margin-bottom: 15px;text-align:center;">
                    <ul>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/xeyyam.abdinov">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.linkedin.com/in/khayyam-abdinov-43625b167/">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://github.com/KhayyamA47">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<div id="portfolio"></div>--}}
{{--<div class="welcome-area area-padding">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <h3 style="text-align: center;padding-bottom: 20px;">Our works</h3>--}}
{{--            <div class="all-services">--}}
{{--                <!-- single-well end-->--}}
{{--                <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--                    <div class="well-services wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                        <div class="services-img" style="padding:0;margin-bottom: 0">--}}
{{--                            <img style="width: 100%;height: 140px;" src="{{ asset("assets/img/works/elleteam.png") }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="main-wel">--}}
{{--                            <div class="wel-content">--}}
{{--                                <a target="_blank" href="https://elleteam.com">elleteam.com</a>--}}
{{--                                <hr>--}}
{{--                                <h6>Website</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--                    <div class="well-services wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                        <div class="services-img" style="padding:0;margin-bottom: 0">--}}
{{--                            <img style="width: 100%;height: 140px;" src="{{ asset("assets/img/works/protask.PNG") }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="main-wel">--}}
{{--                            <div class="wel-content">--}}
{{--                                <a target="_blank" href="https://protaskaz.netlify.com/en/">protask.az</a>--}}
{{--                                <hr>--}}
{{--                                <h6>Website</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--                    <div class="well-services wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                        <div class="services-img" style="padding:0;margin-bottom: 0">--}}
{{--                            <img style="width: 100%;height: 140px;" src="{{ asset("assets/img/works/ucuzagetdi.PNG") }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="main-wel">--}}
{{--                            <div class="wel-content">--}}
{{--                                <a target="_blank" href="https://ucuzagetdi.com/">ucuzagetdi.com</a>--}}
{{--                                <hr>--}}
{{--                                <h6>Website</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--                    <div class="well-services wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                        <div class="services-img" style="padding:0;margin-bottom: 0">--}}
{{--                            <img style="width: 100%;height: 140px;" src="{{ asset("assets/img/works/tshirt.png") }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="main-wel">--}}
{{--                            <div class="wel-content">--}}
{{--                                <a href="javascript:void(0)">tshirtex.az</a>--}}
{{--                                <hr>--}}
{{--                                <h6>Website</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--                    <div class="well-services wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                        <div class="services-img" style="padding:0;margin-bottom: 0">--}}
{{--                            <img src="{{ asset("assets/img/works/ucuzagetdi_logo.png") }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="main-wel">--}}
{{--                            <div class="wel-content">--}}
{{--                                <a target="_blank" href="https://ucuzagetdi.com/">ucuzagetdi.com</a>--}}
{{--                                <hr>--}}
{{--                                <h6>Logo</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div id="services"></div>
<!-- End Slider Area -->
<!-- Welcome service area start -->
<div class="welcome-area area-padding">
    <div class="container">
        <div class="row">
            <div class="all-services">
                <!-- single-well end-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="well-services wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-img">
                            <a class="big-icon" href="javascript:void(0)"><i class="flaticon-blueprint"></i></a>
                        </div>
                        <div class="main-wel">
                            <div class="wel-content">
                                <h4>{{ __('setting.services.design.title') }}</h4>
                                <p> {{ __('setting.services.design.description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="well-services wow fadeInUp" data-wow-delay="0.5s">
                        <div class="services-img">
                            <a class="big-icon" href="javascript:void(0)"><i class="flaticon-worldwide"></i></a>
                        </div>
                        <div class="main-wel">
                            <div class="wel-content">
                                <h4>{{ __('setting.services.web_development.title') }}</h4>
                                <p> {{ __('setting.services.web_development.description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="well-services wow fadeInUp" data-wow-delay="0.7s">
                        <div class="services-img">
                            <a class="big-icon" href="javascript:void(0)"><i class="flaticon-app"></i></a>
                        </div>
                        <div class="main-wel">
                            <div class="wel-content">
                                <h4>{{ __('setting.services.mobile_development.title') }}</h4>
                                <p> {{ __('setting.services.mobile_development.description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="well-services wow fadeInUp" data-wow-delay="0.9s">
                        <div class="services-img">
                            <a class="big-icon" href="javascript:void(0)"><i class="flaticon-windows-3"></i></a>
                        </div>
                        <div class="main-wel">
                            <div class="wel-content">
                                <h4>{{ __('setting.services.desktop_development.title') }}</h4>
                                <p>{{ __('setting.services.desktop_development.description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
            </div>
        </div>
    </div>
</div>
<!-- Welcome service area End -->
<!-- Start About Area -->
<div class="feature-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="feature-inner wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="feature-text">
                        <h3><span class="top-head"><i
                                    class="icon icon-layers"></i></span> {{ __('setting.skills.software.title') }}</h3>
                        <p>{{ __('setting.skills.software.description') }}</p>
                        <ul>
                            <li><a href="javascript:void(0)"><span>1</span>Java/.Net/Php/Go</a></li>
                            <li><a href="javascript:void(0)"><span>2</span>React/Gatsby/Next</a></li>
                            <li><a href="javascript:void(0)"><span>3</span>Nosql/RDBS</a></li>
                            <li><a href="javascript:void(0)"><span>4</span>Realtime services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="feature-image item-bounce wow fadeInRight" data-wow-delay="0.3s">
                    <img src="{{ asset("assets/img/feature/ft.png") }}" alt="">
                </div>
            </div>
        </div>
        <!-- end Row -->
    </div>
</div>
<!-- End About Area -->
<!-- Start About Area -->
<div class="feature-area-2 bg-color area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 hidden-sm hidden-xs">
                <div class="feature-image item-bounce wow fadeInLeft" data-wow-delay="0.3s">
                    <img src="{{ asset("assets/img/feature/ft1.png") }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="feature-inner wow fadeInRight" data-wow-delay="0.3s">
                    <div class="feature-text">
                        <h3><span class="top-head"><i
                                    class="icon icon-cloud"></i></span> {{ __('setting.skills.server.title') }}</h3>
                        <p>{{ __('setting.skills.server.description') }}</p>
                        <ul>
                            <li><a href="javascript:void(0)"><span>1</span>Docker</a></li>
                            <li><a href="javascript:void(0)"><span>2</span>Jenkins</a></li>
                            <li><a href="javascript:void(0)"><span>3</span>Ansible</a></li>
                            <li><a href="javascript:void(0)"><span>4</span>CI/CD solutions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hidden-md hidden-lg col-sm-12 col-xs-12">
                <div class="feature-image item-bounce wow fadeInLeft" data-wow-delay="0.3s">
                    <img src="{{ asset("assets/img/feature/ft1.png") }}" alt="">
                </div>
            </div>
        </div>
        <!-- end Row -->
    </div>
</div>
<!-- End About Area -->
<!-- Start About Area -->
<div class="feature-area-3 area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="feature-inner wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="feature-text">
                        <h3><span class="top-head"><i
                                    class="icon icon-sync"></i></span>{{ __('setting.skills.mobile.title') }}</h3>
                        <p>{{ __('setting.skills.mobile.description') }}</p>
                        <ul>
                            <li><a href="javascript:void(0)"><span>1</span>Java</a></li>
                            <li><a href="javascript:void(0)"><span>2</span>Swift</a></li>
                            <li><a href="javascript:void(0)"><span>3</span>React Native</a></li>
                            <li><a href="javascript:void(0)"><span>4</span>Ionic</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="feature-image item-bounce wow fadeInRight" data-wow-delay="0.3s">
                    <img src="{{ asset("assets/img/feature/ft2.png") }}" alt="">
                </div>
            </div>
        </div>
        <!-- end Row -->
    </div>
</div>
<!-- End About Area -->
<!-- Start Subscribe area -->
<!-- <div class="counter-area fix area-padding">
    <div class="container">
         <div class="row">
            <div class="fun-content">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="fun_text wow fadeInLeft" data-wow-delay="0.2s">
                       <span class="counter-icon"><i class="flaticon-picture"></i></span>
                        <span class="counter">980</span>
                        <h4>Projects complete</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="fun_text wow fadeInLeft" data-wow-delay="0.3s">
                       <span class="counter-icon"><i class="flaticon-worldwide"></i></span>
                        <span class="counter">50</span>
                        <h4>Work projects</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="fun_text wow fadeInLeft" data-wow-delay="0.4s">
                       <span class="counter-icon"><i class="flaticon-gift"></i></span>
                        <span class="counter">110</span>
                        <h4>Award won</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="fun_text last-content wow fadeInLeft" data-wow-delay="0.5s">
                      <span class="counter-icon"><i class="flaticon-users"></i></span>
                        <span class="counter">550</span>
                        <h4>Happy Clients</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Subscribe area -->
<!-- start pricing area -->
<!-- <div class="pricing-area fix area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="section-headline text-center">
                    <span class="title-icon"><i class="icon icon-diamond"></i></span>
                    <h3>Pricing rate</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pricing-content">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="table-list wow fadeInUp" data-wow-delay="0.3s">
                        <div class="top-price-inner">
                            <h4>Basic</h4>
                            <div class="rates">
                                <span class="prices"><span class="dolar">$</span>15</span><span class="users">Per Month</span>
                            </div>
                        </div>
                        <ol>
                            <li class="check">Online System</li>
                            <li class="check">Free apps</li>
                            <li class="check cross">full access</li>
                            <li class="check">live preview</li>
                            <li class="check cross">Support unlimited</li>
                        </ol>
                        <div class="price-btn">
                            <a href="order-from.html">Buy now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="table-list wow fadeInUp" data-wow-delay="0.5s">
                        <div class="top-price-inner">
                            <h4>Standard</h4>
                            <div class="rates">
                                <span class="prices"><span class="dolar">$</span>80</span><span class="users">Per Month</span>
                            </div>
                        </div>
                        <ol>
                            <li class="check">Online System</li>
                            <li class="check">Free apps</li>
                            <li class="check cross">full access</li>
                            <li class="check">live preview</li>
                            <li class="check">Support unlimited</li>
                        </ol>
                        <div class="price-btn">
                            <a href="order-from.html">Buy now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="table-list wow fadeInUp" data-wow-delay="0.7s">
                        <div class="top-price-inner">
                            <h4>Premium</h4>
                            <div class="rates">
                                <span class="prices"><span class="dolar">$</span>99</span><span class="users">Per Month</span>
                            </div>
                        </div>
                        <ol>
                            <li class="check">Online System</li>
                            <li class="check">Free apps</li>
                            <li class="check">full access</li>
                            <li class="check">live preview</li>
                            <li class="check">Support unlimited</li>
                        </ol>
                        <div class="price-btn">
                            <a href="order-from.html">Buy now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End pricing table area -->
<!-- Start Brand Area -->
<div class="banner-area area-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="banner-all">
                    <div class="banner-content">
                        <h3>{{ __('setting.contact.description') }}</h3>
                        <a class="banner-btn" href="mailto:contact@odeha.az">{{ __('setting.contact.button') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact"></div>
<!-- End Banner Area -->
<!-- Start testimonials Area -->
<!-- <div class="reviews-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="section-headline review-head text-center">
                    <span class="title-icon"><i class="icon icon-graduation-hat"></i></span>
                    <h3>Clients reviews</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="Reviews-content wow fadeInUp" data-wow-delay="0.3s">
                    <div class="testimonial-carousel item-indicator">
                        <div class="single-testi">
                            <div class="testi-text">
                                <div class="clients-text">
                                    <div class="client-rating">
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                    </div>
                                    <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                </div>
                                <div class="testi-img ">
                                    <img src="img/review/1.jpg" alt="">
                                    <div class="guest-details">
                                        <h4>Arnold russel</h4>
                                        <span class="guest-rev">Clients - <a href="javascript:void(0)">Genarel customer</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testi">
                            <div class="testi-text">
                                <div class="clients-text">
                                    <div class="client-rating">
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                    </div>
                                    <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                </div>
                                <div class="testi-img ">
                                    <img src="img/review/2.jpg" alt="">
                                    <div class="guest-details">
                                        <h4>Arnold russel</h4>
                                        <span class="guest-rev">Clients - <a href="javascript:void(0)">Genarel customer</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testi">
                            <div class="testi-text">
                                <div class="clients-text">
                                    <div class="client-rating">
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                    </div>
                                    <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                </div>
                                <div class="testi-img ">
                                    <img src="img/review/3.jpg" alt="">
                                    <div class="guest-details">
                                        <h4>Arnold russel</h4>
                                        <span class="guest-rev">Clients - <a href="javascript:void(0)">Genarel customer</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testi">
                            <div class="testi-text">
                                <div class="clients-text">
                                    <div class="client-rating">
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                        <a href="javascript:void(0)"><i class="icon icon-star"></i></a>
                                    </div>
                                    <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                </div>
                                <div class="testi-img ">
                                    <img src="img/review/4.jpg" alt="">
                                    <div class="guest-details">
                                        <h4>Arnold russel</h4>
                                        <span class="guest-rev">Clients - <a href="javascript:void(0)">Genarel customer</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End testimonials end -->
<!--Blog Area Start-->
<!-- <div class="blog-area fix area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="section-headline text-center">
                    <span class="title-icon"><i class="icon icon-bubble"></i></span>
                    <h3>Latest blog</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-grid">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <a class="image-scale" href="javascript:void(0)">
                                <img src="img/blog/b1.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                           <div class="blog-meta">
                                <span class="date-type">
                                    <i class="fa fa-user"></i>
                                    Admin
                                </span>
                                <span class="date-type">
                                    20 july, 2019
                                </span>
                                <span class="comments-type">
                                    <i class="fa fa-comment-o"></i>
                                    13
                                </span>
                            </div>
                            <a href="javascript:void(0)">
                                <h4>Creative design clients response is better</h4>
                            </a>
                            <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</p>
                            <a class="blog-btn" href="javascript:void(0)"> Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.5s">
                       <div class="blog-image">
                            <a class="image-scale" href="javascript:void(0)">
                                <img src="img/blog/b2.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                           <div class="blog-meta">
                               <span class="date-type">
                                    <i class="fa fa-user"></i>
                                    Admin
                                </span>
                                <span class="date-type">
                                    13 may, 2018
                                </span>
                                <span class="comments-type">
                                    <i class="fa fa-comment-o"></i>
                                    16
                                </span>
                            </div>
                            <a href="javascript:void(0)">
                                <h4>Web development is a best work in future world</h4>
                            </a>
                            <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</p>
                            <a class="blog-btn" href="javascript:void(0)"> Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.7s">
                       <div class="blog-image">
                            <a class="image-scale" href="javascript:void(0)">
                                <img src="img/blog/b3.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                           <div class="blog-meta">
                                <span class="date-type">
                                    <i class="fa fa-user"></i>
                                    Admin
                                </span>
                                <span class="date-type">
                                    24 april, 2019
                                </span>
                                <span class="comments-type">
                                    <i class="fa fa-comment-o"></i>
                                    07
                                </span>
                            </div>
                            <a href="javascript:void(0)">
                                <h4>You can trust me and business with together</h4>
                            </a>
                            <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</p>
                            <a class="blog-btn" href="javascript:void(0)"> Read more</a>
                        </div>
                    </div>
                </div>
                <div class="hidden-md hidden-lg col-sm-6 col-xs-12">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.9s">
                       <div class="blog-image">
                            <a class="image-scale" href="javascript:void(0)">
                                <img src="img/blog/b4.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="date-type">
                                    <i class="fa fa-user"></i>
                                    Admin
                                </span>
                                <span class="date-type">
                                    28 june, 2019
                                </span>
                                <span class="comments-type">
                                    <i class="fa fa-comment-o"></i>
                                    32
                                </span>
                            </div>
                            <a href="javascript:void(0)">
                                <h4>business man want to be benifit any way</h4>
                            </a>
                            <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.</p>
                            <a class="blog-btn" href="javascript:void(0)"> Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--End of Blog Area-->
<!-- Start Footer bottom Area -->
<footer class="footer1">
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>{{ __('setting.info.title') }}</h4>
                            <div class="footer-contacts">
                                <p><span>{{ __('setting.info.tel') }} :</span>
                                    {{ app()->getLocale() === 'az' || app()->getLocale() === 'ru' ? ' +994 70 246 44 94' : ' +994 70 246 44 94' }}
                                </p>
                                <p><span>{{ __('setting.info.email') }} :</span> contact@odeha.az</p>
                                <p><span>{{ __('setting.info.location') }} :</span> Z.Aliyeva 65/4, Baku</p>
                            </div>
                            <div class="footer-icons">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/grinduckcom">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/grinduck/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>{{ __('setting.service_links.title') }}</h4>
                            <ul class="footer-list">
                                <li><a href="javascript:void(0)">{{ __('setting.service_links.business') }}</a></li>
                                <li><a href="javascript:void(0)">{{ __('setting.service_links.agency') }} </a></li>
                                <li><a href="javascript:void(0)">{{ __('setting.service_links.social_media') }}</a></li>
                                <li><a href="javascript:void(0)">{{ __('setting.service_links.branding') }}</a></li>
                                <li><a href="javascript:void(0)">{{ __('setting.service_links.design') }} </a></li>
                            </ul>
                            <ul class="footer-list hidden-sm">
                                <li><a href="javascript:void(0)">{{ __('setting.service_links.search_engine') }}</a>
                                </li>
                                <li><a href="javascript:void(0)">{{ __('setting.service_links.online_support') }}</a>
                                </li>
                                <li><a href="javascript:void(0)">{{ __('setting.service_links.development') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content last-content">
                        <div class="footer-head">
                            <h4>{{ __('setting.subscribe.title') }}</h4>
                            <div class="subs-feilds">
                                <div class="suscribe-input">
                                    <input type="email" class="email form-control width-80" id="sus_email"
                                           placeholder="{{ __('setting.subscribe.inputPlaceHolder') }}">
                                    <button type="submit" id="sus_submit"
                                            class="add-btn">{{ __('setting.subscribe.title') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <p>
                            {{ __('setting.copyright') }} © 2019
                            <a href="/">Odeha</a> {{ __('setting.rights_reserved') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="wp-circle" style="position: fixed;
    bottom: 25px;
    left:25px;
    width: 60px;
    height: 60px;
    z-index: 9999;
    color: white;
    font-size: 40px;
    background-color: #6ecc83;
    border-radius: 50%;
    padding-left: 13px;
    cursor: pointer;
    padding-top: 10px;
    box-shadow: 1px 1px 7px 10px #f3eeee;">
    <a style="text-decoration: none;color: white;" href="https://api.whatsapp.com/send?phone={{ app()->getLocale() === 'az' || app()->getLocale() === 'ru' ? '+994702464494' : ' +13474036140' }}&text=&source=&data=">
        <i class="fa fa-whatsapp"></i>
    </a>
</div>

<!-- all js here -->

<!-- jquery latest version -->
<script src="{{ asset("assets/js/vendor/jquery-1.12.4.min.js") }}"></script>
<!-- bootstrap js -->
<script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
<!-- owl.carousel js -->
<script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
<!-- Counter js -->
<script src="{{ asset("assets/js/jquery.counterup.min.js") }}"></script>
<!-- waypoint js -->
<script src="{{ asset("assets/js/waypoints.js") }}"></script>
<!-- magnific js -->
<script src="{{ asset("assets/js/magnific.min.js") }}"></script>
<!-- wow js -->
<script src="{{ asset("assets/js/wow.min.js") }}"></script>
<!-- meanmenu js -->
<script src="{{ asset("assets/js/jquery.meanmenu.js") }}"></script>
<!-- Form validator js -->
<script src="{{ asset("assets/js/form-validator.min.js") }}"></script>
<!-- plugins js -->
<script src="{{ asset("assets/js/plugins.js") }}"></script>
<!-- main js -->
<script src="{{asset("assets/js/main.js")}}"></script>

<script>
    $('.lang-text').on('click', function () {
        $('.lang-select').toggle();
    });

    $('.lang-select li a').on('click', function () {
        $('.lang-select').hide();
    });
</script>
</body>
</html>
