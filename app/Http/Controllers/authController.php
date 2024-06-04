<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormAddUser;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function register(): View
    {
        return view('auth.register');
    }
    public function create(FormAddUser $request)
    {
        User::create($request->validated());

        return to_route("home");
    }
}
