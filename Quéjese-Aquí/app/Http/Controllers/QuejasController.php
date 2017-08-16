<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queja;
use App\Entidad;
use App\User;
use Auth;

class QuejasController extends Controller
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
        $user = User::find(Auth::User()->id);
        $quejas = $user->quejas()->paginate(5);
         foreach ($quejas as $queja) {
            $queja->entidad = Entidad::find($queja->entity_id);
        }
        return view('quejas/index', ['quejas' => $quejas]);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entidades = Entidad::all();
        return View('quejas/create' , ['entidades' => $entidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $queja = Queja::create($request->all());
        $queja->user_id = Auth::User()->id;
        $user = User::find($queja->user_id);
        $queja->available = false;
        $queja->save();
        Session::flash('success', 'Queja creada');
        return redirect('/quejas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
