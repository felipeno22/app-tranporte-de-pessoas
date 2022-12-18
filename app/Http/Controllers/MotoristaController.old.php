<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motorista;

class MotoristaController extends Controller
{
    //
    public function create(Request $r){

        $new_motorista=['name' => 'Willian José',
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

                        $motorista=new Motorista($new_motorista);
                        $motorista->save();//salvando no banco
                        dd($motorista);


    }

    public function read(Request $r){

        $motorista= new Motorista();

       // $motoristas=$motorista->all();//lista todos

       // $motoristas=$motorista->find(1);//sempre pega pela chave primária

         $motoristas=$motorista->where('id',1);//sempre pega pela chave primária

            dd($motoristas);
    }



      public function readAll(Request $r){

        $motoristas=Motorista::all();




        return $motoristas;
    }


     public function update(Request $r){

      //  $motorista=Motorista::find(2);

        //$motorista->name="Maria José";

        //$motorista->save();
        
        $motorista=Motorista::where('id','=','2')->update([

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


        return $motorista;
    }


    public function delete(Request $r){

        $mot= new Motorista();

       $excluindo= $mot->find(6);
       if($excluindo){
           return $excluindo->delete();

       }else{
        return 'ja foi excluido';
       }
        
    }






}
