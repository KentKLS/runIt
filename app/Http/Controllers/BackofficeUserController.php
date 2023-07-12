<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BackofficeUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('backoffice.', compact('users'));
    }
    public function create()
    {
        return view('backoffice.');
    }
    public function store( $request)
    {
        $newData = new User();
        $newData->name = $request->name;
        $newData->email = $request->email;
        $newData->password = $request->image;
        $newData->save();
        return redirect()->route('product.index');
    }
    public function edit(User $user)
    {
        return view('backoffice.')->with('product', $user);
    }
    public function update( $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return view('backoffice.');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
