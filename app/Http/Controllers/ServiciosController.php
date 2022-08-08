<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use App\Models\User;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicios::all();
        return view('servicios.index',compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:30',
            'descripcion' => 'required|max:50',
            'precio1' => 'required|numeric',
            'precio2' => 'required|numeric',
            'precio3' => 'required|numeric',
        ]);
        
            $servicios = Servicios::create([
            'nombre' =>$request->nombre,
            'descripcion'=> $request->descripcion,
            'precioA' => $request->precio1,
            'precioB' => $request->precio2,
            'precioC' => $request->precio3,
        ]); 

        return redirect()-> route('servicios.index')->with('agregado','El dato fue agregado correctamente'); 
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

        $servicios = Servicios::find($id);
        return view('servicios.edit',compact('servicios'));
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
       
      
        $request->validate([
            'nombre' => 'required|max:30',
            'descripcion' => 'required|max:50',
            'precio1' => 'required|numeric',
            'precio2' => 'required|numeric',
            'precio3' => 'required|numeric',
        ]);
        
        $servicios =Servicios::find($id);
        $servicios->nombre = $request->nombre;
        $servicios->descripcion = $request->descripcion;
        $servicios->precioA = $request->precio1;
        $servicios->precioB = $request->precio2;
        $servicios->precioC = $request->precio3;
        $servicios->SAVE();

        return Redirect()->route('servicios.index')->with('editado','El dato fue editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicios = Servicios::find($id);
        $servicios ->delete();
        return Redirect()->route('servicios.index')->with('eliminado','El dato fue eliminado correctamente');
    }
}
