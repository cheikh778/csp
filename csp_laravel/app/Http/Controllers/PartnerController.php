<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::latest()->paginate(12);
        return view('partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $logo = $request->file('logo');
        $newName = time() . '.' . $logo->getClientOriginalExtension();
        $logo->move(public_path('storage/partners'), $newName);

        Partner::create([
            'name' => $request->name,
            'logo' => 'partners/' . $newName
        ]);

        return redirect()->route('partners.index')->with('success', 'Partenaire ajout  avec succ s');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $partner = Partner::findOrFail($id);
        return view('partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partner = Partner::findOrFail($id);
        return view('partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $partner = Partner::findOrFail($id);

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $newName = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('storage/partners'), $newName);
            $partner->logo = 'partners/' . $newName;
        }

        $partner->name = $request->name;
        $partner->save();

        return redirect()->route('partners.index')->with('success', 'Partenaire mis  jour avec succ s');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::findOrFail($id);
        Storage::delete($partner->logo);
        $partner->delete();
        return redirect()->route('partners.index')->with('success', 'Partenaire supprim  avec succ s');
    }
}
