<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $inv = Invoice::all();
        return view('invoices.index',compact('inv',  'products'  ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $inv = Invoice::all();
        return view('invoices.create',compact('inv','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        $inv = new Invoice();
        $inv->no = $request->no;
        $inv->qty = $request->qty;
        $inv->item_code = $request->item_code;
        $inv->total_amount= $request->total_amount;
        $inv->date =$request->date;
        $inv->save();

        $item_code[] = Array();
        $total_amount[]= Array();
        $qty[] = Array();

        $count = 0;

        foreach($request->code as $a)
        {
            $item_code[]=$a;
            $count++;
        }
        for ($i = 0; $i < $count; $i++) {

            $total_amount[$i] = $request->total_amount[$i];
            $qty[$i] = $request->qty[$i];
        }



        DB::commit();
        $inv=Invoice::all();
        return redirect('/invoices/',compact('inv' ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inv = Invoice::findOrFail($id);
        return view('invoices.show',compact('inv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inv = Invoice::findOrFail($id);
        return view('invoices.show',compact('inv'));
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
      $inv=  Invoice::findOrFail($id);
        $inv->no = $request->no;
        $inv->total_amount= $request->total_amount;
        $inv->item_code = $request->item_code;
        $inv->date =$request->date;
   ;

        $inv->save();
        return redirect('/invoices/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$inv = Invoice::findorFail($id);
          $inv->delete();
          return redirect('invoices')->with('success','Information has been  deleted');
      */
    }
}
