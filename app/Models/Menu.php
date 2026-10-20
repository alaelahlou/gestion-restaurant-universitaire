<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
     protected $fillable = [
    'date_menu'
    ];
    public function plats(): BelongsToMany{
    return $this->belongsToMany(Plat::class, 'menu_plats', 'menu_id', 'plat_id');
}
}
