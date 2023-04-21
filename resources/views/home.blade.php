@extends('layouts.app')
@section('content')
    <section aria-label="Newest Photos">
        <div class="carousel" data-carousel>

            <div class="list_btn">

                <button class="carousel-button prev" data-carousel-button="prev"><svg xmlns="http://www.w3.org/2000/svg"
                        width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M14.71 15.88L10.83 12l3.88-3.88a.996.996 0 1 0-1.41-1.41L8.71 11.3a.996.996 0 0 0 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0c.38-.39.39-1.03 0-1.42z" />
                    </svg>
                </button>
                <button class="carousel-button next" data-carousel-button="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M8.7 17.3q-.275-.275-.275-.7q0-.425.275-.7l3.9-3.9l-3.9-3.9q-.275-.275-.275-.7q0-.425.275-.7q.275-.275.7-.275q.425 0 .7.275l4.6 4.6q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.7.275q-.425 0-.7-.275Z" />
                    </svg>
                </button>
            </div>

            <ul data-slides>

                @foreach ($slides as $slide)
                    @if ($loop->first)
                        <li class="slide" data-active>
                            <span class="slidepot slidepot_item"></span>
                            <img src="{{ url('storage') }}/{{ $slide->photo }}" alt="Nature Image #1">
                            <h3>{{ $slide->subject }}</h2>
                                <h1>{{ $slide->title }}</h1>
                            </h3>
                            <div> {!! $slide->description !!}</div>

                            <a href="{{ $slide->url }}"
                                class="btn btn-dark btn-circled btn-theme-colored2 btn-xl mr-10 pr-30 pl-30">{{ __('home.btn1') }}</a>
                        </li>
                    @else
                        <li class="slide">
                            <span class="slidepot slidepot_item"></span>
                            <img src="{{ url('storage') }}/{{ $slide->photo }}" alt="Nature Image #2">
                            <h3>{{ $slide->subject }}</h2>
                                <h1>{{ $slide->title }}</h1>
                            </h3>
                            <div> {{ $slide->description }}</div>


                            <a href="{{ $slide->url }}"
                                class=" btn btn-dark btn-circled btn-theme-colored2 btn-xl mr-10 pr-30 pl-30">{{ __('home.btn1') }}</a>
                        </li>
                    @endif
                @endforeach

            </ul>
        </div>
    </section>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }


        .carousel {
            width: 100vw;
            height: 60vh;
            position: relative;
        }

        .carousel>ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: 200ms opacity ease-in-out;
            transition-delay: 200ms;
        }

        .slide>img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .slidepot {
            position: absolute;
            top: 0%;
            left: 0%;
            color: white;
            width: 100%;
            height: 100%;
            ;
            background-color: transparent;
            display: block;
            z-index: 2;
        }

        .slide[data-active] {
            opacity: 1;
            z-index: 1;
            transition-delay: 0ms;
        }


        .slide h1 {
            position: absolute;
            top: 26%;
            left: 10%;
            color: white;
        }


        .slide h3 {
            position: absolute;
            top: 20%;
            left: 10%;
            color: white;

        }

        .slide div {
            position: absolute;

            left: 10%;
            color: white;
            font-size: 16px;
            font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif;


        }

        .slide a {
            position: absolute;
            left: 10%;



        }

        @media only screen and (min-width: 900px) {
            .slide div {
                top: 45%;
                width: 45%;
                text-align: justify;
            }


        }

        @media only screen and (max-width: 900px) {
            .slide div {
                top: 45%;
                width: 60%;
                text-align: justify;
            }

        }

        @media only screen and (min-width: 600px) {

            .slide a {
                top: 68%;
                z-index: 2;
            }
        }

        @media only screen and (max-width: 600px) {
            .slide div {
                top: 50%;
                font-size: 11px;
                width: 85%;

            }

            .slide a {
                top: 75%;
                z-index: 3;
                padding: 8px 8px 8px 8px;
                font-size: 14px;
            }

            .slide h1 {
                top: 30%;
                font-size: 24px;
            }

            .slide h3 {
                top: 40%;

                font-size: 11px;
            }



        }

        .prev,
        .next {
            transform: translateY(-15px);
            background-color: #1f3344;
            padding: 0 .5rem;
            z-index: 2;
            border: none;
            display: flex;
            justify-content: center;
            padding: 2px;
            color: white;
        }


        .list_btn {
            position: absolute;
            top: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 4px;


        }

        .carousel-button:hover,
        .carousel-button:focus {
            color: white;
            background-color: #1f334499;
        }

        .carousel-button:focus {
            outline: 1px solid black;
        }
    </style>
    <script>
        const buttons = document.querySelectorAll("[data-carousel-button]")

        buttons.forEach(button => {
            button.addEventListener("click", () => {

                clearInterval(timer)
                const offset = button.dataset.carouselButton === "next" ? 1 : -1
                const slides = button
                    .closest("[data-carousel]")
                    .querySelector("[data-slides]")

                const activeSlide = slides.querySelector("[data-active]")
                let newIndex = [...slides.children].indexOf(activeSlide) + offset
                if (newIndex < 0) newIndex = slides.children.length - 1
                if (newIndex >= slides.children.length) newIndex = 0

                slides.children[newIndex].dataset.active = true
                delete activeSlide.dataset.active
            })
        })

        let getBtn = document.querySelector('.next');
        let getSlide = document.querySelectorAll('.slidepot_item');
        let isEnter = true;
        let timer;

        function autoClick_btn() {
            getBtn.click()
        }
        getSlide.forEach(slide => {
            slide.addEventListener('mouseenter', () => {
                isEnter = true;
                clearInterval(timer)
            })
            slide.addEventListener('mouseout', () => {
                isEnter = false;
                autoClick_btn();
                timer = setInterval(() => {
                    autoClick_btn();
                    isEnter = true
                }, 3000);

            })
        })


        let iniTimer = setInterval(() => {
            autoClick_btn()
        }, 3000);
        document.addEventListener('mousemove', () => {
            clearInterval(iniTimer);
        }, {
            once: true
        })
    </script>

    <!-- pop up -->
    @if (count($popup) > 0)
        <div class="main-content">

            <!-- Section:  -->
            <section>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">


                            <!-- popup modal click trigger -->
                            <!-- <a href="#promoModal1" data-lightbox="inline" class="btn btn-default">Trigger Modal</a>-->
                            <!-- popup modal -->
                            @foreach ($popup as $item)
                                <div id="promoModal1" class="modal-promo-box mfp-hide bg-img-cover"
                                    data-bg-img="{{ url('storage') }}/{{ $item->image }}">

                                    <button id="hide_popup" class="btn btn-colored btn-theme-colored btn-md m-0"
                                        data-height="40px" style="position:relative;top:-50px;">
                                        {{ __('home.text6') }}</button>
                                    @if (isset($item->title))
                                        <h3 class="text-white mt-0">{{ $item->title }}</h3>
                                    @endif
                                    @if (isset($item->description))
                                        <h5 class="text-white mb-0" style="text-align:justify;hyphens:auto;">
                                            {{ $item->description }}</h5>
                                    @endif

                                    <div
                                        style="position:relative;top:65px;display:flex;justify-content:flex-end;gap:4px;margin-top:20px;">
                                        @if (isset($item->url))
                                            <a href="{{ $item->url }}"
                                                class="btn btn-colored btn-theme-colored2 btn-md m-0" data-height="40px"
                                                target="_blank">{{ __('home.btn1') }}</a>
                                        @endif
                                        @if (isset($item->file))
                                            <a href="{{ url('storage') }}/{{ $item->file }}"
                                                class="btn btn-colored btn-theme-colored2 btn-md m-0" data-height="40px"
                                                target="_blank">{{ __('home.text7') }}</a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                            <!-- popup modal onLoad trigger -->

                            <div data-target="#promoModal1" id='oncePopup'></div>
                            <script>
                                const oncePopup = document.getElementById('oncePopup');
                                const hide_popup = document.getElementById('hide_popup')

                                $(document).ready(function() {
                                    let getLocal = localStorage.getItem('cha-popup');
                                    if (getLocal == null) {
                                        oncePopup.classList.add('on-pageload-popup-promobox')
                                    }
                                    hide_popup.addEventListener('click', () => {
                                        localStorage.setItem('cha-popup', 'on-pageload-popup-promobox');
                                        hide_popup.style.display = 'none'
                                    })
                                });
                            </script>


                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endif
    <!-- Section: Courses -->

    <section id="courses" class="bg-white" style="margin-top: 10px;">
        <div class="container">
            <div class="section-title mb-40">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-uppercase mb-5">{{ __('home.title1') }} <span class="text-theme-colored2">
                                {{ __('home.title2') }}</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel-3col owl-nav-top" data-nav="tru">
                            @foreach ($courses as $course)
                                <div class="item">
                                    <div class="course-single-item bg-white border-1px clearfix">
                                        <a href="{{ route('course.details', $course->name) }}" style="display:block;"
                                            class="course-thumb">
                                            <img class="img-fullwidth" alt=""
                                                src="{{ url('storage') }}/{{ $course->photo }}">

                                        </a>
                                        <div class="course-details clearfix p-20 pt-15">
                                            <div class="course-top-part">
                                                <a href="{{ route('course.details', $course->name) }}">
                                                    <h4 class="mt-5 mb-5">
                                                        @if (App::isLocale('en'))
                                                            {{ $course->name_en }}
                                                        @else
                                                            {{ $course->name }}
                                                        @endif
                                                    </h4>
                                                </a>
                                                <a href="{{ route('course.details', $course->name) }}">
                                                    <h4 class="mt-5 mb-5">
                                                        {{ $course->degrees_name }}

                                                    </h4>
                                                </a>
                                            </div>
                                            <a href="{{ route('course.details', $course->name) }}"
                                                class="course-description mt-15 mb-0" style="display:block">
                                                <p class="course-description mt-15 mb-0"
                                                    style="font-weight:normal;text-align:justify;hyphens:auto;">
                                                    {{ $course->accroche }} [...]</p>
                                            </a>
                                        </div>
                                        <div class="course-meta">
                                            <ul class="list-inline">
                                                <li><i class="ficon-clock font-18"></i> {{ $course->duration }}
                                                    {{ __('home.text1') }}</li>
                                                <li><i class="pe-7s-notebook font-18"></i>{{ $course->languages_name }}
                                                </li>
                                            </ul>
                                            <a href="{{ route('course.details', $course->name) }}" style="display:block;"
                                                class="course-tag">
                                                <h5>{{ __('home.text5') }}
                                                </h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About -->
    <section id="about">
        <div class="container pt-10 pb-40">
            <div class="section-title">
                <div class="row">
                    <div class="col-lg-4">
                        <h3 class="font-28 mt-0"><span class="text-theme-colored2">{{ __('home.title3') }}</span>
                            {{ __('home.title7') }}</h3>
                        <div class="line-bottom-theme-colored2"></div>
                        @foreach ($about as $item)
                            <img src="{{ url('storage') }}/{{ $item->photo }}" class="img-fullwidth" alt="">
                            <p class="mt-15" style="text-align:justify;hyphens:auto;">{{ $item->description }}</p>
                            <a href="{{ route('about.index') }}" class="mt-15 btn btn-colored btn-sm btn-theme-colored2">
                                {{ __('home.text2') }}</a>
                        @endforeach
                    </div>
                    @if (count($evenements) > 0)
                        <div class="col-lg-4">
                            <h3 class="font-28 mt-md-30 mt-0"><span
                                    class="text-theme-colored2">{{ __('home.title4') }}</span> {{ __('home.title8') }}
                            </h3>
                            <div class="line-bottom-theme-colored2"></div>
                            @foreach ($evenements as $evenement)
                                <article>
                                    <div
                                        class="event-small media sm-maxwidth400 bg-silver-light border-1px mt-0 mb-20 p-15">
                                        <div class="event-date text-center">
                                            <ul class="text-white">
                                                <li class="font-18 font-weight-700 border-bottom">
                                                    @php
                                                        $getDays = date('d', strtotime($evenement->start_at));
                                                        echo $getDays;
                                                    @endphp
                                                </li>
                                                <li class="font-14 text-center text-uppercase mt-5">
                                                    @php
                                                        
                                                        $getDays = date('F', strtotime($evenement->start_at));
                                                        echo substr($getDays, 0, 3);
                                                    @endphp
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="event-content pt-5">
                                            <h5 class="media-heading font-16 mb-5"><a class="font-weight-600"
                                                    href="{{ route('evenement.show', $evenement->title) }}">
                                                    @if (App::isLocale('en'))
                                                        {{ $evenement->title_en }}
                                                    @else
                                                        {{ $evenement->title }}
                                                    @endif
                                                </a>
                                            </h5>
                                            <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i>
                                                @php
                                                    
                                                    $start_at = date('H:i', strtotime($evenement->start_at));
                                                    echo $start_at;
                                                @endphp
                                                -
                                                @php
                                                    
                                                    $end_at = date('H:i', strtotime($evenement->end_at));
                                                    echo $end_at;
                                                @endphp
                                            </span>
                                            <span> <i class="fa fa-map-marker text-theme-colored2"></i>
                                                {{ $evenement->location }}</span>
                                        </div>
                                    </div>
                                </article>
                            @endforeach

                        </div>
                    @endif
                    <div class="col-lg-4">
                        <h3 class="font-28 mt-md-30 mt-0"><span class="text-theme-colored2">{{ __('home.title10') }}
                            </span> {{ __('home.title11') }}
                        </h3>
                        <div class="line-bottom-theme-colored2"></div>
                        <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2 custom-style"
                            id="accordion6" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                @foreach ($whyus as $item)
                                    @if ($loop->first)
                                        <div class="panel-heading" role="tab" id="headin1">
                                            <h6 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion6"
                                                    href="#collaps1" aria-expanded="true" aria-controls="collaps1">
                                                    {{ $item->title }}
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collaps1" class="panel-collapse collapse in" role="tabpanel"
                                            aria-labelledby="headin1">
                                            <div class="panel-body" style="text-align:justify;hyphens:auto;">
                                                {{ $item->description }}
                                            </div>
                                        </div>
                                    @else
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading{{ $item->id }}">
                                                <h6 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion6" href="#collapse{{ $item->id }}"
                                                        aria-expanded="false" aria-controls="collapse2">
                                                        {{ $item->title }}

                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapse{{ $item->id }}" class="panel-collapse collapse"
                                                role="tabpanel" aria-labelledby="heading{{ $item->id }}">
                                                <div class="panel-body" style="text-align:justify;hyphens:auto;">
                                                    {{ $item->description }}

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Divider: Funfact -->
    <style>
        section>.container,
        section>.container-fluid {
            padding-top: 10px;
            padding-bottom: 40px;
        }
    </style>
    <section>
        <div class="container">
            <div class="row  text-center" style="background-color:#1f3344;">
                @foreach ($barres as $barre)
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact">
                            <i class="mb-20 text-white">{!! $barre->icon !!}</i>
                            <h2 data-animation-duration="2000" data-value="{{ $barre->valeur }}"
                                class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">
                                @if (App::isLocale('en'))
                                    {{ $barre->title_en }}
                                @else
                                    {{ $barre->title }}
                                @endif

                            </h5>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Section: blog -->
    <section id="blog">
        <div class="container pb-sm-40">
            <div class="section-title mb-40">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-uppercase mb-5">{{ __('home.title5') }} <span class="text-theme-colored2">
                                {{ __('home.title9') }}</span></h2>
                        <h5 class="font-16  mt-5" style="color:#1f3344;">{{ __('home.text4') }}</h5>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">

                    @foreach ($blogs as $blog)
                        <div class="col-sm-6 col-md-4">
                            <article class="post mb-sm-30">
                                <div class="post-thumb">
                                    <img src="{{ url('storage') }}/{{ $blog->photo }}" class="img-fullwidth"
                                        alt="">
                                    @php
                                        $getMonth = date('F', strtotime($blog->created_at));
                                        $getDays = date('d', strtotime($blog->created_at));
                                    @endphp
                                    <div class="post-date"><span>{{ $getDays }} </span><br> {{ $getMonth }}
                                    </div>

                                </div>
                                <div class="post-description border-1px p-20">
                                    <a href="{{ route('blog-actualités.show', $blog->id) }}">
                                        <h3 class="post-title font-weight-600 mt-0 mb-15" style="word-break: break-word;">
                                            {{ $blog->title }}</h3>
                                    </a>
                                    <p> {{ $blog->accroche }} [...]</p>
                                </div>
                                <div class="post-meta">
                                    <ul class="list-inline pull-left flip">
                                        <ul class="list-inline pull-left flip">
                                            <li><i
                                                    class="lnr lnr-users text-theme-colored2 font-20"></i>{{ __('home.text3') }}
                                                {{ $blog->description }}</li>
                                        </ul>

                                    </ul>

                                    <a href="{{ route('blog-actualités.show', $blog->id) }}"
                                        class="text-theme-colored2 font-14 text-gray-darkgray pull-right flip">{{ __('home.text2') }}
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="clients ">

        <div class="container pt-40 pb-40 ">
            <h3 class=" font-38 font-weight-700 mt-10 mb-0" style="color:#1f3344;"><span>{{ __('home.title6') }}</span>
            </h3>
            <div class="row">
                <div class="col-md-12">
                    <!-- Section: Clients -->

                    <div class="owl-carousel-6col clients-logo transparent text-center">
                        @if (count($partners) > 0)
                            @foreach ($partners as $partner)
                                <div class="item"> <a href="{{ route('home') }}"><img
                                            src="{{ url('storage') }}/{{ $partner->photo }}" alt=""></a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script lang="js">
        let btn = document.getElementById("first_element");


        const tabs = document.querySelectorAll("[data-target]"),
            tabContents = document.querySelectorAll("[data-content]");

        tabs.forEach((tab) => {
            tab.addEventListener("click", () => {
                const target = document.querySelector(tab.dataset.target);

                tabContents.forEach((tc) => {
                    tc.classList.remove("is-active");
                });
                target.classList.add("is-active");

                tabs.forEach((t) => {
                    t.classList.remove("is-active");
                });
                tab.classList.add("is-active");
            });
        });
    </script>
@endsection
