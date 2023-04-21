@extends('layouts.app')
@section('content')
    <style>
        section>.container,
        section>.container-fluid {
            padding-top: 0px;
            padding-bottom: 0px;


        }



        .pt-70 {
            padding-top: 0px !important;

        }

        .pb-40 {
            padding-bottom: 0px !important;
        }
    </style>
    <div style="background-color:white;border-top:solid 2px rgb(45, 69, 88) ; padding-bottom:14px;"></div>

    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="container">
            <div class="inner-header divider ">
                <div class=" pt-10 pb-10 ">
                    <!-- Section Content -->
                    <div class="section-content ">
                        <div class="row">
                            <div class="col-md-6">
                                <ol class="breadcrumb text-left mt-10" style="color:rgb(45, 69, 88);font-weight:bold;">
                                    <li><a href="/">{{ __('header.title1') }}</a></li>
                                    <li>{{ __('header.subtitle5') }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Events Grid -->
        <section>
            <div class="container pt-70 pb-40">
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        @if (count($evenements) > 0)
                            @foreach ($evenements as $evenement)
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="event-grid bg-silver-light maxwidth500 mb-30">
                                        <div class="thumb">
                                            <img src="{{ url('storage') . '/' . $evenement->photo }}" alt=""
                                                class="img-fullwidth">
                                            <div class="entry-date media-left text-center flip">
                                                <ul>
                                                    <li class="font-16 text-white font-weight-600 line-height-1">
                                                        @php
                                                            
                                                            $getDays = date('F', strtotime($evenement->start_at));
                                                            echo substr($getDays, 0, 3);
                                                        @endphp </li>
                                                    <li class="font-11 text-white text-uppercase mt-0">@php
                                                        $getDays = date('d', strtotime($evenement->start_at));
                                                        echo $getDays;
                                                    @endphp,
                                                        @php
                                                            $getDays = date('Y', strtotime($evenement->start_at));
                                                            echo $getDays;
                                                        @endphp</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="event-grid-details border-1px bg-white clearfix p-20 pt-10 pb-20">
                                            <h5 class="text-uppercase font-weight-600 font-18 mb-10">

                                                @if (App::isLocale('en'))
                                                    {{ $evenement->title_en }}
                                                @else
                                                    {{ $evenement->title }}
                                                @endif
                                            </h5>
                                            <ul class="font-14">
                                                <li> <i class="fa fa-map-marker text-theme-colored2"></i>
                                                    {{ $evenement->location }}</li>
                                                <li><i class="fa fa-clock-o text-theme-colored2"></i> @php
                                                    
                                                    $start_at = date('H:i', strtotime($evenement->start_at));
                                                    echo $start_at;
                                                @endphp
                                                    -
                                                    @php
                                                        
                                                        $end_at = date('H:i', strtotime($evenement->end_at));
                                                        echo $end_at;
                                                    @endphp</li>
                                            </ul>
                                            <p class="mt-10">
                                            <p style="text-align:justify;hyphens:auto;">
                                                @if (App::isLocale('en'))
                                                    {{ $evenement->accroche_en }}
                                                @else
                                                    {{ $evenement->accroche }}
                                                @endif [...]
                                            </p>
                                            </p>
                                            <a href="{{ route('evenement.show', $evenement->title) }}"
                                                class="btn btn-theme-colored2 mt-5"> {{ __('home.btn1') }} </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h2 class="text-theme-colored2 font-36">Il n'y a pas d'évènements disponibles</h2>
                        @endif

                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
