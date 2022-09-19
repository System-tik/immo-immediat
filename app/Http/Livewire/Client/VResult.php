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
<<<<<<< HEAD
        
=======
>>>>>>> c4250565f582a4bee4aa14f1cd0d7c59e8df33e8
        return view('livewire.client.v-result');
    }

    public function mount(Request $request)
    {
        $this->biens = bien::join('type_annonces','type_annonces.id','=','biens.type_annonce_id')
<<<<<<< HEAD

        ->where('prix','<=', $request->prix)
        ->Orwhere('ville','like','%'.$request->ville.'%')
        ->Orwhere('type_bien_id',$request->type)
        ->Orwhere('type_annonce_id',$request->annonce)
        ->get(['biens.*','type_annonces.lib']);
        


        return $this->biens;
=======
        ->where('prix','<=', $request->prix)
        ->where('ville','like','%'.$request->ville.'%')
        ->where('type_bien_id',$request->type)
        ->where('type_annonce_id', $request->annonce)
        ->get(['biens.*','type_annonces.lib']);
        //dd(bien::all(), ["prix"=>$request->prix, "ville"=>$request->ville, "type"=>$request->type, "annonce"=>$request->annonce], $this->biens);
        //dd($this->biens);
>>>>>>> c4250565f582a4bee4aa14f1cd0d7c59e8df33e8
    }
}
