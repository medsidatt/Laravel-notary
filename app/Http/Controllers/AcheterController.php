<?php

namespace App\Http\Controllers;

use App\Models\Acheter;
use Illuminate\Http\Request;

class AcheterController extends Controller
{
    public function index() {
        return view('vantes.acheter');
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

        $existingRecord = Acheter::where('nni', $data['nni'])->first();
        if(!$existingRecord) {
            $acheter = Acheter::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'nni' => $data['nni']
            ]);
            session(['a_id' => $acheter->id]);

        }else {
            session(['a_id' => $existingRecord->id]);
        }
        session(['a_nni' => $data['nni']]);
        return redirect()->route('vandeur-form');
    }
}
