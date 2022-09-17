<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bien extends Model
{
    protected $fillable = ['titre', 'description', 'salon', 'chambre', 'etat', 'equipe', 'adresse', 'prix', 'devise', 'valide', 'client_id', 'ville', 'type_annonce_id', 'type_bien_id', 'caract_bien'];
    protected $casts = ['caract_bien' => 'array'];
    use HasFactory;
}
