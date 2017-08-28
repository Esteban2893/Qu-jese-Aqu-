<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Queja;
use App\Entidad;
/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
            
    public function __construct()
    {
        
       //$this->middleware('auth', ['except' => 'vistaPrincipal']);
        $this->middleware('auth', ['only' => ['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('adminlte::home');
    }

    public function vistaPrincipal()
    {

        $quejas = Queja::where('available', true)
               ->orderBy('created_at', 'desc')
               ->paginate(2);
               foreach ($quejas as $queja) {
                    $queja->entidad = Entidad::find($queja->entity_id); 
                    $queja->User = $queja->user()->get();   
               }
        
        return view('welcome',compact('quejas'));
    }
}   