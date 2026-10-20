<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avi extends Model
{
    protected $fillable = [
    'user_id',
    'menu_id',
    'note',
    'commentaire'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
