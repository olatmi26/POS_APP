<?php

namespace App\Http\Controllers;

use App\Http\Requests\WareHouseStoreRequest;
use App\Http\Requests\WareHouseUpdateRequest;
use App\Models\WareHouse;
use Illuminate\Http\Request;

class WareHouseController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $wareHouses = WareHouse::all();

        return view('wareHouse.index', compact('wareHouses'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\WareHouse $wareHouse
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, WareHouse $wareHouse)
    {
        return view('wareHouse.show', compact('wareHouse'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\WareHouse $wareHouse
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, WareHouse $wareHouse)
    {
        return view('wareHouse.edit', compact('wareHouse'));
    }

    /**
     * @param \App\Http\Requests\WareHouseUpdateRequest $request
     * @param \App\Models\WareHouse $wareHouse
     * @return \Illuminate\Http\Response
     */
    public function update(WareHouseUpdateRequest $request, WareHouse $wareHouse)
    {
        $wareHouse->update($request->validated());

        $request->session()->flash('wareHouse.id', $wareHouse->id);

        return redirect()->route('wareHouse.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\WareHouse $wareHouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, WareHouse $wareHouse)
    {
        $wareHouse->delete();

        return redirect()->route('wareHouse.index');
    }

    /**
     * @param \App\Http\Requests\WareHouseStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(WareHouseStoreRequest $request)
    {
        $wareHouse = WareHouse::create($request->validated());

        $request->session()->flash('wareHouse.savedSuccessfully', $wareHouse->savedSuccessfully);

        return redirect()->route('WareHouse.index');
    }
}
