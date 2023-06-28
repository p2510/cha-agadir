<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Cha agadir " />

    <meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
    <meta name="author" content="ThemeMascot" />
    <!-- Page Title -->
    <title>Cha Agadir</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('images/logo.svg') }}" rel="shortcut icon" type="image/svg">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{ asset('app-assets/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('app-assets/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('app-assets/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('app-assets/css/css-plugin-collections.css') }}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{ asset('app-assets/css/menuzord-megamenu.css') }}" rel="stylesheet" />
    <link id="menuzord-menu-skins" href="{{ asset('app-assets/css/menuzord-skins/menuzord-boxed.css') }}"
        rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{ asset('app-assets/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('app-assets/css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('app-assets/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('app-assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{ asset('app-assets/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app-assets/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app-assets/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css" />

    <!-- CSS | Theme Color -->
    <link href="{{ asset('app-assets/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">
    <!-- external javascripts -->
    <script src="{{ asset('app-assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/bootstrap.min.js') }}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ asset('app-assets/js/jquery-plugin-collection.js') }}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ asset('app-assets/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}></script>
<![endif]-->
<style>
    .iti {
        width: 100%;
        display: block;
    }
</style>



<body class="has-side-panel side-panel-right fullwidth-page">
    <div id="wrapper" class="clearfix">


        <!-- Header -->
        <header id="header" class="header">
            <div class="header-top bg-theme-colored border-top-theme-colored2-2px sm-text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1 ">

                            <div class="widget">
                                <a href=""></a>
                                <select class="language-selector" id="switchlang">
                                    <option value="fr" @if (App::currentLocale() == 'fr') selected @endif>Français
                                    </option>
                                    <option value="en" @if (App::currentLocale() == 'en') selected @endif>English
                                    </option>
                                </select>
                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="widget">

                                <ul class="styled-icons icon-sm icon-white">

                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="widget">
                                <ul class="list-inline text-right flip sm-text-center">

                                    <li class="text-white" style="position:relative; top:3px;">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 14q.825 0 1.413-.588Q14 12.825 14 12t-.587-1.413Q12.825 10 12 10q-.825 0-1.412.587Q10 11.175 10 12q0 .825.588 1.412Q11.175 14 12 14Zm-4 4h8v-.575q0-.6-.325-1.1q-.325-.5-.9-.75q-.65-.275-1.337-.425Q12.75 15 12 15t-1.438.15q-.687.15-1.337.425q-.575.25-.9.75q-.325.5-.325 1.1Zm10 4H6q-.825 0-1.412-.587Q4 20.825 4 20V4q0-.825.588-1.413Q5.175 2 6 2h7.175q.4 0 .763.15q.362.15.637.425l4.85 4.85q.275.275.425.637q.15.363.15.763V20q0 .825-.587 1.413Q18.825 22 18 22Zm0-2V8.85L13.15 4H6v16ZM6 20V4v16Z" />
                                        </svg>
                                    </li>
                                    <li>
                                        <a class="text-white"
                                            href="{{ route('contact.create') }}">{{ __('header.info1') }}</a>
                                    </li>

                                    <li class="text-white">|</li>
                                    <li>
                                        <a class="text-white"
                                            href="{{ route('about.index') }}">{{ __('header.info2') }}</a>
                                    </li>

                                    <li class="text-white " id='elem'>|</li>
                                    <li class="text-white " id='elem' style="position:relative; top:3px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M4.05 21q-.45 0-.75-.3t-.3-.75V15.9q0-.35.225-.613q.225-.262.575-.337l3.45-.7q.35-.05.713.062q.362.113.587.338L10.9 17q1.9-1.15 3.488-2.725q1.587-1.575 2.637-3.375L14.6 8.45q-.225-.225-.288-.513q-.062-.287-.012-.637l.65-3.5q.05-.35.325-.575Q15.55 3 15.9 3h4.05q.45 0 .75.3t.3.75q0 3.225-1.438 6.287q-1.437 3.063-3.8 5.425q-2.362 2.363-5.424 3.8Q7.275 21 4.05 21ZM17.975 9q.425-.975.65-1.975q.225-1 .35-2.025H16.75l-.425 2.35Zm-8.95 8.95L7.35 16.275L5 16.75v2.2q1.025-.075 2.038-.325q1.012-.25 1.987-.675ZM17.975 9Zm-8.95 8.95Z" />
                                        </svg>
                                    </li>

                                    <li class=" text-white" style="font-weight:bold;" id='elem'>
                                        (+212) 0528-241-006 / 240-155
                                    </li>
                                    <br id='separate'>
                                    <li>
                                        <a href="{{ route('course.index') }}"
                                            class="btn btn-dark btn-circled btn-theme-colored2 btn-sm  pr-30 pl-30 "
                                            style="font-weight: bold; animation: blink 2s ease-in-out infinite;">{{ __('header.info3') }}</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                    <div class="container">
                        <div style="display:flex;justify-content:center;width:100%;">

                            @if (count($logo_url) > 0)
                                @foreach ($logo_url as $item)
                                    <a class="menuzord-brand  flip mt-20 mt-sm-10 mb-sm-20 pt-5"
                                        href="{{ route('home') }}"><img
                                            src="{{ url('storage') }}/{{ $item->logo }}" alt=""></a>
                                @endforeach
                            @endif
                        </div>

                        <nav id="menuzord-right" class="menuzord default theme-colored">

                            <ul class="menuzord-menu list-unstyled">

                                <li @if (Route::current()->getName() == 'home') class='active' @endif>
                                    <a href="{{ route('home') }}" class="font-14 text-uppercase"
                                        style="padding: 10px 10px 10px 10px; ">{{ __('header.title1') }}</a>
                                </li>
                                <li><a href="#home" class="font-14 text-uppercase"
                                        style="padding: 10px 10px 10px 10px;">{{ __('header.title2') }}</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('director.index') }}">{{ __('header.subtitle1') }}</a>
                                        </li>
                                        <li><a href="{{ route('about.index') }}">{{ __('header.subtitle2') }}</a>
                                        </li>
                                        <li><a href="{{ route('index.team') }}">{{ __('header.subtitle3') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ route('index.professor') }}">{{ __('header.subtitle33') }}</a>
                                        </li>
                                        <li><a href="{{ route('campus.index') }}">{{ __('header.subtitle4') }}</a>
                                        </li>
                                        <li><a href="{{ route('evenement.index') }}">{{ __('header.subtitle5') }}</a>
                                        </li>
                                        <li><a
                                                href="{{ route('blog-actualités.index') }}">{{ __('header.subtitle6') }}</a>
                                        </li>
                                        <li><a href="{{ route('media.index') }}">{{ __('header.subtitle7') }}</a>
                                        </li>
                                        <li><a href="{{ route('video.index') }}">{{ __('header.subtitle8') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li @if (Route::current()->getName() == 'course.index') class="active" @endif><a
                                        href="{{ route('course.index') }}" style="padding: 10px 10px 10px 10px;"
                                        class="font-14 text-uppercase d-inline">{{ __('header.title3') }}</a>
                                    <ul class="dropdown" style="padding-left: -50px;">
                                        <li style="padding-left: -50px;">
                                            <a href="{{ route('degree.show', "Ingénieur d'État") }}"
                                                style="padding-left: -50px">{{ __('header.subtitle9') }}</a>
                                            <ul class="dropdown">
                                                <li><a
                                                        href="{{ route('course.details', 'Horticulture') }}">{{ __('header.subtitle10') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('course.details', 'Protection des Plantes') }}">{{ __('header.subtitle11') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('course.details', 'Architecture du Paysage') }}">
                                                        {{ __('header.subtitle12') }}</a></li>

                                            </ul>

                                        </li>
                                        <li><a
                                                href="{{ route('degree.show', 'Master') }}">{{ __('header.subtitle13') }}</a>
                                            <ul class="dropdown">
                                                <li><a
                                                        href="{{ route('course.details', 'Water & Sustainable Horticulture') }}">{{ __('header.subtitle14') }}</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('course.details', 'Architecture du Paysage') }}">{{ __('header.subtitle15') }}</a>
                                                </li>
                                                <li><a href="{{ route('course.details', 'Locust Science') }}">
                                                        {{ __('header.subtitle16') }}</a></li>
                                                <li><a href="{{ route('course.details', 'Sciences Acridiennes') }}">
                                                        {{ __('header.subtitle17') }}</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{ route('degree.show', 'Licence pro') }}">
                                                {{ __('header.subtitle18') }}</a>
                                            <ul class="dropdown">
                                                <li><a
                                                        href="{{ route('course.details', 'Horticulture Ornementale et Espaces verts') }}">
                                                        {{ __('header.subtitle19') }} <br class="break">
                                                        {{ __('header.subtitle20') }} </a></li>
                                                <li><a href="{{ route('course.details', 'Aménagement du Paysage') }}">{{ __('header.subtitle21') }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('degree.show', 'Technicien sp.') }}">{{ __('header.subtitle22') }}
                                            </a>
                                            <ul class="dropdown">
                                                <li><a
                                                        href="{{ route('course.details', 'Technico-Commercial en Productions Horticoles') }}">{{ __('header.subtitle23') }}
                                                        <br class="break">{{ __('header.subtitle24') }} </a></li>
                                                <li><a
                                                        href="{{ route('course.details', 'Conditionnement et Valorisation des Produits Agricoles') }}">{{ __('header.subtitle25') }}
                                                        <br class="break">{{ __('header.subtitle26') }} </a>
                                                </li>
                                                <li><a
                                                        href="{{ route('course.details', 'Cultures Ornementales et Aménagement des Espaces Verts') }}">{{ __('header.subtitle27') }}
                                                        <br class="break"> {{ __('header.subtitle28') }}</a></li>
                                                <li><a href="Aquaculture">{{ __('header.subtitle29') }}</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a
                                                href="{{ route('course.details', 'Programme Doctoral') }}">{{ __('header.subtitle30') }}</a>

                                        </li>
                                        <li><a href="{{ route('degree.show', 'Formation Exécutive') }}">{{ __('header.subtitle31') }}
                                                <span class="label label-danger">New</span></a>
                                            <ul class="dropdown">
                                                <li><a href="{{ route('course.details', 'Farm Manager') }}">
                                                        {{ __('header.subtitle32') }}</a>
                                                </li>
                                            </ul>
                                        </li>


                                    </ul>
                                </li>

                                <li><a href="{{ route('search.index') }}" style="padding: 10px 10px 10px 10px;"
                                        class="font-14 text-uppercase">{{ __('header.title4') }}</a>
                                <li><a href="{{ route('center.index') }}" style="padding: 10px 10px 10px 10px;"
                                        class="font-14 text-uppercase">{{ __('header.title5') }}</a>
                                <li><a href="{{ route('experience.index') }}" style="padding: 10px 10px 10px 10px;"
                                        class="font-14 text-uppercase">{{ __('header.title6') }}</a>
                                <li><a href="{{ route('impact.index') }}" style="padding: 10px 10px 10px 10px;"
                                        class="font-14 text-uppercase">{{ __('header.title7') }}</a>
                                <li><a href="{{ route('business.index') }}" style="padding: 10px 10px 10px 10px;"
                                        class="font-14 text-uppercase">{{ __('header.title8') }}</a>

                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </header>

        @if (session()->has('successNewsletter'))
            <div class="container">
                <div class="row">


                    <h6 class='alert alert-success col-xs-12 col-sm-8 col-md-6 ' role="alert">
                        Your email has been successfully registered!
                    </h6>
                </div>
            </div>
        @endif
        @if ($errors->any())
            <div class="container">
                <div class="row">
                    <ul class='alert alert-danger col-xs-12 col-sm-8 col-md-6 ' role="alert">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <style>
            @media only screen and (min-width:500px) {
                .break {
                    display: none;
                }


            }

            @media only screen and (max-width:500px) {
                .break {
                    display: block;
                }


            }

            @media screen and (max-width: 768px) {
                #elem {
                    display: none;

                }
            }

            @media screen and (min-width: 768px) {
                #separate {
                    display: none;
                }
            }

            @media screen and (min-width: 992px) and (max-width: 1199px) {
                .menuzord-menu li a {
                    font-size: 11px !important;
                }
            }

            @media (max-width: 992px) {
                .menuzord-menu>li {
                    padding: 0px 0 !important;
                }

                .menuzord-menu>li {
                    padding: 0px 0 !important;
                }

            }

            @media (max-width: 992px) {

                /* Responsive menu container */
                .menuzord-responsive.menuzord {
                    padding: 0;
                }

                /* Brand */
                .menuzord-responsive .menuzord-brand {
                    margin: 8px 30px 10px 20px;
                    font-size: 20px;
                    line-height: 1.55;
                }

                /* Show/hide button */
                .menuzord-responsive .showhide {
                    margin: 0;
                }

                /* Menu */
                .menuzord-responsive .menuzord-menu {
                    width: 100%;
                    float: left !important;
                }

                /* scrollable menu*/
                .menuzord-responsive .menuzord-menu.scrollable {
                    overflow-y: auto;
                    -webkit-overflow-scrolling: touch;
                }

                .menuzord-responsive .menuzord-menu.scrollable>.scrollable-fix {
                    display: block;
                }

                /* Menu items */
                .menuzord-responsive .menuzord-menu>li {
                    width: 100%;
                    display: block;
                    position: relative;
                }

                .menuzord-responsive .menuzord-menu>li>a {
                    width: 100%;
                    padding: 12px 20px;
                    display: block;
                    border-bottom: solid 1px #f0f0f0;
                }

                .menuzord-responsive .menuzord-menu>li:first-child>a {
                    border-top: solid 1px #f0f0f0;
                }

                /* Dropdown */
                .menuzord-responsive .menuzord-menu ul.dropdown,
                .menuzord-responsive .menuzord-menu ul.dropdown li ul.dropdown {
                    width: 100%;
                    left: 0;
                    position: static;
                    border: none;
                    background: #fff;
                    float: left;
                }

                /* Dropdown items */
                .menuzord-responsive .menuzord-menu ul.dropdown li {
                    position: relative;
                }

                .menuzord-responsive .menuzord-menu ul.dropdown li a {
                    border-bottom: solid 1px #f0f0f0;
                }

                .menuzord-responsive .menuzord-menu.menuzord-indented>li>ul.dropdown>li>a {
                    padding-left: 40px !important;
                }

                .menuzord-responsive .menuzord-menu.menuzord-indented>li>ul.dropdown>li>ul.dropdown>li>a {
                    padding-left: 60px !important;
                }

                .menuzord-responsive .menuzord-menu.menuzord-indented>li>ul.dropdown>li>ul.dropdown>li>ul.dropdown>li>a {
                    padding-left: 80px !important;
                }

                .menuzord-responsive .menuzord-menu.menuzord-indented>li>ul.dropdown>li:hover>a {
                    padding-left: 50px !important;
                }

                .menuzord-responsive .menuzord-menu.menuzord-indented>li>ul.dropdown>li>ul.dropdown>li:hover>a {
                    padding-left: 70px !important;
                }

                .menuzord-responsive .menuzord-menu.menuzord-indented>li>ul.dropdown>li>ul.dropdown>li>ul.dropdown>li:hover>a {
                    padding-left: 90px !important;
                }

                /* Dropdown/megamenu indicators */
                .menuzord-responsive .menuzord-menu li .indicator {
                    width: 60px;
                    height: 45px;
                    position: absolute;
                    right: 0;
                    top: 0;
                    font-size: 22px;
                    text-align: center;
                    line-height: 43px;
                    border-left: solid 1px #f5f5f5;
                }

                .menuzord-responsive .menuzord-menu li ul.dropdown li .indicator {
                    height: 38px;
                    right: 0;
                    top: 0;
                    font-size: 18px;
                    line-height: 36px;
                }

                /* Megamenu */
                .menuzord-responsive .menuzord-menu>li>.megamenu {
                    width: 100% !important;
                    left: 0 !important;
                    position: static;
                    border-top: none;
                    border-bottom: solid 1px #f0f0f0;
                }

                .menuzord-responsive .menuzord-menu>li>.megamenu .megamenu-row [class*="col"] {
                    float: none;
                    display: block;
                    width: 100% !important;
                    margin-left: 0;
                    margin-top: 15px;
                }

                .menuzord-responsive .menuzord-menu>li>.megamenu .megamenu-row:first-child [class*="col"]:first-child {
                    margin-top: 0;
                }

                .menuzord-responsive .menuzord-menu>li>.megamenu .megamenu-row {
                    margin-top: 0;
                }

                /* Search field */
                .menuzord-responsive .menuzord-menu>li.search form {
                    width: 100%;
                    margin: 4px 0;
                    padding: 10px 16px !important;
                }

                .menuzord-responsive .menuzord-menu>li.search form input[type="text"] {
                    width: 100%;
                }

                /* Tabs */
                .menuzord-responsive .menuzord-tabs-nav {
                    width: 100%;
                }

                .menuzord-responsive .menuzord-tabs-content {
                    width: 100%;
                }
            }


            .language-selector {
                background-color: transparent !important;
                color: white;
            }

            .language-selector option {
                background-color: #1F334560;
            }
        </style>
        <script>
            const switchlang = document.getElementById('switchlang');
            switchlang.addEventListener('change', () => {
                window.location.href = `/langue/${switchlang.value}`
            })
            $(document).ready(function() {
                let initShow = 0;
                let showHide = document.querySelector('.showhide');
                let em = document.getElementsByTagName('em');

                showHide.addEventListener('click', () => {
                    initShow++
                    if (initShow % 2 === 0) {
                        em[0].style.transform = 'rotate(0deg)';
                        em[1].style.transform = 'rotate(0deg)';
                        showHide.appendChild(document.createElement("em"))
                    } else {
                        em[0].style.transform = 'rotate(45deg)';
                        em[1].style.transform = 'rotate(-45deg) translate(4.5px ,-4.3px)';
                        showHide.removeChild(em[2])
                    }
                })
            });
        </script>






        <div class="main-content">
            <!-- Section: inner-header -->
            <section class="inner-header divider " style="background-color:rgb(45, 69, 88);">
                <div class=" pt-10 pb-10 ">
                    <!-- Section Content -->
                    <div class="section-content  ">
                        <div class="row">
                            <div class="col-md-6">
                                <ol class="breadcrumb text-left mt-10 white">
                                    <li><a href="/">{{ __('header.title1') }}</a></li>
                                    <li><a href="{{ route('course.index') }}">{{ __('header.title3') }}</a></li>

                                    <li class='text-white'>
                                        @foreach ($courses as $course)
                                            {{ $course->name }}
                                        @endforeach
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Section: Services Details -->
            @foreach ($courses as $course)
                <section style="background-color:rgb(45, 69, 88); margin-top:-34px;">
                    <div class="">
                        <div class="row head_course ">
                            <h3 class="text-uppercase mt-0 mb-30 " style="color:white;">{{ $course->name }} -
                                @if (App::isLocale('en'))
                                    {{ $course->degree->name_en }}
                                @else
                                    {{ $course->degree->name }}
                                @endif
                            </h3>
                            <div class="col-sm-12 col-md-9">
                                <div class="single-service"
                                    style="background-color:rgb(249, 249, 249); border-radius:5px;">
                                    <!--<img src="{{ url('storage') }}/{{ $course->photo }}" style="width:100%;" alt="">-->
                                    <ul class="list-inline mt-20 mb-15">
                                        @if ($course->responsables_name)
                                            <li>
                                                <i class="pe-7s-user text-theme-colored2 font-48"></i>
                                                <div class="pull-right ml-5">
                                                    <span>Responsable</span>
                                                    <h5 class="mt-0">
                                                        {{ $course->responsables_name . ' ' . $course->responsables_surname }}
                                                    </h5>
                                                </div>
                                            </li>
                                        @elseif($course->teams_name)
                                            <li>
                                                <i class="pe-7s-user text-theme-colored2 font-48"></i>
                                                <div class="pull-right ml-5">
                                                    <span>Responsable</span>
                                                    <h5 class="mt-0">
                                                        {{ $course->teams_name . ' ' . $course->teams_surname }}
                                                    </h5>
                                                </div>
                                            </li>
                                        @endif



                                        @if ($course->grade)
                                            @if ($course->grade != '<p>.</p>')
                                                <li style="display: inline-flex;">
                                                    <i class="pe-7s-ribbon text-theme-colored2 font-48"></i>
                                                    <div class="pull-right ml-5">
                                                        <span>{{ __('course.title1') }}</span>
                                                        <h5 class="mt-0 ">{!! $course->grade !!}</h5>
                                                    </div>
                                                </li>
                                            @endif
                                        @endif




                                        @if ($course->modalitiy_name)
                                            <li>
                                                <i class="pe-7s-refresh-2 text-theme-colored2 font-48"></i>
                                                <div class="pull-right ml-10">
                                                    <span>{{ __('course.title2') }}</span>
                                                    <h5 class="mt-0">{{ $course->modalitiy_name }}</h5>
                                                </div>
                                            </li>
                                        @endif
                                        <br id="elem1">
                                        @if ($course->duration)
                                            <li>
                                                <i class="pe-7s-timer text-theme-colored2 font-48"></i>
                                                <div class="pull-right ml-10">
                                                    <span>{{ __('course.title3') }}</span>
                                                    <h5 class="mt-0">{{ $course->duration }}
                                                        {{ __('home.text1') }}</h5>
                                                </div>
                                            </li>
                                        @endif
                                        <br id="elem1">
                                        @if ($course->languages_name)
                                            <li>
                                                <i class="pe-7s-notebook text-theme-colored2 font-48"></i>
                                                <div class="pull-right ml-10">
                                                    <span>{{ __('course.title4') }}</span>
                                                    <h5 class="mt-0">{{ $course->languages_name }} </h5>
                                                </div>
                                            </li>
                                        @endif

                                    </ul>


                                    <style>
                                        @media screen and (max-width: 768px) {

                                            #myTab,
                                            #myTabContent {
                                                display: none;
                                            }

                                            #elem1,
                                                {
                                                display: block;
                                            }

                                        }

                                        @media screen and (min-width: 768px) {
                                            #elem1 {
                                                display: none;
                                            }

                                        }
                                    </style>
                                    <ul id="myTab" class=" nav nav-tabs mt-30">
                                        <li class="active"><a href="#tab1" data-toggle="tab"
                                                style="font-size:18px; font-weight:bold;">DESCRIPTION</a></li>
                                        <li><a href="#tab2" data-toggle="tab"
                                                style="font-size:18px; font-weight:bold;">ADMISSION</a></li>
                                        <li><a href="#tab5" data-toggle="tab"
                                                style="font-size:18px; font-weight:bold;">{{ __('course.title7') }}</a>
                                        </li>
                                        <li><a href="#tab6" data-toggle="tab"
                                                style="font-size:18px; font-weight:bold;">{{ __('course.title8') }}</a>
                                        </li>
                                        <li><a href="#tab3" data-toggle="tab"
                                                style="font-size:18px; font-weight:bold;">{{ __('course.title9') }}</a>
                                        </li>
                                        <li><a href="#tab4" data-toggle="tab"
                                                style="font-size:18px; font-weight:bold;">{{ __('course.title10') }}</a>
                                        </li>

                                    </ul>



                                    <style>
                                        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');

                                        .tab-content {
                                            font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif;
                                            color: #1f3344;
                                            font-size: 16px;
                                        }
                                    </style>


                                    <div id="myTabContent" class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1">
                                            <h4 class="line-bottom-theme-colored2 mb-15">{{ __('course.subtitle1') }}
                                            </h4>

                                            @if ($course->description != '<p>.</p>')
                                                <div style="text-align:justify;hyphens:auto; "> {!! $course->description !!}
                                                </div>
                                            @endif
                                            <ul>
                                                @if ($course->duration)
                                                    <li><i
                                                            class="pe-7s-timer font-26 vertical-align-middle text-theme-colored2 mr-10 "></i>
                                                        <span class=" font-16 "
                                                            style="color:#1f3344;font-weight:bold;">
                                                            {{ __('course.title3') }} :</span>
                                                        {{ $course->duration }} {{ __('home.text1') }}
                                                    </li>
                                                @endif

                                                @if ($course->location->name)
                                                    <li><i
                                                            class="pe-7s-global font-26 vertical-align-middle text-theme-colored2  mr-10"></i>
                                                        <span class="font-16" style="color:#1f3344;font-weight:bold;">
                                                            {{ __('course.subtitle2') }} : </span>
                                                        {{ $course->location->name }}
                                                    </li>
                                                @endif
                                                @if ($course->modalitiy_name)
                                                    <li> <i
                                                            class="pe-7s-prev font-26 vertical-align-middle text-theme-colored2 mr-10"></i>
                                                        <span class="font-16" style="color:#1f3344;font-weight:bold;">
                                                            {{ __('course.title2') }}
                                                            : </span>{{ $course->modalitiy_name }}
                                                    </li>
                                                @endif
                                                @if ($course->languages_name)
                                                    <li><i
                                                            class="pe-7s-notebook  font-26 vertical-align-middle text-theme-colored2 mr-10 "></i>
                                                        <span class="font-16"
                                                            style="color:#1f3344;font-weight:bold;">{{ __('course.title4') }}
                                                            :</span> {{ $course->languages_name }}
                                                    </li>
                                                @endif

                                            </ul>

                                        </div>
                                        <div class="tab-pane fade" id="tab2">
                                            <h4 class="line-bottom-theme-colored2 mb-15">Admission</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="blog-posts single-post">
                                                        @if (isset($course->admission))
                                                            @if ($course->admission != '<p>.</p>')
                                                                <div class="comments-area">
                                                                    <ul class="comment-list">

                                                                        <li>
                                                                            <div class="media comment-author"> <a
                                                                                    class="media-left pull-left flip"
                                                                                    href="#"><img
                                                                                        class="img-thumbnail"
                                                                                        src="images/blog/comment1.jpg"
                                                                                        alt=""></a>
                                                                                <div class="media-body">
                                                                                    <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                        style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                        {{ __('course.subtitle3') }}
                                                                                    </h5>
                                                                                    <div class="comment-date"
                                                                                        style="font-size:16px;text-align:justify;hyphens:auto;">
                                                                                        {!! $course->admission !!}</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>



                                                                    </ul>
                                                                </div>
                                                            @endif
                                                        @endif
                                                        @if (isset($course->dossier))
                                                            @if ($course->dossier != '<p>.</p>')
                                                                <div class="comments-area ">
                                                                    <ul class="comment-list">

                                                                        <li>
                                                                            <div class="media comment-author"> <a
                                                                                    class="media-left pull-left flip"
                                                                                    href="#"><img
                                                                                        class="img-thumbnail"
                                                                                        src="images/blog/comment1.jpg"
                                                                                        alt=""></a>
                                                                                <div class="media-body">
                                                                                    <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                        style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                        {{ __('course.subtitle4') }}
                                                                                    </h5>
                                                                                    <div class="comment-date"
                                                                                        style="font-size:16px;text-align:justify;hyphens:auto;">
                                                                                        {!! $course->dossier !!}</div>


                                                                                </div>
                                                                            </div>
                                                                        </li>



                                                                    </ul>
                                                                </div>
                                                            @endif
                                                        @endif
                                                        @if (isset($course->candidature))
                                                            @if ($course->candidature != '<p>.</p>')
                                                                <div class="comments-area ">
                                                                    <ul class="comment-list">

                                                                        <li>
                                                                            <div class="media comment-author"> <a
                                                                                    class="media-left pull-left flip"
                                                                                    href="#"><img
                                                                                        class="img-thumbnail"
                                                                                        src="images/blog/comment1.jpg"
                                                                                        alt=""></a>
                                                                                <div class="media-body">
                                                                                    <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                        style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                        {{ __('course.subtitle5') }}
                                                                                    </h5>
                                                                                    <div class="comment-date"
                                                                                        style="font-size:16px;text-align:justify;hyphens:auto;">
                                                                                        {!! $course->candidature !!}</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>



                                                                    </ul>
                                                                </div>
                                                            @endif
                                                        @endif
                                                        @if (isset($course->datelimite))
                                                            @if ($course->datelimite != '<p>.</p>')
                                                                <div class="comments-area ">
                                                                    <ul class="comment-list">

                                                                        <li>
                                                                            <div class="media comment-author"> <a
                                                                                    class="media-left pull-left flip"
                                                                                    href="#"><img
                                                                                        class="img-thumbnail"
                                                                                        src="images/blog/comment1.jpg"
                                                                                        alt=""></a>
                                                                                <div class="media-body">
                                                                                    <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                        style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                        {{ __('course.subtitle6') }}
                                                                                    </h5>
                                                                                    <div class="comment-date"
                                                                                        style="font-size:16px;">
                                                                                        {{ $course->datelimite }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>



                                                                    </ul>
                                                                </div>
                                                            @endif
                                                        @endif
                                                        @if (isset($course->selection))
                                                            @if ($course->selection != '<p>.</p>')
                                                                <div class="comments-area ">
                                                                    <ul class="comment-list">

                                                                        <li>
                                                                            <div class="media comment-author"> <a
                                                                                    class="media-left pull-left flip"
                                                                                    href="#"><img
                                                                                        class="img-thumbnail"
                                                                                        src="images/blog/comment1.jpg"
                                                                                        alt=""></a>
                                                                                <div class="media-body">
                                                                                    <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                        style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                        {{ __('course.subtitle7') }}
                                                                                    </h5>
                                                                                    <div class="comment-date"
                                                                                        style="font-size:16px;text-align:justify;hyphens:auto;">
                                                                                        {!! $course->selection !!}</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>



                                                                    </ul>
                                                                </div>
                                                            @endif
                                                        @endif
                                                        @if (isset($course->daterentre))
                                                            <div class="comments-area ">
                                                                <ul class="comment-list">

                                                                    <li>
                                                                        <div class="media comment-author"> <a
                                                                                class="media-left pull-left flip"
                                                                                href="#"><img
                                                                                    class="img-thumbnail"
                                                                                    src="images/blog/comment1.jpg"
                                                                                    alt=""></a>
                                                                            <div class="media-body">
                                                                                <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                    style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                    {{ __('course.subtitle8') }} </h5>
                                                                                <div class="comment-date"
                                                                                    style="font-size:16px;">
                                                                                    @php
                                                                                        $getYears = date('m-Y', strtotime($course->daterentre));
                                                                                        
                                                                                        echo $getYears;
                                                                                        
                                                                                    @endphp
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>



                                                                </ul>
                                                            </div>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="tab4" style="padding-bottom:8px;">
                                            <h4 class="line-bottom-theme-colored2 mb-20">
                                                {{ __('course.subtitle13') }}</h4>


                                            <div>

                                                @if (!is_null($courses[0]->responsables_photo))
                                                    <!-- Portfolio Item Start -->
                                                    <div class="team-members mb-40 ml-40 mr-40">

                                                        <div class="team-bottom-part border-1px p-15">

                                                            <h4
                                                                class="text-uppercase font-weight-600 m-0 pb-5 font-16">
                                                                {{ $courses[0]->responsables_name }}
                                                                {{ $courses[0]->responsables_surname }}

                                                            </h4>

                                                            <h6 class="font-13 text-gray mt-0 font-10">
                                                                @if (App::isLocale('en'))
                                                                    {{ $courses[0]->responsables_statut_en }}
                                                                @else
                                                                    {{ $courses[0]->responsables_statut }}
                                                                @endif
                                                            </h6>
                                                            <h6 class="font-13 text-gray mt-0 font-10">
                                                                @if (App::isLocale('en'))
                                                                    {{ $courses[0]->responsables_poste_en }}
                                                                @else
                                                                    {{ $courses[0]->responsables_poste }}
                                                                @endif
                                                            </h6>
                                                            <h6 class="font-13 text-gray mt-0 font-10">
                                                                {{ $courses[0]->responsables_etablissement }}
                                                            </h6>
                                                            <ul class="list-inline mt-15">

                                                                @if (isset($courses[0]->responsables_country))
                                                                    <li class="m-0 pr-10" style="width:100%;">
                                                                        <i
                                                                            class="pe-7s-global font-16  text-theme-colored2 mr-5"></i>
                                                                        <a class="text-gray font-12" href="#">
                                                                            @php
                                                                                $countries = [
                                                                                    'AF' => 'Afghanistan',
                                                                                    'ZA' => 'Afrique du Sud',
                                                                                    'AL' => 'Albanie',
                                                                                    'DZ' => 'Algérie',
                                                                                    'DE' => 'Allemagne',
                                                                                    'AD' => 'Andorre',
                                                                                    'AO' => 'Angola',
                                                                                    'AI' => 'Anguilla',
                                                                                    'AQ' => 'Antarctique',
                                                                                    'AG' => 'Antigua-et-Barbuda',
                                                                                    'SA' => 'Arabie saoudite',
                                                                                    'AR' => 'Argentine',
                                                                                    'AM' => 'Arménie',
                                                                                    'AW' => 'Aruba',
                                                                                    'AU' => 'Australie',
                                                                                    'AT' => 'Autriche',
                                                                                    'AZ' => 'Azerbaïdjan',
                                                                                    'BS' => 'Bahamas',
                                                                                    'BH' => 'Bahreïn',
                                                                                    'BD' => 'Bangladesh',
                                                                                    'BB' => 'Barbade',
                                                                                    'BE' => 'Belgique',
                                                                                    'BZ' => 'Belize',
                                                                                    'BJ' => 'Bénin',
                                                                                    'BM' => 'Bermudes',
                                                                                    'BT' => 'Bhoutan',
                                                                                    'BY' => 'Biélorussie',
                                                                                    'BO' => 'Bolivie',
                                                                                    'BA' => 'Bosnie-Herzégovine',
                                                                                    'BW' => 'Botswana',
                                                                                    'BR' => 'Brésil',
                                                                                    'BN' => 'Brunéi Darussalam',
                                                                                    'BG' => 'Bulgarie',
                                                                                    'BF' => 'Burkina Faso',
                                                                                    'BI' => 'Burundi',
                                                                                    'KH' => 'Cambodge',
                                                                                    'CM' => 'Cameroun',
                                                                                    'CA' => 'Canada',
                                                                                    'CV' => 'Cap-Vert',
                                                                                    'CL' => 'Chili',
                                                                                    'CN' => 'Chine',
                                                                                    'CY' => 'Chypre',
                                                                                    'CO' => 'Colombie',
                                                                                    'KM' => 'Comores',
                                                                                    'CG' => 'Congo-Brazzaville',
                                                                                    'CD' => 'Congo-Kinshasa',
                                                                                    'KP' => 'Corée du Nord',
                                                                                    'KR' => 'Corée du Sud',
                                                                                    'CR' => 'Costa Rica',
                                                                                    'CI' => 'Côte d’Ivoire',
                                                                                    'HR' => 'Croatie',
                                                                                    'CU' => 'Cuba',
                                                                                    'CW' => 'Curaçao',
                                                                                    'DK' => 'Danemark',
                                                                                    'DJ' => 'Djibouti',
                                                                                    'DM' => 'Dominique',
                                                                                    'EG' => 'Égypte',
                                                                                    'AE' => 'Émirats arabes unis',
                                                                                    'EC' => 'Équateur',
                                                                                    'ER' => 'Érythrée',
                                                                                    'ES' => 'Espagne',
                                                                                    'EE' => 'Estonie',
                                                                                    'SZ' => 'Eswatini',
                                                                                    'VA' => 'État de la Cité du Vatican',
                                                                                    'FM' => 'États fédérés de Micronésie',
                                                                                    'US' => 'États-Unis',
                                                                                    'ET' => 'Éthiopie',
                                                                                    'FJ' => 'Fidji',
                                                                                    'FI' => 'Finlande',
                                                                                    'FR' => 'France',
                                                                                    'GA' => 'Gabon',
                                                                                    'GM' => 'Gambie',
                                                                                    'GE' => 'Géorgie',
                                                                                    'GS' => 'Géorgie du Sud et îles Sandwich du Sud',
                                                                                    'GH' => 'Ghana',
                                                                                    'GI' => 'Gibraltar',
                                                                                    'GR' => 'Grèce',
                                                                                    'GD' => 'Grenade',
                                                                                    'GL' => 'Groenland',
                                                                                    'GP' => 'Guadeloupe',
                                                                                    'GU' => 'Guam',
                                                                                    'GT' => 'Guatemala',
                                                                                    'GG' => 'Guernesey',
                                                                                    'GN' => 'Guinée',
                                                                                    'GQ' => 'Guinée équatoriale',
                                                                                    'GW' => 'Guinée-Bissau',
                                                                                    'GY' => 'Guyana',
                                                                                    'GF' => 'Guyane française',
                                                                                    'HT' => 'Haïti',
                                                                                    'HN' => 'Honduras',
                                                                                    'HU' => 'Hongrie',
                                                                                    'BV' => 'Île Bouvet',
                                                                                    'CX' => 'Île Christmas',
                                                                                    'IM' => 'Île de Man',
                                                                                    'NF' => 'Île Norfolk',
                                                                                    'AX' => 'Îles Åland',
                                                                                    'KY' => 'Îles Caïmans',
                                                                                    'CC' => 'Îles Cocos',
                                                                                    'CK' => 'Îles Cook',
                                                                                    'FO' => 'Îles Féroé',
                                                                                    'HM' => 'Îles Heard et McDonald',
                                                                                    'FK' => 'Îles Malouines',
                                                                                    'MP' => 'Îles Mariannes du Nord',
                                                                                    'MH' => 'Îles Marshall',
                                                                                    'UM' => 'Îles mineures éloignées des États-Unis',
                                                                                    'PN' => 'Îles Pitcairn',
                                                                                    'SB' => 'Îles Salomon',
                                                                                    'TC' => 'Îles Turques-et-Caïques',
                                                                                    'VG' => 'Îles Vierges britanniques',
                                                                                    'VI' => 'Îles Vierges des États-Unis',
                                                                                    'IN' => 'Inde',
                                                                                    'ID' => 'Indonésie',
                                                                                    'IQ' => 'Irak',
                                                                                    'IR' => 'Iran',
                                                                                    'IE' => 'Irlande',
                                                                                    'IS' => 'Islande',
                                                                                    'IL' => 'Israël',
                                                                                    'IT' => 'Italie',
                                                                                    'JM' => 'Jamaïque',
                                                                                    'JP' => 'Japon',
                                                                                    'JE' => 'Jersey',
                                                                                    'JO' => 'Jordanie',
                                                                                    'KZ' => 'Kazakhstan',
                                                                                    'KE' => 'Kenya',
                                                                                    'KG' => 'Kirghizistan',
                                                                                    'KI' => 'Kiribati',
                                                                                    'KW' => 'Koweït',
                                                                                    'RE' => 'La Réunion',
                                                                                    'LA' => 'Laos',
                                                                                    'LS' => 'Lesotho',
                                                                                    'LV' => 'Lettonie',
                                                                                    'LB' => 'Liban',
                                                                                    'LR' => 'Libéria',
                                                                                    'LY' => 'Libye',
                                                                                    'LI' => 'Liechtenstein',
                                                                                    'LT' => 'Lituanie',
                                                                                    'LU' => 'Luxembourg',
                                                                                    'MK' => 'Macédoine du Nord',
                                                                                    'MG' => 'Madagascar',
                                                                                    'MY' => 'Malaisie',
                                                                                    'MW' => 'Malawi',
                                                                                    'MV' => 'Maldives',
                                                                                    'ML' => 'Mali',
                                                                                    'MT' => 'Malte',
                                                                                    'MA' => 'Maroc',
                                                                                    'MQ' => 'Martinique',
                                                                                    'MU' => 'Maurice',
                                                                                    'MR' => 'Mauritanie',
                                                                                    'YT' => 'Mayotte',
                                                                                    'MX' => 'Mexique',
                                                                                    'MD' => 'Moldavie',
                                                                                    'MC' => 'Monaco',
                                                                                    'MN' => 'Mongolie',
                                                                                    'ME' => 'Monténégro',
                                                                                    'MS' => 'Montserrat',
                                                                                    'MZ' => 'Mozambique',
                                                                                    'MM' => 'Myanmar (Birmanie)',
                                                                                    'NA' => 'Namibie',
                                                                                    'NR' => 'Nauru',
                                                                                    'NP' => 'Népal',
                                                                                    'NI' => 'Nicaragua',
                                                                                    'NE' => 'Niger',
                                                                                    'NG' => 'Nigéria',
                                                                                    'NU' => 'Niue',
                                                                                    'NO' => 'Norvège',
                                                                                    'NC' => 'Nouvelle-Calédonie',
                                                                                    'NZ' => 'Nouvelle-Zélande',
                                                                                    'OM' => 'Oman',
                                                                                    'UG' => 'Ouganda',
                                                                                    'UZ' => 'Ouzbékistan',
                                                                                    'PK' => 'Pakistan',
                                                                                    'PW' => 'Palaos',
                                                                                    'PA' => 'Panama',
                                                                                    'PG' => 'Papouasie-Nouvelle-Guinée',
                                                                                    'PY' => 'Paraguay',
                                                                                    'NL' => 'Pays-Bas',
                                                                                    'BQ' => 'Pays-Bas caribéens',
                                                                                    'PE' => 'Pérou',
                                                                                    'PH' => 'Philippines',
                                                                                    'PL' => 'Pologne',
                                                                                    'PF' => 'Polynésie française',
                                                                                    'PR' => 'Porto Rico',
                                                                                    'PT' => 'Portugal',
                                                                                    'QA' => 'Qatar',
                                                                                    'HK' => 'R.A.S. chinoise de Hong Kong',
                                                                                    'MO' => 'R.A.S. chinoise de Macao',
                                                                                    'CF' => 'République centrafricaine',
                                                                                    'DO' => 'République dominicaine',
                                                                                    'RO' => 'Roumanie',
                                                                                    'GB' => 'Royaume-Uni',
                                                                                    'RU' => 'Russie',
                                                                                    'RW' => 'Rwanda',
                                                                                    'EH' => 'Sahara occidental',
                                                                                    'BL' => 'Saint-Barthélemy',
                                                                                    'KN' => 'Saint-Christophe-et-Niévès',
                                                                                    'SM' => 'Saint-Marin',
                                                                                    'MF' => 'Saint-Martin',
                                                                                    'SX' => 'Saint-Martin (partie néerlandaise)',
                                                                                    'PM' => 'Saint-Pierre-et-Miquelon',
                                                                                    'VC' => 'Saint-Vincent-et-les-Grenadines',
                                                                                    'SH' => 'Sainte-Hélène',
                                                                                    'LC' => 'Sainte-Lucie',
                                                                                    'SV' => 'Salvador',
                                                                                    'WS' => 'Samoa',
                                                                                    'AS' => 'Samoa américaines',
                                                                                    'ST' => 'Sao Tomé-et-Principe',
                                                                                    'SN' => 'Sénégal',
                                                                                    'RS' => 'Serbie',
                                                                                    'SC' => 'Seychelles',
                                                                                    'SL' => 'Sierra Leone',
                                                                                    'SG' => 'Singapour',
                                                                                    'SK' => 'Slovaquie',
                                                                                    'SI' => 'Slovénie',
                                                                                    'SO' => 'Somalie',
                                                                                    'SD' => 'Soudan',
                                                                                    'SS' => 'Soudan du Sud',
                                                                                    'LK' => 'Sri Lanka',
                                                                                    'SE' => 'Suède',
                                                                                    'CH' => 'Suisse',
                                                                                    'SR' => 'Suriname',
                                                                                    'SJ' => 'Svalbard et Jan Mayen',
                                                                                    'SY' => 'Syrie',
                                                                                    'TJ' => 'Tadjikistan',
                                                                                    'TW' => 'Taïwan',
                                                                                    'TZ' => 'Tanzanie',
                                                                                    'TD' => 'Tchad',
                                                                                    'CZ' => 'Tchéquie',
                                                                                    'TF' => 'Terres australes françaises',
                                                                                    'IO' => 'Territoire britannique de l’océan Indien',
                                                                                    'PS' => 'Territoires palestiniens',
                                                                                    'TH' => 'Thaïlande',
                                                                                    'TL' => 'Timor oriental',
                                                                                    'TG' => 'Togo',
                                                                                    'TK' => 'Tokelau',
                                                                                    'TO' => 'Tonga',
                                                                                    'TT' => 'Trinité-et-Tobago',
                                                                                    'TN' => 'Tunisie',
                                                                                    'TM' => 'Turkménistan',
                                                                                    'TR' => 'Turquie',
                                                                                    'TV' => 'Tuvalu',
                                                                                    'UA' => 'Ukraine',
                                                                                    'UY' => 'Uruguay',
                                                                                    'VU' => 'Vanuatu',
                                                                                    'VE' => 'Venezuela',
                                                                                    'VN' => 'Vietnam',
                                                                                    'WF' => 'Wallis-et-Futuna',
                                                                                    'YE' => 'Yémen',
                                                                                    'ZM' => 'Zambie',
                                                                                    'ZW' => 'Zimbabwe',
                                                                                ];
                                                                                echo $countries[$courses[0]->responsables_country];
                                                                            @endphp


                                                                        </a>
                                                                    </li>
                                                                @endif
                                                                <br>
                                                                @if (isset($courses[0]->responsables_phone))
                                                                    <li class="m-0 pr-10"> <i
                                                                            class="fa fa-phone text-theme-colored2 mr-5"></i>
                                                                        <a class="text-gray font-12"
                                                                            href="#">{{ $courses[0]->responsables_phone }}</a>
                                                                    </li>
                                                                @endif
                                                                <br>
                                                                @if (isset($courses[0]->responsables_email))
                                                                    <li class="m-0 pr-10"> <i
                                                                            class="fa fa-envelope-o text-theme-colored2 mr-5"></i>
                                                                        <a class="text-gray font-12"
                                                                            href="mailto:{{ $courses[0]->responsables_email }}">{{ $courses[0]->responsables_email }}</a>
                                                                    </li>
                                                                @endif
                                                            </ul>
                                                            <ul
                                                                class="styled-icons icon-sm icon-dark icon-theme-colored2 mt-15">
                                                                <li><a href="#" style="pointer-events:none;"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                </li>
                                                                <li><a href="#" style="pointer-events:none;"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                </li>
                                                                <li><a href="#" style="pointer-events:none;"><i
                                                                            class="fa fa-vk"></i></a>
                                                                </li>
                                                                <li><a href="#" style="pointer-events:none;"><i
                                                                            class="fa fa-instagram"></i></a>
                                                                </li>
                                                                <li><a href="#" style="pointer-events:none;"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @elseif(!is_null($courses[0]->teams_photo))
                                                    <div class="team-members mb-40 ml-40 mr-40">

                                                        <div class="team-bottom-part border-1px p-15">

                                                            <h4
                                                                class="text-uppercase font-weight-600 m-0 pb-5 font-16">
                                                                {{ $courses[0]->teams_name }}
                                                                {{ $courses[0]->teams_surname }}

                                                            </h4>

                                                            <h6 class="font-13 text-gray mt-0 font-10">
                                                                @if (App::isLocale('en'))
                                                                    {{ $courses[0]->teams_statut_en }}
                                                                @else
                                                                    {{ $courses[0]->teams_statut }}
                                                                @endif
                                                            </h6>
                                                            <h6 class="font-13 text-gray mt-0 font-10">
                                                                @if (App::isLocale('en'))
                                                                    {{ $courses[0]->teams_poste_en }}
                                                                @else
                                                                    {{ $courses[0]->teams_poste }}
                                                                @endif
                                                            </h6>
                                                            <h6 class="font-13 text-gray mt-0 font-10">
                                                                {{ $courses[0]->teams_etablissement }}
                                                            </h6>
                                                            <ul class="list-inline mt-15">

                                                                @if (isset($courses[0]->teams_country))
                                                                    <li class="m-0 pr-10" style="width:100%;">
                                                                        <i
                                                                            class="pe-7s-global font-16  text-theme-colored2 mr-5"></i>
                                                                        <a class="text-gray font-12" href="#">
                                                                            @php
                                                                                $countries = [
                                                                                    'AF' => 'Afghanistan',
                                                                                    'ZA' => 'Afrique du Sud',
                                                                                    'AL' => 'Albanie',
                                                                                    'DZ' => 'Algérie',
                                                                                    'DE' => 'Allemagne',
                                                                                    'AD' => 'Andorre',
                                                                                    'AO' => 'Angola',
                                                                                    'AI' => 'Anguilla',
                                                                                    'AQ' => 'Antarctique',
                                                                                    'AG' => 'Antigua-et-Barbuda',
                                                                                    'SA' => 'Arabie saoudite',
                                                                                    'AR' => 'Argentine',
                                                                                    'AM' => 'Arménie',
                                                                                    'AW' => 'Aruba',
                                                                                    'AU' => 'Australie',
                                                                                    'AT' => 'Autriche',
                                                                                    'AZ' => 'Azerbaïdjan',
                                                                                    'BS' => 'Bahamas',
                                                                                    'BH' => 'Bahreïn',
                                                                                    'BD' => 'Bangladesh',
                                                                                    'BB' => 'Barbade',
                                                                                    'BE' => 'Belgique',
                                                                                    'BZ' => 'Belize',
                                                                                    'BJ' => 'Bénin',
                                                                                    'BM' => 'Bermudes',
                                                                                    'BT' => 'Bhoutan',
                                                                                    'BY' => 'Biélorussie',
                                                                                    'BO' => 'Bolivie',
                                                                                    'BA' => 'Bosnie-Herzégovine',
                                                                                    'BW' => 'Botswana',
                                                                                    'BR' => 'Brésil',
                                                                                    'BN' => 'Brunéi Darussalam',
                                                                                    'BG' => 'Bulgarie',
                                                                                    'BF' => 'Burkina Faso',
                                                                                    'BI' => 'Burundi',
                                                                                    'KH' => 'Cambodge',
                                                                                    'CM' => 'Cameroun',
                                                                                    'CA' => 'Canada',
                                                                                    'CV' => 'Cap-Vert',
                                                                                    'CL' => 'Chili',
                                                                                    'CN' => 'Chine',
                                                                                    'CY' => 'Chypre',
                                                                                    'CO' => 'Colombie',
                                                                                    'KM' => 'Comores',
                                                                                    'CG' => 'Congo-Brazzaville',
                                                                                    'CD' => 'Congo-Kinshasa',
                                                                                    'KP' => 'Corée du Nord',
                                                                                    'KR' => 'Corée du Sud',
                                                                                    'CR' => 'Costa Rica',
                                                                                    'CI' => 'Côte d’Ivoire',
                                                                                    'HR' => 'Croatie',
                                                                                    'CU' => 'Cuba',
                                                                                    'CW' => 'Curaçao',
                                                                                    'DK' => 'Danemark',
                                                                                    'DJ' => 'Djibouti',
                                                                                    'DM' => 'Dominique',
                                                                                    'EG' => 'Égypte',
                                                                                    'AE' => 'Émirats arabes unis',
                                                                                    'EC' => 'Équateur',
                                                                                    'ER' => 'Érythrée',
                                                                                    'ES' => 'Espagne',
                                                                                    'EE' => 'Estonie',
                                                                                    'SZ' => 'Eswatini',
                                                                                    'VA' => 'État de la Cité du Vatican',
                                                                                    'FM' => 'États fédérés de Micronésie',
                                                                                    'US' => 'États-Unis',
                                                                                    'ET' => 'Éthiopie',
                                                                                    'FJ' => 'Fidji',
                                                                                    'FI' => 'Finlande',
                                                                                    'FR' => 'France',
                                                                                    'GA' => 'Gabon',
                                                                                    'GM' => 'Gambie',
                                                                                    'GE' => 'Géorgie',
                                                                                    'GS' => 'Géorgie du Sud et îles Sandwich du Sud',
                                                                                    'GH' => 'Ghana',
                                                                                    'GI' => 'Gibraltar',
                                                                                    'GR' => 'Grèce',
                                                                                    'GD' => 'Grenade',
                                                                                    'GL' => 'Groenland',
                                                                                    'GP' => 'Guadeloupe',
                                                                                    'GU' => 'Guam',
                                                                                    'GT' => 'Guatemala',
                                                                                    'GG' => 'Guernesey',
                                                                                    'GN' => 'Guinée',
                                                                                    'GQ' => 'Guinée équatoriale',
                                                                                    'GW' => 'Guinée-Bissau',
                                                                                    'GY' => 'Guyana',
                                                                                    'GF' => 'Guyane française',
                                                                                    'HT' => 'Haïti',
                                                                                    'HN' => 'Honduras',
                                                                                    'HU' => 'Hongrie',
                                                                                    'BV' => 'Île Bouvet',
                                                                                    'CX' => 'Île Christmas',
                                                                                    'IM' => 'Île de Man',
                                                                                    'NF' => 'Île Norfolk',
                                                                                    'AX' => 'Îles Åland',
                                                                                    'KY' => 'Îles Caïmans',
                                                                                    'CC' => 'Îles Cocos',
                                                                                    'CK' => 'Îles Cook',
                                                                                    'FO' => 'Îles Féroé',
                                                                                    'HM' => 'Îles Heard et McDonald',
                                                                                    'FK' => 'Îles Malouines',
                                                                                    'MP' => 'Îles Mariannes du Nord',
                                                                                    'MH' => 'Îles Marshall',
                                                                                    'UM' => 'Îles mineures éloignées des États-Unis',
                                                                                    'PN' => 'Îles Pitcairn',
                                                                                    'SB' => 'Îles Salomon',
                                                                                    'TC' => 'Îles Turques-et-Caïques',
                                                                                    'VG' => 'Îles Vierges britanniques',
                                                                                    'VI' => 'Îles Vierges des États-Unis',
                                                                                    'IN' => 'Inde',
                                                                                    'ID' => 'Indonésie',
                                                                                    'IQ' => 'Irak',
                                                                                    'IR' => 'Iran',
                                                                                    'IE' => 'Irlande',
                                                                                    'IS' => 'Islande',
                                                                                    'IL' => 'Israël',
                                                                                    'IT' => 'Italie',
                                                                                    'JM' => 'Jamaïque',
                                                                                    'JP' => 'Japon',
                                                                                    'JE' => 'Jersey',
                                                                                    'JO' => 'Jordanie',
                                                                                    'KZ' => 'Kazakhstan',
                                                                                    'KE' => 'Kenya',
                                                                                    'KG' => 'Kirghizistan',
                                                                                    'KI' => 'Kiribati',
                                                                                    'KW' => 'Koweït',
                                                                                    'RE' => 'La Réunion',
                                                                                    'LA' => 'Laos',
                                                                                    'LS' => 'Lesotho',
                                                                                    'LV' => 'Lettonie',
                                                                                    'LB' => 'Liban',
                                                                                    'LR' => 'Libéria',
                                                                                    'LY' => 'Libye',
                                                                                    'LI' => 'Liechtenstein',
                                                                                    'LT' => 'Lituanie',
                                                                                    'LU' => 'Luxembourg',
                                                                                    'MK' => 'Macédoine du Nord',
                                                                                    'MG' => 'Madagascar',
                                                                                    'MY' => 'Malaisie',
                                                                                    'MW' => 'Malawi',
                                                                                    'MV' => 'Maldives',
                                                                                    'ML' => 'Mali',
                                                                                    'MT' => 'Malte',
                                                                                    'MA' => 'Maroc',
                                                                                    'MQ' => 'Martinique',
                                                                                    'MU' => 'Maurice',
                                                                                    'MR' => 'Mauritanie',
                                                                                    'YT' => 'Mayotte',
                                                                                    'MX' => 'Mexique',
                                                                                    'MD' => 'Moldavie',
                                                                                    'MC' => 'Monaco',
                                                                                    'MN' => 'Mongolie',
                                                                                    'ME' => 'Monténégro',
                                                                                    'MS' => 'Montserrat',
                                                                                    'MZ' => 'Mozambique',
                                                                                    'MM' => 'Myanmar (Birmanie)',
                                                                                    'NA' => 'Namibie',
                                                                                    'NR' => 'Nauru',
                                                                                    'NP' => 'Népal',
                                                                                    'NI' => 'Nicaragua',
                                                                                    'NE' => 'Niger',
                                                                                    'NG' => 'Nigéria',
                                                                                    'NU' => 'Niue',
                                                                                    'NO' => 'Norvège',
                                                                                    'NC' => 'Nouvelle-Calédonie',
                                                                                    'NZ' => 'Nouvelle-Zélande',
                                                                                    'OM' => 'Oman',
                                                                                    'UG' => 'Ouganda',
                                                                                    'UZ' => 'Ouzbékistan',
                                                                                    'PK' => 'Pakistan',
                                                                                    'PW' => 'Palaos',
                                                                                    'PA' => 'Panama',
                                                                                    'PG' => 'Papouasie-Nouvelle-Guinée',
                                                                                    'PY' => 'Paraguay',
                                                                                    'NL' => 'Pays-Bas',
                                                                                    'BQ' => 'Pays-Bas caribéens',
                                                                                    'PE' => 'Pérou',
                                                                                    'PH' => 'Philippines',
                                                                                    'PL' => 'Pologne',
                                                                                    'PF' => 'Polynésie française',
                                                                                    'PR' => 'Porto Rico',
                                                                                    'PT' => 'Portugal',
                                                                                    'QA' => 'Qatar',
                                                                                    'HK' => 'R.A.S. chinoise de Hong Kong',
                                                                                    'MO' => 'R.A.S. chinoise de Macao',
                                                                                    'CF' => 'République centrafricaine',
                                                                                    'DO' => 'République dominicaine',
                                                                                    'RO' => 'Roumanie',
                                                                                    'GB' => 'Royaume-Uni',
                                                                                    'RU' => 'Russie',
                                                                                    'RW' => 'Rwanda',
                                                                                    'EH' => 'Sahara occidental',
                                                                                    'BL' => 'Saint-Barthélemy',
                                                                                    'KN' => 'Saint-Christophe-et-Niévès',
                                                                                    'SM' => 'Saint-Marin',
                                                                                    'MF' => 'Saint-Martin',
                                                                                    'SX' => 'Saint-Martin (partie néerlandaise)',
                                                                                    'PM' => 'Saint-Pierre-et-Miquelon',
                                                                                    'VC' => 'Saint-Vincent-et-les-Grenadines',
                                                                                    'SH' => 'Sainte-Hélène',
                                                                                    'LC' => 'Sainte-Lucie',
                                                                                    'SV' => 'Salvador',
                                                                                    'WS' => 'Samoa',
                                                                                    'AS' => 'Samoa américaines',
                                                                                    'ST' => 'Sao Tomé-et-Principe',
                                                                                    'SN' => 'Sénégal',
                                                                                    'RS' => 'Serbie',
                                                                                    'SC' => 'Seychelles',
                                                                                    'SL' => 'Sierra Leone',
                                                                                    'SG' => 'Singapour',
                                                                                    'SK' => 'Slovaquie',
                                                                                    'SI' => 'Slovénie',
                                                                                    'SO' => 'Somalie',
                                                                                    'SD' => 'Soudan',
                                                                                    'SS' => 'Soudan du Sud',
                                                                                    'LK' => 'Sri Lanka',
                                                                                    'SE' => 'Suède',
                                                                                    'CH' => 'Suisse',
                                                                                    'SR' => 'Suriname',
                                                                                    'SJ' => 'Svalbard et Jan Mayen',
                                                                                    'SY' => 'Syrie',
                                                                                    'TJ' => 'Tadjikistan',
                                                                                    'TW' => 'Taïwan',
                                                                                    'TZ' => 'Tanzanie',
                                                                                    'TD' => 'Tchad',
                                                                                    'CZ' => 'Tchéquie',
                                                                                    'TF' => 'Terres australes françaises',
                                                                                    'IO' => 'Territoire britannique de l’océan Indien',
                                                                                    'PS' => 'Territoires palestiniens',
                                                                                    'TH' => 'Thaïlande',
                                                                                    'TL' => 'Timor oriental',
                                                                                    'TG' => 'Togo',
                                                                                    'TK' => 'Tokelau',
                                                                                    'TO' => 'Tonga',
                                                                                    'TT' => 'Trinité-et-Tobago',
                                                                                    'TN' => 'Tunisie',
                                                                                    'TM' => 'Turkménistan',
                                                                                    'TR' => 'Turquie',
                                                                                    'TV' => 'Tuvalu',
                                                                                    'UA' => 'Ukraine',
                                                                                    'UY' => 'Uruguay',
                                                                                    'VU' => 'Vanuatu',
                                                                                    'VE' => 'Venezuela',
                                                                                    'VN' => 'Vietnam',
                                                                                    'WF' => 'Wallis-et-Futuna',
                                                                                    'YE' => 'Yémen',
                                                                                    'ZM' => 'Zambie',
                                                                                    'ZW' => 'Zimbabwe',
                                                                                ];
                                                                                echo $countries[$courses[0]->teams_country];
                                                                            @endphp


                                                                        </a>
                                                                    </li>
                                                                @endif
                                                                <br>
                                                                @if (isset($courses[0]->teams_phone))
                                                                    <li class="m-0 pr-10"> <i
                                                                            class="fa fa-phone text-theme-colored2 mr-5"></i>
                                                                        <a class="text-gray font-12"
                                                                            href="#">{{ $courses[0]->teams_phone }}</a>
                                                                    </li>
                                                                @endif
                                                                <br>
                                                                @if (isset($courses[0]->teams_email))
                                                                    <li class="m-0 pr-10"> <i
                                                                            class="fa fa-envelope-o text-theme-colored2 mr-5"></i>
                                                                        <a class="text-gray font-12"
                                                                            href="mailto:{{ $courses[0]->teams_email }}">{{ $courses[0]->teams_email }}</a>
                                                                    </li>
                                                                @endif
                                                            </ul>
                                                            <ul
                                                                class="styled-icons icon-sm icon-dark icon-theme-colored2 mt-15">
                                                                <li><a href="#" style="pointer-events:none;"><i
                                                                            class="fa fa-facebook"></i></a>
                                                                </li>
                                                                <li><a href="#" style="pointer-events:none;"><i
                                                                            class="fa fa-twitter"></i></a>
                                                                </li>
                                                                <li><a href="#" style="pointer-events:none;"><i
                                                                            class="fa fa-vk"></i></a>
                                                                </li>
                                                                <li><a href="#" style="pointer-events:none;"><i
                                                                            class="fa fa-instagram"></i></a>
                                                                </li>
                                                                <li><a href="#" style="pointer-events:none;"><i
                                                                            class="fa fa-google-plus"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>



                                        </div>

                                        <div class="tab-pane fade" id="tab5">
                                            <h4 class="line-bottom-theme-colored2 mb-20">{{ __('course.subtitle9') }}
                                            </h4>

                                            <div class="container-block">
                                                <div class="accordion">
                                                    @foreach ($programs as $program)
                                                        @if ($loop->first)
                                                            <div class="accordion-item active">
                                                                <div class="accordion-header "
                                                                    style="display:flex; justify-content:space-between;font-weight:bold;">

                                                                    @if ($program->title)
                                                                        <p>
                                                                            {{ $program->title }}
                                                                        </p>
                                                                    @endif
                                                                    @if ($program->hours)
                                                                        <p
                                                                            style="margin-right:7%; text-decoration:underline;">
                                                                            {{ $program->hours }}
                                                                            {{ __('course.subtitle10') }}</p>
                                                                    @endif
                                                                </div>
                                                                <div class="accordion-body">
                                                                    <div class="accordion-body-content text-white"
                                                                        style="font-size:16px;text-align:justify;hyphens:auto;">
                                                                        {!! $program->description !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="accordion-item ">

                                                                <div class="accordion-header"
                                                                    style="display:flex; justify-content:space-between;font-weight:bold;">
                                                                    @if ($program->title)
                                                                        <p>
                                                                            {{ $program->title }}
                                                                        </p>
                                                                    @endif
                                                                    @if ($program->hours)
                                                                        <p style="margin-right:7%;">
                                                                            {{ $program->hours }}
                                                                            {{ __('course.subtitle10') }}</p>
                                                                    @endif
                                                                </div>
                                                                <div class="accordion-body">
                                                                    <div class="accordion-body-content text-white"
                                                                        style="font-size:16px;text-align:justify;hyphens:auto;">
                                                                        {!! $program->description !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach


                                                </div>
                                            </div>


                                        </div>

                                        <div class="tab-pane fade" id="tab3">
                                            <h4 class="line-bottom-theme-colored2 mb-20">{{ __('home.text8') }}</h4>
                                            <div class="row">
                                                @foreach ($downloads as $download)
                                                    <div class="col-md-3">

                                                        <h5 class="mb-0 font-16">{{ $download->name }}</h5>
                                                        <a href="{{ url('storage') }}/{{ $download->file }}"
                                                            target="_blank">{{ __('course.text14') }}</a>
                                                    </div>
                                                @endforeach


                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab6">
                                            <h4 class="line-bottom-theme-colored2 mb-20">
                                                {{ __('course.subtitle15') }}</h4>
                                            <div class="row">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="blog-posts single-post">
                                                            @if ($course->grade != '<p>.</p>')
                                                                <div class="comments-area">
                                                                    @if ($course->grade)
                                                                        <ul class="comment-list">
                                                                            <li>
                                                                                <div class="media comment-author"> <a
                                                                                        class="media-left pull-left flip"
                                                                                        href="#"><img
                                                                                            class="img-thumbnail"
                                                                                            src="images/blog/comment1.jpg"
                                                                                            alt=""></a>
                                                                                    <div class="media-body">


                                                                                        <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                            style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                            {{ __('course.title1') }}
                                                                                        </h5>

                                                                                        <div class="comment-date"
                                                                                            style="font-size:16px;text-align:justify;hyphens:auto;">
                                                                                            {!! $course->grade !!}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    @endif
                                                                </div>
                                                            @endif

                                                            @if ($course->profile != '<p>.</p>')
                                                                <div class="comments-area">
                                                                    @if ($course->profile)
                                                                        <ul class="comment-list">
                                                                            <li>
                                                                                <div class="media comment-author"> <a
                                                                                        class="media-left pull-left flip"
                                                                                        href="#"><img
                                                                                            class="img-thumbnail"
                                                                                            src="images/blog/comment1.jpg"
                                                                                            alt=""></a>
                                                                                    <div class="media-body">


                                                                                        <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                            style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                            {{ __('course.subtitle11') }}
                                                                                        </h5>

                                                                                        <div class="comment-date"
                                                                                            style="font-size:16px;text-align:justify;hyphens:auto;">
                                                                                            {!! $course->profile !!}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                    @endif
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                            @if ($course->opportunity != '<p>.</p>')
                                                                <div class="comments-area">
                                                                    @if ($course->opportunity)
                                                                        <ul class="comment-list">
                                                                            <li>
                                                                                <div class="media comment-author"> <a
                                                                                        class="media-left pull-left flip"
                                                                                        href="#"><img
                                                                                            class="img-thumbnail"
                                                                                            src="images/blog/comment1.jpg"
                                                                                            alt=""></a>
                                                                                    <div class="media-body">


                                                                                        <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                            style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                            {{ __('course.subtitle12') }}
                                                                                        </h5>

                                                                                        <div class="comment-date"
                                                                                            style="font-size:16px;text-align:justify;hyphens:auto;">
                                                                                            {!! $course->opportunity !!}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>



                                                                        </ul>
                                                                    @endif
                                                                </div>
                                                            @endif


                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>



                                </div>

                                <div id="gallery1"
                                    class="gallery-isotope default-animation-effect @if (count($coursevideos) == 1) grid-1   @elseif(count($coursevideos) == 2) grid-2 @else grid-3 @endif gutter-small clearfix"
                                    data-lightbox="gallery" style="margin-top:6px;">
                                    @foreach ($coursevideos as $coursevideo)
                                        <div class="gallery-item">
                                            <p style="text-align: center; background-color:#F88147;color:black;">
                                                {{ $coursevideo->title }}</p>
                                            <iframe width="220" height="145"
                                                src="https://www.youtube.com/embed/{{ $coursevideo->video }}?rel=0"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                    @endforeach
                                </div>


                            </div>
                            <div class="col-sm-12 col-md-3 form" style="background-color:  #1f3344;">
                                <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
                                    <div class="main-content">
                                        <section>
                                            <div style="width:100%;">
                                                <div class="row">
                                                    <div class="col-md-12 ">
                                                        <div>
                                                            <h4 class="text-uppercase m-0" style="color:white">

                                                                {{ __('event.subtitle6') }}
                                                            </h4>
                                                            @if (session()->has('success'))
                                                                <h6 class='alert alert-success' role="alert">
                                                                    Your reply has been successfully registered!
                                                                </h6>
                                                            @endif
                                                            <div class="line-bottom-theme-colored2 mb-30  "></div>
                                                            <p class="text-white">{{ __('course.subtitle14') }}.</p>
                                                            <form class="mt-30" method="post"
                                                                action="{{ route('interested', $course->id) }}">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-sm-12 text-white">
                                                                        <div class="row">
                                                                            <label for="gender"
                                                                                class="col-xs-2 col-sm-2">{{ __('course.text1') }}</label>
                                                                            <div
                                                                                class="col-xs-2 col-col-sm-2 form-group mb-10">

                                                                                <input name="gender" value='Mlle'
                                                                                    class="" type="radio">
                                                                            </div>
                                                                            <label for=""
                                                                                class="col-xs-2 col-sm-2">{{ __('course.text2') }}</label>

                                                                            <div
                                                                                class="col-xs-2 col-sm-2 form-group mb-10">
                                                                                <input name="gender" value='Mme'
                                                                                    class="" type="radio">
                                                                            </div>
                                                                            <label for=""
                                                                                class="col-xs-2 col-sm-2">{{ __('course.text3') }}</label>

                                                                            <div
                                                                                class="col-xs-2 col-sm-2 form-group mb-10">
                                                                                <input name="gender" value='Mr'
                                                                                    type="radio" aria-="true">
                                                                            </div>
                                                                        </div>

                                                                        @if ($errors->has('gender'))
                                                                            <span
                                                                                class="text-white">{{ $errors->first('gender') }}</span>
                                                                        @endif



                                                                    </div>
                                                                    <div class="col-sm-6">


                                                                        <div class="form-group mb-12">
                                                                            <input name="name" class="form-control"
                                                                                style="background-color:white;color: gray;"
                                                                                type="text"
                                                                                placeholder="{{ __('course.text4') }}"
                                                                                value="{{ old('name') }}">
                                                                        </div>
                                                                        @if ($errors->has('name'))
                                                                            <span
                                                                                class="text-white">{{ $errors->first('name') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-sm-6">


                                                                        <div class="form-group mb-12">
                                                                            <input name="surname" class="form-control"
                                                                                placeholder="{{ __('course.text5') }}"
                                                                                style="background-color:white;color: gray;"
                                                                                type="text"
                                                                                value="{{ old('surname') }}">
                                                                        </div>
                                                                        @if ($errors->has('surname'))
                                                                            <span
                                                                                class="text-white">{{ $errors->first('surname') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group mb-12">
                                                                            <input name="email"
                                                                                placeholder="{{ __('course.text6') }}"
                                                                                style="background-color:white;color: gray;"
                                                                                class="form-control  email"
                                                                                type="email"
                                                                                value="{{ old('email') }}">
                                                                        </div>
                                                                        @if ($errors->has('email'))
                                                                            <span
                                                                                class="text-white">{{ $errors->first('email') }}</span>
                                                                        @endif
                                                                    </div>


                                                                    <div class="col-sm-12">

                                                                        <div class="form-group mb-12">
                                                                            <select name="country" id="countries"
                                                                                style="background-color:white;color: gray;"
                                                                                value="{{ old('country') }}"
                                                                                class="form-control  ">
                                                                                @foreach ($countries as $country)
                                                                                    <option
                                                                                        value="{{ $country }}">
                                                                                        {{ $country }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        @if ($errors->has('country'))
                                                                            <span
                                                                                class="text-white">{{ $errors->first('country') }}</span>
                                                                        @endif
                                                                    </div>

                                                                    <div class="col-sm-12 " id="provinces">


                                                                        <div class="form-group mb-10">
                                                                            <select name="province" id="province"
                                                                                class="form-control"
                                                                                style="background-color:white;color: gray;"
                                                                                value="{{ old('province') }}">
                                                                                <option value="_" selected>
                                                                                    Province
                                                                                </option>

                                                                                @foreach ($provinces as $province)
                                                                                    <option
                                                                                        value="{{ $province }}">
                                                                                        {{ $province }}</option>
                                                                                @endforeach

                                                                            </select>

                                                                        </div>
                                                                        @if ($errors->has('province'))
                                                                            <span
                                                                                class="text-white">{{ $errors->first('province') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-sm-12">

                                                                        <div class="form-group mb-10">
                                                                            <div>
                                                                                <label for="phone"
                                                                                    class=" font-12 text-white"
                                                                                    style=" width:100%;">
                                                                                    {{ __('course.text8') }}</label>
                                                                            </div>
                                                                            <input name="phone" class="form-control"
                                                                                id="phone" type="tel"
                                                                                value="+212">

                                                                            <input name="indice" class="form-control"
                                                                                id="indice" type="hidden"
                                                                                value="212">
                                                                        </div>
                                                                        @if ($errors->has('phone'))
                                                                            <span
                                                                                class="text-white">{{ $errors->first('phone') }}</span>
                                                                        @endif
                                                                    </div>

                                                                </div>
                                                                <div class="row">

                                                                    <div class="col-sm-12 ">

                                                                        <div class="form-group mb-10">
                                                                            <select name="level"
                                                                                value="{{ old('level') }}"
                                                                                style="background-color:white;color: gray;"
                                                                                class="form-control">
                                                                                <option value="_" selected>
                                                                                    {{ __('course.text9') }}</option>
                                                                                @foreach ($levels as $level)
                                                                                    @if (App::isLocale('en'))
                                                                                        <option
                                                                                            value="{{ $level->name_en }}">

                                                                                            {{ $level->name_en }}
                                                                                        @else
                                                                                        <option
                                                                                            value="{{ $level->name }}">

                                                                                            {{ $level->name }}

                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>

                                                                        </div>
                                                                        @if ($errors->has('level'))
                                                                            <span
                                                                                class="text-white">{{ $errors->first('level') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group mb-10">
                                                                            <input name="grade"
                                                                                value="{{ old('grade') }}"
                                                                                style="background-color:white;color: gray;"
                                                                                placeholder="{{ __('course.title1') }} {{ __('course.text11') }}"
                                                                                class="form-control" type="text">
                                                                        </div>
                                                                        @if ($errors->has('grade'))
                                                                            <span
                                                                                class="text-white">{{ $errors->first('grade') }}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-12 font-10 text-white mb-10"
                                                                    style="text-align:justify;hyphens:auto;">
                                                                    {{ __('event.formtext6') }}
                                                                </div>


                                                                <div class="col-xs-12 col-sm-12 ">

                                                                    <div class="mb-10">

                                                                        <div class="font-10 text-white "
                                                                            style="text-align:justify;hyphens:auto;width:100%;">
                                                                            <input name="accepted" value='accepted'
                                                                                type="checkbox">
                                                                            {{ __('event.formtext7') }} <a
                                                                                class="text-white"
                                                                                style="font-weight:normal;text-decoration:underline;"
                                                                                href="{{ route('mention.index') }}">
                                                                                {{ __('event.formtext8') }}</a>,{{ __('event.formtext9') }}<strong
                                                                                style="color:red;">*</strong>
                                                                        </div>
                                                                    </div>

                                                                    @if ($errors->has('accepted'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('accepted') }}</span>
                                                                    @endif
                                                                </div>




                                                                <div class="form-group mb-0 mt-20 ">
                                                                    <input name="form_botcheck" class="form-control "
                                                                        type="hidden" value="">
                                                                    <button type="submit"
                                                                        class="btn btn-theme-colored2 font-18"
                                                                        style="width:100%;font-weight:bold;"
                                                                        data-loading-text="Patientez...">{{ __('course.text12') }}</button>
                                                                </div>
                                                            </form>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                    <div class="widget border-1px bg-silver-deep p-15">
                                        <h4 class="widget-title line-bottom-theme-colored2 mb-10 font-18">
                                            {{ __('course.text13') }}</h4>
                                        <div class="categories">
                                            <ul class="list-border">
                                                @foreach ($degrees as $degree)
                                                    <li class="font-16"><a style="color:white;"
                                                            href="{{ route('degree.show', $degree->name) }}">
                                                            @if (App::isLocale('en'))
                                                                {{ $degree->name_en }}
                                                            @else
                                                                {{ $degree->name }}
                                                            @endif
                                                        </a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>
                        <style>
                            @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');

                            .accordion1 .item,
                            .comment-date {
                                font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif;
                                color: #1f3344;
                                font-size: 16px;

                            }


                            @media screen and (min-width: 768px) {
                                #gallery1 {
                                    display: block;
                                }

                                #gallery2 {
                                    display: none;
                                }

                                #mobile_pade {

                                    display: none;


                                }


                                .form1 {
                                    display: none;
                                }

                                .form {
                                    display: block;
                                }

                                .head_course {
                                    margin-left: 50px;
                                    margin-right: 50px;
                                }

                                .section-content {
                                    margin-left: 100px;
                                }
                            }

                            @media screen and (max-width: 768px) {
                                #gallery1 {
                                    display: none;
                                }

                                #gallery2 {
                                    display: block;
                                }

                                .form1 {
                                    display: block;
                                }

                                .form {
                                    display: none;
                                }

                                .head_course {
                                    margin-left: 10px;
                                    margin-right: 10px;
                                }

                                .widget {
                                    margin-bottom:
                                        0px;
                                }

                                .section-content {
                                    margin-left: 10px;
                                }
                            }




                            .accordion1 {
                                max-width: 700px;
                                display: flex;
                                flex-direction: column;
                                gap: 24px;
                            }

                            .accordion1 .item {
                                box-shadow: 0 0 32px #F8814710;
                                background-color: white;
                                cursor: pointer;
                                display: grid;

                                column-gap: 24px;
                                row-gap: 32px;
                                border-top: 4px solid transparent;
                                align-items: center;
                                transition: border-top 0.3s;
                            }

                            .accordion1 .item.open {
                                border-top: 4px solid #F88147;
                            }

                            .accordion1 .item.open .hidden-box {
                                display: block;
                            }

                            .accordion1 .item.open .text {
                                color: #F88147;

                            }


                            .accordion1 .number {
                                color: #F88147;
                            }

                            .accordion1 .number,
                            .accordion1 .text {
                                font-size: 24px;
                                font-weight: 500;
                                color: #1f3344;

                            }

                            .comments-area {
                                color: #1f3344;
                            }

                            .accordion1 .item.open .text {
                                transition: color 0.3s;
                            }

                            .accordion1 .icon {
                                width: 24px;
                                height: 24px;
                                stroke: #F88147;
                                transition: transform 0.5s ease-in;
                            }

                            .accordion1 .item.open .icon {
                                transform: rotate(180deg);
                            }

                            .accordion1 .hidden-box {
                                grid-column: 1;
                                width: 100%;
                                display: none;
                                transition: display 0.5 ease-in;
                                padding-left: 5px;

                            }

                            .accordion1 .hidden-box p {
                                line-height: 1.6;
                                margin-bottom: 24px;
                            }

                            .accordion1 .hidden-box h5 {}

                            .accordion1 .hidden-box ul {
                                margin-left: 18px;
                                display: flex;
                                flex-direction: column;
                                gap: 12px;
                            }
                        </style>
                        <!-- initial open : add open class to item -->
                        <div class="accordion1 mr-10 ml-10" id="mobile_pade">
                            <div class="item">
                                <div class="text"
                                    style="display: flex;justify-content:space-between; padding-left:4px;padding-right:4px;">
                                    <p> DESCRIPTION</p>
                                    <span> <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg></span>
                                </div>


                                <div class="hidden-box"
                                    style="margin-top:-30px;padding-left:10px;padding-right:10px;">
                                    @if ($course->description != '<p>.</p>')
                                        <div style="text-align:justify;hyphens:auto;"> {!! $course->description !!}</div>
                                    @endif
                                    <ul>
                                        @if ($course->duration)
                                            <li> <i
                                                    class="pe-7s-timer font-26 vertical-align-middle text-theme-colored2 mr-10 "></i>
                                                <span class=" font-16 " style="font-weight:bold;color:#1f3344;">
                                                    {{ __('course.title3') }} :</span> {{ $course->duration }}
                                                {{ __('home.text1') }}
                                            </li>
                                        @endif

                                        @if ($course->location->name)
                                            <li><i
                                                    class="pe-7s-global font-26 vertical-align-middle text-theme-colored2  mr-10"></i>
                                                <span class="font-16" style="font-weight:bold;color:#1f3344;">
                                                    {{ __('course.subtitle2') }} :
                                                </span>
                                                {{ $course->location->name }}
                                            </li>
                                        @endif
                                        @if ($course->modalitiy_name)
                                            <li> <i
                                                    class="pe-7s-prev font-26 vertical-align-middle text-theme-colored2 mr-10"></i>
                                                <span class="font-16" style="font-weight:bold;color:#1f3344;">
                                                    {{ __('course.title2') }}
                                                    : </span>{{ $course->modalitiy_name }}
                                            </li>
                                        @endif
                                        @if ($course->languages_name)
                                            <li><i
                                                    class="pe-7s-notebook  font-26 vertical-align-middle text-theme-colored2 mr-10 "></i>
                                                <span class="font-16"
                                                    style="font-weight:bold;color:#1f3344;">{{ __('course.title4') }}
                                                    :</span> {{ $course->languages_name }}
                                            </li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="text"
                                    style="display: flex;justify-content:space-between;padding-left:4px;padding-right:4px;">
                                    <p> ADMISSION</p>
                                    <span> <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg></span>
                                </div>
                                <div class="hidden-box">
                                    <div class="container" style="margin-top:-30px;">
                                        <div class="row">

                                            @if ($course->admission != '<p>.</p>')
                                                @if (isset($course->admission))
                                                    <div>
                                                        <h5 class=" @if (!isset($design->size)) font-20 @endif "
                                                            style="  @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                            {{ __('course.subtitle3') }} </h5>
                                                        <div class="font-16"
                                                            style="text-align:justify;hyphens:auto;font-size:16px;padding-right:10px;padding-left:10px;">
                                                            {!! $course->admission !!}</div>
                                                    </div>
                                                @endif
                                            @endif
                                            @if ($course->dossier != '<p>.</p>')
                                                @if (isset($course->dossier))
                                                    <div>
                                                        <h5 class=" @if (!isset($design->size)) font-20 @endif "
                                                            style="  @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                            {{ __('course.subtitle4') }} </h5>
                                                        <div class="font-16"
                                                            style="text-align:justify;hyphens:auto;font-size:16px;padding-right:10px;padding-left:10px;">
                                                            {!! $course->dossier !!}</div>
                                                    </div>
                                                @endif
                                            @endif
                                            @if (isset($course->candidature))
                                                @if ($course->candidature != '<p>.</p>')
                                                    <div>
                                                        <h5 class=" @if (!isset($design->size)) font-20 @endif "
                                                            style="  @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                            {{ __('course.subtitle5') }}</h5>
                                                        <div class="font-16"
                                                            style="text-align:justify;hyphens:auto;font-size:16px;padding-right:10px;padding-left:10px;">
                                                            {!! $course->candidature !!}</div>
                                                    </div>
                                                @endif
                                            @endif
                                            @if (isset($course->datelimite))
                                                <div>
                                                    <h5 class=" @if (!isset($design->size)) font-20 @endif "
                                                        style="  @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                        {{ __('course.subtitle6') }}</h5>
                                                    <div class="font-16"
                                                        style="text-align:justify;hyphens:auto;font-size:16px;padding-right:10px;padding-left:10px;">
                                                        {!! $course->datelimite !!}</div>
                                                </div>
                                            @endif
                                            @if (isset($course->selection))
                                                @if ($course->selection != '<p>.</p>')
                                                    <div>
                                                        <h5 class=" @if (!isset($design->size)) font-20 @endif "
                                                            style="  @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                            {{ __('course.subtitle7') }}</h5>
                                                        <div class="font-16"
                                                            style="text-align:justify;hyphens:auto;font-size:16px;padding-right:10px;padding-left:10px;">
                                                            {!! $course->selection !!}</div>
                                                    </div>
                                                @endif
                                            @endif
                                            @if (isset($course->daterentre))
                                                <div>
                                                    <h5 class=" @if (!isset($design->size)) font-20 @endif "
                                                        style="  @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                        {{ __('course.subtitle8') }}</h5>
                                                    <div class="font-16"
                                                        style="text-align:justify;hyphens:auto;font-size:16px;padding-right:10px;padding-left:10px;">
                                                        @php
                                                            $getYears = date('m-Y', strtotime($course->daterentre));
                                                            
                                                            echo $getYears;
                                                            
                                                        @endphp</div>
                                                </div>
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="text"
                                    style="display: flex;justify-content:space-between;padding-left:4px;padding-right:4px;">
                                    <p> {{ __('course.title7') }}</p>
                                    <span> <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg></span>
                                </div>

                                <div class="hidden-box">
                                    <div class="container" style="margin-top:-30px;">

                                        <div class="row">
                                            @foreach ($programs as $program)
                                                <div style="display:flex;justify-content:space-between;">
                                                    @if ($program->title)
                                                        <p
                                                            style="font-weight:bold;text-decoration:underline; font-size:16px;padding-left:10px;">
                                                            {{ $program->title }}
                                                        </p>
                                                    @endif
                                                    @if ($program->hours)
                                                        <p
                                                            style="font-weight:bold;text-decoration:underline; font-size:16px;padding-right:10px;">
                                                            {{ $program->hours }} {{ __('course.subtitle10') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                <div
                                                    style="hyphens:auto;font-size:16px;padding-right:10px;padding-left:10px;">
                                                    {!! $program->description !!} </div>
                                            @endforeach

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="text"
                                    style="display: flex;justify-content:space-between;padding-left:4px;padding-right:4px;">
                                    <p>{{ __('course.title8') }}</p>
                                    <span> <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg></span>
                                </div>

                                <div class="hidden-box">
                                    <div class="container" style="margin-top:-30px;">

                                        <div class="row">
                                            @if (isset($course->grade))
                                                @if ($course->grade != '<p>.</p>')
                                                    <div>
                                                        <h5 class=" @if (!isset($design->size)) font-20 @endif "
                                                            style="  @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                            {{ __('course.title1') }}</h5>
                                                        <div class="font-16"
                                                            style=" text-align:justify;hyphens:auto;font-size:16px;padding-right:10px;padding-left:10px;">
                                                            {!! $course->grade !!}</div>
                                                    </div>
                                                @endif
                                            @endif
                                            @if (isset($course->profile))
                                                @if ($course->profile != '<p>.</p>')
                                                    <div>
                                                        <h5 class=" @if (!isset($design->size)) font-20 @endif "
                                                            style="  @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                            {{ __('course.subtitle11') }}</h5>
                                                        <div class="font-16"
                                                            style=" text-align:justify;hyphens:auto;font-size:16px;padding-right:10px;padding-left:10px;">
                                                            {!! $course->profile !!}</div>
                                                    </div>
                                                @endif
                                            @endif
                                            @if (isset($course->candidature))
                                                @if ($course->candidature != '<p>.</p>')
                                                    <div>
                                                        <h5 class=" @if (!isset($design->size)) font-20 @endif "
                                                            style="  @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                            {{ __('course.subtitle12') }}</h5>
                                                        <div class="font-16"
                                                            style="text-align:justify;hyphens:auto;font-size:16px;padding-right:10px;padding-left:10px;">
                                                            {!! $course->opportunity !!}</div>
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="text"
                                    style="display: flex;justify-content:space-between;padding-left:4px;padding-right:4px;">
                                    <p> {{ __('course.title9') }}</p>
                                    <span> <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg></span>
                                </div>
                                <div class="hidden-box">
                                    <div class="row" style="margin-top:-50px;">
                                        @foreach ($downloads as $download)
                                            <div class="col-md-3">

                                                <h5 class="mb-0 font-16">{{ $download->name }}</h5>
                                                <a href="{{ url('storage') }}/{{ $download->file }}"
                                                    target="_blank">Cliquer
                                                    ici</a>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                            <div class="item" style="padding-bottom:8px;">
                                <div class="text"
                                    style="display: flex;justify-content:space-between;padding-left:4px;padding-right:4px;">
                                    <p> {{ __('course.title10') }}</p>
                                    <span> <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg></span>
                                </div>
                                <div class="hidden-box font-size"
                                    style="margin-top:-30px;text-align:justify;hyphens:auto;">
                                    @if (!is_null($courses[0]->responsables_photo))
                                        <!-- Portfolio Item Start -->
                                        <div class="team-members mb-40 ml-40 mr-40">

                                            <div class="team-bottom-part border-1px p-15">

                                                <h4 class="text-uppercase font-weight-600 m-0 pb-5 font-14">
                                                    {{ $courses[0]->responsables_name }}
                                                    {{ $courses[0]->responsables_surname }}

                                                </h4>

                                                <h6 class="font-13 text-gray mt-0 font-8">
                                                    @if (App::isLocale('en'))
                                                        {{ $courses[0]->responsables_statut_en }}
                                                    @else
                                                        {{ $courses[0]->responsables_statut }}
                                                    @endif
                                                </h6>
                                                <h6 class="font-13 text-gray mt-0 font-8">
                                                    @if (App::isLocale('en'))
                                                        {{ $courses[0]->responsables_poste_en }}
                                                    @else
                                                        {{ $courses[0]->responsables_poste }}
                                                    @endif
                                                </h6>
                                                <h6 class="font-13 text-gray mt-0 font-8">
                                                    {{ $courses[0]->responsables_etablissement }}
                                                </h6>
                                                <ul class="list-inline">

                                                    @if (isset($courses[0]->responsables_country))
                                                        <li class="m-0 pr-10" style="width:100%;">
                                                            <i
                                                                class="pe-7s-global font-16  text-theme-colored2 mr-5"></i>
                                                            <a class="text-gray" style="font-size:9px;" href="#">
                                                                @php
                                                                    $countries = [
                                                                        'AF' => 'Afghanistan',
                                                                        'ZA' => 'Afrique du Sud',
                                                                        'AL' => 'Albanie',
                                                                        'DZ' => 'Algérie',
                                                                        'DE' => 'Allemagne',
                                                                        'AD' => 'Andorre',
                                                                        'AO' => 'Angola',
                                                                        'AI' => 'Anguilla',
                                                                        'AQ' => 'Antarctique',
                                                                        'AG' => 'Antigua-et-Barbuda',
                                                                        'SA' => 'Arabie saoudite',
                                                                        'AR' => 'Argentine',
                                                                        'AM' => 'Arménie',
                                                                        'AW' => 'Aruba',
                                                                        'AU' => 'Australie',
                                                                        'AT' => 'Autriche',
                                                                        'AZ' => 'Azerbaïdjan',
                                                                        'BS' => 'Bahamas',
                                                                        'BH' => 'Bahreïn',
                                                                        'BD' => 'Bangladesh',
                                                                        'BB' => 'Barbade',
                                                                        'BE' => 'Belgique',
                                                                        'BZ' => 'Belize',
                                                                        'BJ' => 'Bénin',
                                                                        'BM' => 'Bermudes',
                                                                        'BT' => 'Bhoutan',
                                                                        'BY' => 'Biélorussie',
                                                                        'BO' => 'Bolivie',
                                                                        'BA' => 'Bosnie-Herzégovine',
                                                                        'BW' => 'Botswana',
                                                                        'BR' => 'Brésil',
                                                                        'BN' => 'Brunéi Darussalam',
                                                                        'BG' => 'Bulgarie',
                                                                        'BF' => 'Burkina Faso',
                                                                        'BI' => 'Burundi',
                                                                        'KH' => 'Cambodge',
                                                                        'CM' => 'Cameroun',
                                                                        'CA' => 'Canada',
                                                                        'CV' => 'Cap-Vert',
                                                                        'CL' => 'Chili',
                                                                        'CN' => 'Chine',
                                                                        'CY' => 'Chypre',
                                                                        'CO' => 'Colombie',
                                                                        'KM' => 'Comores',
                                                                        'CG' => 'Congo-Brazzaville',
                                                                        'CD' => 'Congo-Kinshasa',
                                                                        'KP' => 'Corée du Nord',
                                                                        'KR' => 'Corée du Sud',
                                                                        'CR' => 'Costa Rica',
                                                                        'CI' => 'Côte d’Ivoire',
                                                                        'HR' => 'Croatie',
                                                                        'CU' => 'Cuba',
                                                                        'CW' => 'Curaçao',
                                                                        'DK' => 'Danemark',
                                                                        'DJ' => 'Djibouti',
                                                                        'DM' => 'Dominique',
                                                                        'EG' => 'Égypte',
                                                                        'AE' => 'Émirats arabes unis',
                                                                        'EC' => 'Équateur',
                                                                        'ER' => 'Érythrée',
                                                                        'ES' => 'Espagne',
                                                                        'EE' => 'Estonie',
                                                                        'SZ' => 'Eswatini',
                                                                        'VA' => 'État de la Cité du Vatican',
                                                                        'FM' => 'États fédérés de Micronésie',
                                                                        'US' => 'États-Unis',
                                                                        'ET' => 'Éthiopie',
                                                                        'FJ' => 'Fidji',
                                                                        'FI' => 'Finlande',
                                                                        'FR' => 'France',
                                                                        'GA' => 'Gabon',
                                                                        'GM' => 'Gambie',
                                                                        'GE' => 'Géorgie',
                                                                        'GS' => 'Géorgie du Sud et îles Sandwich du Sud',
                                                                        'GH' => 'Ghana',
                                                                        'GI' => 'Gibraltar',
                                                                        'GR' => 'Grèce',
                                                                        'GD' => 'Grenade',
                                                                        'GL' => 'Groenland',
                                                                        'GP' => 'Guadeloupe',
                                                                        'GU' => 'Guam',
                                                                        'GT' => 'Guatemala',
                                                                        'GG' => 'Guernesey',
                                                                        'GN' => 'Guinée',
                                                                        'GQ' => 'Guinée équatoriale',
                                                                        'GW' => 'Guinée-Bissau',
                                                                        'GY' => 'Guyana',
                                                                        'GF' => 'Guyane française',
                                                                        'HT' => 'Haïti',
                                                                        'HN' => 'Honduras',
                                                                        'HU' => 'Hongrie',
                                                                        'BV' => 'Île Bouvet',
                                                                        'CX' => 'Île Christmas',
                                                                        'IM' => 'Île de Man',
                                                                        'NF' => 'Île Norfolk',
                                                                        'AX' => 'Îles Åland',
                                                                        'KY' => 'Îles Caïmans',
                                                                        'CC' => 'Îles Cocos',
                                                                        'CK' => 'Îles Cook',
                                                                        'FO' => 'Îles Féroé',
                                                                        'HM' => 'Îles Heard et McDonald',
                                                                        'FK' => 'Îles Malouines',
                                                                        'MP' => 'Îles Mariannes du Nord',
                                                                        'MH' => 'Îles Marshall',
                                                                        'UM' => 'Îles mineures éloignées des États-Unis',
                                                                        'PN' => 'Îles Pitcairn',
                                                                        'SB' => 'Îles Salomon',
                                                                        'TC' => 'Îles Turques-et-Caïques',
                                                                        'VG' => 'Îles Vierges britanniques',
                                                                        'VI' => 'Îles Vierges des États-Unis',
                                                                        'IN' => 'Inde',
                                                                        'ID' => 'Indonésie',
                                                                        'IQ' => 'Irak',
                                                                        'IR' => 'Iran',
                                                                        'IE' => 'Irlande',
                                                                        'IS' => 'Islande',
                                                                        'IL' => 'Israël',
                                                                        'IT' => 'Italie',
                                                                        'JM' => 'Jamaïque',
                                                                        'JP' => 'Japon',
                                                                        'JE' => 'Jersey',
                                                                        'JO' => 'Jordanie',
                                                                        'KZ' => 'Kazakhstan',
                                                                        'KE' => 'Kenya',
                                                                        'KG' => 'Kirghizistan',
                                                                        'KI' => 'Kiribati',
                                                                        'KW' => 'Koweït',
                                                                        'RE' => 'La Réunion',
                                                                        'LA' => 'Laos',
                                                                        'LS' => 'Lesotho',
                                                                        'LV' => 'Lettonie',
                                                                        'LB' => 'Liban',
                                                                        'LR' => 'Libéria',
                                                                        'LY' => 'Libye',
                                                                        'LI' => 'Liechtenstein',
                                                                        'LT' => 'Lituanie',
                                                                        'LU' => 'Luxembourg',
                                                                        'MK' => 'Macédoine du Nord',
                                                                        'MG' => 'Madagascar',
                                                                        'MY' => 'Malaisie',
                                                                        'MW' => 'Malawi',
                                                                        'MV' => 'Maldives',
                                                                        'ML' => 'Mali',
                                                                        'MT' => 'Malte',
                                                                        'MA' => 'Maroc',
                                                                        'MQ' => 'Martinique',
                                                                        'MU' => 'Maurice',
                                                                        'MR' => 'Mauritanie',
                                                                        'YT' => 'Mayotte',
                                                                        'MX' => 'Mexique',
                                                                        'MD' => 'Moldavie',
                                                                        'MC' => 'Monaco',
                                                                        'MN' => 'Mongolie',
                                                                        'ME' => 'Monténégro',
                                                                        'MS' => 'Montserrat',
                                                                        'MZ' => 'Mozambique',
                                                                        'MM' => 'Myanmar (Birmanie)',
                                                                        'NA' => 'Namibie',
                                                                        'NR' => 'Nauru',
                                                                        'NP' => 'Népal',
                                                                        'NI' => 'Nicaragua',
                                                                        'NE' => 'Niger',
                                                                        'NG' => 'Nigéria',
                                                                        'NU' => 'Niue',
                                                                        'NO' => 'Norvège',
                                                                        'NC' => 'Nouvelle-Calédonie',
                                                                        'NZ' => 'Nouvelle-Zélande',
                                                                        'OM' => 'Oman',
                                                                        'UG' => 'Ouganda',
                                                                        'UZ' => 'Ouzbékistan',
                                                                        'PK' => 'Pakistan',
                                                                        'PW' => 'Palaos',
                                                                        'PA' => 'Panama',
                                                                        'PG' => 'Papouasie-Nouvelle-Guinée',
                                                                        'PY' => 'Paraguay',
                                                                        'NL' => 'Pays-Bas',
                                                                        'BQ' => 'Pays-Bas caribéens',
                                                                        'PE' => 'Pérou',
                                                                        'PH' => 'Philippines',
                                                                        'PL' => 'Pologne',
                                                                        'PF' => 'Polynésie française',
                                                                        'PR' => 'Porto Rico',
                                                                        'PT' => 'Portugal',
                                                                        'QA' => 'Qatar',
                                                                        'HK' => 'R.A.S. chinoise de Hong Kong',
                                                                        'MO' => 'R.A.S. chinoise de Macao',
                                                                        'CF' => 'République centrafricaine',
                                                                        'DO' => 'République dominicaine',
                                                                        'RO' => 'Roumanie',
                                                                        'GB' => 'Royaume-Uni',
                                                                        'RU' => 'Russie',
                                                                        'RW' => 'Rwanda',
                                                                        'EH' => 'Sahara occidental',
                                                                        'BL' => 'Saint-Barthélemy',
                                                                        'KN' => 'Saint-Christophe-et-Niévès',
                                                                        'SM' => 'Saint-Marin',
                                                                        'MF' => 'Saint-Martin',
                                                                        'SX' => 'Saint-Martin (partie néerlandaise)',
                                                                        'PM' => 'Saint-Pierre-et-Miquelon',
                                                                        'VC' => 'Saint-Vincent-et-les-Grenadines',
                                                                        'SH' => 'Sainte-Hélène',
                                                                        'LC' => 'Sainte-Lucie',
                                                                        'SV' => 'Salvador',
                                                                        'WS' => 'Samoa',
                                                                        'AS' => 'Samoa américaines',
                                                                        'ST' => 'Sao Tomé-et-Principe',
                                                                        'SN' => 'Sénégal',
                                                                        'RS' => 'Serbie',
                                                                        'SC' => 'Seychelles',
                                                                        'SL' => 'Sierra Leone',
                                                                        'SG' => 'Singapour',
                                                                        'SK' => 'Slovaquie',
                                                                        'SI' => 'Slovénie',
                                                                        'SO' => 'Somalie',
                                                                        'SD' => 'Soudan',
                                                                        'SS' => 'Soudan du Sud',
                                                                        'LK' => 'Sri Lanka',
                                                                        'SE' => 'Suède',
                                                                        'CH' => 'Suisse',
                                                                        'SR' => 'Suriname',
                                                                        'SJ' => 'Svalbard et Jan Mayen',
                                                                        'SY' => 'Syrie',
                                                                        'TJ' => 'Tadjikistan',
                                                                        'TW' => 'Taïwan',
                                                                        'TZ' => 'Tanzanie',
                                                                        'TD' => 'Tchad',
                                                                        'CZ' => 'Tchéquie',
                                                                        'TF' => 'Terres australes françaises',
                                                                        'IO' => 'Territoire britannique de l’océan Indien',
                                                                        'PS' => 'Territoires palestiniens',
                                                                        'TH' => 'Thaïlande',
                                                                        'TL' => 'Timor oriental',
                                                                        'TG' => 'Togo',
                                                                        'TK' => 'Tokelau',
                                                                        'TO' => 'Tonga',
                                                                        'TT' => 'Trinité-et-Tobago',
                                                                        'TN' => 'Tunisie',
                                                                        'TM' => 'Turkménistan',
                                                                        'TR' => 'Turquie',
                                                                        'TV' => 'Tuvalu',
                                                                        'UA' => 'Ukraine',
                                                                        'UY' => 'Uruguay',
                                                                        'VU' => 'Vanuatu',
                                                                        'VE' => 'Venezuela',
                                                                        'VN' => 'Vietnam',
                                                                        'WF' => 'Wallis-et-Futuna',
                                                                        'YE' => 'Yémen',
                                                                        'ZM' => 'Zambie',
                                                                        'ZW' => 'Zimbabwe',
                                                                    ];
                                                                    echo $countries[$courses[0]->responsables_country];
                                                                @endphp
                                                            </a>
                                                        </li>
                                                    @endif

                                                    @if (isset($courses[0]->responsables_phone))
                                                        <li class="m-0 pr-10"> <i
                                                                class="fa fa-phone text-theme-colored2 mr-5"></i>
                                                            <a class="text-gray" style="font-size:9px;"
                                                                href="#">{{ $courses[0]->responsables_phone }}</a>
                                                        </li>
                                                    @endif

                                                    @if (isset($courses[0]->responsables_email))
                                                        <li class="m-0 pr-10"> <i
                                                                class="fa fa-envelope-o text-theme-colored2 mr-5"></i>
                                                            <a class="text-gray" style="font-size:9px;"
                                                                href="mailto:{{ $courses[0]->responsables_email }}">{{ $courses[0]->responsables_email }}</a>
                                                        </li>
                                                    @endif
                                                </ul>

                                            </div>
                                        </div>
                                    @elseif(!is_null($courses[0]->teams_photo))
                                        <div class="team-members mb-40 ml-40 mr-40">
                                            <div class="team-bottom-part border-1px p-15">

                                                <h4 class="text-uppercase font-weight-600 m-0 pb-5 font-14">
                                                    {{ $courses[0]->teams_name }}
                                                    {{ $courses[0]->teams_surname }}

                                                </h4>

                                                <h6 class="font-13 text-gray mt-0 font-8">
                                                    @if (App::isLocale('en'))
                                                        {{ $courses[0]->teams_statut_en }}
                                                    @else
                                                        {{ $courses[0]->teams_statut }}
                                                    @endif
                                                </h6>
                                                <h6 class="font-13 text-gray mt-0 font-8">
                                                    @if (App::isLocale('en'))
                                                        {{ $courses[0]->teams_poste_en }}
                                                    @else
                                                        {{ $courses[0]->teams_poste }}
                                                    @endif
                                                </h6>
                                                <h6 class="font-13 text-gray mt-0 font-8">
                                                    {{ $courses[0]->teams_etablissement }}
                                                </h6>
                                                <ul class="list-inline mt-15">

                                                    @if (isset($courses[0]->teams_country))
                                                        <li class="m-0 pr-10" style="width:100%;">
                                                            <i
                                                                class="pe-7s-global font-16  text-theme-colored2 mr-5"></i>
                                                            <a class="text-gray" style="font-size:9px;"  href="#">
                                                                @php
                                                                    $countries = [
                                                                        'AF' => 'Afghanistan',
                                                                        'ZA' => 'Afrique du Sud',
                                                                        'AL' => 'Albanie',
                                                                        'DZ' => 'Algérie',
                                                                        'DE' => 'Allemagne',
                                                                        'AD' => 'Andorre',
                                                                        'AO' => 'Angola',
                                                                        'AI' => 'Anguilla',
                                                                        'AQ' => 'Antarctique',
                                                                        'AG' => 'Antigua-et-Barbuda',
                                                                        'SA' => 'Arabie saoudite',
                                                                        'AR' => 'Argentine',
                                                                        'AM' => 'Arménie',
                                                                        'AW' => 'Aruba',
                                                                        'AU' => 'Australie',
                                                                        'AT' => 'Autriche',
                                                                        'AZ' => 'Azerbaïdjan',
                                                                        'BS' => 'Bahamas',
                                                                        'BH' => 'Bahreïn',
                                                                        'BD' => 'Bangladesh',
                                                                        'BB' => 'Barbade',
                                                                        'BE' => 'Belgique',
                                                                        'BZ' => 'Belize',
                                                                        'BJ' => 'Bénin',
                                                                        'BM' => 'Bermudes',
                                                                        'BT' => 'Bhoutan',
                                                                        'BY' => 'Biélorussie',
                                                                        'BO' => 'Bolivie',
                                                                        'BA' => 'Bosnie-Herzégovine',
                                                                        'BW' => 'Botswana',
                                                                        'BR' => 'Brésil',
                                                                        'BN' => 'Brunéi Darussalam',
                                                                        'BG' => 'Bulgarie',
                                                                        'BF' => 'Burkina Faso',
                                                                        'BI' => 'Burundi',
                                                                        'KH' => 'Cambodge',
                                                                        'CM' => 'Cameroun',
                                                                        'CA' => 'Canada',
                                                                        'CV' => 'Cap-Vert',
                                                                        'CL' => 'Chili',
                                                                        'CN' => 'Chine',
                                                                        'CY' => 'Chypre',
                                                                        'CO' => 'Colombie',
                                                                        'KM' => 'Comores',
                                                                        'CG' => 'Congo-Brazzaville',
                                                                        'CD' => 'Congo-Kinshasa',
                                                                        'KP' => 'Corée du Nord',
                                                                        'KR' => 'Corée du Sud',
                                                                        'CR' => 'Costa Rica',
                                                                        'CI' => 'Côte d’Ivoire',
                                                                        'HR' => 'Croatie',
                                                                        'CU' => 'Cuba',
                                                                        'CW' => 'Curaçao',
                                                                        'DK' => 'Danemark',
                                                                        'DJ' => 'Djibouti',
                                                                        'DM' => 'Dominique',
                                                                        'EG' => 'Égypte',
                                                                        'AE' => 'Émirats arabes unis',
                                                                        'EC' => 'Équateur',
                                                                        'ER' => 'Érythrée',
                                                                        'ES' => 'Espagne',
                                                                        'EE' => 'Estonie',
                                                                        'SZ' => 'Eswatini',
                                                                        'VA' => 'État de la Cité du Vatican',
                                                                        'FM' => 'États fédérés de Micronésie',
                                                                        'US' => 'États-Unis',
                                                                        'ET' => 'Éthiopie',
                                                                        'FJ' => 'Fidji',
                                                                        'FI' => 'Finlande',
                                                                        'FR' => 'France',
                                                                        'GA' => 'Gabon',
                                                                        'GM' => 'Gambie',
                                                                        'GE' => 'Géorgie',
                                                                        'GS' => 'Géorgie du Sud et îles Sandwich du Sud',
                                                                        'GH' => 'Ghana',
                                                                        'GI' => 'Gibraltar',
                                                                        'GR' => 'Grèce',
                                                                        'GD' => 'Grenade',
                                                                        'GL' => 'Groenland',
                                                                        'GP' => 'Guadeloupe',
                                                                        'GU' => 'Guam',
                                                                        'GT' => 'Guatemala',
                                                                        'GG' => 'Guernesey',
                                                                        'GN' => 'Guinée',
                                                                        'GQ' => 'Guinée équatoriale',
                                                                        'GW' => 'Guinée-Bissau',
                                                                        'GY' => 'Guyana',
                                                                        'GF' => 'Guyane française',
                                                                        'HT' => 'Haïti',
                                                                        'HN' => 'Honduras',
                                                                        'HU' => 'Hongrie',
                                                                        'BV' => 'Île Bouvet',
                                                                        'CX' => 'Île Christmas',
                                                                        'IM' => 'Île de Man',
                                                                        'NF' => 'Île Norfolk',
                                                                        'AX' => 'Îles Åland',
                                                                        'KY' => 'Îles Caïmans',
                                                                        'CC' => 'Îles Cocos',
                                                                        'CK' => 'Îles Cook',
                                                                        'FO' => 'Îles Féroé',
                                                                        'HM' => 'Îles Heard et McDonald',
                                                                        'FK' => 'Îles Malouines',
                                                                        'MP' => 'Îles Mariannes du Nord',
                                                                        'MH' => 'Îles Marshall',
                                                                        'UM' => 'Îles mineures éloignées des États-Unis',
                                                                        'PN' => 'Îles Pitcairn',
                                                                        'SB' => 'Îles Salomon',
                                                                        'TC' => 'Îles Turques-et-Caïques',
                                                                        'VG' => 'Îles Vierges britanniques',
                                                                        'VI' => 'Îles Vierges des États-Unis',
                                                                        'IN' => 'Inde',
                                                                        'ID' => 'Indonésie',
                                                                        'IQ' => 'Irak',
                                                                        'IR' => 'Iran',
                                                                        'IE' => 'Irlande',
                                                                        'IS' => 'Islande',
                                                                        'IL' => 'Israël',
                                                                        'IT' => 'Italie',
                                                                        'JM' => 'Jamaïque',
                                                                        'JP' => 'Japon',
                                                                        'JE' => 'Jersey',
                                                                        'JO' => 'Jordanie',
                                                                        'KZ' => 'Kazakhstan',
                                                                        'KE' => 'Kenya',
                                                                        'KG' => 'Kirghizistan',
                                                                        'KI' => 'Kiribati',
                                                                        'KW' => 'Koweït',
                                                                        'RE' => 'La Réunion',
                                                                        'LA' => 'Laos',
                                                                        'LS' => 'Lesotho',
                                                                        'LV' => 'Lettonie',
                                                                        'LB' => 'Liban',
                                                                        'LR' => 'Libéria',
                                                                        'LY' => 'Libye',
                                                                        'LI' => 'Liechtenstein',
                                                                        'LT' => 'Lituanie',
                                                                        'LU' => 'Luxembourg',
                                                                        'MK' => 'Macédoine du Nord',
                                                                        'MG' => 'Madagascar',
                                                                        'MY' => 'Malaisie',
                                                                        'MW' => 'Malawi',
                                                                        'MV' => 'Maldives',
                                                                        'ML' => 'Mali',
                                                                        'MT' => 'Malte',
                                                                        'MA' => 'Maroc',
                                                                        'MQ' => 'Martinique',
                                                                        'MU' => 'Maurice',
                                                                        'MR' => 'Mauritanie',
                                                                        'YT' => 'Mayotte',
                                                                        'MX' => 'Mexique',
                                                                        'MD' => 'Moldavie',
                                                                        'MC' => 'Monaco',
                                                                        'MN' => 'Mongolie',
                                                                        'ME' => 'Monténégro',
                                                                        'MS' => 'Montserrat',
                                                                        'MZ' => 'Mozambique',
                                                                        'MM' => 'Myanmar (Birmanie)',
                                                                        'NA' => 'Namibie',
                                                                        'NR' => 'Nauru',
                                                                        'NP' => 'Népal',
                                                                        'NI' => 'Nicaragua',
                                                                        'NE' => 'Niger',
                                                                        'NG' => 'Nigéria',
                                                                        'NU' => 'Niue',
                                                                        'NO' => 'Norvège',
                                                                        'NC' => 'Nouvelle-Calédonie',
                                                                        'NZ' => 'Nouvelle-Zélande',
                                                                        'OM' => 'Oman',
                                                                        'UG' => 'Ouganda',
                                                                        'UZ' => 'Ouzbékistan',
                                                                        'PK' => 'Pakistan',
                                                                        'PW' => 'Palaos',
                                                                        'PA' => 'Panama',
                                                                        'PG' => 'Papouasie-Nouvelle-Guinée',
                                                                        'PY' => 'Paraguay',
                                                                        'NL' => 'Pays-Bas',
                                                                        'BQ' => 'Pays-Bas caribéens',
                                                                        'PE' => 'Pérou',
                                                                        'PH' => 'Philippines',
                                                                        'PL' => 'Pologne',
                                                                        'PF' => 'Polynésie française',
                                                                        'PR' => 'Porto Rico',
                                                                        'PT' => 'Portugal',
                                                                        'QA' => 'Qatar',
                                                                        'HK' => 'R.A.S. chinoise de Hong Kong',
                                                                        'MO' => 'R.A.S. chinoise de Macao',
                                                                        'CF' => 'République centrafricaine',
                                                                        'DO' => 'République dominicaine',
                                                                        'RO' => 'Roumanie',
                                                                        'GB' => 'Royaume-Uni',
                                                                        'RU' => 'Russie',
                                                                        'RW' => 'Rwanda',
                                                                        'EH' => 'Sahara occidental',
                                                                        'BL' => 'Saint-Barthélemy',
                                                                        'KN' => 'Saint-Christophe-et-Niévès',
                                                                        'SM' => 'Saint-Marin',
                                                                        'MF' => 'Saint-Martin',
                                                                        'SX' => 'Saint-Martin (partie néerlandaise)',
                                                                        'PM' => 'Saint-Pierre-et-Miquelon',
                                                                        'VC' => 'Saint-Vincent-et-les-Grenadines',
                                                                        'SH' => 'Sainte-Hélène',
                                                                        'LC' => 'Sainte-Lucie',
                                                                        'SV' => 'Salvador',
                                                                        'WS' => 'Samoa',
                                                                        'AS' => 'Samoa américaines',
                                                                        'ST' => 'Sao Tomé-et-Principe',
                                                                        'SN' => 'Sénégal',
                                                                        'RS' => 'Serbie',
                                                                        'SC' => 'Seychelles',
                                                                        'SL' => 'Sierra Leone',
                                                                        'SG' => 'Singapour',
                                                                        'SK' => 'Slovaquie',
                                                                        'SI' => 'Slovénie',
                                                                        'SO' => 'Somalie',
                                                                        'SD' => 'Soudan',
                                                                        'SS' => 'Soudan du Sud',
                                                                        'LK' => 'Sri Lanka',
                                                                        'SE' => 'Suède',
                                                                        'CH' => 'Suisse',
                                                                        'SR' => 'Suriname',
                                                                        'SJ' => 'Svalbard et Jan Mayen',
                                                                        'SY' => 'Syrie',
                                                                        'TJ' => 'Tadjikistan',
                                                                        'TW' => 'Taïwan',
                                                                        'TZ' => 'Tanzanie',
                                                                        'TD' => 'Tchad',
                                                                        'CZ' => 'Tchéquie',
                                                                        'TF' => 'Terres australes françaises',
                                                                        'IO' => 'Territoire britannique de l’océan Indien',
                                                                        'PS' => 'Territoires palestiniens',
                                                                        'TH' => 'Thaïlande',
                                                                        'TL' => 'Timor oriental',
                                                                        'TG' => 'Togo',
                                                                        'TK' => 'Tokelau',
                                                                        'TO' => 'Tonga',
                                                                        'TT' => 'Trinité-et-Tobago',
                                                                        'TN' => 'Tunisie',
                                                                        'TM' => 'Turkménistan',
                                                                        'TR' => 'Turquie',
                                                                        'TV' => 'Tuvalu',
                                                                        'UA' => 'Ukraine',
                                                                        'UY' => 'Uruguay',
                                                                        'VU' => 'Vanuatu',
                                                                        'VE' => 'Venezuela',
                                                                        'VN' => 'Vietnam',
                                                                        'WF' => 'Wallis-et-Futuna',
                                                                        'YE' => 'Yémen',
                                                                        'ZM' => 'Zambie',
                                                                        'ZW' => 'Zimbabwe',
                                                                    ];
                                                                    echo $countries[$courses[0]->teams_country];
                                                                @endphp


                                                            </a>
                                                        </li>
                                                    @endif

                                                    @if (isset($courses[0]->teams_phone))
                                                        <li class="m-0 pr-10"> <i
                                                                class="fa fa-phone text-theme-colored2 mr-5"></i>
                                                            <a class="text-gray" style="font-size:9px;"
                                                                href="#">{{ $courses[0]->teams_phone }}</a>
                                                        </li>
                                                    @endif

                                                    @if (isset($courses[0]->teams_email))
                                                        <li class="m-0 pr-10"> <i
                                                                class="fa fa-envelope-o text-theme-colored2 mr-5"></i>
                                                            <a class="text-gray" style="font-size:9px;"
                                                                href="mailto:{{ $courses[0]->teams_email }}">{{ $courses[0]->teams_email }}</a>
                                                        </li>
                                                    @endif
                                                </ul>

                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div id="gallery2"
                            class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix"
                            data-lightbox="gallery" style="margin-top:6px;">
                            @foreach ($coursevideos as $coursevideo)
                                <div class="gallery-item">
                                    <p style="text-align: center; background-color:#F88147;color:black;">
                                        {{ $coursevideo->title }}</p>
                                    <iframe width="220" height="145"
                                        src="https://www.youtube.com/embed/{{ $coursevideo->video }}?rel=0"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            @endforeach
                        </div>

                        <div class="col-sm-12 col-md-3 form1 mr-10 ml-10" style="background-color:  #1f3344;">
                            <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
                                <div class="main-content">
                                    <section>
                                        <div style="width:100%;">
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div>
                                                        <h4 class="text-uppercase m-0" style="color:white">

                                                            {{ __('event.subtitle6') }}
                                                        </h4>
                                                        @if (session()->has('success'))
                                                            <h6 class='alert alert-success' role="alert">
                                                                Your reply has been successfully registered!
                                                            </h6>
                                                        @endif
                                                        <div class="line-bottom-theme-colored2 mb-30  "></div>
                                                        <p class="text-white">{{ __('course.subtitle14') }}.</p>
                                                        <form class="mt-30" method="post"
                                                            action="{{ route('interested', $course->id) }}">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-sm-12 text-white">
                                                                    <div class="row">
                                                                        <label for="gender"
                                                                            class="col-xs-2 col-sm-2">{{ __('course.text1') }}</label>
                                                                        <div
                                                                            class="col-xs-2 col-col-sm-2 form-group mb-10">

                                                                            <input name="gender" value='Mlle'
                                                                                class="" type="radio">
                                                                        </div>
                                                                        <label for=""
                                                                            class="col-xs-2 col-sm-2">{{ __('course.text2') }}</label>

                                                                        <div
                                                                            class="col-xs-2 col-sm-2 form-group mb-10">
                                                                            <input name="gender" value='Mme'
                                                                                class="" type="radio">
                                                                        </div>
                                                                        <label for=""
                                                                            class="col-xs-2 col-sm-2">{{ __('course.text3') }}</label>

                                                                        <div
                                                                            class="col-xs-2 col-sm-2 form-group mb-10">
                                                                            <input name="gender" value='Mr'
                                                                                type="radio" aria-="true">
                                                                        </div>
                                                                    </div>

                                                                    @if ($errors->has('gender'))
                                                                        <span
                                                                            class="text-white">{{ $errors->first('gender') }}</span>
                                                                    @endif



                                                                </div>
                                                                <div class="col-sm-6">


                                                                    <div class="form-group mb-12">
                                                                        <input name="name" class="form-control"
                                                                            style="background-color:white;color: gray;"
                                                                            type="text"
                                                                            placeholder="{{ __('course.text4') }}"
                                                                            value="{{ old('name') }}">
                                                                    </div>
                                                                    @if ($errors->has('name'))
                                                                        <span
                                                                            class="text-white">{{ $errors->first('name') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="col-sm-6">


                                                                    <div class="form-group mb-12">
                                                                        <input name="surname" class="form-control"
                                                                            placeholder="{{ __('course.text5') }}"
                                                                            style="background-color:white;color: gray;"
                                                                            type="text"
                                                                            value="{{ old('surname') }}">
                                                                    </div>
                                                                    @if ($errors->has('surname'))
                                                                        <span
                                                                            class="text-white">{{ $errors->first('surname') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group mb-12">
                                                                        <input name="email"
                                                                            placeholder="{{ __('course.text6') }}"
                                                                            style="background-color:white;color: gray;"
                                                                            class="form-control  email" type="email"
                                                                            value="{{ old('email') }}">
                                                                    </div>
                                                                    @if ($errors->has('email'))
                                                                        <span
                                                                            class="text-white">{{ $errors->first('email') }}</span>
                                                                    @endif
                                                                </div>


                                                                <div class="col-sm-12">

                                                                    <div class="form-group mb-12">
                                                                        <select name="country" id="countries1"
                                                                            style="background-color:white;color: gray;"
                                                                            value="{{ old('country') }}"
                                                                            class="form-control  ">
                                                                            @foreach ($countries as $country)
                                                                                <option value="{{ $country }}">
                                                                                    {{ $country }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    @if ($errors->has('country'))
                                                                        <span
                                                                            class="text-white">{{ $errors->first('country') }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-12 " id="provinces1">
                                                                    <div class="form-group mb-10">
                                                                        <select name="province" id="province1"
                                                                            class="form-control"
                                                                            style="background-color:white;color: gray;"
                                                                            value="{{ old('province') }}">
                                                                            <option value="_" selected>
                                                                                Province
                                                                            </option>

                                                                            @foreach ($provinces as $province)
                                                                                <option value="{{ $province }}">
                                                                                    {{ $province }}</option>
                                                                            @endforeach

                                                                        </select>

                                                                    </div>
                                                                    @if ($errors->has('province'))
                                                                        <span
                                                                            class="text-white">{{ $errors->first('province') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="col-sm-12">

                                                                    <div class="form-group mb-10">
                                                                        <div>
                                                                            <label for="phone"
                                                                                class=" font-12 text-white"
                                                                                style=" width:100%;">
                                                                                {{ __('course.text8') }}</label>
                                                                        </div>
                                                                        <input name="phone" class="form-control"
                                                                            id="phone1" type="tel"
                                                                            value="+212">
                                                                        <input name="indice1" class="form-control"
                                                                            id="indice1" type="hidden"
                                                                            value="212">
                                                                    </div>
                                                                    @if ($errors->has('phone'))
                                                                        <span
                                                                            class="text-white">{{ $errors->first('phone') }}</span>
                                                                    @endif
                                                                </div>

                                                            </div>
                                                            <div class="row">

                                                                <div class="col-sm-12 ">

                                                                    <div class="form-group mb-10">
                                                                        <select name="level"
                                                                            value="{{ old('level') }}"
                                                                            style="background-color:white;color: gray;"
                                                                            class="form-control  ">
                                                                            <option value="_" selected>
                                                                                {{ __('course.text9') }}</option>
                                                                            @foreach ($levels as $level)
                                                                                <option value="{{ $level }}">
                                                                                    @if (App::isLocale('en'))
                                                                                        {{ $level->name_en }}
                                                                                    @else
                                                                                        {{ $level->name }}
                                                                                    @endif
                                                                                </option>
                                                                            @endforeach
                                                                        </select>

                                                                    </div>
                                                                    @if ($errors->has('level'))
                                                                        <span
                                                                            class="text-white">{{ $errors->first('level') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group mb-10">
                                                                        <input name="grade"
                                                                            value="{{ old('grade') }}"
                                                                            style="background-color:white;color: gray;"
                                                                            placeholder="{{ __('course.title1') }} {{ __('course.text11') }}"
                                                                            class="form-control" type="text">
                                                                    </div>
                                                                    @if ($errors->has('grade'))
                                                                        <span
                                                                            class="text-white">{{ $errors->first('grade') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-12 font-10 text-white mb-10"
                                                                style="text-align:justify;hyphens:auto;">
                                                                {{ __('event.formtext6') }}
                                                            </div>


                                                            <div class="col-xs-12 col-sm-12 ">

                                                                <div class="mb-10">

                                                                    <div class="font-10 text-white "
                                                                        style="text-align:justify;hyphens:auto;width:100%;">
                                                                        <input name="accepted" value='accepted'
                                                                            type="checkbox">
                                                                        {{ __('event.formtext7') }} <a
                                                                            class="text-white"
                                                                            style="font-weight:normal;text-decoration:underline;"
                                                                            href="{{ route('mention.index') }}"> les
                                                                            conditions
                                                                            générales d'utilisation</a> , notamment la
                                                                        mention relative
                                                                        á la protection des données
                                                                        personnelles.<strong
                                                                            style="color:red;">*</strong>
                                                                    </div>
                                                                </div>

                                                                @if ($errors->has('accepted'))
                                                                    <span
                                                                        class="text-danger">{{ $errors->first('accepted') }}</span>
                                                                @endif
                                                            </div>



                                                            <div class="form-group mb-0 mt-20 ">
                                                                <input name="form_botcheck" class="form-control "
                                                                    type="hidden" value="">
                                                                <button type="submit"
                                                                    class="btn btn-theme-colored2 font-18"
                                                                    style="width:100%;font-weight:bold;"
                                                                    data-loading-text="Patientez...">{{ __('course.text12') }}</button>
                                                            </div>
                                                        </form>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="widget border-1px bg-silver-deep p-15">
                                    <h4 class="widget-title line-bottom-theme-colored2 mb-10 font-18">
                                        {{ __('course.text13') }}</h4>
                                    <div class="categories">
                                        <ul class="list-border">
                                            @foreach ($degrees as $degree)
                                                <li class="font-16"><a style="color:white;"
                                                        href="{{ route('degree.show', $degree->name) }}">
                                                        @if (App::isLocale('en'))
                                                            {{ $degree->name_en }}
                                                        @else
                                                            {{ $degree->name }}
                                                        @endif
                                                    </a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endforeach



        </div>
        <footer id="footer" class="footer" data-bg-color="white">
            <div id="separator"></div>
            <div class="container pt-60 pb-20">
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">

                        <h4 class="widget-title line-bottom-theme-colored2" style="color:#1f3344;">
                            {{ __('footer.title1') }}</h4>

                        <span style="color:#1f3344;">
                            {{ __('footer.subtitle4') }} <br>
                            {{ __('footer.subtitle5') }}


                        </span>

                        <ul class="list-inline">
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone mr-5"></i> <a href="#"
                                    style="color:#1f3344; font-size:12px;cursor:default;">(+212)
                                    0528-241-006/240-155</a>
                            </li>
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o mr-5"></i> <a
                                    href="mailto:contact@cha-agadir.ma"
                                    style="color:#1f3344;">contact@cha-agadir.ma</a> </li>
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe mr-5"></i> <a href="#"
                                    style="color:#1f3344;">www.cha-agadir.ma</a> </li>
                        </ul>
                        <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 icon-circled clearfix mt-10">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title line-bottom-theme-colored2" style="color:#1f3344;">
                            {{ __('footer.title2') }}
                        </h4>
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <ul>

                                    <li><a href="{{ route('course.index') }}"
                                            style="color:#1f3344;font-weight:normal;">{{ __('footer.subtitle1') }}</a>
                                    </li>


                                    <li><a href="{{ route('media.index') }}"
                                            style="color:#1f3344;font-weight:normal;">{{ __('footer.subtitle2') }}</a>
                                    </li>
                                    <li><a href="{{ route('video.index') }}"
                                            style="color:#1f3344;font-weight:normal;">{{ __('footer.subtitle3') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom-theme-colored2" style="color:#1f3344;">
                            {{ __('footer.title5') }}
                        </h5>
                        <!-- Mailchimp Subscription Form Starts Here -->
                        <form id="mailchimp-subscription-form-footer" class="newsletter-form"
                            action="{{ route('newsletter.store') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <input type="email" id="mce-EMAIL" data-height="45px"
                                    class="form-control input-xs"
                                    placeholder="{{ __('footer.placehoderNewsletter') }}" name="email"
                                    value="{{ old('email') }}">

                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-colored btn-theme-colored2 btn-sm m-0"
                                        data-height="45px">OK</button>
                                </span>


                            </div>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </form>
                        <!-- Mailchimp Subscription Form Validation-->

                        <!-- Mailchimp Subscription Form Ends Here -->
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title line-bottom-theme-colored2" style="color:#1f3344;">
                            {{ __('footer.title3') }}
                        </h4>
                        <div class="latest-posts">
                            @foreach ($latest_blog as $item)
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a class="post-thumb"
                                        href="{{ route('blog-actualités.show', $item->id) }}"><img
                                            src="{{ url('storage') }}/{{ $item->photo }}" width="80px"
                                            height="55px" style="object-fit:cover;"
                                            alt="{{ $item->title }}"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a
                                                href="{{ route('blog-actualités.show', $item->id) }}"
                                                style="color:#1f3344;">
                                                @if (App::isLocale('en'))
                                                    {{ $item->title_en }}
                                                @else
                                                    {{ $item->title }}
                                                @endif
                                            </a></h5>
                                        <p class="post-date mb-0 font-12" style="color:#1f3344;">
                                            {{ $item->created_at }}</p>
                                    </div>
                                </article>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title line-bottom-theme-colored2" style="color:#1f3344;">
                            {{ __('footer.title4') }}
                        </h4>
                        <div class="opening-hours">
                            <ul class="list-border">
                                <li class="clearfix" style="color:#1f3344;"> <span> {{ __('footer.day1') }} -
                                        {{ __('footer.day2') }} : </span>
                                    <div class="value pull-right"> 8:30 am – 4:30 pm</div>
                                </li>
                                <li class="clearfix" style="color:#1f3344;"> <span> {{ __('footer.day3') }} :
                                    </span>
                                    <div class="value pull-right bg-theme-colored2 text-white closed">
                                        {{ __('footer.indicatorday') }}</div>
                                </li>
                                <li class="clearfix" style="color:#1f3344;"> <span> {{ __('footer.day4') }} :
                                    </span>
                                    <div class="value pull-right bg-theme-colored2 text-white closed">
                                        {{ __('footer.indicatorday') }}</div>
                                </li>

                                @if (count($logo_url) > 0)
                                    @foreach ($logo_url as $item)
                                        <a class="menuzord-brand  flip mt-20 mt-sm-10 mb-sm-20 pt-20 "
                                            href="{{ route('home') }}"><img
                                                src="{{ url('storage') }}/{{ $item->logo }}"
                                                alt=""></a>
                                    @endforeach
                                @endif

                            </ul>
                        </div>
                    </div>

                </div>

            </div>

            <div class="footer-bottom">
                <div class="container pt-20 pb-20">
                    <div class="row">

                        <div class="col-md-6">
                            <p class="font-14 sm-text-center m-0"> <span id='elem'> Copyright </span>
                                &copy;2023 <span class="text-theme-colored2">CHA
                                    Agadir</span>. {{ __('footer.text1') }} </p>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="widget no-border m-0">
                                <ul class="list-inline sm-text-center mt-5 font-14">
                                    <li>
                                        <a href="{{ route('mention.index') }}">{{ __('footer.text2') }}</a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a href="{{ route('contact.create') }}">{{ __('footer.text3') }}</a>
                                    </li>
                                    <li id='elem'>|</li>
                                    <li class="text-white " id='elem' style="position:relative; top:3px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M4.05 21q-.45 0-.75-.3t-.3-.75V15.9q0-.35.225-.613q.225-.262.575-.337l3.45-.7q.35-.05.713.062q.362.113.587.338L10.9 17q1.9-1.15 3.488-2.725q1.587-1.575 2.637-3.375L14.6 8.45q-.225-.225-.288-.513q-.062-.287-.012-.637l.65-3.5q.05-.35.325-.575Q15.55 3 15.9 3h4.05q.45 0 .75.3t.3.75q0 3.225-1.438 6.287q-1.437 3.063-3.8 5.425q-2.362 2.363-5.424 3.8Q7.275 21 4.05 21ZM17.975 9q.425-.975.65-1.975q.225-1 .35-2.025H16.75l-.425 2.35Zm-8.95 8.95L7.35 16.275L5 16.75v2.2q1.025-.075 2.038-.325q1.012-.25 1.987-.675ZM17.975 9Zm-8.95 8.95Z" />
                                        </svg>
                                    </li>

                                    <li id='elem' style="font-weight:bold;">
                                        (+212) 0528-241-006 / 240-155
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        <style>
            @media screen and (max-width: 768px) {
                #elem {

                    display: none;
                }
            }

            footer a:hover {
                text-decoration: underline;
                text-underline-offset: 2px;

            }

            #separator {
                padding-top: 1px;
                background-color: #1f3344;
            }

            .widget {
                margin-bottom: 0px;
            }

            .footer .widget .widget-title {
                margin-top: 0px;
            }
        </style>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Chart-->
    <script src="{{ asset('app-assets/js/chart.js') }}" defer></script>
    <!-- JS | Custom script for all pages -->
    <script src="{{ asset('app-assets/js/custom.js') }}" defer></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
              (Load Extensions only on Local File Systems !
               The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}" defer>
    </script>
    <script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}" defer>
    </script>
    <script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}" defer>
    </script>
    <script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"
        defer></script>
    <script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}"
        defer></script>
    <script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"
        defer></script>
    <script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}" defer>
    </script>
    <script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"
        defer></script>
    <script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}" defer>
    </script>

</body>

</html>

<style>
    @charset "UTF-8";
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap");

    body {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
    }

    .panel-title {
        margin-left: 2px;
    }

    .container-block {
        max-width: 1320px;
        margin: 0 auto;
    }

    .accordion {
        margin-top: 1.875rem;
    }

    .accordion .accordion-item {
        background-color: #1f3344;
        color: white;
        border-radius: 0.5rem;
        border: 1px solid #f7f7f7;
        margin-bottom: 1rem;
    }

    .accordion .accordion-item.active {
        box-shadow: 0 0.0625rem 0.9375rem 0 rgba(27, 29, 33, 0.15);
    }

    .accordion .accordion-item.active .accordion-body {
        max-height: max-content;
    }

    .accordion .accordion-item.active .accordion-header::after {
        transform: rotate(90deg);
    }

    .accordion .accordion-item:last-child {
        margin-bottom: 0;
    }

    .accordion .accordion-item .accordion-header {
        padding-left: 1.5625rem;
        font-size: 1.125rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        position: relative;
        cursor: pointer;
    }

    .accordion .accordion-item .accordion-header::after {
        content: "";
        font-size: 1.5rem;
        font-family: "FontAwesome";
        position: absolute;
        right: 1.5rem;
        transition: all 0.2s ease-in-out;
        transform: rotate(0deg);
    }

    .accordion .accordion-item .accordion-body {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
    }

    .accordion .accordion-item .accordion-body .accordion-body-content {
        padding: 0 1.5rem;
        font-size: 0.875rem;
        line-height: 1rem;
    }


    .nav-tabs>li>a {
        color: #1f3344;
    }

    .nav-tabs>li.active a,
    .nav-tabs>li.active a:hover,
    .nav-tabs>li.active a:focus {
        color: white;
        background-color: #F88147;
    }
</style>
<script>
    const accSingleTriggers = document.querySelectorAll(".accordion-header");

    accSingleTriggers.forEach((trigger) =>
        trigger.addEventListener("click", toggleAccordion)
    );

    function toggleAccordion() {
        const items = document.querySelectorAll(".accordion-item");
        const thisItem = this.parentNode;

        items.forEach((item) => {
            if (thisItem == item) {
                thisItem.classList.toggle("active");
                return;
            }
            item.classList.remove("active");
        });
    }

    let getCountries = document.getElementById('countries');
    let getProvinces = document.getElementById('provinces');
    let getProvince = document.getElementById('province');
    let getCountries1 = document.getElementById('countries1');
    let getProvinces1 = document.getElementById('provinces1');
    let getProvince1 = document.getElementById('province1');

    getCountries.addEventListener('change', () => {
        if (getCountries.value !== 'Maroc') {
            getProvinces.style.display = 'none'
            getProvince.value = '_'
        } else {
            getProvinces.style.display = 'block'
        }
    })
    getCountries1.addEventListener('change', () => {
        if (getCountries1.value !== 'Maroc') {
            getProvinces1.style.display = 'none'
            getProvince1.value = '_'
        } else {
            getProvinces1.style.display = 'block'
        }
    })

    const phoneInputField = document.querySelector("#phone");
    let indice = document.querySelector("#indice");

    const phoneInput = window.intlTelInput(phoneInputField, {});

    var country = phoneInput.getSelectedCountryData();


    phoneInputField.addEventListener("countrychange", function() {
        country = phoneInput.getSelectedCountryData();
        indice.value = country.dialCode
    });

    const phoneInputField1 = document.querySelector("#phone1");
    let indice1 = document.querySelector("#indice1");

    const phoneInput1 = window.intlTelInput(phoneInputField1, {});

    var country1 = phoneInput1.getSelectedCountryData();


    phoneInputField1.addEventListener("countrychange", function() {
        country1 = phoneInput1.getSelectedCountryData();
        indice1.value = country1.dialCode
    });



    const items = document.querySelectorAll(".item");

    items.forEach((item) => {
        item.addEventListener('click', (e) => {
            items.forEach((otherItem) => {
                if (otherItem !== item && otherItem.classList.contains('open')) {
                    otherItem.classList.remove('open');
                }
            });
            item.classList.toggle('open');
            let top = e.target.offsetTop;

            if (item.classList.contains('open')) {
                window.scroll({
                    top: top,
                    behavior: 'smooth'
                });
            }


        });
    });
</script>
