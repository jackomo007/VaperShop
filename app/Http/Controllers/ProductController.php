<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        return view('admin.producto',['user' => $user]);
    }

    public function table()
    {
        $product = new Product();

        $all = $product->list();
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
            'title' => 'required|min:2|',
            'pricing' => 'required',
        ]);

        $pricing = str_replace(".","",$request->pricing);
        $pricing = str_replace(",",".",$pricing);

        Product::create([
            'title' => $request->title,
            'description' => $request->product_description,
            'pricing' => $pricing,
            'sub_category_id' => $request->sub_category_id,
        ]);

        return back()->with('success-product', 'Producto registrado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $pricing = str_replace(".","",$request->e_pricing);
        $pricing = str_replace(",",".",$pricing);

        Product::where('id',$request->e_pro_id)->update([
            'title' => $request->e_title,
            'description' => $request->e_product_description,
            'pricing' => $pricing,
            'sub_category_id' => $request->e_sub_category_id,
        ]);

        return back()->with('success-product', 'Producto actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Product::where('id', $request->id)->delete();
        return 200;
    }
}
