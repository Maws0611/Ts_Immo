<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;

    public function proprietes(){
        return $this->hasMany(Propriete::class);
    }
}
