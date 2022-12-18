<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passageiro;

class PassageiroController extends Controller
{
    //
       //
    public function create(Request $r){

        $new_passageiro=['name' => 'Willian José',
                        'cpf'=>'045.567.789-56',
                        'rg'=>'456.456.677',
                        'date_born'=>'02/02/1990',
                        'phone'=>'(72)9675-4544',
                        'email'=>'willian2023@gmail.com',
                        'zipcode'=>'74567-123',
                        'address'=>'rua das mangas - centro',
                        'number'=>'455',
                        'complement'=> 'casa',
                        'city'=>'São Paulo',
                        'state'=>'São Paulo',
                        'situation'=>'Ativo'];

                        $passageiro=new Passageiro($new_passageiro);
                        $passageiro->save();//salvando no banco
                        dd($passageiro);


    }

    public function read(Request $r){

        $passageiro= new Passageiro();

       // $passageiros=$passageiro->all();//lista todos

       // $passageiros=$passageiro->find(1);//sempre pega pela chave primária

         $passageiros=$passageiro->where('id',1);//sempre pega pela chave primária

            dd($passageiros);
    }



      public function readAll(Request $r){

        $passageiros=Passageiro::all();




        return $passageiros;
    }


     public function update(Request $r){

      //  $passageiro=Motorista::find(2);

        //$passageiro->name="Maria José";

        //$passageiro->save();
        
        $passageiro=Passageiro::where('id','=','2')->update([

                'name' => 'Maria José',
                        'cpf'=>'021.890.111-23',
                        'rg'=>'102.477.999',
                        'date_born'=>'12/04/1960',
                        'phone'=>'(21)4455-7544',
                        'email'=>'maria2023@gmail.com',
                        'zipcode'=>'72335-156',
                        'address'=>'rua abroche /Bairro Marquize',
                        'number'=>'2234',
                        'complement'=> 'casa',
                        'city'=>'São Paulo',
                        'state'=>'São Paulo',
                        'situation'=>'Cancelado'
        ]);


        return $passageiro;
    }


    public function delete(Request $r){

        $pass= new Passageiro();

       $excluindo= $pass->find(6);
       if($excluindo){
           return $excluindo->delete();

       }else{
        return 'ja foi excluido';
       }
        
    }




}
