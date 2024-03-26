<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{



    public function login()
    {
      /*   User::create([
             'name' => 'John Doe',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]); */
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request)
    {

        $credentials = $request->validated();

        // L'utilisateur est-il authentifié ?
        if (auth()->attempt($credentials)) {

            // Renouvelle la session de l'utilisateur pour prévenir les attaques de type session fixation
            $request->session()->regenerate();

            // Redirection vers la page d'édition de propriété par défaut
            // Si l'utilisateur a une intention spécifique, on utilisera la méthode redirect()->intended()
            return redirect()->intended(route('admin.property.index'));
        } else {
            // Si les identifiants ne sont pas valides, on renvoie l'utilisateur sur la page de connexion avec l'erreur affichée
            // On utilise avec() pour ajouter une erreur à la session, onlyInput() pour ne garder que le champ email dans la session
            return back()->withErrors([
                'email' => 'Ces identifiants ne sont pas valides.'
            ])->onlyInput('email');
        }
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login')->with('success', 'Vous avez bien été deconnecté.');
    }
}
