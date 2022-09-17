<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caract_bien extends Model
{
    protected $fillable = ['bien_id', 'caract_id'];
    use HasFactory;
}
