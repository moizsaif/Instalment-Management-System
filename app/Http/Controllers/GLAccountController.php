<?php

namespace App\Http\Controllers;

use App\Gl_Account;
use Illuminate\Http\Request;

use App\Http\Requests;

class GLAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $accounts = Gl_Account::orderBy('code')->get();
        return view('accounts.index',compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts = Gl_Account::all();
        return view('accounts.create', compact('accounts'));
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
        $account->alias = $request->alias;
        $account->name = $request->name;
        if($request-> allow_transac == NULL){
            $account->allow_transac=false;
        }else{
            $account->allow_transac=true;
        }

        $lvl = $request->level_no;
        $account->level_no = $lvl;
        if ($lvl == 4) {
            $code = $request->code;
            $init = $request->l3;
            $account->code = $init . "-" . $code;
        } elseif ($lvl == 3) {
            $code = $request->code;
            $init = $request->l2;

            $account->code = $init . "-" . $code;
        } elseif ($lvl == 2) {
            $code = $request->code;
            $init = $request->l1;

            $account->code = $init . "-" . $code;
        } elseif ($lvl == 1) {
            $code = $request->code;
            $account->code = $code;
        } else {
            //
        }

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
        $account->alias = $request->alias;
        $account->name = $request->name;
        if($request-> allow_transac == NULL){
            $account->allow_transac=false;
        }else{
            $account->allow_transac=true;
        }

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
