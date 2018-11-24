<?php

namespace App\Http\Controllers;

use App\GRNDetails;
use Illuminate\Http\Request;

use App\Http\Requests;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Node\Expr\Array_;

class GRNDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grnd=GRNDetails::all();
        return view('grns.index',compact('grnd'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grnd= GRNDetails::all();
        $grnd->po_id=$request->po_id;
        $grnd->accepted_qty=$request->accepted_qty;
        $grnd->rejected_qty=$request->rejected_qty;
        $grnd->save();
        return redirect('/grns/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grnd = GRNDetails::findOrFail($id);
        return view('grns.show', compact('grnd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grnd = GRNDetails::findOrFail($id);
        return view('grns.edit',compact('grnd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $grnd= GRNDetails::all();
        $grnd->po_id=$request->po_id;
        $grnd->accepted_qty=$request->accepted_qty;
        $grnd->rejected_qty=$request->rejected_qty;
        $grnd->save();
        return redirect('/grns/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
