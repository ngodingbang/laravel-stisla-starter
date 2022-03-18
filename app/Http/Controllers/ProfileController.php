<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\UpdateRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display profile page and show the form for editing.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit()
    {
        $user = Auth::user();

        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Profile\UpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRequest $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $user->update($request->validated());

        return redirect()->route('profile.edit')
            ->withAlertSuccess(trans('The :resource was updated!', ['resource' => trans('menu.profile')]));
    }
}
