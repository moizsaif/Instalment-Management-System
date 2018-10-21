<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GRNController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $grn=new \App\GRN;
        $grn->no=$request ->get('no');
        $grn->status=$request ->get('status');
        $grn->accepted_qty=$request ->get('accepted_qty');
        $grn->rejected_qty=$request ->get('rejected_qty');
        $date=date_create($request ->get('date'));
        $format = date_format($date,"Y-m-d");
        $grn->date=strtotime($format);
        $grn->save();

        return redirect('GRN')->with('success','information has been added');
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
        $grn= \App\GRN::find($id);
        $grn->no=$request->get('no');
        $grn->status=$request->get('status');
        $grn->accepted_qty=$request->get('accepted_qty');
        $grn->rejected_qty=$request->get('rejected_qty');
        $grn->save();
        return redirect('GRN');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grn = \App\GRN::find($id);
        $grn->delete();
        return redirect('GRN0')->with('success','Information has been  deleted');
    }
}
