
<h2>Subject: acknowledgement of interest -: {{ $course_name_en }} - {{ $degree_en }}</h2>
<br>

<h3>Dear {{ $name }}</h3>
<br>
<div>
    We sincerely appreciate your interest in our institution and specifically, our “{{ $course_name_en }} -{{ $degree_en }}” program. It's always exciting to engage with individuals who share
    our passion for learning and growth. {{ $course_name_en }}  {{ $degree_en }} »
    :
</div>
<br>

<p>We are pleased to confirm that we have received your inquiry and we're eager to
    help you explore this educational opportunity further. You can anticipate hearing from
    us soon.
</p>

<br>
<p>To get you started, we've attached some additional resources related to the program
    to this email. Should you have any questions or need additional information, please
    don't hesitate to reach out via email or phone. Our dedicated educational team is
    here to support you.</p>

<br>
<p>We are looking forward to the prospect of furthering our conversation soon.</p>
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
<h2> Sujet: Accusé de réception - Intérêt pour : {{ $course_name }} - {{ $degree }}</h2>
<br>

<h3>Bonjour {{ $name }}</h3>
<br>
<div>
    Nous vous remercions sincèrement pour l'intérêt que vous portez à notre institution
    et particulièrement à notre formation intitulée« {{ $course_name }} - {{ $degree }} »
    :
</div>
<br>

<p>Nous sommes ravis de confirmer la réception de votre manifestation d&#39;intérêt pour
    cette formation et nous nous engageons à vous tenir informé(e) de la suite des
    événements dans les plus brefs délais.
</p>

<br>
<p>Des documents supplémentaires relatifs à la formation sont joints à cet email. Pour
    toute question ou besoin d'information complémentaire, n'hésitez pas à nous
    contacter par email ou par téléphone. Notre équipe pédagogique est à votre
    disposition pour vous aider.</p>

<br>
<p>Nous apprécions votre intérêt et nous réjouissons à l'idée de pouvoir échanger
    davantage avec vous très prochainement.</p>
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
