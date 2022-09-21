<?php

namespace App\Http\Livewire\Client;

use App\Models\bien;
use App\Models\caract;
use Livewire\Component;

class VDetail extends Component
{
    public $bien;
    public $caracts;

    public function render()
    {
        $this->caracts = caract::all();
        return view('livewire.client.v-detail');
    }

    public function mount($idb){
        $this->bien = bien::join('type_annonces','type_annonces.id','=','biens.type_annonce_id')
        ->where('biens.id', $idb)
        ->get(['biens.*','type_annonces.lib'])->first();
    }
}
