<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleados::all();
        return view('empleados/home')->with('empleados',$empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new Empleados();
        
        $empleados->Nombre = $request->get('nombre');
        $empleados->PaternoApellido = $request->get('apepaterno');
        $empleados->MaternoApellido = $request->get('apematerno');
        $empleados->AreaTrabajo = $request->get('area');
        $empleados->Correo = $request->get('correo');
        $empleados->Telefono = $request->get('telefono');
        
        $empleados->save();
        
        return redirect('/home');
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
        $empleado = Empleados::find($id);
        return view('empleados/edit')->with('empleado',$empleado);
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
        $empleado = Empleados::find($id);
        
        $empleado->Nombre = $request->get('nombre');
        $empleado->PaternoApellido = $request->get('apepaterno');
        $empleado->MaternoApellido = $request->get('apematerno');
        $empleado->AreaTrabajo = $request->get('area');
        $empleado->Correo = $request->get('correo');
        $empleado->Telefono = $request->get('telefono');
        
        $empleado->save();
        
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleados::find($id);
        $empleado->delete();
        return redirect('/home');
    }
}
