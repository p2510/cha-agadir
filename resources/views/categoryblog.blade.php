@extends('layouts.app')
@section('content')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark-4"
            data-bg-img="{{ asset('images/details_course.jpeg') }}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">

                                @if (isset($categoryName->name))
                                    {{ $categoryName->name }}
                                @endif
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Blog -->
        <section>
            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row blog-posts">
                    <div class="col-md-12">
                        <!-- Blog Masonry -->
                        <div id="grid"
                            class="gallery-isotope default-animation-effect grid-3 masonry gutter-30 clearfix">
                            <!-- grid sizer for Masonry -->
                            <div class="gallery-item gallery-item-sizer"></div>

                            <!-- Blog Item Start -->
                            @if (count($blogs)>0)
                                @foreach ($blogs as $blog)
                                    <div class="gallery-item">
                                        <article class="post clearfix mb-30 bg-lighter">
                                            <div class="entry-header">
                                                <div class="post-thumb thumb">
                                                    <img src="{{ url('storage') }}/{{ $blog->photo }}" alt=""
                                                        class="img-responsive img-fullwidth">
                                                </div>
                                            </div>
                                            <div class="entry-content border-1px p-20 pr-10">
                                                <div class="entry-meta media mt-0 no-bg no-border">

                                                    <div class="media-body pl-15">
                                                        <div class="event-content pull-left flip">
                                                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a
                                                                    href="{{ route('blog-actualités.show', $blog->id) }}">{{ $blog->title }}</a>
                                                            </h4>
                                                            <span class="mb-10 text-gray-darkgray mr-10 font-13"> Publié
                                                                {{ $blog->created_at }}</span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-10">{!! $blog->description !!} [...]</p>
                                                <a href="{{ route('blog-actualités.show', $blog->id) }}" class="btn-read-more">Lire
                                                    plus</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                                
                            @else

                                <h2 class="text-theme-colored2 font-36">

                                    Il n'y a pas d'articles disponibles
                                </h2>
                            @endif
                           
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
