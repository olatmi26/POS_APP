<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerGroupStoreRequest;
use App\Http\Requests\CustomerGroupUpdateRequest;
use App\Models\CustomerGroup;
use Illuminate\Http\Request;

class CustomerGroupController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customerGroups = CustomerGroup::all();

        return view('customerGroup.index', compact('customerGroups'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('customerGroup.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CustomerGroup $customerGroup
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CustomerGroup $customerGroup)
    {
        return view('customerGroup.show', compact('customerGroup'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CustomerGroup $customerGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, CustomerGroup $customerGroup)
    {
        return view('customerGroup.edit', compact('customerGroup'));
    }

    /**
     * @param \App\Http\Requests\CustomerGroupUpdateRequest $request
     * @param \App\Models\CustomerGroup $customerGroup
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerGroupUpdateRequest $request, CustomerGroup $customerGroup)
    {
        $customerGroup->update($request->validated());

        $request->session()->flash('customerGroup.id', $customerGroup->id);

        return redirect()->route('customerGroup.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CustomerGroup $customerGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CustomerGroup $customerGroup)
    {
        $customerGroup->delete();

        return redirect()->route('customerGroup.index');
    }

    /**
     * @param \App\Http\Requests\CustomerGroupStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerGroupStoreRequest $request)
    {
        $customerGroup = CustomerGroup::create($request->validated());

        $request->session()->flash('customerGroup.SavedSuccessfully', $customerGroup->SavedSuccessfully);

        return redirect()->route('Customer.index');
    }
}
