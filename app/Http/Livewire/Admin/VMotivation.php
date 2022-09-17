<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\motivation;

class VMotivation extends Component
{

    public $lib; 
    public $selectedId;
    public $motivs;
    public $lastLib;

    public function render()
    {
        $this->motivs = motivation::all();
        return view('livewire.admin.v-motivation');
    }
    public function store(){
        $validate = $this->validate([
            'lib' => 'required',
        ]); 

        $record = motivation::create($validate);

        session()->flash('message', 'motivation enregistré avec succès');
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
            $record = motivation::find($this->selectedId);

            $record->update([
                'lib' => $this->lib,
            ]);
            session()->flash('message', 'motivation mise à jour avec succès');
            $this->emit('Updated');
            $this->dispatchBrowserEvent('Updated');
            $this->resetFields();
        }
        else {
            session()->flash('message', 'Aucune valeur modifiée');
        }
    }

    public function del(){
        $record = motivation::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'motivation delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
