<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use DB;
use Log;

class ResultadosController extends Controller
{
    public function searchcategorias(){

    $cate = \Input::get('categorias');

    //$separation = implode("  |  ", $cate);
    //echo $separation;

    // $ce = DB::table('categorias_ejemplo') -> whereIn('id_categorias', $cate)->get();
    // print_r($ce);
    $ce = $cate[0] * 5;//Esta deberia ser informacion de su base de datos

    $xres="<div>el resultado de ";
    $buf=0;
    for($x=0;$x<count($cate);$x++)
    {
        $xres.="(".$cate[$x]." x 5) ";
        if($x!=count($cate)-1){
           $xres.=" + "; 
        }
        $buf += ($cate[$x]*5);
    }
    $xres.=" = <i>".$buf."</i></div>";

    //.$cate[0]." x 5 = <i>".$ce."</i><div>";

    //$separation = implode("  |  ", $ce);
    //echo $separation;

    return $xres;
	}
}
