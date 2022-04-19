<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\StockInPurchasedStoreRequest;
use App\Http\Requests\Shop\StockInPurchasedUpdateRequest;
use App\Models\Shop\StockInPurchased;
use Illuminate\Http\Request;

class StockInPurchasedController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $stockInPurchaseds = StockInPurchased::all();

        return view('stockInPurchased.index', compact('stockInPurchaseds'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\StockInPurchased $stockInPurchased
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, StockInPurchased $stockInPurchased)
    {
        return view('stockInPurchased.show', compact('stockInPurchased'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\StockInPurchased $stockInPurchased
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, StockInPurchased $stockInPurchased)
    {
        return view('stockInPurchased.edit', compact('stockInPurchased'));
    }

    /**
     * @param \App\Http\Requests\Shop\StockInPurchasedUpdateRequest $request
     * @param \App\Models\Shop\StockInPurchased $stockInPurchased
     * @return \Illuminate\Http\Response
     */
    public function update(StockInPurchasedUpdateRequest $request, StockInPurchased $stockInPurchased)
    {
        $stockInPurchased->update($request->validated());

        $request->session()->flash('stockInPurchased.id', $stockInPurchased->id);

        return redirect()->route('stockInPurchased.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\StockInPurchased $stockInPurchased
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, StockInPurchased $stockInPurchased)
    {
        $stockInPurchased->delete();

        return redirect()->route('stockInPurchased.index');
    }

    /**
     * @param \App\Http\Requests\Shop\StockInPurchasedStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StockInPurchasedStoreRequest $request)
    {
        $stockInPurchased = StockInPurchased::create($request->validated());

        $request->session()->flash('stockInPurchased.RecordedSuccessfully', $stockInPurchased->RecordedSuccessfully);

        return redirect()->route('Purchase.index');
    }
}
