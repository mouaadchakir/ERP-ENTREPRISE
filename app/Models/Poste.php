<?php

namespace App\Models;

use App\Models\Personnel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poste extends Model
{
    use HasFactory;

    protected $fillable = ["nom"];
    public function personnels() 
    {
        return $this->hasMany(Personnel::class);
    }
}
