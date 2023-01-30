<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function show(){
        return ('auth.register');
    }
    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
    }
}
