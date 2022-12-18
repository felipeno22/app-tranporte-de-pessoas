<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motorista;

class MotoristaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {//exibe os dados
        $motoristas=Motorista::all();




        return $motoristas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        


        //no futuro vai so exibir o form
//cadastrando os dados
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
                        //dd($motorista);


                        return $motorista;



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //no futuro receba um post com um novo recurso
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $motorista= new Motorista();

       // $motoristas=$motorista->all();//lista todos

       // $motoristas=$motorista->find(1);//sempre pega pela chave primária

         $motoristas=$motorista->where('id',$id);//sempre pega pela chave primária

            dd($motoristas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            //futuramente vai receber o form de ediçao
        $motorista=Motorista::where('id','=',$id)->update([

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*

             $motorista=Motorista::where('id','=',$id)->update([

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







        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $mot= new Motorista();

       $excluindo= $mot->find($id);
       if($excluindo){
           return $excluindo->delete();

       }else{
        return 'ja foi excluido';
       }
        
    }
}
