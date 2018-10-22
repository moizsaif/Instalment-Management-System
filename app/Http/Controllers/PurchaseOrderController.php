<?php

namespace App\Http\Controllers;

use App\PurchaseOrder;
use Illuminate\Http\Request;

use App\Http\Requests;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PO=\App\PurchaseOrder::all();
        return view('home',compact('PurchaseOrder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $PO=new \App\PurchaseOrder;
        $PO->no=$request ->get('no');
        $PO->amount=$request ->get('amount');
        $PO->quantity=$request ->get('quantity');
        $date=date_create($request ->get('date'));
        $format = date_format($date,"Y-m-d");
        $PO->date=strtotime($format);
        $PO->save();

        return redirect('PurchaseOrder')->with('success','information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit');
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
        $PO= \App\PurchaseOrder::find($id);
        $PO->no=$request->get('no');
        $PO->amount=$request->get('amount');
        $PO->quantity=$request->get('quantity');
        $PO->save();
        return redirect('PurchaseOrder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $PO = \App\PurchaseOrder::find($id);
        $PO->delete();
        return redirect('PurchaseOrder')->with('success','Information has been  deleted');
    }
}
