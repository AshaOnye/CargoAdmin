<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register()
    {
        return view('auth.register');
    }



public function signup() 
{
    // $request->validate( [
    //     'name' => ['required', 'string', 'max:255'],
    //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //     'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     // 'password-confirmation' => ['required', 'string', 'min:8', 'confirmed'],
    // ]);
    // $data = User::create
    // ([
    //     'name' => $request->name,
    //     'email' => $request->email, 
    //     'password' => Hash::make($request->password),
    //     // 'password-confirmation' => Hash::make('password-confirmation'),

    // ]);
    // // 
    // dd($data);
    
    // return redirect('/login')->with("message", "Account Successfully Created! Log in to continue");;

    // return view('auth.login');

}

}