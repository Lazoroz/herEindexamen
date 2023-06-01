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
     * Toon het formulier voor het maken van een nieuwe bron.
     */
    public function create()
    {
        return view('register.index');
    }

    /**
     * Bewaar een nieuw gemaakte bron in opslag.
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
            'password' => ['required', \Illuminate\Validation\Rules\Password::defaults()],
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
