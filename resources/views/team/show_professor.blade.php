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
        <div class="container">

            <section class="inner-header divider ">
                <div class=" pt-10 pb-10 ">
                    <!-- Section Content -->
                    <div class="section-content  ">
                        <div class="row">
                            <div class="col-md-6">
                                <ol class="breadcrumb text-left mt-10" style="color:rgb(45, 69, 88);font-weight:bold;">
                                    <li><a href="/">{{ __('header.title1') }}</a></li>
                                    <li><a href="{{ route('index.professor') }}">{{ __('header.subtitle33') }}</a> </li>
                                    <li>{{ $responsable->name }} </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Section: Experts Details -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumb">
                                <img src="{{ asset('storage') }}/{{ $responsable->photo }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4 class="name font-24 mt-0 mb-0">{{ $responsable->name }} {{ $responsable->surname }}</h4>
                            <h5 class="mt-5">
                                @if (App::isLocale('en'))
                                    {{ $responsable->poste_en }}
                                @else
                                    {{ $responsable->poste }}
                                @endif
                            </h5>
                            <p>
                                @if (App::isLocale('en'))
                                    {{ $responsable->competence_en }}
                                @else
                                    {{ $responsable->competence }}
                                @endif
                            </p>

                        </div>
                    </div>
                    <div class="row mt-30">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
