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
        $productdetail = ProductDetail::all();
        return view('productdetails.create', compact('productdetail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ProductDetail::create($request->all());
        $ProductDetail = ProductDetail::findOrFail($request->type);
        $ProductDetail->pr_id=$request ->pr_id;
        $ProductDetail->grn_id=$request ->grn_id;
        $ProductDetail->v_id=$request ->v_id;
        $ProductDetail->code=$request ->code;
        $ProductDetail->description=$request ->description;
        $ProductDetail->model=$request ->model;
        $ProductDetail->color=$request ->color;
        $ProductDetail->qty=$request ->qty;
        $ProductDetail->warranty=$request ->warranty;
        $ProductDetail->warranty_status=$request ->warranty_status;
        $ProductDetail->min_qty=$request ->min_qty;
        $ProductDetail->max_qty=$request ->max_qty;
        $ProductDetail->purchase_price=$request ->purchase_price;
        $ProductDetail->selling_price=$request ->selling_price;
        $ProductDetail->discount=$request ->discount;
        $ProductDetail->discounted_price=$request ->discounted_price;

        $ProductDetail->save();
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
        return view('productdetails.edit',compact('ProductDetail'));
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
        $ProductDetail->code=$request ->code;
        $ProductDetail->description=$request ->description;
        $ProductDetail->model=$request ->model;
        $ProductDetail->color=$request ->color;
        $ProductDetail->qty=$request ->qty;
        $ProductDetail->warranty=$request ->warranty;
        $ProductDetail->warranty_status=$request ->warranty_status;
        $ProductDetail->min_qty=$request ->min_qty;
        $ProductDetail->max_qty=$request ->max_qty;
        $ProductDetail->purchase_price=$request ->purchase_price;
        $ProductDetail->selling_price=$request ->selling_price;
        $ProductDetail->discount=$request ->discount;
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




