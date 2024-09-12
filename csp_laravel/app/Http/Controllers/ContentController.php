<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        $galleryPhotos = Gallery::all();
        return view('dashboard', compact('partners', 'galleryPhotos'));
    }

    public function addPartner(Request $request)
    {
        $request->validate([
            'partner_logo' => 'required|image',
        ]);

        $path = $request->file('partner_logo')->store('partners');

        Partner::create([
            'logo' => $path,
        ]);

        return back()->with('success', 'Partenaire ajouté avec succès.');
    }

    public function removePartner($id)
    {
        $partner = Partner::findOrFail($id);
        Storage::delete($partner->logo);
        $partner->delete();

        return back()->with('success', 'Partenaire supprimé avec succès.');
    }

    public function addGalleryPhoto(Request $request)
    {
        $request->validate([
            'gallery_photo' => 'required|image',
        ]);

        $path = $request->file('gallery_photo')->store('gallery');

        Gallery::create([
            'photo' => $path,
        ]);

        return back()->with('success', 'Photo ajoutée à la galerie avec succès.');
    }

    public function removeGalleryPhoto($id)
    {
        $photo = Gallery::findOrFail($id);
        Storage::delete($photo->photo);
        $photo->delete();

        return back()->with('success', 'Photo supprimée avec succès.');
    }

    // public function updateVideo(Request $request)
    // {
    //     $request->validate([
    //         'video' => 'required|mimes:mp4',
    //     ]);

    //     $path = $request->file('video')->store('videos');

    //     // Supposons que la vidéo est stockée dans la configuration du site
    //     // Mettez à jour la vidéo dans la base de données ou le fichier de configuration
    //     // Par exemple, via un modèle `Setting` ou directement dans le fichier de configuration

    //     return back()->with('success', 'Vidéo mise à jour avec succès.');
    // }

    public function updateSideImage(Request $request)
    {
        $request->validate([
            'side_image' => 'required|image',
        ]);

        // Charger la première entrée Renseignement (ou en créer une nouvelle si elle n'existe pas)
        $renseignement = Renseignement::firstOrCreate([]);

        // Supprimer l'ancienne image si elle existe
        if ($renseignement->side_image) {
            Storage::delete($renseignement->side_image);
        }

        // Enregistrer la nouvelle image
        $path = $request->file('side_image')->store('renseignements');
        $renseignement->side_image = $path;
        $renseignement->save();

        return back()->with('success', 'Image mise à jour avec succès.');
    }
}

