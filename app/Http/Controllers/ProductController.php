<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\ProductCategories;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['only' => 'delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('code')->get();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productCategories = ProductCategories::all();
        $brands = Brand::all();
        return view('products.create', compact('productCategories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        Product::create($request->all());
//        return redirect('/product');

        $product = new Product();
        $product->type_id = $request->type;
        $product->brand_id = $request->brand_id;
        $product->code = $product->type->code . "-" . $product->brand->code . "-" . $request->model;
        $product->name = $request->name;

        $product->description = $request->description;
        $product->model = $request->model;
        $product->color = $request->color;
        $product->min_qty = $request->min_qty;
        $product->max_qty = $request->max_qty;
        $product->selling_price = $request->selling_price;
        $product->discounted_price = $request->discounted_price;

        $product->save();
        return redirect('/products/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product'));
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
        $product = Product::findOrFail($id);
        $product = new Product();

        $product->description = $request->description;
        $product->color = $request->color;
        $product->selling_price = $request->selling_price;
        $product->discounted_price = $request->discounted_price;
        $product->name = $request->name;
        $product->selling_price = $request->selling_price;

        $product->save();
        return redirect('/products/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Product::find($id)->delete();
        return redirect('/products/');

    }
}








