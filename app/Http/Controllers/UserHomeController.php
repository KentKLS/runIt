<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'admin') {
                return view('backoffice.backoffice');
            }

            return view('dashboard');
        }

        return redirect()->route('showHome');
    }

}
