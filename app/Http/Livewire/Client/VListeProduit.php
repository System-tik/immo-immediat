<?php

namespace App\Http\Livewire\Client;

use App\Models\bien;
use Livewire\Component;
use Livewire\WithPagination;

class VListeProduit extends Component
{
    use WithPagination;
    //public $biens;
    public function render()
    {
        //$this->biens = bien::join('type_annonces', 'type_annonces.id', 'biens.type_annonce_id')->get(["biens.*", "type_annonces.lib"]);
        return view('livewire.client.v-liste-produit', ["biens" => bien::join('type_annonces', 'type_annonces.id', 'biens.type_annonce_id')->paginate(8)]);
    }
}
