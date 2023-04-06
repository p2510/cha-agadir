@extends('layouts.app')
@section('content')
    <!-- Start main-content -->
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
            <div class="  ">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="breadcrumb text-left" style="color:rgb(45, 69, 88);font-weight:bold;">
                                <li><a href="/">{{ __('header.title1') }}</a></li>
                                <li>Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Contact -->

    <section>
        <div class="container  pb-70">
            <div class="row pt-10">
                <div class="col-md-5">
                    <h4 class="mt-0 mb-30 line-bottom-theme-colored2">Nous trouver</h4>
                    <!-- Google Map HTML Codes -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d723.7731107777314!2d-9.476822224020928!3d30.35479968641361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c61795413197%3A0x404955676be14a54!2sComplexe%20horticole%20d&#39;Agadir!5e0!3m2!1sfr!2sma!4v1675327226532!5m2!1sfr!2sma"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <!-- Google Map Javascript Codes -->
                    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAh6VjA5IqdYdqqQ5ky4jTwKT3k8cCbPXQ"></script>
                    <script src="js/google-map-init.js"></script>
                </div>
                <div class="col-md-7">
                    <h4 class="mt-0 mb-30 line-bottom-theme-colored2">Vous voulez nous joindre ?</h4>
                    @if (session()->has('success'))
                        <h6 class='alert alert-success' role="alert">
                            Votre formulaire a été envoyé avec succès et nous vous remercions pour votre intérêt.
                            N’hésitez pas à prendre contact avec nous. Merci.
                        </h6>
                    @endif
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="{{ route('contact.store') }}"
                        method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input id="form_name" name="name" value="{{ old('name') }}" class="form-control"
                                        type="text" placeholder="Votre nom" required>
                                </div>

                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input id="form_email" name="email" value="{{ old('email') }}"
                                        class="form-control required email" type="email" placeholder="votre e-mail"
                                        required>
                                </div>
                                @if ($errors->has('nemail'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input id="form_subject" name="subject" value="{{ old('subject') }}"
                                        class="form-control " type="text" placeholder="Votre sujet " required>
                                </div>
                                @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input id="form_phone" name="phone" value="{{ old('phone') }}" class="form-control"
                                        type="text" placeholder="Votre téléphone" required>
                                </div>
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-30">
                            <textarea id="form_message" name="message" value="{{ old('message') }}" class="form-control" required rows="7"
                                placeholder="Votre message "></textarea>
                            @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif

                        </div>
                        <div class="col-xs-12 col-sm-12 font-10  mb-10"
                            style="text-align:justify;hyphens:auto;color:#1f3344;">
                            Conformément à la loi 09-08, vous disposez d'un
                            droit d'accès, de rectification et d'opposition
                            au traitement de vos données personnelles.
                        </div>


                        <div class="col-xs-12 col-sm-12 ">

                            <div class="mb-10">

                                <div class="font-10 " style="text-align:justify;hyphens:auto;width:100%;color:#1f3344;">
                                    <input name="accepted" value='accepted' type="checkbox" required>
                                    J'ai lu et j'accepte <a
                                        style="font-weight:normal;text-decoration:underline;color:#1f3344;"
                                        href="{{ route('mention.index') }}"> les conditions
                                        générales d'utilisation</a> , notamment la
                                    mention relative
                                    á la protection des données
                                    personnelles.<strong style="color:red;">*</strong>
                                </div>
                            </div>

                            @if ($errors->has('accepted'))
                                <span class="text-danger">{{ $errors->first('accepted') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden"
                                value="" />
                            <button type="submit" class="btn btn-flat btn-default bg-hover-theme-colored mr-5"
                                data-loading-text="Please wait...">Soumettre </button>
                            <button type="reset"
                                class="btn btn-flat btn-theme-colored2 bg-hover-theme-colored">Annuler</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                        <i class="fa fa-phone font-36 mb-10 text-theme-colored2"></i>
                        <h4>Téléphone</h4>
                        <h6 class="text-gray">(+212) 0528-241-006 / 240-155</h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                        <i class="fa fa-map-marker font-36 mb-10 text-theme-colored2"></i>
                        <h4>Addresse</h4>
                        <h6 class="text-gray">Complexe Horticole d’Agadir, km 2 route d’Azrou, B.P. 121 Ait Melloul
                            80150 - Agadir</h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                        <i class="fa fa-envelope font-36 mb-10 text-theme-colored2"></i>
                        <h4>E-mail</h4>
                        <h6 class="text-gray"> contact@cha-agadir.ma</h6>
                    </div>
                </div>

            </div>
        </div>
    </section>
    </div>
@endsection
