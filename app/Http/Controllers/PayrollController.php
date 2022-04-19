<?php

namespace App\Http\Controllers;

use App\Http\Requests\PayrollStoreRequest;
use App\Http\Requests\PayrollUpdateRequest;
use App\Models\Payroll;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $payrolls = Payroll::all();

        return view('payroll.index', compact('payrolls'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Payroll $payroll
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Payroll $payroll)
    {
        return view('payroll.show', compact('payroll'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Payroll $payroll
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Payroll $payroll)
    {
        return view('payroll.edit', compact('payroll'));
    }

    /**
     * @param \App\Http\Requests\PayrollUpdateRequest $request
     * @param \App\Models\Payroll $payroll
     * @return \Illuminate\Http\Response
     */
    public function update(PayrollUpdateRequest $request, Payroll $payroll)
    {
        $payroll->update($request->validated());

        $request->session()->flash('payroll.id', $payroll->id);

        return redirect()->route('payroll.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Payroll $payroll
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Payroll $payroll)
    {
        $payroll->delete();

        return redirect()->route('payroll.index');
    }

    /**
     * @param \App\Http\Requests\PayrollStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PayrollStoreRequest $request)
    {
        $payroll = Payroll::create($request->validated());

        $request->session()->flash('payroll.RecordedSuccessfully', $payroll->RecordedSuccessfully);

        return redirect()->route('Payroll.index');
    }
}
