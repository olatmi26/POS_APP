<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\ProductReturnStoreRequest;
use App\Http\Requests\Shop\ProductReturnUpdateRequest;
use App\Models\Shop\ProductReturn;
use Illuminate\Http\Request;

class ProductReturnController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productReturns = ProductReturn::all();

        return view('productReturn.index', compact('productReturns'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('productReturn.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\ProductReturn $productReturn
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ProductReturn $productReturn)
    {
        return view('productReturn.show', compact('productReturn'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\ProductReturn $productReturn
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ProductReturn $productReturn)
    {
        return view('productReturn.edit', compact('productReturn'));
    }

    /**
     * @param \App\Http\Requests\Shop\ProductReturnUpdateRequest $request
     * @param \App\Models\Shop\ProductReturn $productReturn
     * @return \Illuminate\Http\Response
     */
    public function update(ProductReturnUpdateRequest $request, ProductReturn $productReturn)
    {
        $productReturn->update($request->validated());

        $request->session()->flash('productReturn.id', $productReturn->id);

        return redirect()->route('productReturn.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\ProductReturn $productReturn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProductReturn $productReturn)
    {
        $productReturn->delete();

        return redirect()->route('productReturn.index');
    }

    /**
     * @param \App\Http\Requests\Shop\ProductReturnStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductReturnStoreRequest $request)
    {
        $productReturn = ProductReturn::create($request->validated());

        $request->session()->flash('ProductReturn.SavedSuccessfully', $ProductReturn->SavedSuccessfully);

        return redirect()->route('ProductReturn.index');
    }
}
