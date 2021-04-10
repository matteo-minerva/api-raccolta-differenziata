<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API Raccolta differenziata</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{secure_asset("css/style.css")}}">
    </head>
    <body>
        <div class="container">
            <h1>Progetto PHP - API per la raccolta differenziata</h1>

            <p>
                Quello che stai visitando è un progetto realizzato in Laravel,
                un framework PHP, come progetto per la SuperGuida PHP di start2impact.
                Le chiamate che è possibile fare sono:
            </p>

            <ul>
                <li>
                    <code>{{URL::to("/")}}/api/all</code>
                </li>
                <li>
                    <code>{{URL::to("/")}}/api/add</code>
                </li>
                <li>
                    <code>{{URL::to("/")}}/api/raccolta/{idElemento}/</code>
                </li>
                <li>
                    <code>{{URL::to("/")}}/api/raccolta/{idElemento}/</code>
                </li>
                <li>
                    <code>{{URL::to("/")}}/api/oggi/</code>
                </li>
                <li>
                    <code>{{URL::to("/")}}/api/raccolta/{materiale}}</code>
                </li>
            </ul>

            <p>
                È consigliato effettuare richiesta all'API tramite <a href="https://www.postman.com/" target="_blank">Postman</a> oppure tramite l'estensione per Visual Studio Code <a href="https://marketplace.visualstudio.com/items?itemName=humao.rest-client">REST Client</a>. <br>
                Se si dovesse scegliere quest'ultima opzione, su GitHub è presente un film denominato <code>API_tests.http</code> col quale è possibile testarla.
            </p>
        </div>
    </body>
</html>
