<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Show the update profile page.
     *
     * @param  UpdateProfileRequest $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Request $request)
    {
        return view('pages.profile', [
            'user' => $request->user()
        ]);
    }

    // public function update(Request $request)
    // {
    // $request->user()->update(
    //     $request->all()
    // );

    // return redirect()->route('profile.edit');
    // }

    public function update(Request $request)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
        ];

        $validatedData = $request->validate($rules);

        User::where('id', auth()->user()->id)->update($validatedData);

        return redirect('/profile')->with('message', 'Data diri sudah di update');
    }
}