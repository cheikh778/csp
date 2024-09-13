<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Gallery;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('galerieDashboard', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addgalerie');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $images = $request->file('photo'); // Récupération des images

        if (!is_array($images)) {
            $images = [$images]; // Si une seule image est envoyée, la transformer en tableau
        }

        foreach ($images as $image) {
            $newName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/photos'), $newName);
            Gallery::create(['photo' => 'photos/' . $newName]); // Sauvegarde de chaque image dans la base de données
        }

        return redirect()->route('galeries')->with('success', 'Les images ont été ajoutées avec succès');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('galeries.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('galeries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'photo' => 'nullable',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $gallery = Gallery::findOrFail($id);

        if ($request->hasFile('photo')) {
            $images = $request->file('photo');

            foreach ($images as $image) {
                $newName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('storage/photos'), $newName);
                $gallery->photo = 'photos/' . $newName;
            }
        }

        $gallery->save();

        return redirect()->route('galeries')->with('success', 'Les images ont  t  mises  jour avec succ s');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        Storage::delete($gallery->photo);
        $gallery->delete();
        return redirect()->route('galeries')->with('success', 'Les images ont  t  supprim es avec succ s');
    }

    /**
     * Delete multiple images.
     */
    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids');
        Gallery::whereIn('id', $ids)->each(function ($gallery) {
            Storage::delete($gallery->photo);
        });
        Gallery::whereIn('id', $ids)->delete();

        return response()->json(['success' => 'Les images ont  été  supprimées avec succés']);
    }
}

