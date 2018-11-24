<?php

namespace App\Http\Controllers;

use App\InstallmentPlan;
use App\MonthlyInstallment;
use App\Product;
use App\ProductDetail;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Array_;

class InstallmentPlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }

    public function index()
    {
        $installments = InstallmentPlan::all();
        return view('installments.index',compact('installments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('installments.create', compact('products'));
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
        //DB::rollBack();
        $months = $request->total_months;
        $status = $request->approved_status;
        $installmentPlan = new InstallmentPlan();

        $installmentPlan->no = $request->plan;
        $installmentPlan->customer_no = 1;
        $installmentPlan->pr_no = $request->pr_no;
        $installmentPlan->amount = $request->amount;
        $installmentPlan->additional_amount = $request->additional_amount;
        $installmentPlan->total_amount = $request->total_amount;
        $installmentPlan->down_payment = $request->down_payment;
        $installmentPlan->total_months = $months;
        $installmentPlan->paid_months = 0;
        if ($status == null) {
            $installmentPlan->approved_status = 0;
            $installmentPlan->start_date = '0000-00-00';
        } else {
            $installmentPlan->approved_status = $status;
            $installmentPlan->start_date = $request->start_date;
        }

        $installmentPlan->save();

        if ($status != null) {
            $date = strtotime($installmentPlan->start_date);
            for ($i = 0; $i < $months; $i++) {
                $monthlyInstallment = new MonthlyInstallment();

                $monthlyInstallment->plan_no = $installmentPlan->id;
                $monthlyInstallment->year = date("Y", $date);
                $monthlyInstallment->month = date("M", $date);
                $monthlyInstallment->due_date = date("Y-m-d", $date);
                $monthlyInstallment->amount = $request->per_month;
                $monthlyInstallment->received_amount = 0;
                $monthlyInstallment->status = 0;

                $monthlyInstallment->save();
                $date = strtotime("+1 months", $date);
            }
        }

        DB::commit();
        return redirect('/installments/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $installment = InstallmentPlan::findOrFail($id);
        return view('installments.show',compact('installment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$installment = InstallmentPlan::findOrFail($id);
        //return view('installments.edit',compact('installment'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
