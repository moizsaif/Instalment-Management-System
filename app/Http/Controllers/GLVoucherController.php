<?php

namespace App\Http\Controllers;

use App\GL_Voucher;
use Illuminate\Http\Request;

use App\Http\Requests;

class GLVoucherController extends Controller
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
        $vouchers = Gl_Voucher::all();
        return view('vouchers.index',compact('vouchers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vouchers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$voucher = GL_Voucher::create($request->all());
        $voucher = new GL_Voucher();

        $voucher->code = $request-> code;
        $voucher->voucher_date = $request-> voucher_date;
        $date = strtotime($request->voucher_date);

        $voucher->year = date("Y",$date);
        $voucher->month = date("M",$date);
        $voucher->is_approved = $request-> is_approved;
        $voucher->created_by = $request->created_by;
        $voucher->save();

        return redirect('/vouchers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voucher = GL_Voucher::findOrFail($id);
        return view('vouchers.show',compact('voucher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voucher = GL_Voucher::findOrFail($id);
        return view('vouchers.edit',compact('voucher'));
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
        $voucher = GL_Voucher::findOrFail($id);
        $voucher->code = $request-> code;
        $voucher->voucher_date = $request-> voucher_date;

        $date = strtotime($request->voucher_date);

        $voucher->year = date("Y",$date);
        $voucher->month = date("M",$date);
        $voucher->is_approved = $request-> is_approved;
        $voucher->created_by = $request->created_by;

        $voucher->save();
        return redirect('/vouchers/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Gl_Voucher::findOrFail($id)->delete();
        echo "Not Implemented !";
        return redirect('/vouchers/');
    }
}
