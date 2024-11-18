<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
 
class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    
    public function index(){
        return view('login.index',[
            'title' => 'Login',
            'active' => 'login'            
        ]);

        
    }
    
     public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->with('loginError','Login Failed');
        // return back()->with([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }
}