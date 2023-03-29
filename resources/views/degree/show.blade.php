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
                                    <li><a href="{{ route('course.index') }}">Formation</a></li>
                                    <li>
                                        @if( $degrees_name )
                                             {{ $degrees_name }}
                                        @endif
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="courses" class="bg-silver-light">
            <div class="container">
                <div class="section-content">
                    <div class="row ">
                        @if (count($courses) > 0)
                            @foreach ($courses as $course)
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="course-single-item bg-white border-1px clearfix mb-md-40">
                                    <a href="{{ route('course.details', $course->name) }}" style="display:block;" class="course-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ url('storage') }}/{{ $course->photo }}">
                                    </a>
                                    <div class="course-details clearfix p-20 pt-15">
                                        <div class="course-top-part">
                                            <a href="{{ route('course.details', $course->name) }}">
                                                <h4 class="mt-5 mb-5">{{ $course->name }}</h4>
                                            </a>
                                            <a href="{{ route('course.details', $course->name) }}">
                                                <h4 class="mt-5 mb-5">{{ $course->degrees_name }}</h4>
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
                                            <li><i class="ficon-clock font-18"></i> {{ $course->duration }} Mois</li>
                                            <li><i class="pe-7s-notebook font-18"></i>{{ $course->languages_name }}</li>
                                        </ul>
                                        <a  href="{{ route('course.details', $course->name) }}" style="display:block;" class="course-tag">
                                            <h5>Détail</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <h2 class="text-theme-colored2 font-36">Il n'y a pas de formations disponible</h2>
                        @endif


                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
