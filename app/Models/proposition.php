<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proposition extends Model
{
    use HasFactory;

    protected $fillable = ['nom','prenom','email','phone','message','bien_id'];
}
