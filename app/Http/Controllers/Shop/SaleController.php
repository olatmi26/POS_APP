<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\SaleStoreRequest;
use App\Http\Requests\Shop\SaleUpdateRequest;
use App\Models\Shop\Sales;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sales = Sale::all();

        return view('sale.index', compact('sales'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('sale.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Shop\sale $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Sale $sale)
    {
        return view('sale.show', compact('sale'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Shop\sale $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Sale $sale)
    {
        return view('sale.edit', compact('sale'));
    }

    /**
     * @param \App\Http\Requests\Shop\SaleUpdateRequest $request
     * @param \App\Shop\sale $sale
     * @return \Illuminate\Http\Response
     */
    public function update(SaleUpdateRequest $request, Sale $sale)
    {
        $sale->update($request->validated());

        $request->session()->flash('sale.id', $sale->id);

        return redirect()->route('sale.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Shop\sale $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Sale $sale)
    {
        $sale->delete();

        return redirect()->route('sale.index');
    }

    /**
     * @param \App\Http\Requests\Shop\SaleStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleStoreRequest $request)
    {
        $sales = Sales::create($request->validated());

        $request->session()->flash('sales.SavedSuccessfully', $sales->SavedSuccessfully);

        return redirect()->route('Sale.index');
    }
}
