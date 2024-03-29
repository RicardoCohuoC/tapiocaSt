<?php

namespace App\Http\Controllers;

use App\Catalogo;
use App\Tarea;
use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;


class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sliders=Slider::all();
        $tareas = Tarea::all();
        $catalogos=Catalogo::all();
        return view('index', compact('tareas','sliders','catalogos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validador = Validator::make($request->all(), 
        [
          'nombre' => 'required|max:255',
        ]
      );
      if($validador->fails())
      {
        return redirect('/')->withInput()->withErrors($validador);
      }
      $tarea = new Tarea;
      $tarea->nombre = $request->nombre;
      $tarea->completado = 0;
      $tarea->save();
      return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->completado = 1;
        $tarea->save();
      
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
      $slider->delete();
      
      return redirect('/');
    }
}
