<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Rules\CategoriaExistente;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = new Category;

        $all = $category->list();

        return $all != false  ? $all : [];
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
        $this->validate($request, [
            'name' => 'required|min:2|',
            'name' => new CategoriaExistente,
        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return back()->with('success-category', 'Categoria registrada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         Category::where('id',$request->cat_id)->update([
                'name' => $request->cat_name,
                'description' => $request->cat_description,
            ]);

            return back()->with('success-category', 'Categoria actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Category::where('id', $request->id)->delete();
        return 200;
    }

     public function all()
    {
        $category =Category::get();

        return $category;
    }
}
