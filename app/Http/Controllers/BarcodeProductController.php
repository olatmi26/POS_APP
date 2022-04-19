<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarcodeProductStoreRequest;
use App\Http\Requests\BarcodeProductUpdateRequest;
use App\Models\BarcodeProduct;
use Illuminate\Http\Request;

class BarcodeProductController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $barcodeProducts = BarcodeProduct::all();

        return view('barcodeProduct.index', compact('barcodeProducts'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('barcodeProduct.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BarcodeProduct $barcodeProduct
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, BarcodeProduct $barcodeProduct)
    {
        return view('barcodeProduct.show', compact('barcodeProduct'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BarcodeProduct $barcodeProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, BarcodeProduct $barcodeProduct)
    {
        return view('barcodeProduct.edit', compact('barcodeProduct'));
    }

    /**
     * @param \App\Http\Requests\BarcodeProductUpdateRequest $request
     * @param \App\Models\BarcodeProduct $barcodeProduct
     * @return \Illuminate\Http\Response
     */
    public function update(BarcodeProductUpdateRequest $request, BarcodeProduct $barcodeProduct)
    {
        $barcodeProduct->update($request->validated());

        $request->session()->flash('barcodeProduct.id', $barcodeProduct->id);

        return redirect()->route('barcodeProduct.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BarcodeProduct $barcodeProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BarcodeProduct $barcodeProduct)
    {
        $barcodeProduct->delete();

        return redirect()->route('barcodeProduct.index');
    }

    /**
     * @param \App\Http\Requests\BarcodeProductStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarcodeProductStoreRequest $request)
    {
        $barcodeProduct = BarcodeProduct::create($request->validated());

        $request->session()->flash('barcodeProduct.savedSuccessfully', $barcodeProduct->savedSuccessfully);

        return redirect()->route('BarcodeProduct.index');
    }
}
