<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rules\Password;

use App\Models\User;
use Illuminate\Http\Request;

class BackofficeUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('backoffice.indexUser', compact('users'));
    }
    public function create()
    {
        return view('backoffice.createUser');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required',Password::defaults()],
        ]);
        $newData = new User();
        $newData->name = $request->name;
        $newData->email = $request->email;
        $newData->password = $request->password;
        $newData->save();
        return redirect()->route('user.index');
    }
    public function edit(User $user)
    {
        return view('backoffice.editUser')->with('product', $user);
    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('user.index');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
