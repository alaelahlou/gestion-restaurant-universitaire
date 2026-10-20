<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Plat;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plats = Plat::with('Categorie')->get();
        return view('plats.index', compact('plats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all(); 
        return view('plats.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Plat::create([
        'nom' => $request->nom,
        'description' => $request->description,
        'prix' => $request->prix,
        'category_id' => $request->category_id
        ]);
        return redirect()->route('plats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $plat = Plat::findOrFail($id);
        $categories = Categorie::all();
        return view('plats.edit', compact('plat','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $plat = Plat::findOrFail($id);
        $plat->update([
        'nom' => $request->nom,
        'description' => $request->description,
        'prix' => $request->prix,
        'category_id' => $request->category_id
    ]);

    return redirect()->route('plats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
