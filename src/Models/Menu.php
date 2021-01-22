<?php

namespace Naykel\Navit\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function links()
    {
        return $this->belongsToMany(Link::class)->orderBy('order');
    }
}
