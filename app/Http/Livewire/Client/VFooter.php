<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\comptes;
use App\Models\contact;
use Termwind\Components\Dd;

class VFooter extends Component
{
    public $cmptes;
    public $contacts;

    public function render()
    {
        $this->cmptes = comptes::all();
        $this->contacts = contact::all();
        return view('livewire.client.v-footer');
    }
}
