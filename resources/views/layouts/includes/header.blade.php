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

    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">

    <style>
        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}></script>
<![endif]-->

</head>

<body class="has-side-panel side-panel-right fullwidth-page">

    <div id="wrapper" class="clearfix">
        <!--
        <div id="preloader">
            <div id="spinner">
                <img alt="" src="https://www.perodua.com.my/assets/gif/loading4.gif">
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Désactiver</div>
        </div>
    -->

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-top bg-theme-colored border-top-theme-colored2-2px sm-text-center">
                <div class="container">
                    <div class="row">
                        <div class=" col-xs-12 col-md-1 ">

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

                        <div class="col-md-3" id="elem">
                            <div class="widget">

                                <ul class="styled-icons icon-sm icon-white">

                                    <li><a href="hcps://www.facebook.com/profile.php?id=100088051148636&mibexVd=ZbWKwL"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a
                                            href="hcps://www.facebook.com/profile.php?id=100088051148636&mibexVd=ZbWKwL"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li><a href="hcps://www.linkedin.com/company/complexe-horVcole-d-agadir/"><i
                                                class="fa fa-linkedin"></i></a></li>
                                    <li><a href="hcps://youtube.com/@ComplexeHorVcoleAgadir"><i
                                                class="fa fa-youtube"></i></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-8">
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
                                    <li class="text-white" style="position:relative; top:3px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z" />
                                        </svg>

                                    </li>
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


            @if (count($alert) > 0)
                @foreach ($alert as $item)
                    <marquee behavior="" direction="left"
                        style="padding-top:4px; padding-bottom:4px; background-color:#007c00 ;color:white;">
                        {{ $item->message }}
                    </marquee>
                @endforeach
            @endif
            <div class="header-nav">
                <div class="header-nav-inner">
                    <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                        <div class="container">
                            <!--
                            <div id="logo_pc" style="justify-content:center;width:100%;">

                                @if (count($logo_url) > 0)
@foreach ($logo_url as $item)
<a class="menuzord-brand  flip mt-20 mt-sm-10 mb-sm-20 pt-5"
                                                            href="{{ route('home') }}"><img
                                                                src="{{ url('storage') }}/{{ $item->logo }}" alt=""></a>
@endforeach
@endif
                            </div>
                        -->
                            <nav id="menuzord-right" class="menuzord default theme-colored">
                                @if (count($logo_url) > 0)
                                    @foreach ($logo_url as $item)
                                        <a id="logo_mobile" class="menuzord-brand  flip mt-5 mt-sm-10 mb-sm-20 pt-5"
                                            href="{{ route('home') }}"><img style="width: 166px;height:30;"
                                                src="{{ url('storage') }}/{{ $item->logo }}" alt=""></a>
                                    @endforeach
                                @endif

                                <ul class="menuzord-menu list-unstyled">

                                    <li @if (Route::current()->getName() == 'home') class='active' @endif>
                                        <a href="{{ route('home') }}" class="font-14 text-uppercase"
                                            style="padding: 10px 10px 10px 10px; ">{{ __('header.title1') }}</a>
                                    </li>
                                    <li><a href="#home" class="font-14 text-uppercase"
                                            style="padding: 10px 10px 10px 10px;">{{ __('header.title2') }}</a>
                                        <ul class="dropdown">
                                            <li><a
                                                    href="{{ route('director.index') }}">{{ __('header.subtitle1') }}</a>
                                            </li>
                                            <li><a href="{{ route('about.index') }}">{{ __('header.subtitle2') }}</a>
                                            </li>
                                            <li><a href="{{ route('index.team') }}">{{ __('header.subtitle3') }}</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('index.professor') }}">{{ __('header.subtitle33') }}</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('campus.index') }}">{{ __('header.subtitle4') }}</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('evenement.index') }}">{{ __('header.subtitle5') }}</a>
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
                                                <a href="{{ route('degree.show', 'INGÉNIEUR') }}"
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
                                                    href="{{ route('degree.show', 'MASTER') }}">{{ __('header.subtitle13') }}</a>
                                                <ul class="dropdown">
                                                    <li><a
                                                            href="{{ route('course.details', 'EAU ET HORTICULTURE DURABLE') }}">{{ __('header.subtitle14') }}</a>
                                                    </li>
                                                    <li><a
                                                            href="{{ route('course.details', 'ARCHITECTURE DU PAYSAGE (MS)') }}">{{ __('header.subtitle15') }}</a>
                                                    </li>
                                                    <li><a
                                                            href="{{ route('course.details', 'Locust Science (En)') }}">
                                                            {{ __('header.subtitle16') }}</a></li>
                                                    <li><a
                                                            href="{{ route('course.details', 'Sciences Acridiennes (Fr)') }}">
                                                            {{ __('header.subtitle17') }}</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="{{ route('degree.show', 'LICENCE PRO.') }}">
                                                    {{ __('header.subtitle18') }}</a>
                                                <ul class="dropdown">
                                                    <li><a
                                                            href="{{ route('course.details', 'Horticulture Ornementale et Espaces verts') }}">
                                                            {{ __('header.subtitle19') }} <br class="break">
                                                            {{ __('header.subtitle20') }} </a></li>
                                                    <li><a
                                                            href="{{ route('course.details', 'Aménagement du Paysage') }}">{{ __('header.subtitle21') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('degree.show', 'TECHNICIEN SPÉCIALISÉ') }}">{{ __('header.subtitle22') }}
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
                                                    <li><a
                                                            href="{{ route('course.details', 'Aquaculture') }}">{{ __('header.subtitle29') }}</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a
                                                    href="{{ route('course.details', 'DOCTORAT') }}">{{ __('header.subtitle30') }}</a>

                                            </li>
                                            <li><a href="{{ route('degree.show', 'FORMATION EXÉCUTIVE') }}">{{ __('header.subtitle31') }}
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
                                    <li><a href="{{ route('experience.index') }}"
                                            style="padding: 10px 10px 10px 10px;"
                                            class="font-14 text-uppercase">{{ __('header.title6') }}</a>
                                    <li><a href="{{ route('impact.index') }}" style="padding: 10px 10px 10px 10px;"
                                            class="font-14 text-uppercase">{{ __('header.title7') }}</a>
                                    <li><a href="{{ route('business.index') }}"
                                            style="padding: 10px 10px 10px 10px;"
                                            class="font-14 text-uppercase">{{ __('header.title8') }}</a>

                                </ul>


                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </header>


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

                /*
                #logo_pc {
                    display: none;
                }*/
            }

            @media screen and (min-width: 768px) {
                #separate {
                    display: block;
                }

                /* #logo_pc {
                    display: flex;
                    ;
                }

               #logo_mobile {
                    display: none;
                }*/

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

            @media (min-width: 1200px) {
                .header-nav .container {
                    width: 100%;
                }

                .menuzord-menu>li>a {
                    font-size: 13px !important;
                }
            }

            .menuzord-brand {
                margin: 15px 30px 18px 0;
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
