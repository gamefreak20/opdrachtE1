<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);

        return view('profile', compact(['user']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'name' => 'required|max:191',
            'email' => 'required|max:191|email',
            'password' => 'required|min:8',
        ]);

        $passwordReset = $request->validate([
            'newPassword' => 'min:8',
            'newPassword2' => 'min:8',
        ]);

        $user = User::find(Auth::user()->id);

        if (!Hash::check($input['password'], $user->password)) {
            return redirect(route('profile.index'));
        }

        $input['password'] = $user->password;
        if ($passwordReset['newPassword'] != "") {
            if ($passwordReset['newPassword'] != $passwordReset['newPassword2']) {
                return redirect(route('profile.index'));
            } else {
                $input['password'] = Hash::make($passwordReset['newPassword']);
            }
        }

        $user->update($input);

        return redirect(route('profile.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort(404);
    }
}
