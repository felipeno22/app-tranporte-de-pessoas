<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    //
    //
       //
    public function create(Request $r){

        $new_veiculo=['title' => 'Fiat',
                        'placa'=>'ghy-0954',
                        'situation'=>'Ativo',
                        'modelo'=>'Uno',
                        'ano'=>'2006/2006'];

                        $veiculo=new Veiculo($new_Veiculo);
                        $veiculo->save();//salvando no banco
                        dd($veiculo);


    }

    public function read(Request $r){

        $veiculo= new Veiculo();

       // $veiculos=$veiculo->all();//lista todos

       // $veiculos=$veiculo->find(1);//sempre pega pela chave primária

         $veiculos=$veiculo->where('id',1);//sempre pega pela chave primária

            dd($veiculos);
    }



      public function readAll(Request $r){

        $veiculos=Veiculo::all();




        return $veiculos;
    }


     public function update(Request $r){

      //  $veiculo=Motorista::find(2);

        //$veiculo->name="Maria José";

        //$veiculo->save();
        
        $veiculo=Veiculo::where('id','=','2')->update([

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


        return $veiculo;
    }


    public function delete(Request $r){

        $vei= new Veiculo();

       $excluindo= $vei->find(6);
       if($excluindo){
           return $excluindo->delete();

       }else{
        return 'ja foi excluido';
       }
        
    }


}
