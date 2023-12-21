<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;


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
    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }public function login(Request $request)
    {
        // Récupérer les informations du formulaire
        $credentials = $request->only('email', 'password');
    
        // Tenter l'authentification
        if (Auth::attempt($credentials)) {
            // L'utilisateur est connecté
            return redirect()->intended('/');
        } else {
            // Échec de l'authentification
            dd('Tentative d\'authentification échouée', $credentials, Auth::getLastAttempted());
        }
        dd('Tentative d\'authentification échouée', $credentials);
    }
}
      

