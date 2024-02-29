<?php

namespace App\Http\Controllers;

use App\Models\Age;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authentication():View
    {
        return view('user.authentication');
    }

    public function login()
    {

    }

    public function registration():View
    {
        return view('user.registration');
    }

    public function registrate(Request $request)
    {
        $data = $request->validate([
            'name' => '',
            'surname' => '',
            'patronymic' => '',
            'login' => 'unique:users',
            'email' => 'unique:users',/*email:rfc,dns*/
            'password' => 'required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => '',
            'rules' => '',
        ]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
