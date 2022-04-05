<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quartier;
use App\Models\Proprietaire;
use App\Models\Immeuble;
use App\Models\Villa;

class Propriete extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function quartier(){
        return $this->belongsTo(Quartier::class);
    }

    public function agence(){
        return $this->belongsTo(Agence::class);
    }

    public function proprietaire(){
        return $this->belongsTo(Proprietaire::class);
    }

    public function immeuble(){
        return $this->belongsTo(Immeuble::class);
    }

    public function villa(){
        return $this->belongsTo(Villa::class);
    }
}
