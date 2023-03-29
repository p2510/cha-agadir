<h2> Sujet: Notre évènement {{ $title }}</h2>
<br>

<h3>Bonjour {{ $name }}</h3>
<br>
<div>
    Nous avons bien reçu votre pré-inscription et nous vous remercions pour votre intérêt à participer à notre évènement
    :
</div>
<br>

<p>Subjet : {{ $title }}</p>
<p>Lieu : {{ $location }}</p>
<p>Date début : {{ $start_at }}</p>
<p>Date de fin : {{ $end_at }}</p>
<br>

<div>
    Ci-joint les documents de l’évènement, et en cas de besoin, contactez l’administration pour plus d’informations sur
    les modalités et les conditions de participation.
</div>
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
