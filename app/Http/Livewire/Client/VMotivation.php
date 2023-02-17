<?php

namespace App\Http\Livewire\Client;

use App\Models\agence;
use Livewire\Component;

class VMotivation extends Component
{
    public $agences;
    public function render()
    {
        $this->agences = agence::all();
        return view('livewire.client.v-motivation');
    }
}
