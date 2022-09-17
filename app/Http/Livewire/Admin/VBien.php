<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

use App\Models\bien;
use App\Models\caract;
use App\Models\type_annonce;
use App\Models\type_bien;
use App\Models\caract_bien;


class VBien extends Component
{
    use WithFileUploads;
    public $titre;
    public $description;
    public $salon;
    public $chambre;
    public $etat = false;
    public $equipe = false;
    public $adresse;
    public $prix;
    public $devise;
    public $valide = false;
    public $client_id;
    public $ville;
    public $type_annonce_id;
    public $type_bien_id;

    public $caract_bien = [];
    public $caracts_bien_selected = [];
    public $copy_caract_bien = [];

    public $type_as;
    public $type_bs;
    public $biens;
    public $caracts;
    public $galleries;
    public $caract_biens;
    
    public $selected ;
    public $photo;
    public $selectedGal;

    protected $listeners = ['Added'=>'$refresh', 'Updated'=>'$refresh', 'Deleted'=>'$refresh'];

    public function render()
    {
        $this->biens = bien::join('type_annonces', 'type_annonces.id', '=', 'biens.type_annonce_id')
                            ->join('type_biens', 'type_biens.id', '=', 'biens.type_bien_id')
                            ->get(['biens.*', 'type_biens.lib as b', 'type_annonces.lib as an']);
        $this->caracts = caract::all();
        $this->type_as = type_annonce::all();
        $this->type_bs = type_bien::all();
        $this->caract_biens = caract_bien::all();
        return view('livewire.admin.v-bien');
    }

    public function store(){
        //if($this->)
        $validate = $this->validate([
            'titre' => 'required',
            'description' => 'required',
            'salon' => 'required',
            'chambre' => 'required',
            'etat' => 'nullable',
            'equipe' => 'nullable',
            'adresse' => 'required',
            'prix' => 'required',
            'devise' => 'required',
            'valide' => 'nullable',
            'ville' => 'required',
            'type_annonce_id' => 'required',
            'type_bien_id' => 'required',
            'caract_bien' => 'nullable'
        ]);   

        $this->validate([
            'galleries' => 'required'
        ]);

        $record = bien::create($validate);

        for ($i=0; $i < count($this->galleries); $i++) { 
            # code...
            $this->galleries[$i]->storePubliclyAs('public/biens/'.$record->id.'/', $i.'.png');
            //$this->galleries[$i]->storePubliclyAs('public/gallerie/', $record->id.'.png');
            $this->emitSelf('imgUpdate');
        }
        
        $this->resetFields();
        session()->flash('message', 'Bien enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');

    }

    /* Update */

    public function update(){
        //if($this->)
        $validate = $this->validate([
            'titre' => 'required',
            'description' => 'required',
            'salon' => 'required',
            'chambre' => 'required',
            'etat' => 'nullable',
            'equipe' => 'nullable',
            'adresse' => 'required',
            'prix' => 'required',
            'devise' => 'required',
            'valide' => 'nullable',
            'ville' => 'required',
            'type_annonce_id' => 'required',
            'type_bien_id' => 'required',
            'caract_bien' => 'nullable'
        ]);   


        $record = bien::find($this->selected);
        $record->update($validate);
        $this->resetFields();

        session()->flash('message', 'Bien enregistré avec succès');
        $this->emit('update');
        $this->dispatchBrowserEvent('update');

    }

    public function resetFields(){
        $this->titre = '';
        $this->description  = '';
        $this->salon  = '';
        $this->chambre  = '';
        $this->etat  = '';
        $this->equipe  = '';
        $this->adresse = '';
        $this->prix = '';
        $this->devise = '';
        $this->valide = '';
        $this->client_id = '';
        $this->ville = '';
        $this->type_annonce_id = '';
        $this->type_bien_id = '';
        $this->selected = '';
        $this->caract_bien = [];
        $this->caracts_bien_selected = [];
    }

    public function charger($data){
       $this->titre = $data['titre'];
       $this->description  = $data['description'];
       $this->salon  = $data['salon'];
       $this->chambre  = $data['chambre'];
       $this->etat  = $data['etat'];
       $this->equipe  = $data['equipe'];
       $this->adresse = $data['adresse'];
       $this->prix = $data['prix'];
       $this->devise = $data['devise'];
       $this->valide = $data['valide'];
       $this->client_id = $data['client_id'];
       $this->ville = $data['ville'];
       $this->type_annonce_id = $data['type_annonce_id'];
       $this->type_bien_id = $data['type_bien_id'];
       $this->selected = $data['id'];

       //dd($data['caract_bien']);
       /* Charger caracteristiques */
       $this->caract_bien = $data['caract_bien'];
       $this->caracts_bien_selected = [];
       for ($i=0; $i < count($this->caract_bien); $i++) { 
           # code...
           for ($j=0; $j < count($this->caracts); $j++) { 
               # code...
               if($this->caracts[$j]['id'] == $this->caract_bien[$i]){
                   array_push(
                       $this->caracts_bien_selected, 
                       array(
                           'bien_id'=>$this->selected, 
                           'caract_id'=>$this->caract_bien[$i],
                           'lib'=>$this->caracts[$j]['lib']
                        )
                    );
               }
           }
       }

       //dd($this->caracts_bien_selected);
       //dd(str_replace('public', 'storage', Storage::files('public/biens/'.$this->selected)[0]));

    }

    /* for editing gallerie images */
    public function edit($data){
        $this->selectedGal = $data;
        //dd($this->selectedGal);
    }

    public function updateImg(){
        $name = explode('/',$this->selectedGal)[3];
        $this->photo->storePubliclyAs('public/biens/'.$this->selected.'/', $name);
    }

    public function deleteImg(){
        $name = str_replace('storage', 'public', $this->selectedGal);
        //dd($name);
        Storage::delete($name);
    }

    public function addImg(){
        $b_files = Storage::files('public/biens/'.$this->selected);
        /* Recuperer le nom du dernier fichier tout en l'isolant de son extension, puis le convertir en int  */
        $last = intval(explode('.', explode('/', $b_files[count($b_files)-1])[3])[0]);
        //dd($last);
        for ($i=0; $i < count($this->galleries); $i++) { 
            # code...
            $filename = $i + $last;
            $this->galleries[$i]->storePubliclyAs('public/biens/'.$this->selected.'/', $filename.'.png');
            //$this->galleries[$i]->storePubliclyAs('public/gallerie/', $record->id.'.png');
            $this->emitSelf('imgUpdate');
        }
    }

    /* Editer les caracteristiques */
    public function carEdit($data){
        $ctr = 0;
        if(in_array($data, $this->caract_bien)){
            $curIndex = array_search($data, $this->caract_bien);
            array_splice($this->caracts_bien_selected, $curIndex, 1);
            array_splice($this->caract_bien, $curIndex, 1);
            //dd($curIndex, $this->caracts_bien_selected);
        }
        else{
            array_push($this->caract_bien, $data);
            for ($j=0; $j < count($this->caracts); $j++) { 
                # code...
                if($this->caracts[$j]['id'] == $data){
                    array_push(
                        $this->caracts_bien_selected, 
                        array(
                            'caract_id'=>$data,
                            'lib'=>$this->caracts[$j]['lib']
                         )
                     );
                }
            }
        }
        /* for ($i=0; $i < count($this->caracts_bien_selected); $i++) { 
            # code...
            if($this->caracts_bien_selected[$i]['caract_id'] == $data){
                $ctr ++;
            }
        }
        if($ctr > 0){

        } */
    }
}
