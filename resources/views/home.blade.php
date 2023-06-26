@extends('layouts.app')
@section('content')


    <!-- Section: home -->
    <section id="home" class="divider">
        <div class="container-fluid p-0 photo_pc ">

            <!-- START REVOLUTION SLIDER 5.0.7 -->
            <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34"
                style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE 1 -->
                        @foreach ($slides as $slide)
                            <li data-index="rs-{{ $slide->id }}" data-slotamount="default"
                                data-thumb="{{ url('storage') }}/{{ $slide->photo }}" data-rotate="0"
                                data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                                data-saveperformance="off" data-title="Slide One">
                                <!-- MAIN IMAGE -->
                                <img src="{{ url('storage') }}/{{ $slide->photo }}" alt=""
                                    data-bgposition="center 20%" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-1"
                                    data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                    data-y="['top','top','top','top']" data-voffset="['215','130','110','120']"
                                    data-fontsize="['20','18','16','13']" data-lineheight="['30','30','28','25']"
                                    data-fontweight="['700','700','700','700']" data-width="['700','650','600','420']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; color:{{ $slide->color }}!important;">
                                    {{ $slide->subject }}
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-white text-uppercase font-montserrat rs-parallaxlevel-0"
                                    id="slide-1-layer-2" data-x="['left','left','left','left']"
                                    data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']"
                                    data-voffset="['250','160','140','150']" data-fontsize="['52','46','40','28']"
                                    data-lineheight="['68','60','54','42']" data-fontweight="['800','800','800','800']"
                                    data-width="['700','650','600','420']" data-height="none" data-whitespace="normal"
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal; color:{{ $slide->color }}!important;">
                                    {{ $slide->title }}
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-3"
                                    data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                    data-y="['top','top','top','top']" data-voffset="['325','220','195','195']"
                                    data-fontsize="['16','16','14','13']" data-lineheight="['30','26','24','20']"
                                    data-fontweight="['400','400','400','400']" data-width="['550','650','600','420']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 7;color:{{ $slide->color }}!important;">
                                    <div style="white-space:normal; text-align:justify;hyphens:auto;">
                                        {{ $slide->description }}</div>
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-4"
                                    data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']"
                                    data-y="['top','top','top','top']" data-voffset="['410','290','260','250']"
                                    data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']"
                                    data-fontweight="['600','600','600','600']" data-width="['700','650','600','420']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap;margin-top:70px;"><a
                                        href="{{ $slide->url }}"
                                        class="btn btn-dark btn-circled btn-theme-colored2 btn-xl mr-10 pr-30 pl-30">{{ __('home.btn1') }}</a>
                                </div>
                            </li>
                        @endforeach
                        <!-- SLIDE 2 -->

                    </ul>

                    <div class="tp-bannertimer tp-bottom"
                        style="height: 5px; background-color: rgba(255, 255, 255, 0.4);"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
            <script>
                var tpj = jQuery;
                var revapi34;
                tpj(document).ready(function() {
                    if (tpj("#rev_slider_home").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_home");
                    } else {
                        revapi34 = tpj("#rev_slider_home").show().revolution({
                            sliderType: "standard",
                            jsFileLocation: "js/revolution-slider/js/",
                            sliderLayout: "fullwidth",
                            dottedOverlay: "none",
                            delay: 3000,
                            navigation: {
                                keyboardNavigation: "on",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "on",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    enable: true,
                                    style: 'gyges',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    style: 'hebe',
                                    tmp: '<span class="tp-bullet-image"></span>',
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5
                                }
                            },
                            viewPort: {
                                enable: true,
                                outof: "pause",
                                visible_area: "80%"
                            },
                            responsiveLevels: [1240, 1024, 778, 480],
                            gridwidth: [1240, 1024, 778, 480],
                            gridheight: [660, 550, 500, 450],
                            lazyType: "none",
                            parallax: {
                                type: "scroll",
                                origo: "enterpoint",
                                speed: 400,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: 1,
                            shuffle: "off",
                            autoHeight: "off",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                }); /*ready*/
            </script>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <div class="container-fluid p-0 photo_mobile">

            <!-- START REVOLUTION SLIDER 5.0.7 -->
            <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                data-alias="news-gallery34"
                style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                <div id="rev_slider_home1" class="rev_slider fullwidthabanner" style="display:none;"
                    data-version="5.0.7">
                    <ul>
                        <!-- SLIDE 1 -->
                        @foreach ($slides as $slide)
                            <li data-index="rs-{{ $slide->id }}" data-slotamount="default"
                                data-thumb="{{ url('storage') }}/{{ $slide->photo_en }}" data-rotate="0"
                                data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                                data-saveperformance="off" data-title="Slide One">
                                <!-- MAIN IMAGE -->
                                <img src="{{ url('storage') }}/{{ $slide->photo_en }}" alt=""
                                    data-bgposition="center 20%" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-1"
                                    data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                    data-y="['top','top','top','top']" data-voffset="['215','130','110','120']"
                                    data-fontsize="['20','18','16','13']" data-lineheight="['30','30','28','25']"
                                    data-fontweight="['700','700','700','700']" data-width="['700','650','600','420']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap;color:{{ $slide->color_mobile }}!important;">
                                    {{ $slide->subject }}
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-white text-uppercase font-montserrat rs-parallaxlevel-0"
                                    id="slide-1-layer-2" data-x="['left','left','left','left']"
                                    data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']"
                                    data-voffset="['250','160','140','150']" data-fontsize="['52','46','40','28']"
                                    data-lineheight="['68','60','54','42']" data-fontweight="['800','800','800','800']"
                                    data-width="['700','650','600','420']" data-height="none" data-whitespace="normal"
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;color:{{ $slide->color_mobile }}!important;">
                                    {{ $slide->title }}
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-3"
                                    data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                    data-y="['top','top','top','top']" data-voffset="['325','220','195','195']"
                                    data-fontsize="['16','16','14','13']" data-lineheight="['30','26','24','20']"
                                    data-fontweight="['400','400','400','400']" data-width="['450','650','600','420']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 7;color:{{ $slide->color_mobile }}!important;">
                                    <div id="descriptionMobile">{{ $slide->description }}</div>
                                    <style>
                                        #descriptionMobile {
                                            white-space: normal;
                                            text-align: justify !important;
                                            hyphens: auto !important;
                                        }
                                    </style>
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-4"
                                    data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']"
                                    data-y="['top','top','top','top']" data-voffset="['410','290','260','250']"
                                    data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']"
                                    data-fontweight="['600','600','600','600']" data-width="['700','650','600','420']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; margin-top:75px;"><a
                                        href="{{ $slide->url }}"
                                        class="btn btn-dark btn-circled btn-theme-colored2 btn-xl mr-10 pr-30 pl-30">{{ __('home.btn1') }}</a>
                                </div>
                            </li>
                        @endforeach
                        <!-- SLIDE 2 -->

                    </ul>

                    <div class="tp-bannertimer tp-bottom"
                        style="height: 5px; background-color: rgba(255, 255, 255, 0.4);"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
            <script>
                var tpj = jQuery;
                var revapi34;
                tpj(document).ready(function() {
                    if (tpj("#rev_slider_home1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_home1");
                    } else {
                        revapi34 = tpj("#rev_slider_home1").show().revolution({
                            sliderType: "standard",
                            jsFileLocation: "js/revolution-slider/js/",
                            sliderLayout: "fullwidth",
                            dottedOverlay: "none",
                            delay: 3000,
                            navigation: {
                                keyboardNavigation: "on",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "on",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    enable: true,
                                    style: 'gyges',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    style: 'hebe',
                                    tmp: '<span class="tp-bullet-image"></span>',
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5
                                }
                            },
                            viewPort: {
                                enable: true,
                                outof: "pause",
                                visible_area: "80%"
                            },
                            responsiveLevels: [1240, 1024, 778, 480],
                            gridwidth: [1240, 1024, 778, 480],
                            gridheight: [660, 550, 500, 450],
                            lazyType: "none",
                            parallax: {
                                type: "scroll",
                                origo: "enterpoint",
                                speed: 400,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: 1,
                            shuffle: "off",
                            autoHeight: "off",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                }); /*ready*/
            </script>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </section>
    <style>
        @media only screen and (min-width: 600px) {
            .photo_pc {
                display: block;
            }

            .photo_mobile {
                display: none;
            }
        }

        @media only screen and (max-width: 600px) {

            .photo_pc {
                display: none;
            }

            .photo_mobile {
                display: block;
            }
        }
    </style>
    <!--=========================================================================-->
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
                                    data-bg-img="{{ url('storage') }}/{{ $item->image }}"
                                    style="background-position:center;">

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

    <section id="courses" class="bg-white" style="margin-top: 50px;">
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
                            <p class="mt-15" style="text-align:justify;hyphens:auto;">{{ $item->description }} [...]</p>
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
                                                <li @if (\Carbon\Carbon::tomorrow() > $evenement->start_at) style="text-decoration:line-through;" @endif
                                                    class="font-18 font-weight-700 border-bottom">
                                                    @php
                                                        $getDays = date('d', strtotime($evenement->start_at));
                                                        echo $getDays;
                                                    @endphp
                                                </li>
                                                <li @if (\Carbon\Carbon::tomorrow() > $evenement->start_at) style="text-decoration:line-through;" @endif
                                                    class="font-14 text-center text-uppercase mt-5">
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

                                            <span class="mr-10"
                                                @if (\Carbon\Carbon::tomorrow() > $evenement->start_at) style="text-decoration:line-through;" @endif><i
                                                    class="fa fa-clock-o text-theme-colored2"></i>
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
                                        $getYears = date('Y', strtotime($evenement->start_at));
                                    @endphp
                                    <div class="post-date"><span>{{ $getMonth }}</span><br> {{ $getDays }} ,
                                        {{ $getYears }}
                                    </div>

                                </div>
                                <div class="post-description border-1px p-20">
                                    <a href="{{ route('blog-actualités.show', $blog->id) }}">
                                        <h5 class="post-title font-weight-600 font-16 mt-0 mb-15"
                                            style="word-break: break-word;">
                                            {{ $blog->title }}</h5>
                                    </a>
                                    <p style="text-align:justify;hyphens:auto;"> {{ $blog->accroche }} [...]</p>
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
