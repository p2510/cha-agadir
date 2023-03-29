<h2> Sujet: {{ $course_name }} - {{ $degree }}</h2>
<br>

<h3>Bonjour {{ $name }}</h3>
<br>
<div>
    Merci beaucoup de nous avoir contacté ! Nous vous confirmons que nous avons bien reçu votre manifestation d’intérêt
    à notre formation intitulée « {{ $course_name }} - {{ $degree }} »
    :
</div>
<br>

<p>Ci-joint vous trouvez les documents de la formation, et n’hésitez pas à nous contacter directement par mail ou par
    téléphone pour tout renseignement complémentaire. 
</p>

<br>


<p>Cordialement</p>
<br>
<br>

<div ">
         @if (count($logo_url) > 0)
    @foreach ($logo_url as $item)
        <img id="logo" src="{{ url('storage') }}/{{ $item->logo }}" alt="">
    @endforeach
    @endif
</div>
<br>
<div>
    km 2 route d’Azrou, B.P. 121 <br>
    Ait Melloul 80150 - Agadir <br>
    (+212) 0528-241-006 / 240-155 <br>
    contact@cha-agadir.ma - <a href="https://cha-agadir.ma"> www.cha-agadir.ma</a>
</div>

<style>
    @media only screen and (min-width: 00px) {
        #logo {
            width: 40%;
            object-fit: contain;
        }
    }

    @media only screen and (max-width: 500px) {
        #logo {
            width: 100%;
            object-fit: contain;
        }
    }
</style>
