<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
        $email = $request->email;
        $senha = $request->senha;

        $user_email = 'bittencourt.desenvolvedor@gmail.com';
        $user_senha = '123456';

        if($user_email  == $email){
              if($user_senha == $senha){
                   return redirect()->route('inicio');
              }else{
                return 'a senha está incorreta';
              }
        }else{
            return 'E-mail não cadstrado no sistema';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Login $login)
    {
        //
    }
}
