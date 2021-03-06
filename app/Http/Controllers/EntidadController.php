<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidad;
use Session;
use App\Http\Requests\EntidadRequest;


class EntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $entidades = Entidad::paginate(6);
        return view('entidad/index', ['entidades' => $entidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('entidad/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntidadRequest $request)
    {
        $entidad = new Entidad;

        $entidad->name = $request->name;
        $entidad->address = $request->address;
        $entidad->phone_number = $request->phone_number;
        $entidad->website = $request->website;
        $entidad->email = $request->email;
        $entidad->save();
        Session::flash('success', 'Entidad creada exitosamente');
        return redirect('entidades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entidad = Entidad::find($id);
        return view('entidad.edit', ['entidad' => $entidad]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EntidadRequest $request, $id)
    {
        $entidad = Entidad::find($id);
        $entidad->fill($request->all());
        $entidad->save();
        Session::flash('success', 'Entidad editada exitosamente');
        return redirect('entidades');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entidad = Entidad::find($id);
        $entidad->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }
}
