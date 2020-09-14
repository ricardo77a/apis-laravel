<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmpleadoRequest;
use App\Empleado;

class EmpleadosController extends Controller
{

    public function index()
    {
        $empleados = Empleado::get();
        return response()->json($empleados);
    }

    public function store(EmpleadoRequest $request)
    {
        $empleado = new Empleado($request->all());
        $empleado->save();
        return response()->json($empleado);
    }

    public function show($id)
    {
        $empleado = Empleado::Find($id);
        return response()->json($empleado);
    }

    public function update(EmpleadoRequest $request, $id)
    {
        $empleado = Empleado::Find($id);
        $empleado->update($request->all());
        return response()->json($empleado);      
    }

    public function destroy($id)
    {
        $empleado = Empleado::Find($id);
        $empleado->delete();
        return response()->json($empleado);
    }
}
