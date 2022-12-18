<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*link aprenda a usar envio de form com laravel
https://satellasoft.com/artigo/php/recebendo-requisicoes-de-formulario-com-o-laravel#:~:text=Assim%20que%20a%20gente%20enviar%20o%20formul%C3%A1rio%2C%20o,%C3%A9%20um%20m%C3%A9todo%20padr%C3%A3o%20de%20prote%C3%A7%C3%A3o%20dos%20formul%C3%A1rio.
*/

class siteController extends Controller
{
    public function index(){
        //$msg="deu certo!!!";
        return view("layout");
    }
}
