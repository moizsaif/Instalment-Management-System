<?php

namespace App\Http\Controllers;

use App\Gl_Account;
use Illuminate\Http\Request;

use App\Http\Requests;

class GLAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        Gl_Account::create($request->all());
        return redirect('/accounts');
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
        $account->code = $request-> code;
        $account->description = $request-> description;
        $account->level_no = $request-> level_no;
        $account->is_trans_allowed = $request-> is_trans_allowed;
        $account->level_no = $request-> level_no;

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
