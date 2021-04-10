<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raccolta extends Model {
    use HasFactory;
    protected $fillable = [
        "rifiuto", "istruzioni", "giorni", "orario",
    ];
}
