<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductDetail;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin', 'user']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productdetail = ProductDetail::all();
        return view('productdetails.index',compact('productdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('productdetails.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ProductDetail = new ProductDetail();

        $ProductDetail->pr_id = $request->product;
        $ProductDetail->grn_id = 1;

        $ProductDetail->qty = $request->qty;
        $ProductDetail->rem_qty = $request->rem_qty;
        $ProductDetail->sold_qty = $request->sold_qty;
        $ProductDetail->warranty = $request->warranty;
        if ($request->warranty_status == null) {
            $ProductDetail->warranty_status = 0;
        } else {
            $ProductDetail->warranty_status = $request->warranty_status;
        }
        $ProductDetail->purchase_price = $request->purchase_price;
        if ($request->discount == null) {
            $ProductDetail->discount = 0;
        } else {
            $ProductDetail->discount = $request->discount;
        }

        $ProductDetail->save();
        return redirect('/productdetails');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ProductDetail = ProductDetail::findOrFail($id);
        return view('productdetails.show',compact('ProductDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ProductDetail = ProductDetail::findOrFail($id);
        $products = Product::all();
        return view('productdetails.edit', compact('ProductDetail', 'products'));
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
        $ProductDetail = ProductDetail::find($id);


        $ProductDetail->warranty = $request->warranty;
        if ($request->warranty_status == null) {
            $ProductDetail->warranty_status = 0;
        } else {
            $ProductDetail->warranty_status = $request->warranty_status;
        }

        if ($request->discount == null) {
            $ProductDetail->discount = 0;
        } else {
            $ProductDetail->discount = $request->discount;
        }


        $ProductDetail->save();
        return redirect('/productdetails');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$ProductDetail::findOrFail($id)->delete();
        echo "Not Implemented !";
        return redirect('/productdetails');

    }
}




