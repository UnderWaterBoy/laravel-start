<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
    public function showLoginForm():View{
        return view('admin.login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'password' => ['required', 'string', 'min:7', 'max:50'],
        ]);

        if (Auth::attempt($request->only('name', 'password'))) {
            if (Auth::user()->admin) {
                return redirect()->route('admin');
            } else {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors('Доступ запрещен');
            }
        }
        return back()->withErrors('Неверные учетные данные');
    }
}
