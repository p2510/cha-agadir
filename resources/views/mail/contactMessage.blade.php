
<h2> Subject: Recieved - {{ $subject }}</h2>
<br>

<h3>Dear {{ $name }}</h3>
<br>
<div>
    Thank you for reaching out to us. W've received your message and are currently
    reviewing it. Your perspective and time are greatly appreciated.
</div>
<br>
<div>
    Our team is on the job, working hard to get back to you as quickly as possible.
</div>
<br>
<div>
    If your matter is urgent or if you have additional questions, please don&#39;t hesitate to
    reach out directly via email or phone.
</div>
<br>

<div>
    Thank you for your patience and understanding.
</div>

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
<h2> Sujet: {{ $subject }}</h2>
<br>

<h3>Bonjour {{ $name }}</h3>
<br>
<div>
    Nous vous confirmons la bonne réception de votre message et nous vous remercions
    d'avoir pris le temps de nous contacter.
</div>
<br>
<div>
    Notre équipe s'efforce de répondre à toutes les requêtes dans les meilleurs délais.
</div>
<br>

<div>
    Si votre demande est urgente ou si vous avez besoin de renseignements
    supplémentaires, n'hésitez pas à nous contacter directement par email ou par
    téléphone.
</div>

<p>Nous vous remercions de votre patience et restons à votre entière disposition.</p>
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
