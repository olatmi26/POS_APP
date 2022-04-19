<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductBatchStoreRequest;
use App\Http\Requests\ProductBatchUpdateRequest;
use App\Models\ProductBatch;
use App\Models\Revenue;
use Illuminate\Http\Request;

class ProductBatchController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productBatches = ProductBatch::all();

        return view('productBatch.index', compact('productBatches'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('productBatch.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProductBatch $productBatch
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ProductBatch $productBatch)
    {
        return view('productBatch.show', compact('productBatch'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProductBatch $productBatch
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ProductBatch $productBatch)
    {
        return view('productBatch.edit', compact('productBatch'));
    }

    /**
     * @param \App\Http\Requests\ProductBatchUpdateRequest $request
     * @param \App\Models\ProductBatch $productBatch
     * @return \Illuminate\Http\Response
     */
    public function update(ProductBatchUpdateRequest $request, ProductBatch $productBatch)
    {
        $productBatch->update($request->validated());

        $request->session()->flash('productBatch.id', $productBatch->id);

        return redirect()->route('productBatch.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProductBatch $productBatch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProductBatch $productBatch)
    {
        $productBatch->delete();

        return redirect()->route('productBatch.index');
    }

    /**
     * @param \App\Http\Requests\ProductBatchStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductBatchStoreRequest $request)
    {
        $revenue = Revenue::create($request->validated());

        $request->session()->flash('revenue.SavedSuccessfully', $revenue->SavedSuccessfully);

        return redirect()->route('Revenue.index');
    }
}
