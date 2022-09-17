<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\caract;

class VCaracteristique extends Component
{
    public $lib; 
    public $selectedId;
    public $caracts;
    public $lastLib;

    public function render()
    {
        $this->caracts = caract::all();
        return view('livewire.admin.v-caracteristique');
    }


    public function store(){
        $validate = $this->validate([
            'lib' => 'required',
        ]); 

        $record = caract::create($validate);

        session()->flash('message', 'caracteristique des biens enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->lib = '';
    }

    public function charger($data){
        $this->lib = $data['lib'];
        $this->lastLib = $data['lib'];
        $this->selectedId = $data['id'];
    }

    public function update(){
        if($this->lastLib != $this->lib){
            $record = caract::find($this->selectedId);

            $record->update([
                'lib' => $this->lib,
            ]);
            session()->flash('message', 'caracteristique des biens mise à jour avec succès');
            $this->emit('Updated');
            $this->dispatchBrowserEvent('Updated');
            $this->resetFields();
        }
        else {
            session()->flash('message', 'Aucune valeur modifiée');
        }
    }

    public function del(){
        $record = caract::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'caracteristique des biens delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
