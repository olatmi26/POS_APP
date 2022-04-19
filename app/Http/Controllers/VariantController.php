<?php

namespace App\Http\Controllers;

use App\Http\Requests\VariantStoreRequest;
use App\Http\Requests\VariantUpdateRequest;
use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $variants = Variant::all();

        return view('variant.index', compact('variants'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('variant.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Variant $variant
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Variant $variant)
    {
        return view('variant.show', compact('variant'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Variant $variant
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Variant $variant)
    {
        return view('variant.edit', compact('variant'));
    }

    /**
     * @param \App\Http\Requests\VariantUpdateRequest $request
     * @param \App\Models\Variant $variant
     * @return \Illuminate\Http\Response
     */
    public function update(VariantUpdateRequest $request, Variant $variant)
    {
        $variant->update($request->validated());

        $request->session()->flash('variant.id', $variant->id);

        return redirect()->route('variant.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Variant $variant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Variant $variant)
    {
        $variant->delete();

        return redirect()->route('variant.index');
    }

    /**
     * @param \App\Http\Requests\VariantStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VariantStoreRequest $request)
    {
        $variant = Variant::create($request->validated());

        $request->session()->flash('variant.createdSuccessfully', $variant->createdSuccessfully);

        return redirect()->route('Variant.index');
    }
}
