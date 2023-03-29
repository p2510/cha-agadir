@extends('layouts.app')
@section('content')
<style>
    section>.container,
    section>.container-fluid {
        padding-top: 0px;
        padding-bottom: 0px;


    }

    .pb-30 {
        padding-bottom: 0px !important;
    }

    .pt-30 {
        padding-top: 0px !important;
    }

    .mb-30 {
        margin-bottom: 0px !important;
    }

    .mt-30 {
        margin-top: 0px !important;
    }
</style>
<div style="background-color:white;border-top:solid 2px rgb(45, 69, 88) ; padding-bottom:14px;"></div>
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="container">
            <div class="inner-header divider ">
                <div class=" pt-10 pb-10 ">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                <ol class="breadcrumb text-left mt-10" style="color:rgb(45, 69, 88);font-weight:bold;">
                                    <li><a href="/">Accueil</a></li>
                                    <li>Formation</li>
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
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Portfolio Filter -->
                            <div class="portfolio-filter">
                                <a href="#" class="active" data-filter="*">Tous</a>
                                @foreach ($degrees as $degree)
                                    <a href="#a{{ $degree->id }}" class=""
                                        data-filter=".a{{ $degree->id }}">{{ $degree->name }}</a>
                                @endforeach
                            </div>
                            <!-- End Portfolio Filter -->
                            <div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix"
                                data-lightbox="gallery">
                                <!-- Portfolio Item Start -->

                                @foreach ($courses as $course)
                                    <div class="item gallery-item  a{{ $course->degree_id }}" style="padding-bottom:20px;padding-right:10px;">
                                        <div class="course-single-item bg-white border-1px clearfix">
                                            <a href="{{ route('course.details', $course->name) }}" class="course-thumb">
                                                <img class="img-fullwidth" alt=""
                                                    src="{{ url('storage') }}/{{ $course->photo }}">

                                            </a>
                                            <div class="course-details clearfix p-20 pt-15">
                                                <div class="course-top-part">
                                                    <a href="{{ route('course.details', $course->name) }}">
                                                        <h4 class="mt-5 mb-5">
                                                            {{ $course->name }}</h4>
                                                    </a>

                                                    <a href="{{ route('course.details', $course->name) }}">
                                                        <h4 class="mt-5 mb-5">
                                                            {{ $course->degrees_name }}
                                                        </h4>
                                                    </a>
                                                </div>
                                                <a
                                                    href="{{ route('course.details', $course->name) }}"class="course-description mt-15 mb-0">
                                                    <p style="font-weight:normal; text-align:justify;hyphens:auto;">
                                                        {{ $course->accroche }} [...]</p>
                                                </a>
                                                <!--  <div class="author-thumb">
                                                            <img src="{{ url('storage') }}/{{ $course->responsables_photo }}"
                                                                alt="" class="img-circle">
                                                        </div>-->
                                            </div>
                                            <a href="{{ route('course.details', $course->name) }}" style="display: block"
                                                class="course-meta">
                                                <ul class="list-inline">
                                                    <li><i class="ficon-clock font-18"></i>
                                                        {{ $course->duration }} Mois

                                                    </li>
                                                    <li>
                                                        <i class="pe-7s-notebook font-18"></i>
                                                        {{ $course->languages_name }}
                                                    </li>
                                                </ul>
                                                <div class="course-tag">

                                                    <h5>Détail</h5>
                                                </div>
                                            </a>
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
