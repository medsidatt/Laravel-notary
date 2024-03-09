<?php

namespace App\Http\Controllers;

use App\Models\Vandeur;
use Illuminate\Http\Request;

class VandeurController extends Controller
{
    public function index() {
        return view("vantes.vandeur");
    }

    public function create(Request $request) {

        $messages = [
            'required' => 'Le :attribute est obligatoire',
            'nni.required' => 'Le NNI est obligatoire',
            'nni.digits' => 'Le NNI doit être composé de :digits chiffres',
            'nni.unique' => 'Le NNI est déjà utilisé'
        ];

        $attributes = [
            'first_name' => 'Nom',
            'last_name' => 'Prénom',
            'nni' => 'NNI'
        ];

        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'nni' => 'required|digits:10'
        ], $messages, $attributes);

        $existingRecord = Vandeur::where('nni', $data['nni'])->first();
        if(!$existingRecord) {
            $vandeur = Vandeur::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'nni' => $data['nni']
            ]);
            session(['v_id' => $vandeur->id]);
        }else {
            session(['v_id' => $existingRecord->id]);
        }
        session(['v_nni' => $data['nni']]);
        return redirect()->route('terrain-form');

    }
}
