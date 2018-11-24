<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

use App\Http\Requests;

class VendorsController extends Controller
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
        $vendors=Vendor::all();
        return view('vendors.index',compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendors= new Vendor();
        $vendors->name=$request->name;
        $vendors->contact_no=$request->contact_no;
        $vendors->cnic=$request->cnic;
        $vendors->email=$request->email;
        $vendors->address=$request->address;
        $vendors->iban=$request->iban;

        $vendors->save();
        return redirect('/vendors/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendors = Vendor::findOrFail($id);
        return view('vendors.show', compact('vendors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendors = Vendor::findOrFail($id);
        return view('vendors.edit',compact('vendors'));
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
        $vendors= Vendor::findOrFail($id);
        $vendors->name=$request->name;
        $vendors->contact_no=$request->contact_no;
        $vendors->cnic=$request->cnic;
        $vendors->email=$request->email;
        $vendors->address=$request->address;
        $vendors->iban=$request->iban;


        $vendors->save();
        return redirect('/vendorss/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$vendors = Vendor::findorFail($id);
        $vendors->delete();
        return redirect('Vendor')->with('success','Information has been  deleted');
    */
    }
}
