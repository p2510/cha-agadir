@include("layouts.includes.header")
@if (session()->has('successNewsletter'))
<div class="container">
    <div class="row">


        <div class="alert alert-custom  fade in alert-dismissable show" style="margin-top:18px;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">×</span>
            </button>               Your email has been successfully registered!
        </div>
        <style>.alert-custom {
            
                background-color:#007c00;
                color: #fff;
            }
        </style>
    </div>
</div>
@endif
@if (session()->has('successUnsubscribe'))
<div class="container">
    <div class="row">

   
        <div class="alert alert-custom  fade in alert-dismissable show" style="margin-top:18px;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">×</span>
            </button>             Your email has been successfully unregistered! 

        </div>
        <style>{
            .alert-custom 
                background-color: #007c00 ;
                color: #fff;
            }
        </style>
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