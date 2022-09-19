<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class CAnnonce extends Component
{
    public $le_bien;
    public function render()
    { 
        return view('livewire.components.c-annonce');
    }

    public function mount($bien){
        $this->le_bien = $bien;
    }

}
