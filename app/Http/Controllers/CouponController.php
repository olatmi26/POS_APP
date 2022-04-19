<?php

namespace App\Http\Controllers;

use App\Http\Requests\CouponStoreRequest;
use App\Http\Requests\CouponUpdateRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $coupons = Coupon::all();

        return view('coupon.index', compact('coupons'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('coupon.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Coupon $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Coupon $coupon)
    {
        return view('coupon.show', compact('coupon'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Coupon $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Coupon $coupon)
    {
        return view('coupon.edit', compact('coupon'));
    }

    /**
     * @param \App\Http\Requests\CouponUpdateRequest $request
     * @param \App\Models\Coupon $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(CouponUpdateRequest $request, Coupon $coupon)
    {
        $coupon->update($request->validated());

        $request->session()->flash('coupon.id', $coupon->id);

        return redirect()->route('coupon.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Coupon $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Coupon $coupon)
    {
        $coupon->delete();

        return redirect()->route('coupon.index');
    }

    /**
     * @param \App\Http\Requests\CouponStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponStoreRequest $request)
    {
        $coupon = Coupon::create($request->validated());

        $request->session()->flash('coupon.CreatedSuccessfully', $coupon->CreatedSuccessfully);

        return redirect()->route('Coupon.index');
    }
}
