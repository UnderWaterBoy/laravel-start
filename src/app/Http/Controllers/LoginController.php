<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class LoginController extends Controller
{
    public function index(){
        $session = session("value");
        return view('login.index');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:50', 'email'],
            'password' => ['required', 'string', 'min:7', 'max:50'],
            'agreement' => ['accepted'],
        ]);

        if (Auth::attempt([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password']
        ])) {
            $request->session()->regenerate();

            return redirect('/')->with('success', "Account successfully logged in.");
        }


        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', "Вы вышли из аккаунта.");
    }
}
