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

            <!-- Section: inner-header -->
            <div class="inner-header divider ">
                <div class="pt-10 pb-10">
                    <!-- Section Content -->
                    <div class="section-content  ">
                        <div class="row">
                            <div class="col-md-6">
                                <ol class="breadcrumb text-left mt-10" style="color:rgb(45, 69, 88);font-weight:bold;">
                                    <li><a href="/">{{ __('header.title1') }}</a></li>
                                    <li>{{ __('header.subtitle7') }}</li>
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
                    <div class="row" style="font-size:16px;">
                        <div class="col-md-12">
                            <!-- Portfolio Filter -->
                            <div class="portfolio-filter">
                                <a href="#" class="active reset mt-10" data-filter="*">
                                    @if (App::isLocale('en'))
                                        All
                                    @else
                                        Tous
                                    @endif
                                </a>
                                @foreach ($categories as $category)
                                    <a href="#a{{ $category->id }}" class="category mt-10" id="id{{ $category->id }}"
                                        data-filter=".a{{ $category->id }}">{{ $category->name }}</a>
                                @endforeach
                                @foreach ($categories as $category)
                                    <input type="hidden"   @if (App::isLocale('en')) value="{{ $category->description_en }}"  @else value="{{ $category->description }}"  @endif
                                        class="id{{ $category->id }}">
                                @endforeach
                            </div>
                            <p id="descriptionCategory"  style="text-align:justify;hyphens:auto;color:#1f3344;"></p>
                            <script>
                                let category = document.querySelectorAll(".category");
                                let reset = document.querySelector(".reset");
                                let descriptionCategory=document.getElementById("descriptionCategory");
                                category.forEach(item => {
                                    item.addEventListener('click', () => {
                                        let input = document.querySelector('.' + item.id)
                                        descriptionCategory.innerHTML=input.value
                                    })
                                });
                                reset.addEventListener('click', () => {
                                    descriptionCategory.innerHTML=''

                                })                             

                            </script>
                          
                            <!-- End Portfolio Filter -->

                            <div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix"
                                data-lightbox="gallery">
                                <!-- Portfolio Item Start -->
                                @foreach ($medias as $media)
                                    <div class="gallery-item  a{{ $media->category_media_id }}">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="{{ url('storage') }}/{{ $media->photo }}"
                                                alt="{{ $media->title }}">
                                            <div class=""></div>

                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="{{ url('storage') }}/{{ $media->photo }}"
                                                            data-lightbox-gallery="gallery" title="{{ $media->title }}"><i
                                                                class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
@endsection
