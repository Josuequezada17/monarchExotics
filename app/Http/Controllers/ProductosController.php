<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::all();
        return view('productos.indexProductos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.createProducto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'modelo' => ['required', 'string', 'max:255'],
            'marca' => ['required', 'string', 'max:255'],
            'traccion' => 'required',
            'motor' => ['required', 'string', 'max:255'],
            'potencia' => 'required|int|min:10|max:2000',
            'velocidad_maxima' => 'required|int|min:10|max:2000',
            'torque' => 'required',
            'precio' => 'required',
            'year' => 'required',
            'descripcion' => 'required|string|min:10',

        ]);

        //Guardar datos
        $productos = new Productos();
        $productos->modelo = $request->modelo;
        $productos->marca = $request->marca;
        $productos->traccion = $request->traccion;
        $productos->motor = $request->motor;
        $productos->potencia = $request->potencia;
        $productos->torque = $request->torque;
        $productos->velocidad_maxima = $request->velocidad_maxima;
        $productos->precio = $request->precio;
        $productos->year = $request->year;
        $productos->descripcion = $request->descripcion;        
        $productos->save();

        //Redirección a lista de productos
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $productos)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $productos)
    {
        //
    }
}
