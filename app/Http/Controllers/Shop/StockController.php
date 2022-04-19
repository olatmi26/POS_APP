<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\StockStoreRequest;
use App\Http\Requests\Shop\StockUpdateRequest;
use App\Models\Shop\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $stocks = Stock::all();

        return view('stock.index', compact('stocks'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('stock.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\Stock $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Stock $stock)
    {
        return view('stock.show', compact('stock'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\Stock $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Stock $stock)
    {
        return view('stock.edit', compact('stock'));
    }

    /**
     * @param \App\Http\Requests\Shop\StockUpdateRequest $request
     * @param \App\Models\Shop\Stock $stock
     * @return \Illuminate\Http\Response
     */
    public function update(StockUpdateRequest $request, Stock $stock)
    {
        $stock->update($request->validated());

        $request->session()->flash('stock.id', $stock->id);

        return redirect()->route('stock.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\Stock $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Stock $stock)
    {
        $stock->delete();

        return redirect()->route('stock.index');
    }

    /**
     * @param \App\Http\Requests\Shop\StockStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StockStoreRequest $request)
    {
        $stock = Stock::create($request->validated());

        $request->session()->flash('stock.CreatedSuccessfully', $stock->CreatedSuccessfully);

        return redirect()->route('Stock.index');
    }
}
