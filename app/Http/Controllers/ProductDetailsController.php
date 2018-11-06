<?php

namespace App\Http\Controllers;

use App\ProductDetail;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductDetailsController extends Controller
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
        return view('productdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProductDetail::create($request->all());
        return redirect('/ProductDetails');
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
        return view('productdetails.show',compact('productdetail'));
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
        return view('productdetails.edit',compact('productdetail'));
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
        $ProductDetail->pr_id=$request ->pr_id;
        $ProductDetail->grn_id=$request ->grn_id;
        $ProductDetail->v_id=$request ->v_id;
        $ProductDetail->qty=$request ->qty;
        $ProductDetail->sold=$request ->sold;
        $ProductDetail->remaining=$request ->remaining;
        $ProductDetail->purchase_price=$request ->purchase_price;
        $ProductDetail->selling_price=$request ->selling_price;
        $ProductDetail->discounted_price=$request ->discounted_price;

        $ProductDetail->save();
        return redirect('/ProductDetails/');
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
        return redirect('/ProductDetails/');

    }
}




