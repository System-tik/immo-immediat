<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\actu;

class VActu extends Component
{
    public $titre;
    public $descrip;
    public $url;
    public $type;
    public $actus;
    public $idUnique;
    public $idUnique1;
    public $idUnique2;

    protected $messages = [
        'titre.required' => 'Veuillez saisir le titre.',
        'descrip.required' => 'Veuillez saisir la decription',
        'url.required' => 'Veuillez sasir l\'url.',
        'type.required' => 'Veuillez indiquer le type.',

        'idUnique1' => 'Veuillez séléctionner une actualité.',
        'idUnique2' => 'Veuillez séléctionner une actualité.',
    ];

    public function render()
    {
        $this->actualites = actu::all();
        return view('livewire.admin.v-actu');
    }



    public function store(){

    $validate = $this->validate([
            'titre' => 'required',
            'descrip' => 'required',
            'url' => 'required',
            'type' => 'required'
        ]);

        $record = actu::create($validate);

        session()->flash('message', 'actu enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->titre = "";
        $this->descrip = "";
        $this->type = "";
        $this->url = "";
    }

    public function charger($data){
        $this->titre = $data['titre'];
        $this->url = $data['url'];
        $this->descrip = $data['descrip'];
        $this->type = $data['type'];
        $this->idUnique = $data['id'];
        $this->idUnique1 = $data['id'];
        $this->idUnique2 = $data['id'];
    }

    public function update(){
        $validate = $this->validate([
            'titre' => 'required',
            'descrip' => 'required',
            'url' => 'required',
            'type' => 'required',
            'idUnique1' => 'required'
        ]);

        $record = actu::find($this->idUnique1);
        $record->update($validate);
        session()->flash('message', 'actu mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function del(){
        $valitate = $this->validate([
            'idUnique2' => 'required'
        ]);

        $record = actu::find($this->idUnique2);
        $record->delete();
        session()->flash('message', 'actu delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
