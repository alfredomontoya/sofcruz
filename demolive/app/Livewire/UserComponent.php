<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;

    public $search;



    public function buscar() {
        session()->flash('message', ['alert' => 'mensaje',  'message' => 'Buscando ' . $this->search ?? 'nada']);
        $this->render();
    }

    public function render()
    {
        // $users = null;
        $users = User::orderBy('id', 'desc')->paginate(5);
        if ($this->search && trim($this->search) <> '') {
            $users = User::orderBy('id', 'desc')
                        ->where('name', 'like', "%{$this->search}%")
                        ->paginate(5);
        }
        else {
            $users = User::orderBy('id', 'desc')->paginate(5);
        }
        return view('livewire.user-component', compact('users'));
    }
}
