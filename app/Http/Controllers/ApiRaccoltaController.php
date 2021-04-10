<?php

namespace App\Http\Controllers;

use App\Models\Raccolta;

class ApiRaccoltaController extends Controller {
    public function index() {
        return Raccolta::select( 'giorni', 'orario', 'rifiuto', 'istruzioni' )
            ->get();
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
        $raccolta = Raccolta::select( "orario", "rifiuto", "istruzioni" )
            ->where( "giorni", "like", "%" . $giorno . "%" )
            ->orderBy( "orario", "asc" )
            ->get();

        ### Mostra un messaggio d'errore nel caso in cui non sia previsto ritiro alcuno
        if ( count( $raccolta ) == 0 ) {
            return [
                "Errore" => "$giorno non è previsto il ritiro di alcun tipo di pattume",
            ];
        }
        return $raccolta;
    }

    public function raccoltaPerMateriale( $materiale ) {
        ### Query builder
        $raccolta = Raccolta::select( "giorni", "orario", "istruzioni" )
            ->where( "rifiuto", "like", "%" . $materiale . "%" )
            ->get();

        ### Mostra un messaggio d'errore nel caso in cui non sia previsto ritiro alcuno
        if ( count( $raccolta ) == 0 ) {
            return [
                "Errore" => "Non esiste alcun giorno in cui è previsto il ritiro di $materiale",
            ];
        }

        return $raccolta;
    }
}
