<?php

namespace Naykel\Navit\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }
}
