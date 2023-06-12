@extends('layouts.static')
@section ('title')
{{ __('header.title4') }}
@endsection
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
                            <ol class="breadcrumb text-left mt-10" style="color:rgb(45, 69, 88);font-weight:bold;">
                                <li><a href="/">{{ __('header.title1') }}</a></li>
                                <li>{{ __('header.title4') }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
