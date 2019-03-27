<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetRequestController extends Controller
{
    public function logoutLink()
    {
        auth()->logout();
        return redirect('/login');
    }
}
