<?php

namespace App\Http\Controllers;

use App\GRN;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Node\Expr\Array_;

class GRNController extends Controller
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
        $grn=GRN::all();
        return view('grns.index',compact('grn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grns.create');
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

        $grn= new GRN();
        $grn->no=$request->no;
        $grn->status=$request->status;
        //$grn->dsc=$request->dsc;
       // $grn->u_price=$request->u_price;
       // $grn->u_qty=$request->u_qty;
      //  $grn->accepted_qty=$request->accepted_qty;
       // $grn->rejected_qty=$request->rejected_qty;
        $grn->received_by=$request->received_by;
        $grn->checked_by=$request->checked_by;
      //  $grn->no=$request->no;
        $grn->save();



    //    $dsc[] = Array();
   //     $u_price[]= Array();
    //    $u_qty[] = Array();
   //     $accepted_qty[] = Array();
     //   $rejected_qty[] = Array();
     //   $count = 0;

     //   for ($i = 0; $i <= $count; $i++) {

            //$dsc[$i] = $request->dsc[$i];
           // $u_price[$i] = $request->u_price[$i];
           // $accepted_qty[$i] = $request->accepted_qty[$i];
           // $rejected_qty[$i] = $request->rejected_qty[$i];
            //$count++;
      //  }
        DB::commit();
        $grn=GRN::all();
        return redirect('/grns/', compact('grn' ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grn = GRN::findOrFail($id);
        return view('grns.show', compact('grn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grn = GRN::findOrFail($id);
        return view('grns.edit',compact('grn'));
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
        $grn= GRN::findorFail($id);

        $grn->no=$request->no;
        $grn->status=$request->status;
        $grn->dsc=$request->dsc;
       // $grn->u_price=$request->u_price;
       // $grn->u_qty=$request->u_qty;
      //  $grn->accepted_qty=$request->accepted_qty;
       // $grn->rejected_qty=$request->rejected_qty;
        $grn->received_by=$request->received_by;
        $grn->checked_by=$request->checked_by;
      //  $grn->no=$request->no;
        $grn->save();
        return redirect('/grns/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$grns = GRN::findorFail($id);
        $grns->delete();
        return redirect('GRN')->with('success','Information has been  deleted');
    */
        }
}
