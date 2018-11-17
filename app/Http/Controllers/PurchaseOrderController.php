<?php

namespace App\Http\Controllers;

use App\PurchaseOrder;
use Illuminate\Http\Request;

use App\Http\Requests;

class PurchaseOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PO=PurchaseOrder::all();
        return view('purchaseOrders.index',compact('PO'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purchaseOrders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $PO = new PurchaseOrder();
        $PO->no=$request ->get('no');
        $PO->amount=$request ->get('amount');
        $PO->quantity=$request ->get('quantity');
        $date=date_create($request ->get('date'));
        $format = date_format($date,"Y-m-d");
        $PO->date=strtotime($format);
        $PO->save();

        return redirect('/purchaseOrders/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $PO = PurchaseOrder::findOrFail($id);
        return view('purchaseOrders.show', compact('PO'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $PO = PurchaseOrder::findOrFail($id);
        return view('purchaseOrders.edit', compact('PO'));
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
        $PO= PurchaseOrder::findorFail($id);
        $PO->no=$request->get('no');
        $PO->amount=$request->get('amount');
        $PO->quantity=$request->get('quantity');
        $date=date_create($request ->get('date'));
        $format = date_format($date,"Y-m-d");
        $PO->date=strtotime($format);
        $PO->save();
        return redirect('/purchaseOrders/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $PO = PurchaseOrder::findorFail($id);
        $PO->delete();
        return redirect('/purchaseOrders/')->with('success','Information has been  deleted');
    }
}
