<?php

namespace App\Http\Controllers;

use App\Gl_Account;
use App\GL_Voucher;
use App\GLVoucherDetail;
use App\GLVoucherType;
use Illuminate\Http\Request;

use App\Http\Requests;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Node\Expr\Array_;

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
        $voucherTypes = GLVoucherType::all();
        $accounts = Gl_Account::all();
        return view('vouchers.create',compact('voucherTypes','accounts'));
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
        //Creating Voucher
        $voucher = new GL_Voucher();

        $voucher->no = $request-> no;
        $voucher->voucher_date = $request-> voucher_date;
        $voucher->created_by = $request->created_by;
        $voucher->type_id = $request->type_id;
        $date = strtotime($request->voucher_date);
        $voucher->year = date("Y",$date);
        $voucher->month = date("M",$date);
        if($request-> is_approved == NULL){
            $voucher->is_approved=false;
        }else{
            $voucher->is_approved=true;
        }
        $voucher->save();

        //Updating Last Serial Number on Voucher Types Table
        $voucherType = GLVoucherType::findOrFail($request->type_id);
        $voucherType->last_serial_no = $voucherType->last_serial_no + 1;
        $voucherType->save();



        $accountIds = Array();
        $amount = Array();
        $transac = Array();
//        $accountIds=0;
//        $amount =0;
//        $transac =0;

        foreach ($request->acc_id as $d){
            $accountIds[] = $d;
        }
        foreach ($request->amount as $d){
            $amount[] = $d;
        }
        foreach ($request->transac_type as $d){
            $transac[] = $d;
        }//0 for Debit & 1 for Credit

        $i=0;
        //Adding Voucher transaction details
        foreach ($accountIds as $account){
            $voucherDetail = new GLVoucherDetail();

            $voucherDetail->acc_id = $account;
            $voucherDetail->voucher_id = $voucher->id;
            if($transac[$i] == 0){
                $voucherDetail->debit = $amount[$i];
                $voucherDetail->credit = 0;
            }
            else{
                $voucherDetail->credit = $amount[$i];
                $voucherDetail->debit = 0;
            }

            $voucherDetail->cheque_no = "";
            $voucherDetail->cheque_date = "";
            $voucherDetail->payee = "";
            $i++;
            $voucherDetail->save();
        }

        return redirect('/vouchers')->with('success');
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
        $voucherTypes = GLVoucherType::all();
        $accounts = Gl_Account::all();
        return view('vouchers.edit',compact('voucher','voucherTypes','accounts'));
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

        if($request->is_approved == NULL){
            $voucher->is_approved = false;
        }else{
            $voucher->is_approved = true;
        }

        $voucher->save();

        return redirect('/vouchers/')->with('success');
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
