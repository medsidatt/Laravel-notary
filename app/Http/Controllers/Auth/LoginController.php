<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view("login");
    }

    public function login(Request $request) {

        $attributes = [
            'email' => 'Adresse e-mail',
            'password' => 'Mot de passe',
        ];

        $messages = [
          'required' => 'Le :attribute est obligatoire',
        ];

        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],$messages, $attributes);

        $user = User::where('email', $data['email'])->first();
        if(empty($user)) {
            return back()->withInput()->withErrors(['email' => 'L\'e-mail non trouvee']);
        }else if ($user && Hash::check($data['password'], $user->password)) {
            $request->session()->put('loginId', $user->id);
            return redirect()->route('home');
        } else {
            return back()->withInput()->withErrors(['password' => 'Le mot de pass incorect']);
        }

    }

    public function logout() {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect()->route('login-user');
        }
    }

    public function showRegistrationForm() {
        return view("register");
    }

    public function register(Request $request) {

        $messages = [
            'required' => 'Le :attribute est obligatoire',
            'email.required' => 'L\'adresse e-mail est obligatoire',
            'email.email' => 'L\'adresse e-mail doit être valide',
            'email.unique' => 'L\'adresse e-mail est déjà utilisée',
            'tel.required' => 'Le numéro de téléphone est obligatoire',
            'tel.digits' => 'Le numéro de téléphone doit être composé de :digits chiffres',
            'tel.unique' => 'Le numéro de téléphone est déjà utilisé',
            'nni.required' => 'Le NNI est obligatoire',
            'nni.digits' => 'Le NNI doit être composé de :digits chiffres',
            'nni.unique' => 'Le NNI est déjà utilisé',
            'password.required' => 'Le mot de passe est obligatoire',
            'password.min' => 'Le mot de passe doit contenir au moins :min caractères',
            'location.required' => 'La localisation est obligatoire',
        ];

        $attributes = [
            'first_name' => 'Nom',
            'last_name' => 'Prénom',
            'email' => 'Adresse e-mail',
            'tel' => 'Numéro de téléphone',
            'nni' => 'NNI',
            'password' => 'Mot de passe',
            'location' => 'Localisation',
        ];


        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'tel' => 'required|digits:8|unique:users',
            'nni' => 'required|digits:10|unique:users',
            'password' => 'required|min:8',
            'location' => 'required',
        ], $messages, $attributes);

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'nni' => $data['nni'],
            'password' => Hash::make($data['password']),
            'location' => $data['location'],
        ]);

        if ($user) {
            return back()->with('success', 'Le compte est cree avec succes');
        }else {
            return back()->with('fail', 'Le compte n\'est pas creer');
        }
    }


}
