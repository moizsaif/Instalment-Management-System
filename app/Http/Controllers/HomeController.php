<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\MonthlyInstallment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = strtotime('+10 days', strtotime(date("Y-m-d")));
        $date = date("Y-m-d", $date);


        $monthlyInstallments = MonthlyInstallment::where([
            ['due_date', '<=', $date],
            ['status', '=', 0]
        ])->get();
        return view('home', compact('monthlyInstallments'));
    }
}
