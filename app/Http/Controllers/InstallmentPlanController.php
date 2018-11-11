<?php

namespace App\Http\Controllers;

use App\InstallmentPlan;
use App\Product;
use App\ProductDetail;
use Illuminate\Http\Request;

use App\Http\Requests;
use PhpParser\Node\Expr\Array_;

class InstallmentPlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $installments = InstallmentPlan::all();
        return view('installments.index',compact('installments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = ProductDetail::all();
        return view('installments.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return view('installments.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $installment = InstallmentPlan::findOrFail($id);
        return view('installments.show',compact('installment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $installment = InstallmentPlan::findOrFail($id);
        return view('installments.edit',compact('installment'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "Not Implemented !";
        return redirect('/installments/');
    }
}
