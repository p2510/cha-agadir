@extends('layouts.app')
@section('content')
    <style>
        section>.container,
        section>.container-fluid {
            padding-top: 0px;
            padding-bottom: 0px;


        }
    </style>
    <div style="background-color:white;border-top:solid 2px rgb(45, 69, 88) ; padding-bottom:14px;"></div>
    <section class="container">

        <div class="inner-header divider ">
            <div class=" pt-10 pb-10 ">
                <!-- Section Content -->
                <div class="section-content  ">
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="breadcrumb text-left mt-10 " style="color:rgb(45, 69, 88);font-weight:bold;">
                                <li><a href="/">{{ __('header.title1') }}</a></li>
                                <li>{{ __('header.subtitle4') }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                                    class="text-theme-colored2">{{ __('header.subtitle4') }}</span></h2>
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
                            <div style="text-align:justify;hyphens:auto;color:#1f3344;">{!! $data->content !!}</div>
                        </div>
                    @endforeach

                    <button class="accordion">{{ __('home.text8') }}</button>
                    <div class="panel">
                        @foreach ($downloads as $key => $download)
                            <div><a class="filename"  href="{{ url('storage') }}/{{ $download->file }}"
                                    target='_blank'>{{ $download->filename }}</a></div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

    <style>
             .filename{
            color:#1f3344;
            margin-bottom: 2px;
        }
        .filename:hover{
            color:#F88147;
        }
        .accordion {
            color: #fff;
            background-color: #1F3345;
            font-weight: bold;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
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
@endsection
