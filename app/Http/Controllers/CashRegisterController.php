<?php

namespace App\Http\Controllers;

use App\Http\Requests\CashRegisterStoreRequest;
use App\Http\Requests\CashRegisterUpdateRequest;
use App\Models\CashRegister;
use Illuminate\Http\Request;

class CashRegisterController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cashRegisters = CashRegister::all();

        return view('cashRegister.index', compact('cashRegisters'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CashRegister $cashRegister
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CashRegister $cashRegister)
    {
        return view('cashRegister.show', compact('cashRegister'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CashRegister $cashRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, CashRegister $cashRegister)
    {
        return view('cashRegister.edit', compact('cashRegister'));
    }

    /**
     * @param \App\Http\Requests\CashRegisterUpdateRequest $request
     * @param \App\Models\CashRegister $cashRegister
     * @return \Illuminate\Http\Response
     */
    public function update(CashRegisterUpdateRequest $request, CashRegister $cashRegister)
    {
        $cashRegister->update($request->validated());

        $request->session()->flash('cashRegister.id', $cashRegister->id);

        return redirect()->route('cashRegister.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CashRegister $cashRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CashRegister $cashRegister)
    {
        $cashRegister->delete();

        return redirect()->route('cashRegister.index');
    }

    /**
     * @param \App\Http\Requests\CashRegisterStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CashRegisterStoreRequest $request)
    {
        $cashRegister = CashRegister::create($request->validated());

        $request->session()->flash('cashRegister.savedSuccessfully', $cashRegister->savedSuccessfully);

        return redirect()->route('CashRegister.index');
    }
}
