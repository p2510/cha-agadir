
<h2> Subject: confirmation of your pre-registration - {{ $title }}</h2>
<br>

<h3>Dear {{ $name }}</h3>
<br>
<div>
    We're thrilled to confirm your pre-registration for our upcoming event:
</div>
<br>

<p>Topic : {{ $title }}</p>
<p>Location : {{ $location }}</p>
<p>Start  : {{ $start_at }}</p>
<p>End : {{ $end_at }}</p>
<br>

<div>
    We've attached further details to this email to help you prepare. Should you have any
    questions about the event, or need additional information about how to participate,
    please feel free to reach out. Our event coordination team is standing by to assist
    you.
</div>
<br>

<p>We're looking forward to welcoming you soon.</p>
<br>

<p>Best regards.</p>
<br>
<br>

<div>
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
<hr>
<h2> Sujet: Confirmation de pré-inscription - {{ $title }}</h2>
<br>

<h3>Bonjour {{ $name }}</h3>
<br>
<div>
    Nous avons bien reçu votre pré-inscription et nous vous remercions pour votre intérêt
    à participer à notre évènement :
</div>
<br>

<p>Sujet : {{ $title }}</p>
<p>Lieu : {{ $location }}</p>
<p>Date début : {{ $start_at }}</p>
<p>Date de fin : {{ $end_at }}</p>
<br>

<div>
    Des informations supplémentaires sont jointes à cet email. Si vous avez des
    questions concernant les modalités et les conditions de participation, n&#39;hésitez pas à
    contacter notre équipe d'organisation.
</div>
<br>

<p>Au plaisir de vous accueillir prochainement.</p>
<br>

<p>Cordialement</p>
<br>
<br>

<div>
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

<br>



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
