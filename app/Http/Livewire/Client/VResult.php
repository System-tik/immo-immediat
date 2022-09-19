<?php

namespace App\Http\Livewire\Client;

use App\Models\bien;
use Illuminate\Http\Request;
use Livewire\Component;

class VResult extends Component
{
    public $biens;

    public function render()
    {
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
        //dd(bien::all(), ["prix"=>$request->prix, "ville"=>$request->ville, "type"=>$request->type, "annonce"=>$request->annonce], $this->biens);
        //dd($this->biens);
    }
}
