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

/*
i. Nome; 
ii. CPF; 
iii. RG; 
iv. Data de Nascimento; 
v. Telefone; 
vi. E-mail; 
vii. CEP;
viii. Endereço; 
ix. Número; 
x. Complemento; 
xi. Estado; 
xii. Cidade; 
xiii. Situação: 
1. Ativo; 
2. Inativo; 
3. Bloqueado; 
4. Cancelado; 


*/

        Schema::create('motoristas', function (Blueprint $table) {
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
        Schema::dropIfExists('motorista');
    }
};
