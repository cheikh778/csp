<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TemporaryLoginMail;

class VerificationController extends Controller
{
    public function verify($id)
    {
        // Récupérer l'utilisateur
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('home')->with('error', 'Utilisateur non trouvé.');
        }

        // Vérifier si l'utilisateur a déjà été vérifié
        if ($user->email_verified_at) {
            return redirect()->route('home')->with('info', 'Cet email a déjà été vérifié.');
        }

        // Marquer l'utilisateur comme vérifié
        $user->email_verified_at = now();
        $user->save();

        // Envoi de l'email avec les informations de connexion temporaires
        Mail::to($user->email)->send(new TemporaryLoginMail($user));

        // Redirection avec succès
        return redirect()->route('home')->with('success', 'Email vérifié avec succès et informations de connexion envoyées.');
    }
}
