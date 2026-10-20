<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Menu;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $menus = Menu::all();
        return view('reservations.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $menu = Menu::find($request->menu_id);
        $totalReservations = Reservation::where('menu_id', $menu->id)->sum('quantite');
        if($totalReservations + $request->quantite > $menu->quantite_max){
            return back()->with('error', 'Menu complet');
    }
        Reservation::create([
            'user_id' => auth()->id(),
            'menu_id' => $request->menu_id,
            'quantite' => $request->quantite
        ]);
        return redirect()->route('reservations.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
