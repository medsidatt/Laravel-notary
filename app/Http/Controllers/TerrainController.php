<?php

namespace App\Http\Controllers;

use App\Models\Terrain;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    public function index() {
        return view("vantes.terrain");
    }

    public function create(Request $request) {
        $messages = [
            'required' => 'Le :attribute est obligatoire',
            'num.digits' => 'Le numero doit être composé de :digits chiffres',
            'long.numeric' => 'Le longeur doit être composé des chiffres',
            'larg.numeric' => 'Le largeur doit être composé des chiffres'
        ];

        $attributes = [
            'num' => 'Numero',
            'long' => 'Longueur',
            'larg' => 'Largeur'
        ];

        $data = $request->validate([
            'num' => 'required|digits:6',
            'long' => 'required|numeric',
            'larg' => 'required|numeric'
        ], $messages, $attributes);

        $existingRecord = Terrain::where('num', $data['num'])->first();
        if(!$existingRecord) {
            $terrain = Terrain::create([
                'num' => $data['num'],
                'long' => $data['long'],
                'larg' => $data['larg']
            ]);
            session(['t_id' => $terrain->id]);

        }else {
            session(['t_id' => $existingRecord->id]);
        }
        session(['num' => $data['num']]);
        return redirect()->route('vante-form');
    }
}
