<?php

namespace App\Http\Controllers;

use App\Product;
use App\Gl_Account;
use App\PurchaseOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use PhpParser\Node\Expr\Array_;

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
        $accounts = Gl_Account::all();
        $products = Product::all();
        return view('purchaseOrders.create', compact('accounts', 'products'));
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

        $PO = new PurchaseOrder();
        $PO->no=$request ->get('no');
        $PO->amount=$request ->get('amount');
        $PO->purchasing_price=$request ->get('purchasing_price');
        $PO->quantity=$request ->get('quantity');
        $PO->net_cost=$request->get('net_cost');
        $date=date_create($request ->get('date'));
        $format = date_format($date,"Y-m-d");
        $PO->date=strtotime($format);
        $PO->save();
        //$accounts = new Gl_Account();
       // $voucherDetail = new GLVoucherDetail();
       // $products = new Product();
        $no[] = Array();
        $price[]= Array();
        $cost[] = Array();
        $qty[] = Array();
        $count = 0;

        foreach($request->code as $a)
         {
            $no[]=$a;
            $count++;
         }
        for ($i = 0; $i < $count; $i++) {

            $price[$i] = $request->price[$i];
            $cost[$i] = $request->cost[$i];
            $qty[$i] = $request->qty[$i];
        }


        //$PO->pr_id = $product->code;
        //$PO->save();

        DB::commit();

        $PO=PurchaseOrder::all();

        return redirect('/purchaseOrders/', compact('PO'));

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
        $PO->purchasing_price=$request->get('purchasing_price');
        $PO->net_cost=$request->get('net_cost');
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
