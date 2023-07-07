<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function restrictedShow(Request $request)
    {
        $password = $request->input('password');

        if ($password !== 'adminKL$180896'){
            return redirect()->back()->withErrors('Mot de passe erroné');
        }else{
            return view('restrictedShow');
        }


    }
}
