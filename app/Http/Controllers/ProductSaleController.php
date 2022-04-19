<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductSaleStoreRequest;
use App\Http\Requests\ProductSaleUpdateRequest;
use App\Models\ProductSale;
use Illuminate\Http\Request;

class ProductSaleController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productSales = ProductSale::all();

        return view('productSale.index', compact('productSales'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('productSale.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProductSale $productSale
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ProductSale $productSale)
    {
        return view('productSale.show', compact('productSale'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProductSale $productSale
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ProductSale $productSale)
    {
        return view('productSale.edit', compact('productSale'));
    }

    /**
     * @param \App\Http\Requests\ProductSaleUpdateRequest $request
     * @param \App\Models\ProductSale $productSale
     * @return \Illuminate\Http\Response
     */
    public function update(ProductSaleUpdateRequest $request, ProductSale $productSale)
    {
        $productSale->update($request->validated());

        $request->session()->flash('productSale.id', $productSale->id);

        return redirect()->route('productSale.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProductSale $productSale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProductSale $productSale)
    {
        $productSale->delete();

        return redirect()->route('productSale.index');
    }

    /**
     * @param \App\Http\Requests\ProductSaleStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductSaleStoreRequest $request)
    {
        $productSale = ProductSale::create($request->validated());

        $request->session()->flash('productSale.savedSuccessfully', $productSale->savedSuccessfully);

        return redirect()->route('ProductSale.index');
    }
}
