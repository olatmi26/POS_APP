<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\BankStoreRequest;
use App\Http\Requests\Setting\BankUpdateRequest;
use App\Models\Setting\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $banks = Bank::all();

        return view('bank.index', compact('banks'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Setting\Bank $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Bank $bank)
    {
        return view('bank.show', compact('bank'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Setting\Bank $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Bank $bank)
    {
        return view('bank.edit', compact('bank'));
    }

    /**
     * @param \App\Http\Requests\Setting\BankUpdateRequest $request
     * @param \App\Models\Setting\Bank $bank
     * @return \Illuminate\Http\Response
     */
    public function update(BankUpdateRequest $request, Bank $bank)
    {
        $bank->update($request->validated());

        $request->session()->flash('bank.id', $bank->id);

        return redirect()->route('bank.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Setting\Bank $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Bank $bank)
    {
        $bank->delete();

        return redirect()->route('bank.index');
    }

    /**
     * @param \App\Http\Requests\Setting\BankStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BankStoreRequest $request)
    {
        $bank = Bank::create($request->validated());

        $request->session()->flash('bank.savedSuccessfully', $bank->savedSuccessfully);

        return redirect()->route('Bank.index');
    }
}
