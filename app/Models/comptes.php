<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comptes extends Model
{
    protected $fillable = ['lib', 'url', 'icon'];
    use HasFactory;
}
