<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    // Méthodes du contrôleur
    public function index()
    {
        return view('dashboard');
    }

    public function changeHeaderBackground(Request $request)
    {
        // Logique pour changer le fond du header
    }

    public function addPartner(Request $request)
    {
        // Logique pour ajouter un partenaire
    }

    public function addGalleryPhoto(Request $request)
    {
        // Logique pour ajouter une photo à la galerie
    }

    public function addAdmin(Request $request)
    {
        // Logique pour ajouter un administrateur
    }

    public function updateInfo(Request $request)
    {
        // Logique pour mettre à jour les renseignements
    }
}
