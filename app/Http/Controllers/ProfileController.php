<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Users;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Users::find(Auth::user()->id);
        // dd($user);
        return view('profile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = Users::find($id);

        if($request->password != null || $request->password != '') {
            $password = Hash::make($request->password);
        } else {
            $password = $user->password;
        }

        Users::whereId($id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect(url('/profile'));
    }

}
