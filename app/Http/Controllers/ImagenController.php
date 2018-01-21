<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagen;
use Illuminate\Support\Facades\Response;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagen= Imagen::all();
        $response = Response::json($imagen,200);
        return $response;

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
        if ((!$request->titulo) || (!$request->thumbnail) || (!$request->link)) {
            $response = Response::json(['message' => 'Todos los campos son requeridos'],422);
            return $response;
        }

        $imagen = new Imagen(array(
            //'titulo','descripcion','thumbnail','link','user_id'
            'titulo'=> trim($request->titulo),
            'descripcion' => trim($request->descripcion),
            'thumbnail' => trim($request->thumbnail),
            'link'=> trim($request->link),            
            'user_id' =>  1
        ));
        $imagen->save();
        $message = 'Agregado Correctamente';
        $response = Response::json([
            'message'=>$message,
            'data'=>$imagen,
        ],201);
        return $response;
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
