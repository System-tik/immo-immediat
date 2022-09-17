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
        $this->biens = bien::where('prix','<=', '3000')
        ->where('ville','kj')
        ->where('type_bien_id','3')
        ->get();
        return view('livewire.client.v-result');
    }

    public function search(Request $request)
    {
        

        $this->biens = bien::join('caracts','caracts.id','=','biens.caract_bien')

        ->where('prix','<=', $request->prix)
        ->Orwhere('ville','like','%'.$request->ville.'%')
        ->Orwhere('type_bien_id',$request->type)
        ->Orwhere('type_annonce_id',$request->annonce)
        ->get(['biens.*','caracts.lib']);

        return $this->biens;
    }
}
