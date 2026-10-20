<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Plat extends Model
{
     protected $fillable = [
    'nom',
    'description',
    'prix',
    'category_id'
    ];
    public function categorie(){
    return $this->belongsTo(Categorie::class , 'category_id');
    }
    public function menus(): BelongsToMany{
    return $this->belongsToMany(Menu::class, 'menu_plats', 'plat_id', 'menu_id');
    }
}
