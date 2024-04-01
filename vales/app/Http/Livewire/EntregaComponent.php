<?php

namespace App\Http\Livewire;

use App\Models\Entrega;
use App\Models\Funcionario;
use App\Models\Gestion;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class EntregaComponent extends Component
{
    use WithFileUploads;

    public $storageDir = 'entregas';

    public $funcionario;

    public $user_id, $funcionario_id, $descripcion, $img, $estado;

    public $show = false;
    public $mode = 'create'; // create, edit

    public $listeners =[
        'entregar'
    ];

    protected function rules(){
        return [
            'user_id' => "required|exists:user,id",
            'funcionario_id' => 'required|exists:funcionario,id',
            'descripcion' => "required|string|min:2|max:1024",
            'img' => "required",
            'estado' => "required",
        ];
    }

    protected $validationAttributes = [
        'user_id' => "Usuario",
        'funcionario_id' => "Funcionario",
        'descripcion' => "Descripcion",
        'img' => "Foto",
        'estado' => "Estado",
    ];


    public function mount() {
        $this->user_id = Auth::user()->id;
        $this->estado = 1;
        $this->funcionario = Funcionario::find(3);
        $this->funcionario_id = $this->funcionario->id;
    }

    public function entregar($funcionario_id) {
        $this->show = true;
        $this->funcionario = Funcionario::find($funcionario_id);
        $this->funcionario_id = $this->funcionario->id;
    }

    public function obtenerFuncionario($funcionario_id) {
        $this->funcionario = Funcionario::find($funcionario_id);
        $this->funcionario_id = $this->funcionario->id;
    }

    public function store() {

        $this->validate();

        $entrega = new Entrega();
        $entrega->user_id = $this->user_id;
        $entrega->funcionario_id = $this->funcionario_id;
        $entrega->descripcion = $this->descripcion;
        $entrega->estado = $this->estado;
        $entrega->save();

        $file = $this->img??null;
        if (isset($file)) {
            $url = $file->storePublicly($this->storageDir, 'public');
            $entrega->img = $url;
            $entrega->save();
        }
        session()->flash('message', ['alert' => 'success',  'message' => 'entrega creado con exito!']);
        $this->show = false;
        $this->emitTo('funcionario-component', 'show', true);
    }

    public function cancelar() {
        $this->show = false;
        $this->resetErrorBag();
        $this->emitTo('funcionario-component', 'show', true);
    }




    public function render()
    {
        $funcionario = $this->funcionario;
        return view('livewire.entrega-component', compact('funcionario'));
    }
}
