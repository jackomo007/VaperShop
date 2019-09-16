<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_category = new SubCategory;

        $all = $sub_category->list();

        return $all;
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
            'sub_cat_name' => 'required|min:2|',
        ]);

        SubCategory::create([
            'name' => $request->sub_cat_name,
            'description' => $request->sub_cat_description,
            'category_id' => $request->category_id,
        ]);

        return back()->with('success', 'Sub Categoria registrada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         SubCategory::where('id',$request->e_sub_cat_id)->update([
            'name' => $request->e_sub_cat_name,
            'description' => $request->e_sub_cat_description,
            'category_id' => $request->e_sub_cat_category_id,
        ]);

        return back()->with('success', 'Sub categoria actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        SubCategory::where('id', $request->id)->delete();
        return 200;
    }
}
