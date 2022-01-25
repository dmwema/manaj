<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'status' => 'required',
            'type' => 'required',
            'desc' => 'required',
        ]);

        $demande = new Demande();

        $demande->firstname = $request->firstname;
        $demande->lastname = $request->lastname;
        $demande->status = $request->status;
        $demande->category = $request->type;
        $demande->entreprise = $request->entreprise;
        $demande->desc = $request->desc;


        if ($demande->save()) {
            return redirect()->back()->with('success', 'Démande envoyée avec succès, nous vous contacterons dans le bref délai');
        }

        return redirect()->back()->with('fail', 1);
    }
}
