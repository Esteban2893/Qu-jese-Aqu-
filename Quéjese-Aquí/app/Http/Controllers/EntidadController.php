<?php

namespace App\Http\Controllers;

class EntidadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {

    }

    public function create()
    {
        return view('entidad.create');
    }

    public function store(Request $request)
    {
        $entidad = Entidad::create($request->all());

        $entidad->save();

        return redirect()->route('entidad.index')
            ->with('info', Entidadcreada);
    }

    public function show($id)
    {

    }
}
