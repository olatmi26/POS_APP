<?php

namespace App\Http\Controllers;

use App\Http\Requests\RevenueStoreRequest;
use App\Http\Requests\RevenueUpdateRequest;
use App\Models\Revenue;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $revenues = Revenue::all();

        return view('revenue.index', compact('revenues'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('revenue.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Revenue $revenue
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Revenue $revenue)
    {
        return view('revenue.show', compact('revenue'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Revenue $revenue
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Revenue $revenue)
    {
        return view('revenue.edit', compact('revenue'));
    }

    /**
     * @param \App\Http\Requests\RevenueUpdateRequest $request
     * @param \App\Models\Revenue $revenue
     * @return \Illuminate\Http\Response
     */
    public function update(RevenueUpdateRequest $request, Revenue $revenue)
    {
        $revenue->update($request->validated());

        $request->session()->flash('revenue.id', $revenue->id);

        return redirect()->route('revenue.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Revenue $revenue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Revenue $revenue)
    {
        $revenue->delete();

        return redirect()->route('revenue.index');
    }

    /**
     * @param \App\Http\Requests\RevenueStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RevenueStoreRequest $request)
    {
        $revenue = Revenue::create($request->validated());

        $request->session()->flash('revenue.SavedSuccessfully', $revenue->SavedSuccessfully);

        return redirect()->route('Revenue.index');
    }
}
