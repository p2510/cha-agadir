@include('layouts.includes.header')
@if (session()->has('successNewsletter'))
    <div class="container">
        <div class="row">


            <h6 class='alert alert-success col-xs-12 col-sm-8 col-md-6 ' role="alert">
                Votre inscription à notre newsletter a été bien
                enregistrée !!
            </h6>
        </div>
    </div>
@endif
@if (session()->has('successUnsubscribe'))
    <div class="container">
        <div class="row">


            <h6 class='alert alert-success col-xs-12 col-sm-8 col-md-6 ' role="alert">
                Vous êtes désormais désabonner de la newsletter !!
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
@yield('content')
<section>
    <div class="container">
        <div class="section-content">
            <div class="row" style="font-size:16px;">
                @foreach ($datas as $data)
                    <div class="col-md-12">
                        <img class="img-fullwidth" src="{{ url('storage') }}/{{ $data->photo }}" alt="">
                    </div>
                    <div class="col-md-12">
                        <h2 class="text-uppercasetext-theme-colored mt-0 mb-0 mt-sm-30"><span
                                class="text-theme-colored2">@yield('title')</span></h2>
                        <div class="mt-30 mb-0">

                            <ul class="styled-icons m-0">

                                <li>

                                    <a href="{{ $shareLinkedin['facebook'] }}" class="share fb">
                                        <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 16 16">
                                                <path fill="currentColor"
                                                    d="M9.5 3H12V0H9.5C7.57 0 6 1.57 6 3.5V5H4v3h2v8h3V8h2.5l.5-3H9V3.5c0-.271.229-.5.5-.5z" />
                                            </svg></i>
                                    </a>
                                </li>

                                <li><a href="{{ $shareLinkedin['whatsapp'] }}" class="share wa">
                                        <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 16 16">
                                                <path fill="currentColor"
                                                    d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1s-.48.6-.59.73s-.21.14-.4 0a5.13 5.13 0 0 1-1.49-.92a5.25 5.25 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.39 1.39 0 0 0 .18-.31a.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23a2.1 2.1 0 0 0-.65 1.55A3.59 3.59 0 0 0 5 8.2A8.32 8.32 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.53 2.53 0 0 0 1.17.07a1.93 1.93 0 0 0 1.26-.88a1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21z" />
                                                <path fill="currentColor"
                                                    d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85l3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72zM8 14.12a6.12 6.12 0 0 1-3.15-.87l-.22-.13l-2.34.61l.62-2.28l-.14-.23a6.18 6.18 0 0 1 9.6-7.65a6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12z" />
                                            </svg></i>
                                    </a></li>
                                <li> <a href="{{ $shareLinkedin['linkedin'] }}" class="share lin">
                                        <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 1046.16 1000">
                                                <path fill="currentColor"
                                                    d="M237.485 1000V325.301H13.229V1000h224.256zM125.386 233.127c78.202 0 126.879-51.809 126.879-116.553C250.808 50.37 203.591-.001 126.87-.001C50.161-.001-.002 50.371-.002 116.574c0 64.747 48.665 116.553 123.924 116.553h1.457zM361.61 1000h224.256V623.215c0-20.165 1.457-40.309 7.379-54.724c16.212-40.289 53.111-82.017 115.06-82.017c81.149 0 113.613 61.872 113.613 152.572v360.949h224.242V613.129c0-207.241-110.636-303.668-258.183-303.668c-120.977 0-174.094 67.622-203.603 113.679h1.497v-97.853H361.615c2.943 63.31 0 674.699 0 674.699z" />
                                            </svg></i>
                                    </a></li>



                            </ul>
                        </div>
                        <h4 class="mt-5 mb-15"></h4>
                    </div>
                @endforeach
                <div class="col-sm-12 mb-10">
                    <div class="single-service" style=" border-radius:5px;">
                        <style>
                            @media screen and (max-width: 768px) {

                                #myTab,
                                #myTabContent {
                                    display: none;
                                }
                            }

                            .nav-tabs>li.active a,
                            .nav-tabs>li.active a:hover,
                            .nav-tabs>li.active a:focus {
                                color: white;
                                background-color: #F88147;
                            }
                        </style>


                        <ul id="myTab" class="nav nav-tabs mt-30">
                            @foreach ($tabs as $key => $tab)
                                @if ($loop->first)
                                    <li class="active"><a href="#tab{{ $tab->id }}" data-toggle="tab"
                                            style="font-size:18px; font-weight:bold;">{{ $tab->title }}</a>
                                    </li>
                                @else
                                    <li><a href="#tab{{ $tab->id }}" data-toggle="tab"
                                            style="font-size:18px; font-weight:bold;">{{ $tab->title }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>

                        <style>
                            @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');

                            .tab-content {
                                font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif;
                                color: #1f3344;
                                font-size: 16px;
                            }

                            .gallery-container-x {
                                display: grid;
                                grid-template-columns: repeat(6, minmax(0, 1fr));
                                gap: 8px;
                            }

                            .gallery-item-x-1 {
                                grid-column: span 6 / span 6;
                            }

                            .gallery-item-x-2 {
                                grid-column: span 3 / span 3;
                            }

                            .gallery-item-x-3 {
                                grid-column: span 2 / span 2;
                            }
                        </style>

                        <div id="myTabContent" class="tab-content">
                            @foreach ($tabs as $key => $tab)
                                @if ($loop->first)
                                    <div class="tab-pane fade in active" id="tab{{ $tab->id }}">
                                        <div style="text-align:justify;hyphens:auto;"> {!! $tab->content !!}
                                        </div>
                                        <div class="gallery-container-x">
                                            @if (count($tab->tabimages) == 2)
                                                @foreach ($tab->tabimages as $media)
                                                    <div class="gallery-item-x-2">
                                                        <img src="{{ url('storage') }}/{{ $media->photo }}">
                                                    </div>
                                                @endforeach
                                            @elseif(count($tab->tabimages) > 2)
                                                @foreach ($tab->tabimages as $media)
                                                    <div class="gallery-item-x-3">
                                                        <img src="{{ url('storage') }}/{{ $media->photo }}">
                                                    </div>
                                                @endforeach
                                            @else
                                                @foreach ($tab->tabimages as $media)
                                                    <div class="gallery-item-x-1">
                                                        <img src="{{ url('storage') }}/{{ $media->photo }}">
                                                    </div>
                                                @endforeach
                                            @endif


                                        </div>

                                    </div>
                                @else
                                    <div class="tab-pane fade" id="tab{{ $tab->id }}">
                                        <div style="text-align:justify;hyphens:auto;"> {!! $tab->content !!}
                                        </div>
                                        <div class="gallery-container-x">
                                            @if (count($tab->tabimages) > 1)
                                                @foreach ($tab->tabimages as $media)
                                                    <div class="gallery-item-x-2">
                                                        <img src="{{ url('storage') }}/{{ $media->photo }}">
                                                    </div>
                                                @endforeach
                                            @else
                                                @foreach ($tab->tabimages as $media)
                                                    <div class="gallery-item-x-1">
                                                        <img src="{{ url('storage') }}/{{ $media->photo }}">
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');



                    @media screen and (min-width: 768px) {

                        #mobile_pade {
                            display: none;

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

                    .accordion1 .text {
                        font-size: 24px;
                        font-weight: 500;
                        color: white;
                        background-color: #1f3344;
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
                        color: #1f3344;

                    }
                </style>
                @foreach ($tabs as $tab)
                    <div class="accordion1 mr-10 ml-10 mb-5" id="mobile_pade">
                        <div class="item">
                            <div class="text"
                                style="display: flex;justify-content:space-between; padding-left:4px;padding-right:4px;">
                                <p> {{ $tab->title }}</p>
                                <span> <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg></span>
                            </div>
                            <div class="hidden-box" style="margin-top:-30px;padding-left:10px;padding-right:10px;">
                                <div style="text-align:justify;hyphens:auto;"> {!! $tab->content !!}</div>
                                <div class="gallery-container-x">

                                    @foreach ($tab->tabimages as $media)
                                        <div class="gallery-item-x-1">
                                            <img src="{{ url('storage') }}/{{ $media->photo }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="mr-10 ml-10  ">
                    <button class="accordion active" id="btn_download"
                        style="display: flex;justify-content:space-between; padding-left:4px;padding-right:4px;">{{ __('home.text8') }}</button>
                    <div class="panel" style="max-height: 54px;margin-bottom:30px;">
                        @foreach ($downloads as $key => $download)
                            <div><a href="{{ url('storage') }}/{{ $download->file }}" target='_blank'
                                    style="color:#1f3344;">{{ $download->filename }}</a></div>
                        @endforeach
                    </div>
                </div>


                <div class="gallery-isotope default-animation-effect @if (count($pagevideos) == 1) grid-1   @elseif(count($pagevideos) == 2) grid-2 @else grid-3 @endif  gutter-small clearfix"
                    data-lightbox="gallery">
                    @foreach ($pagevideos as $pagevideo)
                        <div class="gallery-item  mt-10 pr-10">
                            <p style="text-align: center; background-color:#F88147;color:black;">
                                {{ $pagevideo->title }}</p>
                            <iframe width="220" height="145"
                                src="https://www.youtube.com/embed/{{ $pagevideo->video }}?rel=0" allowfullscreen>
                            </iframe>
                        </div>
                    @endforeach
                </div>
                
                @if (count($pagevideos) == 1)
                <style>
                    iframe{
                        transform: scale(0.8);
                        position: relative;
                        top: 30%;
                    }
                </style>
                @endif

            </div>
        </div>
    </div>
</section>
<style>
    .accordion {
        color: #fff;
        background-color: #1F3345;
        cursor: pointer;
        padding-bottom: 4px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 24px;
        transition: 0.4s;
    }



    .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
</style>
<style>
    .share {
        width: 90px;
        height: 90px;
        margin: 10px;
        color: #3498db;
        overflow: hidden;
        position: relative;
        border-radius: 30%;
        background: #f1f1f1;
        text-decoration: none;
        box-shadow: 0 5px 15px -5px #00000070;
        display: inline-flex;
        align-items: center;
        justify-content: center;

        padding: 28px 28px 28px 28px;

    }

    .share i {
        font-size: 26px;
        transition: 0.2s linear;
    }

    .fb:before {
        content: "";
        width: 120%;
        height: 120%;
        left: -110%;
        top: 90%;
        position: absolute;
        background: rgb(35, 35, 170);
        transform: rotate(45deg);
        background-image: radial-gradient(circle farthest-corner at 10% 20%, rgb(35, 35, 170) 0%, rgb(35, 35, 170) 100%);
    }

    .fb:hover i {
        color: #f1f1f1;
        transform: scale(1.3);
    }

    .fb:hover:before {
        top: -10%;
        left: -10%;
        -webkit-animation: animation1 0.7s 1;
        animation: animation1 0.7s 1;
    }

    .wa:before {
        content: "";
        width: 120%;
        height: 120%;
        left: -110%;
        top: 90%;
        position: absolute;
        background: green;
        transform: rotate(45deg);
        background-image: radial-gradient(circle farthest-corner at 10% 20%, green 0%, green 100%);
    }

    .wa:hover i {
        color: #f1f1f1;
        transform: scale(1.3);
    }

    .wa:hover:before {
        top: -10%;
        left: -10%;
        -webkit-animation: animation1 0.7s 1;
        animation: animation1 0.7s 1;
    }

    .lin:before {
        content: "";
        width: 120%;
        height: 120%;
        left: -110%;
        top: 90%;
        position: absolute;
        background: #56ccf2;
        transform: rotate(45deg);
        background-image: radial-gradient(circle farthest-corner at 10% 20%, #56ccf2 0%, #3498db 100%);
    }

    .lin:hover i {
        color: #f1f1f1;
        transform: scale(1.3);
    }

    .lin:hover:before {
        top: -10%;
        left: -10%;
        -webkit-animation: animation1 0.7s 1;
        animation: animation1 0.7s 1;
    }

    @-webkit-keyframes animation1 {
        0% {
            top: 90%;
            left: -110%;
        }

        50% {
            top: -30%;
            left: 10%;
        }

        100% {
            top: -10%;
            left: -10%;
        }
    }

    @keyframes animation1 {
        0% {
            top: 90%;
            left: -110%;
        }

        50% {
            top: -30%;
            left: 10%;
        }

        100% {
            top: -10%;
            left: -10%;
        }
    }
</style>

<script>
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
                    behavior: 'auto',
                });
            }
        });
    });
</script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>
@include('layouts.includes.footer')
