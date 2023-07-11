@extends('layouts.app')
@section('content')
    <style>
        section>.container,
        section>.container-fluid {
            padding-top: 0px;
            padding-bottom: 0px;


        }

        .divider .container {
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
    @foreach ($evenements as $evenement)
        <div class="main-content">
            <div class="inner-header divider" style="border-top:solid 2px rgb(45, 69, 88) ;">
                <!-- Section: inner-header -->
                <section class="container">
                    <div class=" pt-10 pb-10 ">
                        <!-- Section Content -->
                        <div class="section-content  ">
                            <div class="row">
                                <div class="col-md-6">
                                    <ol class="breadcrumb text-left mt-10" style="color:rgb(45, 69, 88);font-weight:bold;">
                                        <li><a href="/">{{ __('header.title1') }} </a></li>
                                        <li><a href="{{ route('evenement.index') }}">{{ __('header.subtitle5') }}</a></li>
                                        <li>
                                            @if (App::isLocale('en'))
                                                @if ($evenement->title_en)
                                                    {{ $evenement->title_en }}
                                                @endif
                                            @else
                                                @if ($evenement->title)
                                                    {{ $evenement->title }}
                                                @endif
                                            @endif



                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @if (session()->has('success'))
                <div class="container">
                    <div class="row">


                     
                        <div class="alert alert-success  fade in alert-dismissable show" style="margin-top:18px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="font-size:20px">×</span>
                            </button>                        Your pre-registration has been successfully saved!
                        </div>
                    
                    </div>
                </div>
            @endif
            @if ($errors->any())
                <div class="container">
                    <div class="row">
                        <ul class='alert alert-danger col-xs-12 col-sm-8 col-md-6 ' role="alert">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            </section>
            <section class="mb-40">
                <div class="container " style="background-color:#F88147;">
                    <div class="row text-center">
                        <div class="col-md-12">
                            @php
                                $year = date('Y', strtotime($evenement->start_at));
                                $month = date('M', strtotime($evenement->start_at));
                                $day = date('d', strtotime($evenement->start_at));
                                $hour = date('H', strtotime($evenement->start_at));
                                $minute = date('i', strtotime($evenement->start_at));
                                $second = date('s', strtotime($evenement->start_at));
                            @endphp
                            <input type="hidden" name="year" value='{{ $year }}' id="year">
                            <input type="hidden" name="month" value='{{ $month }}' id="month">
                            <input type="hidden" name="day" value='{{ $day }}' id="day">
                            <input type="hidden" name="hour" value='{{ $hour }}' id="hour">
                            <input type="hidden" name="minute" value='{{ $minute }}' id="minute">
                            <input type="hidden" name="second" value='{{ $second }}' id="second">
                            <h2 id="count_down_date" class=" basic-coupon-clock"
                                style="color:white; font-family:'Courier New', Courier, monospace;font-weight:bold;"></h2>

                            <!-- Final Countdown Timer Script -->
                            @if (App::isLocale('en'))
                                <script language="javascript" type="text/javascript">
                                    //get start date 
                                    let year = document.getElementById('year').value;
                                    let month = document.getElementById('month').value;
                                    let day = document.getElementById('day').value;
                                    let hour = document.getElementById('hour').value;
                                    let minute = document.getElementById('minute').value;
                                    let second = document.getElementById('second').value;
                                    //get end date 
                                    var countDownDate = new Date(`${month} ${day}, ${year} ${hour}:${day}:${second}`).getTime();
                                    // Update the count down every 1 second
                                    var x = setInterval(function() {

                                        // Get today's date and time
                                        var now = new Date().getTime();

                                        // Find the distance between now and the count down date
                                        var distance = countDownDate - now;

                                        // Time calculations for days, hours, minutes and seconds
                                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                        // Display the result in the element with id"
                                        document.getElementById("count_down_date").innerHTML = days + " Days " + hours + "H:" +
                                            minutes + "M:" + seconds + "S";

                                        // If the count down is finished, write some text
                                        if (distance < 0) {
                                            clearInterval(x);
                                            document.getElementById("count_down_date").innerHTML = "Expired";
                                        }
                                    }, 1000);
                                </script>
                            @else
                                <script language="javascript" type="text/javascript">
                                    //get start date 
                                    let year = document.getElementById('year').value;
                                    let month = document.getElementById('month').value;
                                    let day = document.getElementById('day').value;
                                    let hour = document.getElementById('hour').value;
                                    let minute = document.getElementById('minute').value;
                                    let second = document.getElementById('second').value;
                                    //get end date 
                                    var countDownDate = new Date(`${month} ${day}, ${year} ${hour}:${day}:${second}`).getTime();
                                    // Update the count down every 1 second
                                    var x = setInterval(function() {

                                        // Get today's date and time
                                        var now = new Date().getTime();

                                        // Find the distance between now and the count down date
                                        var distance = countDownDate - now;

                                        // Time calculations for days, hours, minutes and seconds
                                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                        // Display the result in the element with id"
                                        document.getElementById("count_down_date").innerHTML = days + " Jours  " + hours + "H:" +
                                            minutes + "M:" + seconds + "S";

                                        // If the count down is finished, write some text
                                        if (distance < 0) {
                                            clearInterval(x);
                                            document.getElementById("count_down_date").innerHTML = "Expiré";
                                        }
                                    }, 1000);
                                </script>
                            @endif

                        </div>
                    </div>
                </div>
            </section>



            <section>
                <div class="container">
                    <div class="row" style="font-size:16px;">
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    @if ($evenement->title)
                                        <h5>{{ __('event.subtitle1') }}:</h5>
                                        <p>
                                            {{ $evenement->title }}
                                        </p>
                                    @endif
                                </li>
                                <li>
                                    @if ($evenement->location)
                                        <h5>{{ __('event.subtitle2') }}:</h5>
                                        <p>{{ $evenement->location }}</p>
                                    @endif

                                </li>
                                <li>
                                    @if ($evenement->start_at)
                                        <h5>{{ __('event.subtitle3') }}:</h5>
                                        <p>{{ $evenement->start_at }}</p>
                                    @endif

                                </li>
                                <li>
                                    @if ($evenement->end_at)
                                        <h5>{{ __('event.subtitle4') }}:</h5>
                                        <p>{{ $evenement->end_at }}</p>
                                        
                                    @endif

                                </li>
                                <li>
                                    @if (count($evenementPages) > 0)
                                        <h5 class="p-5" style="font-weight:bold;color:white;background-color:#1f3344; text-align:center; display:inline; font-size:18px;">
                                            {{ __('event.subtitle5') }}

                                            </h5>
                                        @foreach ($evenementPages as $item)
                                            <p><a class="filename" style="text-decoration:underline;"
                                                    href="{{ url('storage') }}/{{ $item->file }}"
                                                    target='_blank'>{{ $item->filename }}</a></p>
                                        @endforeach
                                    @endif

                                </li>


                                <li>
                                    <ul class="styled-icons m-0">

                                        <li>

                                            <a href="{{ $shareLinkedin['facebook'] }}" class="share fb">
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 16 16">
                                                        <path fill="currentColor"
                                                            d="M9.5 3H12V0H9.5C7.57 0 6 1.57 6 3.5V5H4v3h2v8h3V8h2.5l.5-3H9V3.5c0-.271.229-.5.5-.5z" />
                                                    </svg></i>
                                            </a>
                                        </li>

                                        <li><a href="{{ $shareLinkedin['whatsapp'] }}" class="share wa">
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 16 16">
                                                        <path fill="currentColor"
                                                            d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1s-.48.6-.59.73s-.21.14-.4 0a5.13 5.13 0 0 1-1.49-.92a5.25 5.25 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.39 1.39 0 0 0 .18-.31a.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23a2.1 2.1 0 0 0-.65 1.55A3.59 3.59 0 0 0 5 8.2A8.32 8.32 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.53 2.53 0 0 0 1.17.07a1.93 1.93 0 0 0 1.26-.88a1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21z" />
                                                        <path fill="currentColor"
                                                            d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85l3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72zM8 14.12a6.12 6.12 0 0 1-3.15-.87l-.22-.13l-2.34.61l.62-2.28l-.14-.23a6.18 6.18 0 0 1 9.6-7.65a6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12z" />
                                                    </svg></i>
                                            </a></li>
                                        <li> <a href="{{ $shareLinkedin['linkedin'] }}" class="share lin">
                                                <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 1046.16 1000">
                                                        <path fill="currentColor"
                                                            d="M237.485 1000V325.301H13.229V1000h224.256zM125.386 233.127c78.202 0 126.879-51.809 126.879-116.553C250.808 50.37 203.591-.001 126.87-.001C50.161-.001-.002 50.371-.002 116.574c0 64.747 48.665 116.553 123.924 116.553h1.457zM361.61 1000h224.256V623.215c0-20.165 1.457-40.309 7.379-54.724c16.212-40.289 53.111-82.017 115.06-82.017c81.149 0 113.613 61.872 113.613 152.572v360.949h224.242V613.129c0-207.241-110.636-303.668-258.183-303.668c-120.977 0-174.094 67.622-203.603 113.679h1.497v-97.853H361.615c2.943 63.31 0 674.699 0 674.699z" />
                                                    </svg></i>
                                            </a></li>



                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <div>
                                <div class="item"><img src="{{ url('storage') }}/{{ $evenement->photo }}"
                                        alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row mt-60">
                        <div class="col-md-12">
                            <h4 class="mt-0">{{ $evenement->title }}</h4>
                            <div style="text-align:justify;hyphens:auto;font-size:16px; color:#1f3344;">
                                {!! $evenement->description !!}
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <section>
                <div class="container">
                    <div class="gallery-isotope default-animation-effect  @if (count($evenementvideos) == 1) grid-1   @elseif(count($evenementvideos) == 2) grid-2 @else grid-3 @endif gutter-small clearfix"
                        data-lightbox="gallery" style="margin-top:6px;">
                        @foreach ($evenementvideos as $evenementvideo)
                            <div class="gallery-item">
                                <p style="text-align: center; background-color:#F88147;color:black;">
                                    {{ $evenementvideo->title }}</p>
                                <iframe width="220" height="145"
                                    src="https://www.youtube.com/embed/{{ $evenementvideo->video }}?rel=0"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            @if ($evenement->active)
                <!-- Section: Registration Form -->
                <section style="background-color:#1f3344;">
                    <div class="container-fluid">
                        <div class="section-title">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <h3 class="title text-white pt-10" style="margin-bottom:-6px;">
                                        {{ __('event.subtitle6') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">

                                <form id="booking-form" name="booking-form" method="post"
                                    action="{{ route('evenement.signin', $evenement->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="{{ __('event.formtext1') }}"
                                                    name="name" required value="{{ old('name') }}"
                                                    class="form-control">
                                                @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                @if (App::isLocale('en'))
                                                    <select name="activity" required class="form-control">
                                                        <option value="" hidden disabled selected>choose an activity</option>
                                                        <option value="Agricultural production">Agricultural production
                                                        </option>
                                                        <option value="Nursery">Nursery</option>
                                                        <option value="Packaging house and export">Packaging house and export</option>
                                                        <option value="Agricultural inputs">Agricultural inputs</option>
                                                        <option value="Irrigation">Irrigation</option>
                                                        <option value="Packaging">Packaging</option>
                                                        <option value="Professional association">Professional association
                                                        </option>
                                                        <option value="Interprofessional Federation">Interprofessional Federation</option>
                                                        <option value="Public administration">Public administration
                                                        </option>
                                                        <option value="University education">University education</option>
                                                        <option value="Research - Developement">Research - Developement
                                                        </option>
                                                        <option value="Student">Student</option>
                                                        <option value="Laboratory">Laboratory</option>
                                                        <option value="Consulting">Consulting</option>
                                                        <option value="Banks and insurance">Banks and insurance</option>
                                                        <option value="Transit">Transit</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                @else
                                                    <select name="activity" required class="form-control">
                                                        <option value="" hidden disabled selected>Choisir une activité</option>
                                                        <option value="Production agricole">Production agricole</option>
                                                        <option value="Pépinière">Pépinière</option>
                                                        <option value="Conditionnement et export">Conditionnement et export
                                                        </option>
                                                        <option value="Intrants agricoles">Intrants agricoles</option>
                                                        <option value="Irrigation">Irrigation</option>
                                                        <option value="Emballage">Emballage</option>
                                                        <option value="Association professionnelle">Association professionnelle</option>
                                                        <option value="Fédération interprofessionnelle">Fédération
                                                            interprofessionnelle</option>
                                                        <option value="Administration publique">Administration publique
                                                        </option>
                                                        <option value="Enseignement universitaire">Enseignement
                                                            universitaire</option>
                                                        <option value="Recherche - Développement">Recherche - Développement
                                                        </option>
                                                        <option value="Étudiant">Étudiant</option>
                                                        <option value="laboratoire">laboratoire</option>
                                                        <option value="Consulting">Consulting</option>
                                                        <option value="Banques et assurances">Banques et assurances
                                                        </option>
                                                        <option value="Transit">Transit</option>
                                                        <option value="Autre">Autre</option>
                                                    </select>
                                                @endif

                                                @if ($errors->has('activity'))
                                                    <span class="text-danger">{{ $errors->first('activity') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="{{ __('event.formtext4') }}"
                                                    name="organism" class="form-control" required
                                                    value="{{ old('organism') }}">
                                                @if ($errors->has('organism'))
                                                    <span class="text-danger">{{ $errors->first('organism') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="{{ __('event.formtext5') }}"
                                                    name="poste" class="form-control" required
                                                    value="{{ old('poste') }}">
                                                @if ($errors->has('poste'))
                                                    <span class="text-danger">{{ $errors->first('poste') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="{{ __('event.formtext2') }}"
                                                    name="email" class="form-control" required
                                                    value="{{ old('email') }}">
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select name="country" id="countries"
                                                    style="background-color:white;color: gray;"
                                                    value="{{ old('country') }}" class="form-control  ">
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country }}">
                                                            {{ $country }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('country'))
                                                    <span class="text-white">{{ $errors->first('country') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6" id="provinces">
                                            <div class="form-group">
                                                <select name="province" id="province" class="form-control"
                                                    style="background-color:white;color: gray;"
                                                    value="{{ old('province') }}">
                                                    <option value="_" selected>
                                                        Province
                                                    </option>

                                                    @foreach ($provinces as $province)
                                                        <option value="{{ $province }}">
                                                            {{ $province }}</option>
                                                    @endforeach

                                                </select>
                                                @if ($errors->has('province'))
                                                    <span class="text-white">{{ $errors->first('province') }}</span>
                                                @endif

                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input name="phone" class="form-control" id="phone" type="tel"
                                                    value="+212">
                                                <input name="indice" class="form-control" id="indice" type="hidden"
                                                    value="212">
                                                @if ($errors->has('phone'))
                                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div style="margin-left:15px;" >

                                            <input name="accepted" value='accepted'
                                            type="checkbox" >
                                        </div>
                                        <div class="col-xs-12 col-sm-12 font-12 text-white mb-10"
                                            style="text-align:justify;hyphens:auto;">
                                        
                                            {{ __('event.formtext6') }}
                                        </div>

                                        
                                        <div class="col-xs-12 col-sm-12 ">

                                            <div class="mb-10">

                                                <div class="font-10 text-white "
                                                    style="text-align:justify;hyphens:auto;width:100%;">
                                                   
                                                    {{ __('event.formtext7') }} <a
                                                        class="text-white"
                                                        style="font-weight:normal;text-decoration:underline;"
                                                        href="{{ route('mention.index') }}">
                                                        {{ __('event.formtext8') }}</a>,{{ __('event.formtext9') }}<strong
                                                        style="color:red;">*</strong>
                                                </div>
                                            </div>

                                            @if ($errors->has('accepted'))
                                                <span
                                                    class="text-danger">{{ $errors->first('accepted') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group text-center">

                                                <button
                                                    class="btn btn-white btn-theme-colored2 btn-sm btn-block mt-20 pt-10 pb-10"
                                                    type="submit">{{ __('event.btn1') }}</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </section>
            @endif


        </div>
    @endforeach

    <style>
        .filename {
            color: #1f3344;
            margin-bottom: 2px;
        }

        .filename:hover {
            color: #F88147;
        }

        .iti {
            width: 100%;
            display: block;
        }

        .share {
            width: 90px;
            height: 90px;
            margin: 10px;
            color: #3498db;
            overflow: hidden;
            position: relative;
            border-radius: 30%;
            background: #f1f1f1;
            text-decoration: none;
            box-shadow: 0 5px 15px -5px #00000070;
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 28px 28px 28px 28px;

        }

        .share i {
            font-size: 26px;
            transition: 0.2s linear;
        }

        .fb:before {
            content: "";
            width: 120%;
            height: 120%;
            left: -110%;
            top: 90%;
            position: absolute;
            background: rgb(35, 35, 170);
            transform: rotate(45deg);
            background-image: radial-gradient(circle farthest-corner at 10% 20%, rgb(35, 35, 170) 0%, rgb(35, 35, 170) 100%);
        }

        .fb:hover i {
            color: #f1f1f1;
            transform: scale(1.3);
        }

        .fb:hover:before {
            top: -10%;
            left: -10%;
            -webkit-animation: animation1 0.7s 1;
            animation: animation1 0.7s 1;
        }

        .wa:before {
            content: "";
            width: 120%;
            height: 120%;
            left: -110%;
            top: 90%;
            position: absolute;
            background: green;
            transform: rotate(45deg);
            background-image: radial-gradient(circle farthest-corner at 10% 20%, green 0%, green 100%);
        }

        .wa:hover i {
            color: #f1f1f1;
            transform: scale(1.3);
        }

        .wa:hover:before {
            top: -10%;
            left: -10%;
            -webkit-animation: animation1 0.7s 1;
            animation: animation1 0.7s 1;
        }

        .lin:before {
            content: "";
            width: 120%;
            height: 120%;
            left: -110%;
            top: 90%;
            position: absolute;
            background: #56ccf2;
            transform: rotate(45deg);
            background-image: radial-gradient(circle farthest-corner at 10% 20%, #56ccf2 0%, #3498db 100%);
        }

        .lin:hover i {
            color: #f1f1f1;
            transform: scale(1.3);
        }

        .lin:hover:before {
            top: -10%;
            left: -10%;
            -webkit-animation: animation1 0.7s 1;
            animation: animation1 0.7s 1;
        }

        @-webkit-keyframes animation1 {
            0% {
                top: 90%;
                left: -110%;
            }

            50% {
                top: -30%;
                left: 10%;
            }

            100% {
                top: -10%;
                left: -10%;
            }
        }

        @keyframes animation1 {
            0% {
                top: 90%;
                left: -110%;
            }

            50% {
                top: -30%;
                left: 10%;
            }

            100% {
                top: -10%;
                left: -10%;
            }
        }
    </style>
    <script>
        let getCountries = document.getElementById('countries');
        let getProvinces = document.getElementById('provinces');
        let getProvince = document.getElementById('province');

        getCountries.addEventListener('change', () => {
            if (getCountries.value !== 'Maroc') {
                getProvinces.style.display = 'none'
                getProvince.value = '_'
            } else {
                getProvinces.style.display = 'block'
            }
        })


        const phoneInputField = document.querySelector("#phone");
        let indice = document.querySelector("#indice");

        const phoneInput = window.intlTelInput(phoneInputField, {});

        var country = phoneInput.getSelectedCountryData();


        phoneInputField.addEventListener("countrychange", function() {
            country = phoneInput.getSelectedCountryData();
            indice.value = country.dialCode
        });

        const phoneInputField1 = document.querySelector("#phone1");
        let indice1 = document.querySelector("#indice1");

        const phoneInput1 = window.intlTelInput(phoneInputField1, {});

        var country1 = phoneInput1.getSelectedCountryData();


        phoneInputField1.addEventListener("countrychange", function() {
            country1 = phoneInput1.getSelectedCountryData();
            indice1.value = country1.dialCode
        });
    </script>
@endsection
