<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidad;
use App\Http\Requests\EntidadRequest;

class EntidadController extends Controller
{
 

    public function index()
    {
        return View("welcome");
    }

    public function create()
    {
        return View('entidad.create');
    }

    public function store(EntidadRequest $request)
    {
        $entidad = Entidad::create($request->all());
        $entidad->save();
        return redirect()->route('welcome');
            
    }

    public function show($id)
    {

    }
}
