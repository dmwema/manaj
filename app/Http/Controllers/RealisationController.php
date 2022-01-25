<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function all()
    {
        $realisations = Realisation::all();
        $categories = Category::all();
        return view('real', ['realisations' => $realisations, 'categories' => $categories]);
    }

    public function show(Request $request)
    {
        $realisation = Realisation::find($request->if);
        return view('real-detail', ['realisation' => $realisation]);
    }
}
