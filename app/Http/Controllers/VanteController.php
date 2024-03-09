<?php

namespace App\Http\Controllers;

use App\Models\Acheter;
use App\Models\Terrain;
use App\Models\User;
use App\Models\Vandeur;
use App\Models\Vante;
use Illuminate\Http\Request;

class VanteController extends Controller
{
    public function index() {
        $vantes = Vante::select('vantes.*', 'acheters.first_name as a_nom', 'vandeurs.first_name as v_nom', 'acheters.last_name as a_prenom', 'vandeurs.last_name as v_prenom')
            ->join('acheters', 'vantes.a_id', '=', 'acheters.id')
            ->join('vandeurs', 'vantes.v_id', '=', 'vandeurs.id')
            ->orderBy('vantes.created_at', 'desc')
            ->get();
        return view("vantes.index", compact('vantes'));
    }

    public function info($id) {
        $vante = Vante::select('vantes.*',
            'acheters.nni as a_nni', 'vandeurs.nni as v_nni',
            'acheters.first_name as a_nom', 'vandeurs.first_name as v_nom',
            'acheters.last_name as a_prenom', 'vandeurs.last_name as v_prenom', 'terrains.num')
            ->where('vantes.id', $id)
            ->join('terrains', 'vantes.t_id', '=', 'terrains.id')
            ->join('acheters', 'vantes.a_id', '=', 'acheters.id')
            ->join('vandeurs', 'vantes.v_id', '=', 'vandeurs.id')
            ->orderBy('vantes.created_at', 'desc')
            ->first();

        $imame = User::select('*')
            ->where('id', session('loginId'))
            ->first();

        return view("vantes.vante-info", compact('vante', 'imame'));
    }

    public function showForm() {
        $terrain = Terrain::where('id', session("t_id"))->first();
        $acheteur = Acheter::where('id', session("a_id"))->first();
        $vandeur = Vandeur::where('id', session("v_id"))->first();

        return view("vantes.vante-form", compact('terrain', 'acheteur', 'vandeur'));
    }

    public function create(Request $request) {
        $messages = [
            'required' => 'Le :attribute est obliguatoire',
            'prix.numeric' => 'Le prix est numerique'
        ];

        $data = $request->validate([
            'prix' => 'required|numeric'
        ], $messages);

        $existingRecord = Vante::where([
            'a_id' => $request['a_id'],
            'v_id' => $request['v_id'],
            't_id' => $request['t_id']
        ])->first();
        if(!$existingRecord) {
            $vanteData = [
                'prix' => $data['prix'],
                'a_id' => $request['a_id'],
                'v_id' => $request['v_id'],
                't_id' => $request['t_id']
            ];

           $vante = Vante::create($vanteData);

           return redirect()->route("vantes-index")->with("success", "La vante est creer");
       }else{
           return redirect()->route("vantes-index")->with("fail", "La vante deja existe");
       }


    }



}
