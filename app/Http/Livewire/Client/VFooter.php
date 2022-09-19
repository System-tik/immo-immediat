<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\comptes;
use Termwind\Components\Dd;

class VFooter extends Component
{
    public $cmptes;

    public function render()
    {
        $this->cmptes = comptes::all();
        return view('livewire.client.v-footer');
    }
}
