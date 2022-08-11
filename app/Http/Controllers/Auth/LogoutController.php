<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout()
    {
        auth()->logout();
        session()->forget('tfa');
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    }
}
