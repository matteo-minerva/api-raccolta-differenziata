<?php

namespace App\Http\Controllers;
use App\Models\Raccolta;

// use DB;

class ApiRaccoltaController extends Controller {
    public function index() {
        $raccolta = Raccolta::select( "id as N.", "giorni as Giorni di raccolta", "orario as Fasce orarie", "rifiuto as Tipo di rifiuto", "istruzioni as Istruzioni per lo smaltimento" )
            ->get();

        // var_dump( DB::getSchemaBuilder()->getColumnListing( "raccoltas" ) );
        $colonne = ["N.", "Giorni di raccolta", "Fasce orarie", "Tipo di rifiuto", "Istruzioni per lo smaltimento"];

        return view( "retrieve_all" )
            ->with( "colonne", $colonne )
            ->with( "raccolta", $raccolta );
    }

    public function add() {
        request()->validate( [
            "rifiuto"    => "required",
            "istruzioni" => "required",
            "giorni"     => "required",
            "orario"     => "required",
        ] );

        return Raccolta::create( [
            "rifiuto"    => request( "rifiuto" ),
            "istruzioni" => request( "istruzioni" ),
            "giorni"     => request( "giorni" ),
            "orario"     => request( "orario" ),
        ] );
    }

    public function update( Raccolta $raccolta ) {
        request()->validate( [
            "rifiuto"    => "required",
            "istruzioni" => "required",
            "giorni"     => "required",
            "orario"     => "required",
        ] );

        $success = $raccolta->update( [
            "rifiuto"    => request( "rifiuto" ),
            "istruzioni" => request( "istruzioni" ),
            "giorni"     => request( "giorni" ),
            "orario"     => request( "orario" ),
        ] );

        return [
            "success" => $success,
        ];
    }

    public function delete( Raccolta $raccolta ) {
        $success = $raccolta->delete();

        return [
            "success" => $success,
        ];
    }

    public function raccoltaOdierna() {
        ### Che giorno della settimana è?
        $giorno_corrente = date( "w" );
        $giorni_della_settimana = array( "Domenica", "Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato" );
        $giorno = $giorni_della_settimana[$giorno_corrente];

        ### Query builder
        $raccolta = Raccolta::select( "id as N.", "orario as Fasce orarie", "rifiuto as Tipo di rifiuto", "istruzioni as Istruzioni per lo smaltimento" )
            ->where( "giorni", "like", "%" . $giorno . "%" )
            ->orderBy( "orario", "asc" )
            ->get();

        ### Mostra un messaggio d'errore nel caso in cui non sia previsto ritiro alcuno
        $errore = "";
        if ( count( $raccolta ) == 0 ) {
            $errore = "$giorno non è previsto il ritiro di alcun tipo di pattume";
        }
        return view( "raccolta_odierna" )
            ->with( "raccolta", $raccolta )
            ->with( "errore", $errore );
    }

    public function raccoltaPerMateriale( $materiale ) {
        ### Query builder
        $raccolta = Raccolta::select( "id as N.", "giorni as Giorni di raccolta", "orario as Fasce orarie", "istruzioni as Istruzioni per lo smaltimento" )
            ->where( "rifiuto", "like", "%" . $materiale . "%" )
            ->get();

        ### Mostra un messaggio d'errore nel caso in cui non sia previsto ritiro alcuno
        $errore = "";
        if ( count( $raccolta ) == 0 ) {
            $errore = "Non esiste alcun giorno in cui è previsto il ritiro di $materiale";
        }

        return view( "raccolta_materiale" )
            ->with( "raccolta", $raccolta )
            ->with( "errore", $errore );
    }
}
