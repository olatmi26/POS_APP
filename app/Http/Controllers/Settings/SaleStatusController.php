<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\SaleStatusStoreRequest;
use App\Http\Requests\Settings\SaleStatusUpdateRequest;
use App\Models\Settings\SaleStatus;
use Illuminate\Http\Request;

class SaleStatusController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $saleStatuses = SaleStatus::all();

        return view('saleStatus.index', compact('saleStatuses'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('saleStatus.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Settings\SaleStatus $saleStatus
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, SaleStatus $saleStatus)
    {
        return view('saleStatus.show', compact('saleStatus'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Settings\SaleStatus $saleStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, SaleStatus $saleStatus)
    {
        return view('saleStatus.edit', compact('saleStatus'));
    }

    /**
     * @param \App\Http\Requests\Settings\SaleStatusUpdateRequest $request
     * @param \App\Models\Settings\SaleStatus $saleStatus
     * @return \Illuminate\Http\Response
     */
    public function update(SaleStatusUpdateRequest $request, SaleStatus $saleStatus)
    {
        $saleStatus->update($request->validated());

        $request->session()->flash('saleStatus.id', $saleStatus->id);

        return redirect()->route('saleStatus.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Settings\SaleStatus $saleStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, SaleStatus $saleStatus)
    {
        $saleStatus->delete();

        return redirect()->route('saleStatus.index');
    }

    /**
     * @param \App\Http\Requests\Settings\SaleStatusStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleStatusStoreRequest $request)
    {
        $salestatus = Salestatus::create($request->validated());

        $request->session()->flash('salestatus.CreatedSuccessfully', $salestatus->CreatedSuccessfully);

        return redirect()->route('Sale.index');
    }
}
