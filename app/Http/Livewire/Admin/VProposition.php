<?php

namespace App\Http\Livewire\Admin;

use App\Models\proposition;
use Livewire\Component;

class VProposition extends Component
{
    public $propositions;

    public function render()
    {
        //recupération de toutes les propositions
        $this->propositions = proposition::all();
        return view('livewire.admin.v-proposition');
    }
}
