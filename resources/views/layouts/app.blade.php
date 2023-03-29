@include("layouts.includes.header")
@if (session()->has('successNewsletter'))
<div class="container">
    <div class="row">

   
        <h6 class='alert alert-success col-xs-12 col-sm-8 col-md-6 ' role="alert">
            Votre inscription à notre newsletter a été bien
            enregistrée !!
        </h6>
    </div>
</div>
@endif
@if (session()->has('successUnsubscribe'))
<div class="container">
    <div class="row">

   
        <h6 class='alert alert-success col-xs-12 col-sm-8 col-md-6 ' role="alert">
           Vous êtes désormais désabonner de la newsletter !!
        </h6>
    </div>
</div>
@endif
@if ($errors->any())
<div class="container">
    <div class="row">
    <ul class='alert alert-danger col-xs-12 col-sm-8 col-md-6 ' role="alert">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    </div>
</div>
@endif
@yield("content")
@include("layouts.includes.footer")