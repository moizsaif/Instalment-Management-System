<?php

namespace App\Http\Controllers;

use App\productCategories;
use Illuminate\Http\Request;

use App\Http\Requests;

class productCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin', 'user']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCategories = productCategories::all();
        return view('productCategories.index',compact('productCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productCategories=new productCategories();
        $productCategories->name=$request ->name;
        $productCategories->code = $request->code;
        $productCategories->save();
        return redirect('/productCategories/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productCategories = productCategories::findOrFail($id);
        return view('productCategories.edit',compact('productCategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productCategories = productCategories::findOrFail($id);
        return view('productCategories.edit',compact('productCategories'));
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
        $productCategories=new productCategories();
        $productCategories->name=$request ->name;
        $productCategories->code = $request->code;
        $productCategories->save();
        return redirect('/productCategories/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "Not Implemented !";
        return redirect('/productCategories/');
    }
}
