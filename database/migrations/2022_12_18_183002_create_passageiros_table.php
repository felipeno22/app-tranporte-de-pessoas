<?php

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
        Schema::create('passageiros', function (Blueprint $table) {
            $table->id();
             $table->string('name');
            $table->string('cpf');
            $table->string('rg');
            $table->string('date_born');
            $table->string('phone');
            $table->string('email');
            $table->string('zipcode');
            $table->text('address');
            $table->string('number');
            $table->string('complement');
            $table->string('city');
            $table->string('state');
            $table->string('situation');
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
        Schema::dropIfExists('passageiros');
    }
};
