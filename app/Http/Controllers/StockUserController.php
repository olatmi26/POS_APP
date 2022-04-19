<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockUserStoreRequest;
use App\Http\Requests\StockUserUpdateRequest;
use App\Models\Coupon;
use App\Models\StockUser;
use Illuminate\Http\Request;

class StockUserController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $stockUsers = StockUser::all();

        return view('stockUser.index', compact('stockUsers'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('stockUser.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\StockUser $stockUser
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, StockUser $stockUser)
    {
        return view('stockUser.show', compact('stockUser'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\StockUser $stockUser
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, StockUser $stockUser)
    {
        return view('stockUser.edit', compact('stockUser'));
    }

    /**
     * @param \App\Http\Requests\StockUserUpdateRequest $request
     * @param \App\Models\StockUser $stockUser
     * @return \Illuminate\Http\Response
     */
    public function update(StockUserUpdateRequest $request, StockUser $stockUser)
    {
        $stockUser->update($request->validated());

        $request->session()->flash('stockUser.id', $stockUser->id);

        return redirect()->route('stockUser.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\StockUser $stockUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, StockUser $stockUser)
    {
        $stockUser->delete();

        return redirect()->route('stockUser.index');
    }

    /**
     * @param \App\Http\Requests\StockUserStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StockUserStoreRequest $request)
    {
        $coupon = Coupon::create($request->validated());

        $request->session()->flash('coupon.CreatedSuccessfully', $coupon->CreatedSuccessfully);

        return redirect()->route('Coupon.index');
    }
}
