<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Propriete;

class Immeuble extends Propriete
{
    use HasFactory;

    public function propriete(){
        return $this->hasOne(Propriete::class);
    }
}
