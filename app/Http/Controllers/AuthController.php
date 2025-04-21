<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function index(Request $request){
        return view('login');
    }
    public function login_action(Request $request){

        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        dd($validator);
    }
    public function register(Request $request){
        return view('register');
    }
    public function register_action(Request $request){
        /*
          Regras para registro
          - O usuário tem que ter um nome
          - O Email tem que ser único na tabela users
          - Todos os campos são REQUIRED
          - Password tem que ter no mínimo 6 caracteres
        */
        //VALIDATOR LARAVEL
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
       $data = $request->only('name','email','password');
       $data['password'] = Hash::make($data['password']);
       //$data = $request->all();
        User::create($data);
        //dd($userCreated);
       return redirect(route('login'));
    }
}
