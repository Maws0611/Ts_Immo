<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function proprietes(){
        return $this->hasMany(Propriete::class);
    }
}
