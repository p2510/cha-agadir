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
            <div>
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="breadcrumb text-left mt-10 font-14" style="color:rgb(45, 69, 88);font-weight:bold;">
                                <li><a href="/">{{__('header.title1')}}</a></li>
                                <li>Mentions légales?</li>
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
                            <h2 class="text-uppercase text-theme-colored mt-0 mb-0 mt-sm-30"><span
                                    class="text-theme-colored2">Mentions légales</span></h2>

                
                            <h4 class="mt-5 mb-15"></h4>
                            <div style="text-align:justify;hyphens:auto;">{!! $data->content !!}</div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>

    <style>
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
