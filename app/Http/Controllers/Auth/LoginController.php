<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
         Auth::logout(); 
         $mssg= ['success','You just logged out!'];
    return redirect()
        ->route('auth.login')
        ->with('mssg',$mssg);
    }

    public function LoginNow(Request $request){
        $this->validate($request, [
           'email'   => 'required|email',
           'password' => 'required|min:6'
       ]);
  $email=strtolower($request->email);
      
       if (Auth::attempt(['email' => $email, 'password' => $request->password], $request->get('remember'))) {

        //    $users =  User::where('id',Auth::user()->id)->first();
        //    $users->lastlogin=date('Y-m-d H:i:s');
        //    $users->save();

           if(Auth::user()->actype=='a'){
               return redirect()->intended('/dashboard');
                       }else{
                           return redirect()->intended('/dashboard');
                       }
 
         
       }else{
           $mssg= "ERR: No record was found, kindy check and try again!";
           return back()->with('mssg',$mssg); 
       } 


       return back()->withInput($request->only('email', 'remember'));
}}
