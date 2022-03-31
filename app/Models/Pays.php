<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ville;

class Pays extends Model
{
    use HasFactory;

    public function villes(){
        return $this->hasMany(Ville::class);
    }
}
