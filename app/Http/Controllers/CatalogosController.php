<?php

namespace App\Http\Controllers;

use App\Catalogo;
use App\Catalogo_producto;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;


class CatalogosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $catalogos = Catalogo::all();
      $productos=Producto::all();

      return view('catalogos',compact('catalogos','productos'));
      

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
          'nombre' => 'required|max:55',
        ]
      );
      if($validador->fails())
      {
        return redirect('/catalogo')->withInput()->withErrors($validador);
      }
   
    // Instancio al modelo Productos que hace llamado a la tabla 'productos' de la Base de Datos
    $productos = new Producto(); 
    $produc_catalog=new Catalogo_producto();
    if($request==$productos){
    
    //$produc_catalog->id_producto=$request->id_producto;
    //$produc_catalog->id_catalogo=$request->id_catalogo;
    
    $productos->nombre = $request->nombre;
    $productos->descripcion=$request->descripcion;
    $productos->precio = $request->precio;
    $productos->disponibilidad=$request->disponibilidad;
 
   // Almacenos la imagen en la carpeta publica especifica, esto lo veremos más adelante 
    $productos->img = $request->img;
 
    // Inserto todos los datos en mi tabla 'jugos' 
    $productos->save();

    }else{


      $catalogo = new Catalogo();
      $catalogo->nombre = $request->nombre;
      $catalogo->descripcion=$request->descripcion;
      $catalogo->img=$request->img;
      
      //$catalogo->img = $request->file('img')->store('/');
 
    // Inserto todos los datos en mi tabla 'jugos' 
    $catalogo->save();
}
    // Hago una redirección a la vista principal con un mensaje 
    return redirect('/catalogo')->with('message','Guardado Satisfactoriamente !');
    
    


    }
    public function store2(Request $request)
    {
        
        $validador = Validator::make($request->all(), 
        [
          'nombre' => 'required|max:55',
        ]
      );
      if($validador->fails())
      {
        return redirect('/catalogo')->withInput()->withErrors($validador);
      }
   
    // Instancio al modelo Productos que hace llamado a la tabla 'productos' de la Base de Datos
    $productos = new Producto(); 
    $produc_catalog=new Catalogo_producto();
    $catalogos = new Catalogo();
 
   
    
    
    $productos->nombre = $request->nombre;
    $productos->descripcion=$request->descripcion;
    $productos->precio = $request->precio;
    $productos->disponibilidad=$request->disponibilidad;
 
   // Almacenos la imagen en la carpeta publica especifica, esto lo veremos más adelante 
    $productos->img = $request->img;
     
    // Inserto todos los datos en mi tabla 'jugos' 
    $productos->save();
    $produc_catalog->id_producto=$productos->id;
    $produc_catalog->id_catalogo=$request->id;
    $produc_catalog->save();
    // Hago una redirección a la vista principal con un mensaje 
    return redirect('/catalogo')->with('message','Guardado Satisfactoriamente !');
    
    


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function show(Catalogo $catalogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalogo $catalogo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalogo $catalogo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $catalogos = Catalogo::findOrFail($id);
        $catalogos->delete();
        return redirect('/catalogo');
    }

    public function destroy2($id)
    {
       $catalogo=new Catalogo();

      $produc_catalog=new Catalogo_producto();
     // $catalogos=Catalogo::find($id);
     $produc_catalog=Catalogo_producto::find($id);
        $productos = Producto::findOrFail($id);
        //User::find(1)->roles()->detach();
        $produc_catalog->productos()->detach();
        //Catalogo::find($id)->productos()->detach();
       // $catalogos->productos()->detach($id);
        $productos->delete();
       
        return redirect('/catalogo');
    }
}
