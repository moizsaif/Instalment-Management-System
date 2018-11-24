<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

use App\Http\Requests;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['only' => 'delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productBrands = Brand::orderBy('code')->get();
        return view('brands.index', compact('productBrands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productBrands = new Brand();
        $productBrands->name = $request->name;
        $productBrands->code = $request->code;
        $productBrands->save();
        return redirect('/productBrands/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productBrands = Brand::findOrFail($id);
        return view('brands.edit', compact('productBrands'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productBrands = Brand::findOrFail($id);
        return view('brands.edit', compact('productBrands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productBrands = new productBrands();
        $productBrands->name = $request->name;
        $productBrands->code = $request->code;
        $productBrands->save();
        return redirect('/productBrands/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::find($id)->delete();
        return redirect('/productBrands');
    }
}