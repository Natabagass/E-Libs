<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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

    public function update(Request $request)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
        ];

        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/profile')
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        $validatedData = $request->validate($rules);

        User::where('id', auth()->user()->id)->update($validatedData);
        
        return redirect('/profile')->with('success', 'Data Updated!');
    }
}