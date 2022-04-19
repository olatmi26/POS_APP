<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\AccountStoreRequest;
use App\Http\Requests\Setting\AccountUpdateRequest;
use App\Models\Setting\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $accounts = Account::all();

        return view('account.index', compact('accounts'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('account.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Setting\Account $account
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Account $account)
    {
        return view('account.show', compact('account'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Setting\Account $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Account $account)
    {
        return view('account.edit', compact('account'));
    }

    /**
     * @param \App\Http\Requests\Setting\AccountUpdateRequest $request
     * @param \App\Models\Setting\Account $account
     * @return \Illuminate\Http\Response
     */
    public function update(AccountUpdateRequest $request, Account $account)
    {
        $account->update($request->validated());

        $request->session()->flash('account.id', $account->id);

        return redirect()->route('account.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Setting\Account $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Account $account)
    {
        $account->delete();

        return redirect()->route('account.index');
    }

    /**
     * @param \App\Http\Requests\Setting\AccountStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountStoreRequest $request)
    {
        $account = Account::create($request->validated());

        $request->session()->flash('account.savedSuccessfully', $account->savedSuccessfully);

        return redirect()->route('Account.index');
    }
}
