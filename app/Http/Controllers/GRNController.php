<?php

namespace App\Http\Controllers;

use App\GRN;
use Illuminate\Http\Request;

use App\Http\Requests;

class GRNController extends Controller
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
        $grn=GRN::all();
        return view('grn.index',compact('grn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grn.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        GRN::create($request->all());
        return redirect('/grn');
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
        return view('grn.show', compact('grn'));
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
        return view('grn.edit',compact('grn'));
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
        $grn->accepted_qty=$request->accepted_qty;
        $grn->rejected_qty=$request->rejected_qty;
        $grn->save();
        return redirect('/grn/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$grn = GRN::findorFail($id);
        $grn->delete();
        return redirect('GRN')->with('success','Information has been  deleted');
    */
        }
}
