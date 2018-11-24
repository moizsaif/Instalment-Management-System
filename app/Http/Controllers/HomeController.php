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
        $this->middleware('user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = strtotime('+30 days', strtotime(date("Y-m-d")));
        $date = date("Y-m-d", $date);


        $monthlyInstallments = MonthlyInstallment::where([
            ['due_date', '<=', $date],
            ['status', '=', 0]
        ])->get();

        $date = strtotime(date("Y-m-d"));
        $date = date("Y-m-d", $date);

        foreach ($monthlyInstallments as $temp) {
            if ($temp->due_date < $date) {
                $temp->status = 1;
            }
        }
        return view('home', compact('monthlyInstallments'));
    }
}
