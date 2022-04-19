<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\PaymentStoreRequest;
use App\Http\Requests\Settings\PaymentUpdateRequest;
use App\Models\Settings\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $payments = Payment::all();

        return view('payment.index', compact('payments'));
    }

    /**
     * @param \App\Http\Requests\Settings\PaymentUpdateRequest $request
     * @param \App\Models\Settings\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentUpdateRequest $request, Payment $payment)
    {
        $payment->update($request->validated());

        $request->session()->flash('payment.id', $payment->id);

        return redirect()->route('payment.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Settings\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Payment $payment)
    {
        $payment->delete();

        return redirect()->route('payment.index');
    }

    /**
     * @param \App\Http\Requests\Settings\PaymentStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentStoreRequest $request)
    {
        $payment = Payment::create($request->validated());

        $request->session()->flash('payment.CreatedSuccessfully', $payment->CreatedSuccessfully);

        return redirect()->route('Payment.index');
    }
}
