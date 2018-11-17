<?php

namespace App\Http\Controllers;

use App\Gl_Account;
use App\GL_Voucher;
use App\GLVoucherDetail;
use App\GLVoucherType;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Node\Expr\Array_;

class GLVoucherController extends Controller
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
        $vouchers = Gl_Voucher::all();
        $reason = null;
        return view('vouchers.index', compact('vouchers', 'reason'));
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
        $reason = null;
        return view('vouchers.create', compact('voucherTypes', 'accounts', 'reason'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Starting Database Transaction
        DB::beginTransaction();

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

        // 0 for Debit & 1 for Credit
        $accountIds = Array();
        $amount = Array();
        $transac = Array();
        $count = 0;
        $debit = 0;
        $credit = 0;

        foreach ($request->acc_id as $d) {
            $accountIds[] = $d;
            $count++;
        }
        for ($i = 0; $i < $count; $i++) {
            $amount[$i] = $request->amount[$i];
            $transac[$i] = $request->transac_type[$i];
        }
        // Subtracting in Debit & Adding in Credit
        for ($i = 0; $i < $count; $i++) {
            if ($transac[$i] == 0) {
                $debit += $amount[$i];
            } else {
                $credit += $amount[$i];
            }
        }// Validating Voucher Debit & Credit
        if ($debit != $credit) {
            $reason = 'Sum of debit is not equal to Sum of credit';
            //Transaction failed
            DB::rollBack();
            $voucherTypes = GLVoucherType::all();
            $accounts = Gl_Account::all();
            return view('vouchers.create', compact('voucherTypes', 'accounts', 'reason'));
        }

        //Updating Last Serial Number on Voucher Types Table
        $voucherType = GLVoucherType::findOrFail($request->type_id);
        $voucherType->last_serial_no = $voucherType->last_serial_no + 1;
        $voucherType->save();

        $i=0;
        // Adding Voucher transaction details

        if ($voucher->is_approved == true) {
            foreach ($accountIds as $account) {
                $voucherDetail = new GLVoucherDetail();
                $account = Gl_Account::findOrFail($account);
                $bal = $account->current_balance;

                $voucherDetail->acc_id = $account->id;
                $voucherDetail->voucher_id = $voucher->id;
                if ($transac[$i] == 0) {
                    $voucherDetail->debit = $amount[$i];
                    $account->current_balance = $bal - $amount[$i];
                    $voucherDetail->credit = 0;
                } else {
                    $voucherDetail->credit = $amount[$i];
                    $account->current_balance = $bal + $amount[$i];
                    $voucherDetail->debit = 0;
                }
                // Posting to ledger
                $account->save();
                $voucherDetail->cheque_no = "";
                $voucherDetail->cheque_date = "";
                $voucherDetail->payee = "";
                $i++;
                $voucherDetail->save();
            }
        } else {
            foreach ($accountIds as $account) {
                $voucherDetail = new GLVoucherDetail();
                $voucherDetail->acc_id = $account;
                $voucherDetail->voucher_id = $voucher->id;
                if ($transac[$i] == 0) {
                    $voucherDetail->debit = $amount[$i];
                    $voucherDetail->credit = 0;
                } else {
                    $voucherDetail->credit = $amount[$i];
                    $voucherDetail->debit = 0;
                }
                $voucherDetail->cheque_no = "";
                $voucherDetail->cheque_date = "";
                $voucherDetail->payee = "";
                $i++;
                $voucherDetail->save();
            }
        }

        //Transaction completed
        DB::commit();
        $reason = 'Voucher Added';
        $vouchers = Gl_Voucher::all();
        return view('vouchers.index', compact('vouchers', 'reason'));
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
        if ($voucher->is_approved) {
            $vouchers = GL_Voucher::all();
            $reason = 'Voucher is finalized';
            return view('vouchers.index', compact('vouchers', 'reason'));
        } else {
            $voucherTypes = GLVoucherType::all();
            $accounts = Gl_Account::all();
            return view('vouchers.edit', compact('voucher', 'voucherTypes', 'accounts'));
        }

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

        if ($request->is_approved) {
            $voucher->is_approved = true;
            foreach ($voucher->details as $vch) {
                $acc = Gl_Account::findOrFail($vch->acc_id);
                $bal = $acc->current_balance;
                if ($vch->debit == 0) {
                    $acc->current_balance = $bal + $vch->credit;
                } elseif ($vch->credit == 0) {
                    $acc->current_balance = $bal - $vch->debit;
                }
                $acc->save();
            }
            $voucher->save();
        }

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
