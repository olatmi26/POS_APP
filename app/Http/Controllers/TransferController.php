<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransferStoreRequest;
use App\Http\Requests\TransferUpdateRequest;
use App\Models\Transfer;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $transfers = Transfer::all();

        return view('transfer.index', compact('transfers'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('transfer.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Transfer $transfer
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Transfer $transfer)
    {
        return view('transfer.show', compact('transfer'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Transfer $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Transfer $transfer)
    {
        return view('transfer.edit', compact('transfer'));
    }

    /**
     * @param \App\Http\Requests\TransferUpdateRequest $request
     * @param \App\Models\Transfer $transfer
     * @return \Illuminate\Http\Response
     */
    public function update(TransferUpdateRequest $request, Transfer $transfer)
    {
        $transfer->update($request->validated());

        $request->session()->flash('transfer.id', $transfer->id);

        return redirect()->route('transfer.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Transfer $transfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Transfer $transfer)
    {
        $transfer->delete();

        return redirect()->route('transfer.index');
    }

    /**
     * @param \App\Http\Requests\TransferStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransferStoreRequest $request)
    {
        $transfer = Transfer::create($request->validated());

        $request->session()->flash('transfer.DoneSuccessfully', $transfer->DoneSuccessfully);

        return redirect()->route('Transfer.index');
    }
}
