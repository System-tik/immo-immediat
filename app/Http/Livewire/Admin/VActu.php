<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\actu;
use Exception;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class VActu extends Component
{
    use WithFileUploads;

    public $titre;
    public $descrip;
    public $url;
    public $type;
    public $actualites;
    public $image;
    public $selectedId;

    protected $messages = [
        'titre.required' => 'Veuillez saisir le titre.',
        'descrip.required' => 'Veuillez saisir la decription',
        'url.required' => 'Veuillez sasir l\'url.',
        'type.required' => 'Veuillez indiquer le type.',
        'image.required' => 'Veuillez ajouter une image',

        'selectedId.required' => 'Veuillez séléctionner une actualité.',
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
            'type' => 'required',
            'image' => 'required'
        ]);

        $record = actu::create($validate);
        $this->image->storePubliclyAs('public/actualite', $record->id.'.png');

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
        $this->selectedId = $data['id'];
        
    }

    public function update(){
        $this->validate(['selectedId' => 'required']);
        $validate = $this->validate([
            'titre' => 'required',
            'descrip' => 'required',
            'url' => 'required',
            'type' => 'required',
            'image' => 'required'
        ]);

        $record = actu::find($this->selectedId);
        $record->update($validate);
        $this->image->storePubliclyAs('public/actualite', $record->id.'.png');
        session()->flash('message', 'actu mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function delete(){
        $this->validate([
            'selectedId' => 'required'
        ]);

        $record = actu::find($this->selectedId);
        Storage::delete('public/actualite/'.$this->selectedId. '.png');        
        $record->delete();
        
        session()->flash('message', 'actu delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
