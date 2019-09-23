<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Show the view to manage the resource
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

        $product = Product::create([
            'title' => $request->title,
            'description' => $request->product_description,
            'pricing' => $pricing,
            'sub_category_id' => $request->sub_category_id,
        ]);

        Stock::create([
            'quantity' => $request->quantity,
            'product_id' => $product->id,
        ]);

        if ($request->hasFile('imagen_producto')) {
            $file = $request->file('imagen_producto');
            $image = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/productos/', $image);

            DB::table('images')->insert(['image' => $image, 'product_id' => $product->id]);
        } else {
            $image = "producto.jpg";
            DB::table('images')->insert(['image' => $image, 'product_id' => $product->id]);
        }

        return back()->with('success-product', 'Producto registrado con exito');
    }

    /**
     * Display a list of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = Product::paginate(12);
        $user = auth()->user();
        $categories = Category::get();
        return view('productos.index',['user' => $user, 'products' => $products, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
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
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Product::where('id', $request->id)->delete();
        return 200;
    }

    public function productImage(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        return $product->imageProduct;
    }

    public function filter($filter) 
    {
        $products = Product::where('sub_category_id', $filter)->paginate(12);
        $user = auth()->user();
        $categories = Category::get();
        return view('productos.index',['user' => $user, 'products' => $products, 'categories' => $categories]);
    }

     public function search(Request $request) 
    {
        $products = Product::where('description', 'like', '%' . $request->search. '%' )->paginate(12);
        $user = auth()->user();
        $categories = Category::get();
        return view('productos.index',['user' => $user, 'products' => $products, 'categories' => $categories]);
    }
}
