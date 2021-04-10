<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaccoltasTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'raccoltas', function ( Blueprint $table ) {
            $table->id();
            $table->string( "rifiuto" );
            $table->string( "istruzioni" );
            $table->string( "giorni" );
            $table->string( "orario" );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'raccoltas' );
    }
}
