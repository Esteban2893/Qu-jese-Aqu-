<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queja;
use App\Entidad;

class GraficasController extends Controller
{

     public function total_quejas(){

        $quejas = Queja::where('available', true)->get();
        $arrayCantidad =  array();
        $entidades = Entidad::all();
        foreach ($entidades as $entidad) {
            array_push ($arrayCantidad, array('name' =>$entidad->name, "entity_id" => $entidad->id, 'y'=> 0));
        }
        foreach ($quejas as $queja) {
                    $queja->entidad = Entidad::find($queja->entity_id);
                    $index = 0;
                    foreach ($arrayCantidad as $entidad) {
                                if($entidad['entity_id'] == $queja->entidad->id){
                                       $arrayCantidad[$index]['y'] += 1;     
                                }
                                $index +=1;
                            }
               }
        $arrayFinal=  array();
         foreach ($arrayCantidad as $entidad) {
            array_push ($arrayFinal, array('name' =>$entidad['name'], 'y'=>$entidad['y']));
        }
        return $arrayFinal;
    }
}
