<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReservaToVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendas', function (Blueprint $table) {
            $table->dropColumn('online');
            $table->dropColumn('divulgacao');
        });

        Schema::table('saidas', function (Blueprint $table) {
            $table->boolean('reserva')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendas', function (Blueprint $table) {
            $table->boolean('online');
            $table->boolean('divulgacao');
        });

        Schema::table('saidas', function (Blueprint $table) {
            $table->dropColumn('reserva');
        });
    }
}
