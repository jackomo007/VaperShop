<?php

namespace App\Http\Controllers;

use App\Carrousel;
use Illuminate\Http\Request;

class CarrouselController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        return view('admin.carrousel',['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $total = Carrousel::count();
        
        if(5 <= $total){
            return back()->with('error-carrousel', 'Solo se pueden guardar hasta 5 imagenes maximo, intente actualizando una ya existente.');           
        }

        $file = $request->file('imagen');
        $image = time() . $file->getClientOriginalName();
        $file->move(public_path() . '/images/carrousel/', $image);

        Carrousel::create([
            'image' => $image,
            'description' => $request->description
        ]);

        return back()->with('success-carrousel', 'Imagen registrada con exito');
    }

    public function table()
    {
        $carrousel = new Carrousel();

        $all = $carrousel->list();
        return $all != false  ? $all : [];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrousel  $carrousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $file = $request->file('e_imagen');
        $image = time() . $file->getClientOriginalName();
        $file->move(public_path() . '/images/carrousel/', $image);

        Carrousel::where('id',$request->car_id)->update([
            'description' => $request->e_description,
            'image' => $image
        ]);

        return back()->with('success-carrousel', 'Imagen actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Carrousel::where('id', $request->id)->delete();
        return 200;
    }

     public function all()
    {
        $carrousel =Carrousel::get();

        return $carrousel;
    }
}
