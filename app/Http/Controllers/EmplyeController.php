<?php

namespace App\Http\Controllers;

use App\Models\Emplaye;
use Illuminate\Http\Request;

class EmplyeController extends Controller
{
    public function all(Request $request)
    {
        $emplayes = Emplaye::all();
        return view('team', ['employes' => $emplayes]);
    }
}
