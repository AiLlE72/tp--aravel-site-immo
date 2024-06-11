<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormAddUser;
use App\Http\Requests\RequestLoginRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class authController extends Controller
{
    public function register(): View
    {
        return view('auth.register');
    }
    public function create(FormAddUser $request)
    {
        $validated = $request->validated();
        $validated['password']= Hash::make($validated['password']);

        User::create($validated);

        return to_route("home");
    }

    public function login(): View
    {
        return view('auth.login');
    }

    public function doLogin(RequestLoginRequest $request)
    {
        $credential = $request->validated();
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }

        return to_route('auth.login')->withErrors([
            'email'=>"erreur d'identifiant"
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Vous avez bien été deconnecté');
    }
}
