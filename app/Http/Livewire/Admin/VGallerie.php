<?php

namespace App\Http\Livewire\Admin;
use Illiminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
//use Illuminate\Console\Command;


use Livewire\Component;

use App\Models\gallerie;

class VGallerie extends Component
{

    use WithFileUploads;
    public $selectedId;
    public $photo;
    public $titre;
    public $lastTitre;
    public $galleries;

    protected $listeners = ['imgUpdate'=>'$refresh'];

    public function render()
    {
        $this->galleries = gallerie::all();
        return view('livewire.admin.v-gallerie');
    }

    public function store(){
        $validate = $this->validate([
            'titre' => 'required',
        ]);

        
        $validate2 = $this->validate([
            'photo'=>'required'
        ]);
        $record = gallerie::create($validate);

        $this->photo->storePubliclyAs('public/gallerie/', $record->id.'.png');
        //$this->photos[$index]->storePubliclyAs('public/galleries/', $data->id.'.png' );
        session()->flash('message', 'Gallerie entete enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->titre = '';
        //Artisan::call('cache:clear');
    }

    public function charger($data){
        $this->titre = $data['titre'];
        $this->lastTitre = $data['titre'];
        $this->selectedId = $data['id'];
    }

    public function update(){
        $upd = 0;

        if($this->titre != $this->lastTitre){
            $record = gallerie::find($this->selectedId);
            $record->update(['titre' => $this->titre]);
            $upd++;
        }

        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/gallerie/', $this->selectedId.'.png');
            $this->emitSelf('imgUpdate');
            $upd++;
        }

        if($upd > 0){
            session()->flash('message', 'Gallerie entete mise à jour avec succès');
            $this->emit('Updated');
            $this->dispatchBrowserEvent('Updated');
        }
        $this->resetFields();
    }

    public function del(){
        $record = gallerie::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'Gallerie entete delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        ///$this->Store->storePubliclyAs('public/gallerie/', $this->selectedId.'.png');
        Storage::delete('public/gallerie/'.$this->selectedId.'.png');   
        $this->resetFields();
    }

}
