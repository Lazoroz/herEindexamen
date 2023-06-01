<?php

namespace App\Http\Controllers;

use App\Models\inschrijving;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'naam' => 'required|string|max:255',
            'telefoon' => 'required|max:10',
            'adres' => 'required|string|max:255',
            'woonplaats' => 'required|string|max:255',
            'geboortedatum' => 'required|date',
            'geslacht' => 'required',
            'email' => ['required', 'unique:'.User::class],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->naam,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => "0",
        ]);

        $user->inschrijving()->create([
            'naam' => $request->naam,
            'telefoon' => $request->telefoon,
            'adres' => $request->adres,
            'woonplaats' => $request->woonplaats,
            'geboortedatum' => $request->geboortedatum,
            'geslacht' => $request->geslacht,
        ]);

        return redirect(route('login'));
    }
}
