<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductTransferStoreRequest;
use App\Http\Requests\ProductTransferUpdateRequest;
use App\Models\ProductTransfer;
use Illuminate\Http\Request;

class ProductTransferController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productTransfers = ProductTransfer::all();

        return view('productTransfer.index', compact('productTransfers'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('productTransfer.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProductTransfer $productTransfer
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ProductTransfer $productTransfer)
    {
        return view('productTransfer.show', compact('productTransfer'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProductTransfer $productTransfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ProductTransfer $productTransfer)
    {
        return view('productTransfer.edit', compact('productTransfer'));
    }

    /**
     * @param \App\Http\Requests\ProductTransferUpdateRequest $request
     * @param \App\Models\ProductTransfer $productTransfer
     * @return \Illuminate\Http\Response
     */
    public function update(ProductTransferUpdateRequest $request, ProductTransfer $productTransfer)
    {
        $productTransfer->update($request->validated());

        $request->session()->flash('productTransfer.id', $productTransfer->id);

        return redirect()->route('productTransfer.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProductTransfer $productTransfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProductTransfer $productTransfer)
    {
        $productTransfer->delete();

        return redirect()->route('productTransfer.index');
    }

    /**
     * @param \App\Http\Requests\ProductTransferStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductTransferStoreRequest $request)
    {
        $productTransfer = ProductTransfer::create($request->validated());

        $request->session()->flash('productTransfer.CreatedSuccessfully', $productTransfer->CreatedSuccessfully);

        return redirect()->route('ProductTransfer.index');
    }
}
