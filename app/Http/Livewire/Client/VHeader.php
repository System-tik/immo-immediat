<?php

namespace App\Http\Livewire\Client;

use App\Models\type_annonce;
use App\Models\type_bien;
use Livewire\Component;

class VHeader extends Component
{
    public $t_biens;
    public function render()
    {
        $this->t_biens = type_bien::all();
        return view('livewire.client.v-header');
    }
}
