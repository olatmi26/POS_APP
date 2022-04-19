<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\ProductPurchaseStoreRequest;
use App\Http\Requests\Shop\ProductPurchaseUpdateRequest;
use App\Models\Shop\ProductPurchase;
use Illuminate\Http\Request;

class ProductPurchaseController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productPurchases = ProductPurchase::all();

        return view('productPurchase.index', compact('productPurchases'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('productPurchase.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\ProductPurchase $productPurchase
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ProductPurchase $productPurchase)
    {
        return view('productPurchase.show', compact('productPurchase'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\ProductPurchase $productPurchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ProductPurchase $productPurchase)
    {
        return view('productPurchase.edit', compact('productPurchase'));
    }

    /**
     * @param \App\Http\Requests\Shop\ProductPurchaseUpdateRequest $request
     * @param \App\Models\Shop\ProductPurchase $productPurchase
     * @return \Illuminate\Http\Response
     */
    public function update(ProductPurchaseUpdateRequest $request, ProductPurchase $productPurchase)
    {
        $productPurchase->update($request->validated());

        $request->session()->flash('productPurchase.id', $productPurchase->id);

        return redirect()->route('productPurchase.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\ProductPurchase $productPurchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProductPurchase $productPurchase)
    {
        $productPurchase->delete();

        return redirect()->route('productPurchase.index');
    }

    /**
     * @param \App\Http\Requests\Shop\ProductPurchaseStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductPurchaseStoreRequest $request)
    {
        $productPurchase = ProductPurchase::create($request->validated());

        $request->session()->flash('productPurchase.SavedSuccessfully', $productPurchase->SavedSuccessfully);

        return redirect()->route('Purchase.index');
    }
}
