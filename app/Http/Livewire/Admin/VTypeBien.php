<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\type_bien;

class VTypeBien extends Component
{
    public $lib; 
    public $selectedId;
    public $type_bs;
    public $lastLib;

    public function render()
    {
        $this->type_bs = type_bien::all();
        return view('livewire.admin.v-type-bien');
    }

    public function store(){
        $validate = $this->validate([
            'lib' => 'required',
        ]); 

        $record = type_bien::create($validate);

        session()->flash('message', 'type_bien enregistré avec succès');
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
            $record = type_bien::find($this->selectedId);

            $record->update([
                'lib' => $this->lib,
            ]);
            session()->flash('message', 'type_bien mise à jour avec succès');
            $this->emit('Updated');
            $this->dispatchBrowserEvent('Updated');
            $this->resetFields();
        }
        else {
            session()->flash('message', 'Aucune valeur modifiée');
        }
    }

    public function del(){
        $record = type_bien::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'type_bien delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
