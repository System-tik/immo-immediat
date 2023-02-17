<?php

namespace App\Http\Livewire\Admin;

use App\Models\agence;
use Livewire\Component;


class VAgence extends Component
{
    public $agences;
    public $titre; 
    public $description; 
    public $selectedId;
    public function render()
    {
        $this->agences = agence::all();
        return view('livewire.admin.v-agence');
    }

    public function store(){
        $validate = $this->validate([
            'titre' => 'required',
            'description' => 'required'
        ]); 

        $record = agence::create($validate);

        session()->flash('message', 'agence enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->titre = '';
        $this->description = '';
    }

    public function charger($data){
        $this->titre = $data['titre'];
        $this->description = $data['description'];
        $this->selectedId = $data['id'];
    }

    public function update(){
        
        $record = agence::find($this->selectedId);

        $record->update([
            'titre' => $this->titre,
            'description' => $this->description
        ]);
        session()->flash('message', 'agence mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
        
    }

    public function del(){
        $record = agence::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'agence delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
