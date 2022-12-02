<?php

use App\Models\TiposDeUsuario;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tipos_de_usuarios', function (Blueprint $table) {
            TiposDeUsuario::create([
                'id' => 1,
                'tipo' => 'Administrador'
            ]);
            TiposDeUsuario::create([
                'id' => 2,
                'tipo' => 'Invitado'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipos_de_usuarios', function (Blueprint $table) {
            TiposDeUsuario::truncate();
        });
    }
};
