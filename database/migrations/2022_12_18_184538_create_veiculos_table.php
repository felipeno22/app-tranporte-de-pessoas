<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Passageiro;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


/*
Veículos 
i. Vincular ao Passageiro; 
ii. Placa (UNIQUE); 
iii. Ano/Modelo; 
iv. Título; 
v. Situação 
1. Ativo 
2. Inativ



*/



    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('placa')->unique();
            $table->string('situation');
            $table->string('modelo');
            $table->string('ano');
            $table->foreignIdFor(Passageiro::class)->references('id')->on('passageiros')->onDelete('CASCADE');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('veiculos', function(Blueprint $table){
                $table->dropForeignIdFor(Passageiro::class);

        });
        Schema::dropIfExists('veiculos');
    }
};
