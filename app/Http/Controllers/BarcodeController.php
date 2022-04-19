<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarcodeStoreRequest;
use App\Http\Requests\BarcodeUpdateRequest;
use App\Models\Barcode;
use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $barcodes = Barcode::all();

        return view('barcode.index', compact('barcodes'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('barcode.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Barcode $barcode
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Barcode $barcode)
    {
        return view('barcode.show', compact('barcode'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Barcode $barcode
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Barcode $barcode)
    {
        return view('barcode.edit', compact('barcode'));
    }

    /**
     * @param \App\Http\Requests\BarcodeUpdateRequest $request
     * @param \App\Models\Barcode $barcode
     * @return \Illuminate\Http\Response
     */
    public function update(BarcodeUpdateRequest $request, Barcode $barcode)
    {
        $barcode->update($request->validated());

        $request->session()->flash('barcode.id', $barcode->id);

        return redirect()->route('barcode.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Barcode $barcode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Barcode $barcode)
    {
        $barcode->delete();

        return redirect()->route('barcode.index');
    }

    /**
     * @param \App\Http\Requests\BarcodeStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarcodeStoreRequest $request)
    {
        $barcode = Barcode::create($request->validated());

        $request->session()->flash('barcode.created', $barcode->created);

        return redirect()->route('Barcode.index');
    }
}
