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
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                <ol class="breadcrumb text-left mt-10" style="color:rgb(45, 69, 88);font-weight:bold;">
                                    <li><a href="/">{{ __('header.title1') }}</a></li>

                                    <li>
                                        Blog
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container pt-70 pb-40">
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        @foreach ($blogs as $blog)
                            <div class="col-sm-6 col-md-4">
                                <article class="post mb-sm-30">
                                    <div class="post-thumb">
                                        <img src="{{ url('storage') }}/{{ $blog->photo }}" class="img-fullwidth"
                                            alt="">
                                        @php
                                            $getMonth = date('F', strtotime($blog->created_at));
                                            $getDays = date('d', strtotime($blog->created_at));
                                            $getYears = date('Y', strtotime($blog->created_at));
                                        @endphp
                                      <div class="post-date"><span>{{ $getMonth }}</span><br> {{ $getDays }} , {{$getYears}}
                                      </div>
                                    </div>
                                    <div class="post-description border-1px p-20">
                                        <a href="{{ route('blog-actualités.show', $blog->id) }}">
                                            <h5 class="post-title font-16 font-weight-600 mt-0 mb-15"
                                                style="word-break: break-word;">
                                                {{ $blog->title }}</h5>
                                        </a>
                                        <p style="text-align:justify;hyphens:auto;">>{{ $blog->accroche }} [...]</p>
                                    </div>
                                    <div class="post-meta">
                                        <ul class="list-inline pull-left flip">
                                            <ul class="list-inline pull-left flip">
                                                <li><i class="lnr lnr-users text-theme-colored2 font-20"></i>{{__('home.text3')}} 
                                                    {{ $blog->description }}</li>
                                            </ul>

                                        </ul>

                                        <a href="{{ route('blog-actualités.show', $blog->id) }}"
                                            class="text-theme-colored2 font-14 text-gray-darkgray pull-right flip">{{__('home.text2')}} 
                                        </a>
                                    </div>
                                </article>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </section>



    </div>
@endsection
