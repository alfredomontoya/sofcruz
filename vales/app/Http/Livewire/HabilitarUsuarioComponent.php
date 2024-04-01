<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class HabilitarUsuarioComponent extends Component
{
    public $user_id;
    public $estado;

    public function mount($user_id, $estado=1) {
        $this->user_id = $user_id;
        $this->estado = $estado;
    }
    public function habilitar() {
        User::where('id', $this->user_id)
            ->update(['estado' => $this->estado]);

        $msg = $this->estado == 1 ? 'habilitado' : 'deshabilitado';
        session()->flash('message', ['alert' => 'info',  'message' => "{$msg}!"]);
    }
    public function render()
    {
        return view('livewire.habilitar-usuario-component');
    }
}
