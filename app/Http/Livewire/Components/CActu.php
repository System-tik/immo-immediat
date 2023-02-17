<?php

namespace App\Http\Livewire\Components;

use App\Models\actu;
use Livewire\Component;

class CActu extends Component
{
    public $actualites;

    public function render()
    {
        $this->actualites = actu::all();
        return view('livewire.components.c-actu');
    }
}
