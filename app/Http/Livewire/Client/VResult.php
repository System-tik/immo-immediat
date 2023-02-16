<?php

namespace App\Http\Livewire\Client;

use App\Models\bien;
use App\Models\type_annonce;
use App\Models\type_bien;
use Illuminate\Http\Request;
use Livewire\Component;

class VResult extends Component
{
    public $biens;
    public $type_annonces;
    public $type_biens;

    public $ville;
    public $prix;
    public $tpa;
    public $tpb;

    public function render()
    {
        $this->type_annonces = type_annonce::all();
        $this->type_biens = type_bien::all();
        return view('livewire.client.v-result');
    }

    public function mount(Request $request)
    {
        $this->biens = bien::join('type_annonces','type_annonces.id','=','biens.type_annonce_id')
        ->where('prix','<=', $request->prix)
        ->where('ville','like','%'.$request->ville.'%')
        ->where('type_bien_id',$request->type)
        ->where('type_annonce_id', $request->annonce)
        ->get(['biens.*','type_annonces.lib']);
    }

    public function searchcat()
    {
        $validate = $this->validate(
            [
                'ville' => 'required',
                'prix' => 'required',
                'tpa' => 'required',
                'tpb' => 'required'
            ]
        );

        $this->biens = bien::join('type_annonces','type_annonces.id','=','biens.type_annonce_id')
        ->where('prix','<=', $this->prix)
        ->where('ville','like','%'.$this->ville.'%')
        ->where('type_bien_id',$this->tpb)
        ->where('type_annonce_id', $this->tpa)
        ->get(['biens.*','type_annonces.lib']);
        
        
        /* dd($validate); */

        /* dd(
            $this->loc,
            $this->budget,
            $this->tpa,
            $this->tpb
        ); */
    }
}
