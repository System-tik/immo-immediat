<?php

namespace App\Http\Livewire\Admin;

use App\Models\proposition;
use Exception;
use Livewire\Component;

class VProposition extends Component
{
    public $nom;
    public $prenom;
    public $email;
    public $phone;
    public $message;
    public $bien_id;

    public $idUnique;
    public $idUnique1;
    public $idUnique2;
    public $propositions;

    public $messages = [
        'nom.required' => 'Veuillez saisir le nom.',
        'prenom.required' => 'Veuillez saisir le prenoms.',
        'email.required' => 'Veuillez saisir l\'adresse email.',
        'phone.required' => 'Veuillez saisir le numéro de téléphone.',
        'message.required' => 'Veuillez saisir le message.',
        'bien_id.required' => 'ce champs est requis.',

        'idUnique1.required' => 'Veuillez seléctionner une proposition',
        'idUnique2.required' => 'Veuillez seléctionner une proposition'
    ];
    public function render()
    {
        //recupération de toutes les propositions
        $this->propositions = proposition::all();
        return view('livewire.admin.v-proposition');
    }

    public function add()
    {
        $validate = $this->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'phone'=> 'required',
            'message' => 'required',
            'bien_id' => 'required'
        ]);

        try {
            $req = proposition::create($validate);
            $this->dispatchBrowserEvent('confirm',['message' => 'Proposition créée avec succès!']);
            $this->emit('proposition');
            $this->clear();
            
        } catch (Exception $e) {
            $this->dispatchBrowserEvent('echec',['message' => $e->getMessage()]);
        }
    }

    public function clear()
    {
        $this->nom = "";
        $this->prenom = "";
        $this->email = "";
        $this->phone = "";
        $this->message = "";
        $this->bien_id = "";
    }

    public function recupere($donnee)
    {
        $this->nom = $donnee['nom'];
        $this->prenom = $donnee['prenom'];
        $this->email = $donnee['email'];
        $this->phone = $donnee['phone'];
        $this->message = $donnee['message'];
        $this->bien_id = $donnee['bien_id'];
        $this->idUnique = $donnee['id'];
        $this->idUnique1 = $donnee['id'];
        $this->idUnique2 = $donnee['id'];
    }

    public function update()
    {
        $validate = $this->validate([
            'idUnique2' => 'required'
        ]);
        
        $validate = $this->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'phone'=> 'required',
            'message' => 'required',
            'bien_id' => 'required',
        ]);

        try {
            $prop = proposition::find($this->idUnique);
            $prop->update($validate);
            $this->dispatchBrowserEvent('confirm',['message' => 'Proposition modifiée avec succès!']);
            $this->emit('proposition');
            $this->clear();
            
        } catch (Exception $e) {
            $this->dispatchBrowserEvent('echec',['message' => $e->getMessage()]);
        }
    }

    public function delete()
    {
        $validate = $this->validate([
            'idUnique2' => 'required'
        ]);
        try {
            $prop = proposition::find($this->idUnique);
            $prop->delete();
            $this->dispatchBrowserEvent('confirm',['message' => 'Proposition supprimée avec succès!']);
            $this->emit('proposition');
            $this->clear();
            
        } catch (Exception $e) {
            $this->dispatchBrowserEvent('echec',['message' => $e->getMessage()]);
        }
    }
}
