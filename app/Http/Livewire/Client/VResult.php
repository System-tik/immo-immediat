<?php

namespace App\Http\Livewire\Client;

use App\Models\bien;
use Illuminate\Http\Request;
use Livewire\Component;

class VResult extends Component
{
    public $biens;
    public $i;
    public function render()
    {
        
        return view('livewire.client.v-result');
    }

    public function search(Request $request)
    {
        $this->biens = bien::join('type_annonces','type_annonces.id','=','biens.type_annonce_id')

        ->where('prix','<=', $request->prix)
        ->Orwhere('ville','like','%'.$request->ville.'%')
        ->Orwhere('type_bien_id',$request->type)
        ->Orwhere('type_annonce_id',$request->annonce)
        ->get(['biens.*','type_annonces.lib']);
        


        return $this->biens;
    }
}
