<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Plat;
use App\Models\Reservation;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
{
    $menus = Menu::count();
    $plats = Plat::count();
    $reservations = Reservation::count();
    $users = User::count();

    return view('dashboard', compact(
        'menus',
        'plats',
        'reservations',
        'users'
    ));
}
}
