@extends('layouts.app2')
@section('content')

<!--header-->
<main id="accueil" class="main-root">
    <div id="dsn-scrollbar">
        <div class="main-slider demo-2 p-relative w-100 h-100-v over-hidden " data-dsn-header="parallax">
            <div class="bg-container" id="dsn-hero-parallax-img">
                <div class="slide-inner h-100">
                    <div class="swiper-wrapper">
                        @foreach($event as $row)
                        <div class="slide-item swiper-slide">
                            <div class="image-bg cover-bg w-100 h-100 "
                                 data-image-src="{{ 'storage/imgs/'.$row['photo'] }}" data-overlay="2">
                            </div>
                            <!-- <div class="image-bg cover-bg w-100 h-100 "
                                 data-image-src="img/{{ $row->photo}}" data-overlay="2">
                            </div> -->
                            <div class="slide-content p-absolute h-100 w-100 ">
                                <div class="row align-items-center h-100">
                                    <div class="content p-relative w-100">
                                        <div class="metas d-inline-block">
                                            <span id="EventDate">{{ $row->date }}</span>
                                        </div>
                                        <h1 class="title user-no-selection">
                                            <a href="project1.html" class="effect-ajax"
                                               data-dsn-ajax="slider" id="NomEvent">{{ $row->nom }}</a>
                                        </h1>
                                        

                                        <div class="dsn-button-link mt-30 user-no-selection">
                                            <a href="#ReservationDirect" data-id="{{ $row->id }}" data-nom="{{ $row->nom }}" data-date="{{ $row->date }}" id="BookDirectly" class="link-custom effect-ajax d-flex a-item-center p-relative"
                                               data-dsn-ajax="slider">
                                                <span class="link-text">Reserver maintenant</span>
                                                <span class="link-circle p-absolute">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <div class="description p-absolute d-flex a-item-center background-section">
                                    <p>Vin tries to reflect Diesel’s vision and combines the universe of the rock of
                                        the 80’s with a clear</p>
                                </div>
                            </div>

                        </div>
                        @endforeach
                        

                    </div>
                </div>
            </div>


            <div class="box-next p-absolute nav-slider overflow-hidden header-no-scale-hero">
                <div class="swiper-wrapper" role="navigation"></div>
            </div>


            <div class="dsn-controls p-absolute d-flex a-item-center">
                <div class="dsn-numbers d-block text-center">
                    <span>01</span>
                </div>

                <div class="dsn-progress p-relative">
                    <div class="dsn-progress-indicator p-absolute w-100"></div>
                </div>

                <div class="dsn-numbers d-block text-center">
                    <span class="full-number fw-blod">05</span>
                </div>
            </div>

            <div class="social-network-box text-center w-100-v">
                <div class="social-network">
                    <ul>
                        <li><a class="link-hover" target="_blank" href="https://www.facebook.com/" data-hover-text="facebook">facebook</a></li>
                        <li><a class="link-hover" target="_blank" href="https://www.behance.net/" data-hover-text="behance">behance</a></li>
                        <li><a class="link-hover" target="_blank" href="https://www.instagram.com/" data-hover-text="instagram">instagram</a></li>
                    </ul>
                </div>
            </div>

            <div class="dsn-slider-content p-absolute h-100 w-100">
                <div class="content-slider margin-lr-100 p-relative w-100 h-100"></div>
            </div>


        </div>

        <div class="wrapper">
            <section id="a-propos" class="intro-about  section-margin have-dsn-animate-number" data-dsn-animate="section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="intro-about-info">
                                <div class="section-title-2">
                                    <h2>ON PARLE DE NOUS</h2>
                                    <p>opium</p>
                                </div>

                                <div class="intro-about-info-bottom">
                                    <h2 class="title-h2 dsn-up">We have been doing projects since 2008.</h2>

                                    <p class="dsn-text">L’opium vous accueille dans son cadre Chic et Cosy pour boire un verre avec élégance.
                                    Pour une soirée unique, laissez vous séduire par une cuisine gourmande et raffinée ainsi qu’une large sélections de vins et cocktails.
                                    </p>

                                    <div class="accordion mt-30">
                                        <div class="accordion__wrapper">
                                            <div class="accordion__item dsn-up">
                                                <div
                                                        class="accordion__question expanded d-flex align-items-center p-relative">
                                                        <span class="icon">
                                                            <img src="{{URL::asset('vitrine/assets/img/vision.svg')}}" alt="">
                                                        </span>
                                                    <h4 class="sm-title-block">RESTAURANTS & BARS</h4>
                                                </div>
                                                <div class="accordion__answer active">
                                                    <p>Cepteur sint occaecat cupidatat proident, taken possession of
                                                        my
                                                        entire soul, like these sweet mornings of spring which I
                                                        enjoy with
                                                        my whole.</p>
                                                </div>
                                            </div>
                                            <div class="accordion__item dsn-up">
                                                <div
                                                        class="accordion__question d-flex align-items-center p-relative">
                                                        <span class="icon">
                                                            <img src="{{URL::asset('vitrine/assets/img/target.svg')}}" alt="">
                                                        </span>
                                                    <h4 class="sm-title-block">Réunion & Evènements</h4>
                                                </div>
                                                <div class="accordion__answer">
                                                    <p>Cepteur sint occaecat cupidatat proident, taken possession of
                                                        my
                                                        entire soul, like these sweet mornings of spring which I
                                                        enjoy with
                                                        my whole.</p>
                                                </div>
                                            </div>

                                           <!-- <div class="accordion__item dsn-up">
                                                <div
                                                        class="accordion__question d-flex align-items-center p-relative">
                                                        <span class="icon">
                                                            <img src="{{URL::asset('vitrine/assets/img/mission.svg')}}" alt="">
                                                        </span>
                                                    <h4 class="sm-title-block">Our Mission</h4>
                                                </div>
                                                <div class="accordion__answer">
                                                    <p>Cepteur sint occaecat cupidatat proident, taken possession of
                                                        my
                                                        entire soul, like these sweet mornings of spring which I
                                                        enjoy with
                                                        my whole.</p>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="box-img p-relative  over-hidden">
                                <div class="bg-section p-absolute w-100 h-100">
                                    <div class="h-100" data-dsn-grid="move-up">
                                        <img class="cover-bg-img has-top-bottom" src="{{URL::asset('vitrine/assets/img/about-intro.jpg')}}"
                                             alt="">
                                    </div>
                                </div>
                                <img src="{{URL::asset('vitrine/assets/img/about-intro.jpg')}}" alt="">

                                <div class="exper background-theme p-absolute">
                                    <div class="numb-ex">
                                        <span class="word-text has-animate-number">25</span>
                                    </div>

                                    <h4 class="sm-title-block dsn-up">YEARS OF <br> DIGITAL EXPERIENCE</h4>
                                    <div class="shap-section">
                                        <img src="vitrine/assets/img/arr.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="skills-personal  background-section p-relative section-padding section-margin"
                     data-dsn-animate="sections">
                <div class="skills-inner container p-relative ">

                    <div class="container no-padding section-title-2">
                        <h2>Our Skills</h2>
                        <p>What we Best At</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="box-text">
                                <h3 class="title-h2 dsn-text">We provide smart and flexible digital services
                                </h3>

                                <div class="accordion">
                                    <div class="accordion__wrapper">
                                        <div class="accordion__item dsn-up">
                                            <div class="accordion__question p-relative">
                                                <h4 class="sm-title-block ">Website & Mobile App Design</h4>
                                            </div>
                                            <div class="accordion__answer">
                                                <p>Cepteur sint occaecat cupidatat proident, taken
                                                    possession of
                                                    my
                                                    entire soul, like these sweet mornings of spring which I
                                                    enjoy
                                                    with
                                                    my whole.</p>
                                            </div>
                                        </div>
                                        <div class="accordion__item dsn-up">
                                            <div class="accordion__question p-relative">
                                                <h4 class="sm-title-block">Motion Graphics & Animation</h4>
                                            </div>
                                            <div class="accordion__answer">
                                                <p>Cepteur sint occaecat cupidatat proident, taken
                                                    possession of
                                                    my
                                                    entire soul, like these sweet mornings of spring which I
                                                    enjoy
                                                    with
                                                    my whole.</p>
                                            </div>
                                        </div>
                                        <div class="accordion__item dsn-up">
                                            <div class="accordion__question p-relative">
                                                <h4 class="sm-title-block">User Experience</h4>
                                            </div>
                                            <div class="accordion__answer">
                                                <p>Cepteur sint occaecat cupidatat proident, taken
                                                    possession of
                                                    my
                                                    entire soul, like these sweet mornings of spring which I
                                                    enjoy
                                                    with
                                                    my whole.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="skills-wapper">
                                <div class="skills-item">
                                    <h4 class="sm-title-block">Web Design</h4>
                                    <div class="bar">
                                                <span class="fill" data-width="88%">
                                                    <span class="number">88%</span>
                                                </span>
                                    </div>
                                    <div class="tip"></div>
                                </div>

                                <div class="skills-item">
                                    <h4 class="sm-title-block">branding</h4>
                                    <div class="bar">
                                                <span class="fill" data-width="92%">
                                                    <span class="number">92%</span>
                                                </span>
                                    </div>
                                    <div class="tip"></div>
                                </div>

                                <div class="skills-item">
                                    <h4 class="sm-title-block">animation / motion</h4>
                                    <div class="bar">
                                                <span class="fill" data-width="80%">
                                                    <span class="number">80%</span>
                                                </span>
                                    </div>
                                    <div class="tip"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section id="menus" class="service service-3 section-margin dsn-animate" data-dsn-animate="section">

                <div class="container section-title-2">
                    <h2>MENUS</h2>
                    <p>opium</p>
                </div>

                <div class="container" data-dsn-animate="section">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 service-content dsn-up">
                            <div class="services-item p-relative text-center background-section no-shadow">
                                <div class="bg-section background-section p-absolute w-100 h-100 over-hidden"></div>
                                <div class="box-content p-relative d-flex align-items-center h-100">
                                    <div class="content-inner">
                                        <div class="icon">
                                            <img src="{{URL::asset('vitrine/assets/img/services/graph.svg')}}" alt="">
                                        </div>

                                        <div class="content">
                                            <h4 class="title-block ">EAT</h4>
                                            <p class="p-absolute">Te qui alii inermis vivendum, an decore libris
                                                eum. Te mel dico
                                                alia wisi, cu
                                                vitae
                                                noluisse phaedrum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 service-content dsn-up">
                            <div class="services-item p-relative text-center background-section no-shadow">
                                <div class="bg-section background-section p-absolute w-100 h-100 over-hidden"></div>

                                <div class="box-content p-relative d-flex align-items-center h-100">
                                    <div class="content-inner">
                                        <div class="icon">
                                            <img src="{{URL::asset('vitrine/assets/img/services/layout.svg')}}" alt="">
                                        </div>

                                        <div class="content">
                                            <h4 class="title-block ">DRINKS</h4>
                                            <p class="p-absolute">Te qui alii inermis vivendum, an decore libris
                                                eum. Te mel dico
                                                alia wisi, cu
                                                vitae
                                                noluisse phaedrum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <!-- <div class="col-md-4 col-sm-6 service-content dsn-up">
                            <div class="services-item p-relative text-center background-section no-shadow">
                                <div class="bg-section background-section p-absolute w-100 h-100 over-hidden"></div>

                                <div class="box-content p-relative d-flex align-items-center h-100">
                                    <div class="content-inner">
                                        <div class="icon">
                                            <img src="{{URL::asset('vitrine/assets/img/services/idea.svg')}}" alt="">
                                        </div>

                                        <div class="content">
                                            <h4 class="title-block ">Branding</h4>
                                            <p class="p-absolute">Te qui alii inermis vivendum, an decore libris
                                                eum. Te mel dico
                                                alia wisi, cu
                                                vitae
                                                noluisse phaedrum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 service-content dsn-up">
                            <div class="services-item p-relative text-center background-section no-shadow">
                                <div class="bg-section background-section p-absolute w-100 h-100 over-hidden"></div>
                                <div class="box-content p-relative d-flex align-items-center h-100">
                                    <div class="content-inner">
                                        <div class="icon">
                                            <img src="{{URL::asset('vitrine/assets/img/services/graph.svg')}}" alt="">
                                        </div>

                                        <div class="content">
                                            <h4 class="title-block ">Media Planing</h4>
                                            <p class="p-absolute">Te qui alii inermis vivendum, an decore libris
                                                eum. Te mel dico
                                                alia wisi, cu
                                                vitae
                                                noluisse phaedrum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 service-content dsn-up">
                            <div class="services-item p-relative text-center background-section no-shadow">
                                <div class="bg-section background-section p-absolute w-100 h-100 over-hidden"></div>

                                <div class="box-content p-relative d-flex align-items-center h-100">
                                    <div class="content-inner">
                                        <div class="icon">
                                            <img src="{{URL::asset('vitrine/assets/img/services/layout.svg')}}" alt="">
                                        </div>

                                        <div class="content">
                                            <h4 class="title-block ">UX Design</h4>
                                            <p class="p-absolute">Te qui alii inermis vivendum, an decore libris
                                                eum. Te mel dico
                                                alia wisi, cu
                                                vitae
                                                noluisse phaedrum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 service-content dsn-up">
                            <div class="services-item p-relative text-center background-section no-shadow">
                                <div class="bg-section background-section p-absolute w-100 h-100 over-hidden"></div>

                                <div class="box-content p-relative d-flex align-items-center h-100">
                                    <div class="content-inner">
                                        <div class="icon">
                                            <img src="{{URL::asset('vitrine/assets/img/services/idea.svg')}}" alt="">
                                        </div>

                                        <div class="content">
                                            <h4 class="title-block ">Branding</h4>
                                            <p class="p-absolute">Te qui alii inermis vivendum, an decore libris
                                                eum. Te mel dico
                                                alia wisi, cu
                                                vitae
                                                noluisse phaedrum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>

            </section>

            <section id="evenements" class="our-work pt-section background-section section-margin dsn-arrow" data-dsn-col="3">
                <div class="container section-title-2">
                    <h2>SOIRÉES</h2>
                    <p>opium</p>
                </div>

                <div class="container-fluid">
                    <div class="work-container over-hidden">
                        <div class="slick-slider">
                            @foreach($event as $row)
                            <div class="work-item slick-slide p-relative over-hidden">
                                <div class="img-next-box p-absolute w-100 h-100" data-overlay="6">
                                    <img class="cover-bg-img" src="storage/imgs/{{ $row->photo}}" alt="">
                                </div>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="#ReservationDirect" data-id="{{ $row->id }}" data-nom="{{ $row->nom }}" data-date="{{ $row->date }}" id="BookDirectly" class="effect-ajax" data-dsn-ajax="work">

                                        <h5 class="cat">{{ $row->date }}</h5>
                                        <h4>{{ $row->nom }}</h4>
                                        <p>
                                            {{ $row->description }}.
                                        </p>
                                        <span><span>Réservez</span></span>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            <!--<div class="work-item slick-slide p-relative over-hidden">
                                <div class="img-next-box p-absolute w-100 h-100" data-overlay="2">
                                    <img class="cover-bg-img" src="{{URL::asset('vitrine/assets/img/project/project1/1.jpg')}}" alt="">
                                </div>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="project1.html" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">

                                        <h5 class="cat">Product</h5>
                                        <h4>Diesel Watch</h4>
                                        <p>Vin tries to reflect Diesel’s vision
                                            and combines the universe of the rock
                                            of the 80’s with a clear and essential
                                            design to be more </p>
                                        <span><span>Veiw Project</span></span>
                                    </a>

                                </div>
                            </div>

                            <div class="work-item slick-slide p-relative over-hidden">
                                <div class="img-next-box p-absolute w-100 h-100" data-overlay="5">
                                    <img class="cover-bg-img" src="{{URL::asset('vitrine/assets/img/project/project4/1.jpg')}}" alt="">
                                </div>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="project4.html" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">

                                        <h5 class="cat">Digital Art</h5>
                                        <h4>Intentional</h4>
                                        <p>Personal conceptual project.
                                            Reflecting on my personal style of paint illustration,
                                            on what were my initial ideas on it,</p>
                                        <span><span>Veiw Project</span></span>
                                    </a>

                                </div>
                            </div>

                            <div class="work-item slick-slide p-relative over-hidden">
                                <div class="img-next-box p-absolute w-100 h-100" data-overlay="5">
                                    <img class="cover-bg-img" src="{{URL::asset('vitrine/assets/img/project/project5/1.jpg')}}" alt=""
                                         data-dsn-position="85%">
                                </div>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="project5.html" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">

                                        <h5 class="cat">Fashion , Photography</h5>
                                        <h4>Blue Edition</h4>
                                        <p>Pink Tint Photosession for popular
                                            Model in Ukraine .</p>
                                        <span><span>Veiw Project</span></span>
                                    </a>

                                </div>
                            </div>

                            <div class="work-item slick-slide p-relative over-hidden">
                                <div class="img-next-box p-absolute w-100 h-100" data-overlay="5">
                                    <img class="cover-bg-img" src="{{URL::asset('vitrine/assets/img/project/project2/1.jpg')}}" alt=""
                                         data-dsn-position="38%">
                                </div>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="project2.html" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">

                                        <h5 class="cat">Photography</h5>
                                        <h4>Zero Untitled</h4>
                                        <p>A beautifully designed bike from
                                            Zero Motorcycles SR/S. Huggo Eccles
                                            from Untitled Motorcycles has created
                                            something spectacular to the eye.</p>
                                        <span><span>Veiw Project</span></span>
                                    </a>

                                </div>
                            </div>

                            <div class="work-item slick-slide p-relative over-hidden">
                                <div class="img-next-box p-absolute w-100 h-100" data-overlay="5">
                                    <img class="cover-bg-img" src="{{URL::asset('vitrine/assets/img/project/project6/1.jpg')}}" alt=""
                                         data-dsn-position="57%">
                                </div>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="project6.html" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">

                                        <h5 class="cat">Photography , Photography</h5>
                                        <h4>NFL Combine</h4>
                                        <p>Series of images used for Under Armour's NFL combine authentic
                                            apparel.</p>
                                        <span><span>Veiw Project</span></span>
                                    </a>

                                </div>
                            </div>

                            <div class="work-item slick-slide p-relative over-hidden">
                                <div class="img-next-box p-absolute w-100 h-100" data-overlay="7">
                                    <img class="cover-bg-img" src="{{URL::asset('vitrine/assets/img/project/project7/1.jpg')}}" alt=""
                                         data-dsn-position="57%">
                                </div>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="project7.html" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">

                                        <h5 class="cat">Video , Architecture</h5>
                                        <h4>EQUATOR CGI</h4>
                                        <p>Series of images used for Under Armour's NFL combine authentic
                                            apparel.</p>
                                        <span><span>Veiw Project</span></span>
                                    </a>

                                </div>
                            </div>

                            <div class="work-item slick-slide p-relative over-hidden">
                                <div class="img-next-box p-absolute w-100 h-100" data-overlay="7">
                                    <img class="cover-bg-img" src="{{URL::asset('vitrine/assets/img/project/project8/1.jpg')}}" alt=""
                                         data-dsn-position="34%">
                                </div>
                                <div class="item-border p-absolute"></div>
                                <div class="item-info p-absolute">
                                    <a href="project8.html" data-dsn-grid="move-up" class="effect-ajax"
                                       data-dsn-ajax="work">

                                        <h5 class="cat">Photography</h5>
                                        <h4>NATIVE UNION</h4>
                                        <p>Product Photography | NATIVE UNION Rose Collection .</p>
                                        <span><span>Veiw Project</span></span>
                                    </a>

                                </div>
                            </div>-->
                        </div>

                    </div>
                </div>
            </section>

            <!--<div class="box-gallery-vertical box-gallery-content  section-margin" data-dsn-animate="section"
                 data-dsn-duration="100%" data-dsn="color">
                <div class="mask-bg"></div>
                <div class="container">
                    <div class="row align-items-center h-100 dsn-z-index-2">
                        <div class="col-lg-6  dsn-z-index-2">
                            <div class="box-im" data-dsn-grid="move-up">
                                <img class="has-top-bottom" src="{{URL::asset('vitrine/assets/img/project/project1/1.jpg')}}" alt=""
                                     data-dsn-move="20%">
                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="box-info">
                                <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1"
                                     data-dsn-duration="170%" data-dsn-move="0%">
                                    Diesel
                                </div>
                                <div class="vertical-title ">
                                    <h2 class="dsn-text">Diesel Watch</h2>
                                </div>
                                <div class="bg-mask-content dsn-up">
                                    <div class="mask-bg-2 background-section"></div>
                                    <h6 class="dsn-up">Sometimes, we need to check the time, wondering when our
                                        work
                                        or meeting will finish, without getting caught by others.</h6>
                                    <p class="dsn-up">Vin tries to reflect Diesel’s vision and combines the universe
                                        of
                                        the rock of
                                        the 80’s with a clear and essential design to be more confident
                                        with its
                                        customers who need strong symbols through which express
                                        themselves</p>

                                </div>

                                <div class="d-inline-block dsn-up">

                                    <a href="#" class="link-custom d-flex a-item-center p-relative">
                                        <span class="link-text">Load More</span>
                                        <span class="link-circle p-absolute">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <section class="testimonials-2 testimonials-3 testimonials-new section-margin">

                <div class="container h-100 testimonials-inner background-section p-relative">
                    <div class="section-title-2" data-dsn-grid="move-section" data-dsn-move="-60" data-dsn-duration="100%" data-dsn-opacity="1" data-dsn-responsive="tablet">

                        <h2>Feedback from <br>our clients.</h2>
                    </div>
                    <div class="row align-items-center h-100">
                        <div class="col-lg-3 col-md-4 p-0">
                            <div class="nav-container">
                                <div class="testimonials-nav">
                                    <div class="testimonials-nav-item">
                                        <div class="testimonials-nav-item-inner">
                                            <img src="{{URL::asset('vitrine/assets/img/avatar/1.jpg')}}" alt="">

                                            <div class="info">
                                                <h5>Vikinglivet</h5>
                                                <h6>Founder & CEO, ABC</h6>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="testimonials-nav-item">
                                        <div class="testimonials-nav-item-inner">
                                            <img src="{{URL::asset('vitrine/assets/img/avatar/2.jpg')}}" alt="">

                                            <div class="info">
                                                <h5>Muhammad Khedr</h5>
                                                <h6>Motion Designer</h6>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="testimonials-nav-item">
                                        <div class="testimonials-nav-item-inner">
                                            <img src="{{URL::asset('vitrine/assets/img/avatar/3.jpg')}}" alt="">

                                            <div class="info">
                                                <h5>Caeleth</h5>
                                                <h6>Web Designer</h6>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="testimonials-nav-item">
                                        <div class="testimonials-nav-item-inner">
                                            <img src="{{URL::asset('vitrine/assets/img/avatar/4.jpg')}}" alt="">

                                            <div class="info">
                                                <h5>w0anerges</h5>
                                                <h6>Founder & CEO, ABC</h6>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="testimonials-nav-item">
                                        <div class="testimonials-nav-item-inner">
                                            <img src="{{URL::asset('vitrine/assets/img/avatar/1.jpg')}}" alt="">

                                            <div class="info">
                                                <h5>yancyv8</h5>
                                                <h6>Project Management </h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-8">
                            <div class="testimonials-main-content dsn-is-not-fade">
                                <div class="testimonials-item">
                                    <div class="top-box">
                                        <h5 class="sm-title-block">Customer Support</h5>

                                        <p class="p-larg">"I love the design, really reach details. It inspired me to
                                            learn more about web design. The code quality looks great as well. Can't
                                            wait to launch my site. Thanks design_grid for such an awesome one. Keep
                                            it up."</p>

                                    </div>
                                </div>

                                <div class="testimonials-item">
                                    <div class="top-box">
                                        <h5 class="sm-title-block">Design Quality</h5>

                                        <p class="p-larg">I love the design, really reach details. It inspired me to
                                            learn more about web design. The code quality looks great as well. Can't
                                            wait to launch my site. Thanks design_grid for such an awesome one. Keep
                                            it up.</p>
                                    </div>
                                </div>

                                <div class="testimonials-item">
                                    <div class="top-box">
                                        <h5 class="sm-title-block">Design Quality</h5>
                                        <p class="p-larg">Absolutely happy with the slick design and customer
                                            support!
                                            Suggestion: the theme could do with a little more customization, like
                                            different font types for instance and social sharing options under each
                                            post for easy sharing</p>
                                    </div>
                                </div>

                                <div class="testimonials-item">
                                    <div class="top-box">
                                        <h5 class="sm-title-block">Customer Support</h5>
                                        <p class="p-larg">This is not only a cool theme, that helped me quickly
                                            create a website that looks much more expensive than what it costs, but
                                            also technical support.

                                            When I encountered some difficulties in setting up a theme, the guys
                                            supported me and did everything so that I could solve my problems.</p>
                                    </div>
                                </div>


                                <div class="testimonials-item">
                                    <div class="top-box">
                                        <h5 class="sm-title-block">Customer Support</h5>

                                        <p class="p-larg">I browse Themeforest looking for new ways to revamp my
                                            site all the time. I came across this one for its looks and purchased it
                                            right away. I had a few issues early but the support team made sure to
                                            help in a very timely manner and now I'm more than satisfied.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>-->

            <section class="our-blog our-blog-classic section-margin p-relative" data-dsn-animate="section">
                <div class="container section-title-2">
                    <h2>Nos Actualités </h2>
                    <p>le plus pertinent</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 dsn-up blog-classic-item">
                            <div class=" blog-item p-relative d-flex align-items-center h-100 w-100">
                                <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                     data-image-src="{{URL::asset('vitrine/assets/img/pattern.png')}}">
                                    <img src="{{URL::asset('vitrine/assets/img/blog/1.jpg')}}" alt="" class="cover-bg-img">
                                </div>
                                <div class="box-content p-relative">
                                    <div class="box-content-body">
                                        <div class="entry-date">
                                            <a href="#">March - 17th 2020</a>
                                        </div>
                                        <h4 class="title-block"><a href="#">Will you be attending Affiliate Summit
                                            Europe?</a></h4>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla
                                            soluta
                                            pariatur
                                            ducimus quas eaque error sunt natus.</p>
                                        <a href="#" class="link-vist p-relative">

                                            <span class="link-vist-text">Load More</span>

                                            <div class="link-vist-arrow">
                                                <svg viewBox="0 0 80 80">
                                                    <polyline points="19.89 15.25 64.03 15.25 64.03 59.33">
                                                    </polyline>
                                                    <line x1="64.03" y1="15.25" x2="14.03" y2="65.18"></line>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 dsn-up blog-classic-item">
                            <div
                                    class="blog-item p-relative blog-item-active d-flex align-items-center h-100 w-100">
                                <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                     data-image-src="vitrine/assets/img/pattern.png">
                                    <img src="{{URL::asset('vitrine/assets/img/blog/2.jpg')}}" alt="" class="cover-bg-img">
                                </div>
                                <div class="box-content p-relative">
                                    <div class="box-content-body">
                                        <div class="entry-date">
                                            <a href="#">March - 17th 2020</a>
                                        </div>
                                        <h4 class="title-block"><a href="#">Will you be attending Affiliate Summit
                                            Europe?</a></h4>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla
                                            soluta
                                            pariatur
                                            ducimus quas eaque error sunt natus.</p>
                                        <a href="#" class="link-vist p-relative">

                                            <span class="link-vist-text">Load More</span>

                                            <div class="link-vist-arrow">
                                                <svg viewBox="0 0 80 80">
                                                    <polyline points="19.89 15.25 64.03 15.25 64.03 59.33">
                                                    </polyline>
                                                    <line x1="64.03" y1="15.25" x2="14.03" y2="65.18"></line>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 dsn-up blog-classic-item">
                            <div class=" blog-item p-relative d-flex align-items-center h-100 w-100">
                                <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                     data-image-src="{{URL::asset('vitrine/assets/img/pattern.png')}}">
                                    <img src="{{URL::asset('vitrine/assets/img/blog/3.jpg')}}" alt="" class="cover-bg-img">
                                </div>
                                <div class="box-content p-relative">
                                    <div class="box-content-body">
                                        <div class="entry-date">
                                            <a href="#">March - 17th 2020</a>
                                        </div>
                                        <h4 class="title-block"><a href="#">Will you be attending Affiliate Summit
                                            Europe?</a></h4>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla
                                            soluta
                                            pariatur
                                            ducimus quas eaque error sunt natus.</p>
                                        <a href="#" class="link-vist p-relative">

                                            <span class="link-vist-text">Load More</span>

                                            <div class="link-vist-arrow">
                                                <svg viewBox="0 0 80 80">
                                                    <polyline points="19.89 15.25 64.03 15.25 64.03 59.33">
                                                    </polyline>
                                                    <line x1="64.03" y1="15.25" x2="14.03" y2="65.18"></line>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="our-blog our-blog-classic section-margin p-relative" data-dsn-animate="section">
                <div class="container section-title-2">
                    <h2>Contactez Nous</h2>
                    <p>a votre service</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="dsn-up blog-classic-item">
                            <form action="/contact" method="POST" autocomplete="off">
                                @csrf
                                    <div class="input__wrap controls">
                                            <!-- <div class="row" id="conatact-name" style="flex-direction : column"> -->
                                                <div class="form-group">
                                                    <div class="entry" style="margin-left : 30px">
                                                        <label>Nom</label>
                                                        <input id="contact-name-input" type="text"
                                                        name="nom" 
                                                        autocomplete="off"
                                                        placeholder="Nom Prenom" 
                                                        required="required" 
                                                        data-error="name is required."
                                                        >
                                                    </div>
                                                </div>
                                            <!-- </div> -->
                                            <!-- <div class="row" id="conatact-email"> -->
                                                <div class="form-group">
                                                    <div class="entry" style="margin-left : 30px">
                                                        <label>Email</label>
                                                        <input id="contact-email-input" type="email"
                                                        name="email" 
                                                        autocomplete="off"
                                                        placeholder="Email" 
                                                        required="required" 
                                                        data-error="email is required."
                                                        >
                                                    </div>
                                                </div>
                                            <!-- </div> -->
                                            <!-- <div class="row" id="conatact-message"> -->
                                                <div class="form-group">
                                                    <div class="entry" style="margin-left : 30px">
                                                        <label>Message</label>
                                                        <textarea
                                                            id="contact-message-input"  
                                                            name="message" 
                                                            autocomplete="off"
                                                            placeholder="Decrire votre problem ou affirmation" 
                                                            required="required" 
                                                            data-error="message is required."
                                                        ></textarea>
                                                        <!-- <input id="contact-message-input" type="text"
                                                        name="message" 
                                                        autocomplete="off"
                                                        placeholder="Decrire votre problem ou affirmation" 
                                                        required="required" 
                                                        data-error="message is required."
                                                        > -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                            <div style="margin-left : 45px">
                                                <div class="text-center">
                                                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                                        <button class="btn-form" type="submit">
                                                            <span class="label" id="span">Envoyer</span>
                                                            <span class="icon-c"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- </div> -->
                                        <!-- </div> -->
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="brand-client section-margin">
                <div class="container section-title-2">
                    <h2>Your successful, <br> our reputation</h2>
                    <p>OUR CLIENTS</p>
                </div>
                <div class="container">
                    <div class="wapper-client">
                        <div class="logo-box">
                            <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                 data-image-src="{{URL::asset('vitrine/assets/img/pattern.png')}}"></div>
                            <img src="{{URL::asset('vitrine/assets/img/logo/1.png')}}" alt="">

                            <div class="info">
                                <div class="content">
                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="logo-box">
                            <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                 data-image-src="{{URL::asset('vitrine/assets/img/pattern.png')}}"></div>
                            <img src="{{URL::asset('vitrine/assets/img/logo/2.png')}}" alt="">

                            <div class="info">
                                <div class="content">
                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="logo-box">
                            <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                 data-image-src="{{URL::asset('vitrine/assets/img/pattern.png')}}"></div>
                            <img src="{{URL::asset('vitrine/assets/img/logo/3.png')}}" alt="">

                            <div class="info">
                                <div class="content">

                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="logo-box">
                            <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                 data-image-src="{{URL::asset('vitrine/assets/img/pattern.png')}}"></div>
                            <img src="{{URL::asset('vitrine/assets/img/logo/4.png')}}" alt="">

                            <div class="info">
                                <div class="content">
                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="logo-box">
                            <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                 data-image-src="{{URL::asset('vitrine/assets/img/pattern.png')}}"></div>
                            <img src="{{URL::asset('vitrine/assets/img/logo/5.png')}}" alt="">

                            <div class="info">
                                <div class="content">
                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="logo-box">
                            <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                 data-image-src="{{URL::asset('vitrine/assets/img/pattern.png')}}"></div>
                            <img src="{{URL::asset('vitrine/assets/img/logo/6.png')}}" alt="">

                            <div class="info">
                                <div class="content">
                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="logo-box">
                            <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                 data-image-src="{{URL::asset('vitrine/assets/img/pattern.png')}}"></div>
                            <img src="{{URL::asset('vitrine/assets/img/logo/1.png')}}" alt="">

                            <div class="info">
                                <div class="content">
                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="logo-box">
                            <div class="after-bg p-absolute w-100 h-100 cover-bg"
                                 data-image-src="{{URL::asset('vitrine/assets/img/pattern.png')}}"></div>
                            <img src="{{URL::asset('vitrine/assets/img/logo/3.png')}}" alt="">

                            <div class="info">
                                <div class="content">
                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

        </div>

        <section class="next-up next-project p-relative section-padding" id="ReservationDirect">
            <div class="bg-section p-absolute w-100 h-100 over-hidden">
                <div class="h-100 before-z-index" data-dsn-grid="move-up" data-overlay="5">
                    <img class="cover-bg-img has-top-bottom" src="{{URL::asset('vitrine/assets/img/bg-2.jpg')}}" alt="">
                </div>
            </div>
            <div class="container-fluid p-relative dsn-z-index-2">
                <div class="row margin-lr-100">
                    <div class="col-lg-6 col-md-7 offset-lg-6 offset-md-5">
                        <div class="next-up-inner p-relative background-section">
                            <h3 class="title">Reserver<br> maintenant<br></h3>
                            <p class="mt-2">Choisissez parmi les offres <u>ci-dessus</u></p>
                            <a class="btn background-theme p-relative effect-ajax " href="#accueil">
                                <span> Découvrir maintenant</span>
                            </a>
                            <!-- <button class="btn background-theme p-relative effect-ajax "
                               data-dsn="parallax" id="booking" style="cursor : pointer"><span>Découvrir maintenant</span></button> -->
                               <br><br><br>
                               <form action="/reserve" method="POST">
                                @csrf
                                    <div class="messages"></div>
                                    <div class="input__wrap controls">
                                        
                                        <div class="row" id="Input1" style="display: none;">
                                            <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="entry">
                                                            <label>Event</label>
                                                            <input id="event" type="text" name="evenement" placeholder="Événement" required="required" data-error="event is required." value="" disabled>
                                                            
                                                        </div>
                                                        <!-- <div class="entry">
                                                            <select onchange="handleSelectChange({{$event}})" id="evenements" name="evenement" required class="form-control">
                                                                <option disabled selected value="0">Choisissez une événement</option>
                                                                @if (count($event) > 0)
                                                                    @foreach ($event as $evenement)
                                                                        <option value="{{ $evenement->id }}">{{ $evenement->nom }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div> -->

                                                        <input type="hidden" name="id_event" id="id_event" value="">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                            </div>    
                                        
                                            <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="entry">
                                                            <label>Date</label>
                                                            <input disabled id="date" type="date" name="date" placeholder="jj/mm/aaaa" required="required" data-error="date is required." value="">
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                            </div>

                                        </div>


                                        <div class="row" id="Input2" style="display: none;">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Nom Prenom</label>
                                                        <input id="form_email" type="text" name="nom_prenom"
                                                            placeholder="e.g Flen ben flen" required="required"
                                                            data-error="full-name is required">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Télephone</label>
                                                        <input id="form_email" type="tel" name="tel"
                                                            pattern="[0-9]{2}[0-9]{3}[0-9]{3}"
                                                            placeholder="e.g +216 25-830-605" required="required"
                                                            data-error="Phone number is required">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        
                                        
                                            
                                        </div>

                                        <div class="row" id="Input3" style="display: none;">
                                        
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Nombre d'homme</label>
                                                        <input id="form_name" type="number" name="nbr_gar" min="0"
                                                            placeholder="minimum 1 si 0 fille" required="required"
                                                            data-error="men's number is required">
                                                    </div>
                                                    <div class="help-block with-errors"></div>

                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="entry">
                                                        <label>Nombre de femme</label>
                                                        <input id="form_email" type="number" name="nbr_fille" min="0"
                                                            placeholder="minimum 1 si 0 garçon" required="required"
                                                            data-error="women's number is required">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <p style="margin-bottom : 10px;border-radius : 10px;font-size : 1;color : red;padding : 5px 10px; background : rgba(255,0,0,.1);width : 100%" id="people-number-error" class="d-none"><u>au moins 1 personne doit étre présent</u></p>

                                        </div>

                                        <div class="row" id="suivant" style="display: none;">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                                        <button class="btn-form">
                                                            <span class="label">Next</span>
                                                            <span class="icon-c"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row" id="NewSuivant" style="display: none;">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                                        <button class="btn-form">
                                                            <span class="label" id="span">Next</span>
                                                            <span class="icon-c"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                           <div class="infos d-flex a-item-center bd-highlight">
                                <!-- <div class="infos_content mr-auto"> See More <br> Works!</div>
                                <div class="infos_button ">
                                    <a href="work.html" class="effect-ajax image-zoom " data-dsn="parallax">
                                        ok</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--footer-->
        

<!-- Optional JavaScript -->
<!--Script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<script>
$(document).on("click", "#booking", function () {
    $("#booking").hide();
    $("#Input1").show();
    $("#suivant").show();
});

$(document).on("click", "#suivant", function () {
    $("#Input2").show();
    $("#suivant").hide();
    $('#NewSuivant').show();
});

$(document).on("click", "#NewSuivant", function () {
    $("#Input3").show();
    $("#span").html("Confirm");
});

$(document).on("click" ,"#BookDirectly" , function(){
    var id = $(this).data('id');
    var nom = $(this).data('nom');
    var date = $(this).data('date');
    $("#booking").hide();
    $("#Input1").show();
    $("#Input2").show();
    $('#NewSuivant').show();
    $("#id_event").val(id);
    $("#date").val(date);
    $("#event").val(nom);
});

const handleSelectChange = (events) => {
    const date = events.find( event => event.id == document.querySelector('select#evenements').value )?.date || '' 
    document.querySelector('input[type="date"]').value = date;
}

document.forms[document.forms.length-1].addEventListener('submit',e => {
    e.preventDefault();
    const peopleError = document.querySelector('#people-number-error');
    console.log(peopleError)
    if (checkPeople()){
        peopleError.classList.add('d-none')
        document.querySelector('input[name="evenement"]').disabled = false;
        document.querySelector('input[name="date"]').disabled = false;
        e.target.submit();
    }
    peopleError.classList.remove('d-none')  
    
})

checkPeople = () => {
        const girlsValue = document.querySelector('input[name="nbr_gar"]').value
        const boysValue = document.querySelector('input[name="nbr_fille"]').value
        const boys = boysValue && Number(boysValue)
        const girls = girlsValue && Number(girlsValue)
        
        if ((!boys && !girls) || (boys+girls < 1)){
            document.querySelector(".open-modal")?.click();
            return false
        }

        return true
    }

    // window.addEventListener('scroll',() => {
    //     console.log('scrolling')
    //     // document.querySeletor('.dsn-active')?.classList.remove('dsn-active');
    // })

    // document.querySelector('.main-root').onscroll = () => {
    //     console.log('scrolling')
    // }


</script>
@endsection