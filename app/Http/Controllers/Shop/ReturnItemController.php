<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\ReturnItemStoreRequest;
use App\Http\Requests\Shop\ReturnItemUpdateRequest;
use App\Models\Shop\ReturnItem;
use Illuminate\Http\Request;

class ReturnItemController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\ReturnItem $returnItem
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ReturnItem $returnItem)
    {
        return view('returnItem.show', compact('returnItem'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\ReturnItem $returnItem
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ReturnItem $returnItem)
    {
        return view('returnItem.edit', compact('returnItem'));
    }

    /**
     * @param \App\Http\Requests\Shop\ReturnItemUpdateRequest $request
     * @param \App\Models\Shop\ReturnItem $returnItem
     * @return \Illuminate\Http\Response
     */
    public function update(ReturnItemUpdateRequest $request, ReturnItem $returnItem)
    {
        $returnItem->update($request->validated());

        $request->session()->flash('returnItem.id', $returnItem->id);

        return redirect()->route('returnItem.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Shop\ReturnItem $returnItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ReturnItem $returnItem)
    {
        $returnItem->delete();

        return redirect()->route('returnItem.index');
    }

    /**
     * @param \App\Http\Requests\Shop\ReturnItemStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReturnItemStoreRequest $request)
    {
        $returnItem = ReturnItem::create($request->validated());

        $request->session()->flash('returnItem.RecordedSuccessfully', $returnItem->RecordedSuccessfully);

        return redirect()->route('ProductReturn.index');
    }
}
