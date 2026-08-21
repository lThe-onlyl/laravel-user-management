<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function get($id)
    {
        $user = User::findOrFail($id);

        return response()->json($user);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:50',
                'not_regex:/^\s*$/',
            ],

            'surname' => [
                'required',
                'string',
                'max:50',
                'not_regex:/^\s*$/',
            ],

            'email' => [
                'required',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            ],
        ]);

        User::create($validated);

        return redirect('/form')->with(
            'success',
            'Пользователь успешно добавлен!'
        );
    }
}