<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\GeneralStoreRequest;
use App\Http\Requests\Setting\GeneralUpdateRequest;
use App\Models\Setting\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $generals = General::all();

        return view('general.index', compact('generals'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('general.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Setting\General $general
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, General $general)
    {
        return view('general.show', compact('general'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Setting\General $general
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, General $general)
    {
        return view('general.edit', compact('general'));
    }

    /**
     * @param \App\Http\Requests\Setting\GeneralUpdateRequest $request
     * @param \App\Models\Setting\General $general
     * @return \Illuminate\Http\Response
     */
    public function update(GeneralUpdateRequest $request, General $general)
    {
        $general->update($request->validated());

        $request->session()->flash('general.id', $general->id);

        return redirect()->route('general.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Setting\General $general
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, General $general)
    {
        $general->delete();

        return redirect()->route('general.index');
    }

    /**
     * @param \App\Http\Requests\Setting\GeneralStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneralStoreRequest $request)
    {
        $general = General::create($request->validated());

        $request->session()->flash('general.SavedSuccessfully', $general->SavedSuccessfully);

        return redirect()->route('General.index');
    }
}
