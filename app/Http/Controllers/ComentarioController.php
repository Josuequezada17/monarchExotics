<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //LISTADO 
    {
        $comentarios = Comentario::all();
        return view('comentario.indexComentario', compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comentario.createComentario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => ['required', 'string', 'max:255'],
            'correo' => 'required|email',
            'telefono' => 'required|min:10|',
            'comentario' => 'required|string|min:10',
            'ciudad' => 'required',
        ]);

        //Guardar datos
        $comentario = new Comentario();
        $comentario->nombre = $request->nombre;
        $comentario->correo = $request->correo;
        $comentario->telefono = $request->telefono;
        $comentario->comentario = $request->comentario;
        $comentario->ciudad = $request->ciudad;
        $comentario->save();

        //Redirección a lista de comentarios
        return redirect()->route('comentario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentario $comentario)
    {
        if ($comentario) { //Preguntar al maestro como hacer una validación para cuando no este el comentario
            return view('comentario.showComentario', compact('comentario'));
        } else {
            return redirect()->route('comentario.index');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentario $comentario)
    {
        return view('comentario.editComentario', compact('comentario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentario $comentario)
    {

        $request -> validate([
            'nombre' => ['required', 'string', 'max:255'],
            'correo' => 'required|email',
            'telefono' => 'required|min:10|',
            'comentario' => 'required|string|min:10',
            'ciudad' => 'required',
        ]);

        $comentario->nombre = $request->nombre;
        $comentario->correo = $request->correo;
        $comentario->telefono = $request->telefono;
        $comentario->comentario = $request->comentario;
        $comentario->ciudad = $request->ciudad;
        $comentario->save();

        //Redirección al listado de comentarios
        return redirect()->route('comentario.show', $comentario->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentario $comentario)
    {
        $comentario->delete();
        return redirect()->route('comentario.index');
    }
}
