<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application ands
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

    public function login(Request $request)
    {  
        $inputVal = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))){
            if (auth()->user()->role == 1) {
                return redirect()->route('handleSuperAdmin');
            }elseif (auth()->user()->role == 2) {
                return redirect()->route('handleChiefEditor');
            }elseif (auth()->user()->role == 3) {
                return redirect()->route('handleEditor');
            }elseif (auth()->user()->role == 4) {
                return redirect()->route('handleAdsEditor');
            }elseif (auth()->user()->role == 5) {
                return redirect()->route('handleAuthor');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email & Password are incorrect.');
        }     
    }
}
