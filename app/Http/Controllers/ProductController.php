<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
        $product->code=$request ->code;
        $product->discount=$request ->discount;
        $product->name=$request ->name;
        $product->description=$request ->description;
        $product->model=$request ->model;
        $product->color=$request ->color;
        $product->warranty=$request ->warranty;
        $product->warranty_status=$request->warranty_status=0;
        $product->min_qty=$request ->min_qty;
        $product->max_qty=$request ->max_qty;

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
        $product->code=$request ->code;
        $product->discount=$request ->discount;
        $product->name=$request ->name;
        $product->description=$request ->description;
        $product->model=$request ->model;
        $product->color=$request ->color;
        $product->warranty=$request ->warranty;
        $product->warranty_status=$request ->warranty_status;
        $product->min_warranty=$request ->min_qty;
        $product->max_warranty=$request ->max_qty;

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
        //$Product::findOrFail($id)->delete();
        echo "Not Implemented !";
        return redirect('/products/');

    }
}








