<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\PurchaseStoreRequest;
use App\Http\Requests\Shop\PurchaseUpdateRequest;
use App\Models\Shop\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $purchases = Purchase::all();

        return view('purchase.index', compact('purchases'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('purchase.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Shop\purchase $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Purchase $purchase)
    {
        return view('purchase.show', compact('purchase'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Shop\purchase $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Purchase $purchase)
    {
        return view('purchase.edit', compact('purchase'));
    }

    /**
     * @param \App\Http\Requests\Shop\PurchaseUpdateRequest $request
     * @param \App\Shop\purchase $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(PurchaseUpdateRequest $request, Purchase $purchase)
    {
        $purchase->update($request->validated());

        $request->session()->flash('purchase.id', $purchase->id);

        return redirect()->route('purchase.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Shop\purchase $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Purchase $purchase)
    {
        $purchase->delete();

        return redirect()->route('purchase.index');
    }

    /**
     * @param \App\Http\Requests\Shop\PurchaseStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PurchaseStoreRequest $request)
    {
        $purchase = Purchase::create($request->validated());

        $request->session()->flash('purchase.PurchaseRecordSavedSuccessfully', $purchase->PurchaseRecordSavedSuccessfully);

        return redirect()->route('Purchase.index');
    }
}
