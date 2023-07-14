<footer id="footer" class="footer" data-bg-color="white">
    <div id="separator"></div>
    <div class="container pt-60 pb-20">
        <div class="col-sm-6 col-md-3">
            <div class="widget dark">

                <h4 class="widget-title line-bottom-theme-colored2" style="color:#1f3344;">{{ __('footer.title1') }}</h4>

                <span style="color:#1f3344;">
                    {{ __('footer.subtitle4') }} <br>
                    {{ __('footer.subtitle5') }}
                </span>
                <ul class="list-inline">
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone mr-5"></i> <span
                            style="color:#1f3344; font-size:12px; cursor:default;">(+212) 0528-241-006/240-155</span>
                    </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o mr-5"></i> <a
                            href="mailto:contact@cha-agadir.ma" style="color:#1f3344;">contact@cha-agadir.ma</a> </li>
                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe mr-5"></i> <a href="#"
                            style="color:#1f3344;">www.cha-agadir.ma</a> </li>
                </ul>
                <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 icon-circled clearfix mt-10">
                    <li><a href="https://www.facebook.com/profile.php?id=100088051148636&mibexVd=ZbWKwL" target='_blank'><i
                                class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=100088051148636&mibexVd=ZbWKwL" target='_blank' ><i
                                class="fa fa-instagram"></i></a></li>
                    <li><a href="https://youtube.com/@ComplexeHorticoleAgadir" target='_blank'><i class="fa fa-youtube" ></i></a></li>
                    <li><a href="https://www.linkedin.com/company/complexe-horticole-d-agadir/" target='_blank'><i
                                class="fa fa-linkedin"></i></a></li>

                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="widget dark">
                <h4 class="widget-title line-bottom-theme-colored2" style="color:#1f3344;">{{ __('footer.title2') }}
                </h4>
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <ul>

                            <li><a href="{{ route('course.index') }}"
                                    style="color:#1f3344;font-weight:normal;">{{ __('footer.subtitle1') }}</a></li>


                            <li><a href="{{ route('media.index') }}"
                                    style="color:#1f3344;font-weight:normal;">{{ __('footer.subtitle2') }}</a></li>
                            <li><a href="{{ route('video.index') }}"
                                    style="color:#1f3344;font-weight:normal;">{{ __('footer.subtitle3') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="widget dark">
                <h5 class="widget-title line-bottom-theme-colored2" style="color:#1f3344;">{{ __('footer.title5') }}
                </h5>
                <!-- Mailchimp Subscription Form Starts Here -->
                <form id="mailchimp-subscription-form-footer" class="newsletter-form"
                    action="{{ route('newsletter.store') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="email" id="mce-EMAIL" data-height="45px" class="form-control input-xs"
                            placeholder="{{ __('footer.placehoderNewsletter') }}" name="email"
                            value="{{ old('email') }}">

                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-colored btn-theme-colored2 btn-sm m-0"
                                data-height="45px">OK</button>
                        </span>


                    </div>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </form>
                <!-- Mailchimp Subscription Form Validation-->

                <!-- Mailchimp Subscription Form Ends Here -->
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="widget dark">
                <h4 class="widget-title line-bottom-theme-colored2" style="color:#1f3344;">{{ __('footer.title3') }}
                </h4>
                <div class="latest-posts">
                    @foreach ($latest_blog as $item)
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a class="post-thumb" href="{{ route('blog-actualités.show', $item->id) }}"><img
                                    src="{{ url('storage') }}/{{ $item->photo }}" width="80px" height="55px"
                                    style="object-fit:cover;" alt="{{ $item->title }}"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a
                                        href="{{ route('blog-actualités.show', $item->id) }}" style="color:#1f3344;">
                                        @if (App::isLocale('en'))
                                            {{ $item->title_en }}
                                        @else
                                            {{ $item->title }}
                                        @endif
                                    </a></h5>
                                <p class="post-date mb-0 font-12" style="color:#1f3344;"> {{ $item->created_at }}</p>
                            </div>
                        </article>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="widget dark">
                <h4 class="widget-title line-bottom-theme-colored2" style="color:#1f3344;">{{ __('footer.title4') }}
                </h4>
                <div class="opening-hours">
                    <ul class="list-border">
                        <li class="clearfix" style="color:#1f3344;"> <span> {{ __('footer.day1') }} -
                                {{ __('footer.day2') }} : </span>
                            <div class="value pull-right"> 8:30 am – 4:30 pm</div>
                        </li>
                        <li class="clearfix" style="color:#1f3344;"> <span> {{ __('footer.day3') }} : </span>
                            <div class="value pull-right bg-theme-colored2 text-white closed">
                                {{ __('footer.indicatorday') }}</div>
                        </li>
                        <li class="clearfix" style="color:#1f3344;"> <span> {{ __('footer.day4') }} : </span>
                            <div class="value pull-right bg-theme-colored2 text-white closed">
                                {{ __('footer.indicatorday') }}</div>
                        </li>

                        @if (count($logo_url) > 0)
                            @foreach ($logo_url as $item)
                                <a class="menuzord-brand  flip mt-20 mt-sm-10 mb-sm-20 pt-20 "
                                    href="{{ route('home') }}"><img src="{{ url('storage') }}/{{ $item->logo }}"
                                        alt=""></a>
                            @endforeach
                        @endif

                    </ul>
                </div>
            </div>

        </div>

    </div>

    <div class="footer-bottom">
        <div class="container pt-20 pb-20">
            <div class="row">

                <div class="col-md-6">
                    <p class="font-14 sm-text-center m-0"> <span id='elem'> Copyright </span> &copy;2023 <span
                            class="text-theme-colored2">CHA
                            Agadir</span>. {{ __('footer.text1') }} </p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="widget no-border m-0">
                        <ul class="list-inline sm-text-center mt-5 font-14">
                            <li>
                                <a href="{{ route('mention.index') }}">{{ __('footer.text2') }}</a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="{{ route('contact.create') }}">{{ __('footer.text3') }}</a>
                            </li>
                            <li id='elem'>|</li>
                            <li class="text-white " id='elem' style="position:relative; top:3px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M4.05 21q-.45 0-.75-.3t-.3-.75V15.9q0-.35.225-.613q.225-.262.575-.337l3.45-.7q.35-.05.713.062q.362.113.587.338L10.9 17q1.9-1.15 3.488-2.725q1.587-1.575 2.637-3.375L14.6 8.45q-.225-.225-.288-.513q-.062-.287-.012-.637l.65-3.5q.05-.35.325-.575Q15.55 3 15.9 3h4.05q.45 0 .75.3t.3.75q0 3.225-1.438 6.287q-1.437 3.063-3.8 5.425q-2.362 2.363-5.424 3.8Q7.275 21 4.05 21ZM17.975 9q.425-.975.65-1.975q.225-1 .35-2.025H16.75l-.425 2.35Zm-8.95 8.95L7.35 16.275L5 16.75v2.2q1.025-.075 2.038-.325q1.012-.25 1.987-.675ZM17.975 9Zm-8.95 8.95Z" />
                                </svg>
                            </li>

                            <li id='elem' style="font-weight:bold;">
                                (+212) 0528-241-006 / 240-155
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

<style>
    @media screen and (max-width: 768px) {
        #elem {

            display: none;
        }
    }

    footer a:hover {
        text-decoration: underline;
        text-underline-offset: 2px;

    }

    #separator {
        padding-top: 1px;
        background-color: #1f3344;
    }

    .widget {
        margin-bottom: 0px;
    }

    .footer .widget .widget-title {
        margin-top: 0px;
    }

    .header-nav {
        z-index: 1111;
    }
</style>

<!-- end wrapper -->

<script>
    $(".header-nav-inner").css({
        'height': ($(".header-nav-wrapper").height() + 'px')
    });
</script>
<!-- Footer Scripts -->
<!-- JS | Chart-->
<script src="{{ asset('app-assets/js/chart.js') }}" defer></script>
<!-- JS | Custom script for all pages -->
<script src="{{ asset('app-assets/js/custom.js') }}" defer></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}" defer>
</script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}" defer>
</script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}" defer>
</script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"
    defer></script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}" defer>
</script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"
    defer></script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}" defer>
</script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"
    defer></script>
<script src="{{ asset('app-assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}" defer>
</script>

</body>

</html>
