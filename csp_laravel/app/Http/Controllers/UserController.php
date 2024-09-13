<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationMail;

class UserController extends Controller
{
    public function showAddUserForm()
    {
        return view('adduser');
    }

    public function showUsers()
    {
        $users = User::all();
        return view('userlist', compact('users'));
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'password' => 'required|string|min:8',

        ]);

        try {
            // Création de l'utilisateur
            $user = User::create([
                'name' => $request->name,
                'fname' => $request->fname,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'role' => 'admin', // Si le rôle est par défaut admin

            ]);

            // Envoi de l'email de vérification
            $user = User::find($id);
            Mail::to($user->email)->send(new VerificationMail($user));

            // Redirection en cas de succès
            return redirect()->route('users')->with('success', 'Utilisateur ajouté avec succès et email de vérification envoyé.');
        } catch (\Exception $e) {
            // Redirection en cas d'erreur avec les données conservées
            return redirect()->back()->withInput()->with('error', 'Une erreur est survenue lors de l\'ajout de l\'utilisateur.');
        }
    }


    public function blockUser($id)
    {
        $user = User::find($id);
        $user->status = 0; 
        $user->save();

        return redirect()->back()->with('success', 'Utilisateur bloqué avec succès.');
    }

    public function unblockUser($id)
    {
        $user = User::find($id);
        $user->status = 1; // Réactiver l'utilisateur
        $user->save();

        return redirect()->back()->with('success', 'Utilisateur débloqué avec succès.');
    }

}
