<?php

namespace App\Http\Controllers;

use App\GLVoucherType;
use Illuminate\Http\Request;

use App\Http\Requests;

class GLVoucherTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $vouchersTypes = GlVoucherType::all();
        return view('vouchersType.index',compact('vouchersTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vouchersType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //GLVoucherType::create($request->all());
        $voucherType = new GLVoucherType();

        $voucherType->name = $request->name;
        $voucherType->code = $request->code;
        $voucherType->last_serial_no = $request->last_serial_no;
        if($request-> locked == NULL){
            $voucherType->locked=false;
        }else{
            $voucherType->locked=true;
        }

        $voucherType->save();
        return redirect('/vouchersType');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voucherType = GLVoucherType::findOrFail($id);
        return view('vouchersType.show',compact('voucherType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voucherType = GLVoucherType::findOrFail($id);
        return view('vouchersType.edit',compact('voucherType'));
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
        $voucherType = GLVoucherType::findOrFail($id);

        $voucherType->name = $request->name;
        $voucherType->code = $request->code;
        $voucherType->last_serial_no = $request->last_serial_no;
        if($request-> locked == NULL){
            $voucherType->locked=false;
        }else{
            $voucherType->locked=true;
        }

        $voucherType->save();
        return redirect('/vouchersType');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //GlVoucherType::findOrFail($id)->delete();
        echo "Not Implemented !";
        return redirect('/vouchersType/');
    }
}
