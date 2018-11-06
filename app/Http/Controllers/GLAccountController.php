<?php

namespace App\Http\Controllers;

use App\Gl_Account;
use Illuminate\Http\Request;

use App\Http\Requests;

class GLAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $accounts = Gl_Account::all();
        return view('accounts.index',compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        Gl_Account::create($request->all());
//        return redirect('/accounts');
        $account = new Gl_Account();
        $account->code = $request->code;
        $account->alias = $request->alias;
        $account->name = $request->name;
        $account->level_no = $request->level_no;
        if($request-> allow_transac == NULL){
            $account->allow_transac=false;
        }else{
            $account->allow_transac=true;
        }
        $account->level_no = $request->level_no;
        $account->current_balance = $request->current_balance;

        $account->save();
        return redirect('/accounts/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = Gl_Account::findOrFail($id);
        return view('accounts.show',compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = Gl_Account::findOrFail($id);
        return view('accounts.edit',compact('account'));
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
        $account = Gl_Account::findOrFail($id);
        $account->code = $request->code;
        $account->alias = $request->alias;
        $account->name = $request->name;
        $account->level_no = $request->level_no;
        if($request-> allow_transac == NULL){
            $account->allow_transac=false;
        }else{
            $account->allow_transac=true;
        }
        $account->level_no = $request->level_no;
        $account->current_balance = $request->current_balance;

        $account->save();
        return redirect('/accounts/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Gl_Account::findOrFail($id)->delete();
        echo "Not Implemented !";
        return redirect('/accounts/');

    }
}
