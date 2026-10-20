<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avi;
use App\Models\Menu;

class AvisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $avis = Avi::all();
        return view('avis.index', compact('avis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $menus = Menu::all();
        return view('avis.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Avi::create([
        'user_id' => auth()->id(),
        'menu_id' => $request->menu_id,
        'note' => $request->note,
        'commentaire' => $request->commentaire
    ]);

    return redirect()->route('avis.index');
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
        $avi = Avi::findOrFail($id);
        $menus = Menu::all();
        return view('avis.edit', compact('avi', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $avi = Avi::findOrFail($id);
        $avi->update([
            'menu_id' => $request->menu_id,
            'note' => $request->note,
            'commentaire' => $request->commentaire
        ]);
        return redirect()->route('avis.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $avi = Avi::findOrFail($id);
        $avi->delete();
        return redirect()->route('avis.index');
    }
}
