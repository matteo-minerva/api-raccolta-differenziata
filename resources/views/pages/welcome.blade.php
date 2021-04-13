@extends("../layouts/main")
@section("title", "API Raccolta differenziata")

@section("content")
    <body>
        <div class="container">
            <h1>Progetto PHP - API per la raccolta differenziata</h1>

            <p>
                Quello che stai visitando è un progetto realizzato in Laravel,
                un framework PHP, come progetto per la SuperGuida PHP di start2impact.
                Le operazioni CURD implementate sono:
            </p>

            <ul>
                <li>
                    <code>{{URL::to("/")}}/api/all</code>, GET con la quale è possibile ottenere tutti le righe della tabella;
                </li>
                <li>
                    <code>{{URL::to("/")}}/api/add</code>, POST con la quale è possibile aggiungere un nuovo elemento alla tabella;
                </li>
                <li>
                    <code>{{URL::to("/")}}/api/raccolta/{idElemento}/</code>, PUT con la quale è possibile modificare una riga della tabella fornendo un ID;
                </li>
                <li>
                    <code>{{URL::to("/")}}/api/raccolta/{idElemento}/</code>, DELETE con la quale è possibile eliminare una riga della tabella fornendo un ID.
                </li>
            </ul>

            <p>Altre due richieste GET sono:</p>
            <ul>
                <li>
                    <code>{{URL::to("/")}}/api/oggi/</code>, con la quale è possibile sapere se in data odierna sono previsti ritiri;
                </li>
                <li>
                    <code>{{URL::to("/")}}/api/raccolta/{materiale}}</code>, con la quale è possibile sapere quando e se è previsto il ritiro di un determinato materiale-
                </li>
            </ul>

            <p>
                È consigliato effettuare richiesta all'API tramite <a href="https://www.postman.com/" target="_blank">Postman</a> oppure tramite l'estensione per Visual Studio Code <a href="https://marketplace.visualstudio.com/items?itemName=humao.rest-client">REST Client</a>. <br>
                Se si dovesse scegliere quest'ultima opzione, su GitHub è presente un file denominato <code>API_tests.http</code> col quale è possibile testarla.
            </p>
        </div>
    </body>
@endsection