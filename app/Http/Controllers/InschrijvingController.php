<?php

namespace App\Http\Controllers;

use App\Models\inschrijving;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InschrijvingController extends Controller
{
    /**
     * Geef een lijst van de bron weer.
     */
    public function index()
    {
        $id = Auth::user()->id;
        $data = inschrijving::with('user')
                            ->where('user_id', $id)
                            ->get();
       
        return view('inschrijving.index', ['inschrijving' => $data]);
    }

    /**
     * Toon het formulier voor het bewerken van de opgegeven bron.
     */
    public function edit(Inschrijving $inschrijving)
    {
        return view('inschrijving.edit', ['inschrijving' => $inschrijving]);
    }

    /**
     * Update de opgegeven bron in opslag.
     */
    public function update(Request $request, inschrijving $inschrijving)
    {
        $validated = $request->validate([
            'naam' => 'required|string|max:255',
            'telefoon' => 'required|max:10',
            'adres' => 'required|string|max:255',
            'woonplaats' => 'required|string|max:255',
            'geboortedatum' => 'required|date',
            'geslacht' => 'required',
        ]);
 
        $inschrijving->update($validated);
 
        return redirect(route('inschrijving.index'));
    }

    /**
     * Verwijder de opgegeven bron uit de opslag.
     */
    public function destroy(Inschrijving $inschrijving)
    {
        $inschrijving->delete();

        $id = Auth::id();
        $user = User::find($id);    
        $user->delete();

        Auth::logout();
 
        return redirect(route('login'));
    }
}
