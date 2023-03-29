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

    <div class="main-content">

        <section class="container">

            <div class="inner-header divider ">
                <div class=" pt-10 pb-10 ">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                <ol class="breadcrumb text-left mt-10" style="color:rgb(45, 69, 88);font-weight:bold;">
                                    <li><a href="/">Accueil</a></li>
                                    <li>Vidéos</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Gallery Grid 3 -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                     
                            <div class="portfolio-filter">
                                <a href="#" class="active" data-filter="*">Tous</a>
                                @foreach ($categories as $category)
                                    <a href="#a{{ $category->id }}" class=""
                                        data-filter=".a{{ $category->id }}">{{ $category->name }}</a>
                                @endforeach
                            </div>

                            <div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix"
                                data-lightbox="gallery">
                                <!-- Portfolio Item Start -->
                                @foreach ($videos as $video)
                               
                                    <div class="gallery-item  a{{ $video->category_video_id }}">
                                        <iframe width="420" height="345"
                                            src="https://www.youtube.com/embed/{{ $video->video }}">
                                        </iframe>
                                    </div>
                                @endforeach
                            </div>
                            <!-- End Portfolio Gallery Grid -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <style>
        .thumb {
            padding: 10px;
            text-align: center;
        }

        @media screen and (max-width: 768px) {
            .thumb {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        }
        .gallery-item{
            padding-left: 7px;
            margin-bottom: 7px;
        }
    </style>
@endsection
