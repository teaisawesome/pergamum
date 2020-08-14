<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Vendor;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = Vendor::where('user_id', Auth::id())->exists();

        return view('profile')->with(['vendor' => $data]);
    }

    public function modify(Request $request)
    {
        $id = Auth::id();

        $array = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email
        ];

        User::where('id', $id)->update($array);

        return redirect()->back();
    }
}