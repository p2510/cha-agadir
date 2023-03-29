    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Se désabonner</title>
    </head>

    <body>
        <main>
            <div class="subscribe-card">
                <h2>Me désabonner!</h2>
                <p>
                    Vous pouvez vous désabonner de la newsletter en rempliassant<br />
                    votre addresse email.
                </p>

                <form class="form-email" action="{{route('newsletter.unsubscribe.store')}}" method="post">
                    @csrf
                    <input type="email" name="email_newsletter" aria-label="Email to subscribe" placeholder="Votre email"
                        class="input-email" required>
                        @if ($errors->has('email_newsletter'))
                        <span style="color:red;">{{ $errors->first('email_newsletter') }}</span>
                    @endif

                    <button type="submit" class="send-button">
                        Valider
                    </button>
                </form>
            </div>
        </main>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: "Poppins", sans-serif;
                background-color: #f1f1f1;
            }

            body,
            input {
                color: #1a1a1a;
            }

            main {
                min-height: 100vh;

                display: grid;
                place-items: center;

                padding: 2em;
            }

            /* Subscribe Card */
            .subscribe-card {
                position: relative;

                padding: 3em 4em;

                background-color: white;
                box-shadow: 2px 0 15px -2px rgba(0, 0, 0, 0.2);

                border-radius: 12px;

                display: grid;
                row-gap: 1.6em;

                transition: all .1s ease-in-out;
            }

            .subscribe-card>h2 {
                color: #F88147;

                font-weight: 800;
                font-size: 1.8em;

                text-align: center;
            }

            .subscribe-card>p {
                line-height: 1.8;
                font-weight: 400;

                text-align: center;

                opacity: 0.9;
            }

            .form-email {
                margin-top: 1em;

                display: grid;
                row-gap: 1.6em;
            }

            .input-email {
                padding: 1em;

                background-color: #ecf2ff;

                border: none;
                outline: none;
                border-radius: 7px;

                font-weight: 500;
            }



            .input-email:not(:placeholder-shown):invalid~.error-message {
                display: block;
            }

            .send-button {
                display: flex;
                align-items: center;
                justify-content: center;

                gap: 1em;
                padding: 0.8em;

                color: white;
                background-color: #F88147;

                border: none;
                border-radius: 7px;

                font-weight: 600;

                cursor: pointer;
            }

            @media (hover: hover) {
                .send-button:hover {
                    background-color: #F8814780;
                    color: white;

                    transition: all 0.1s ease-in-out;
                }
            }
        </style>

    </body>

    </html>
