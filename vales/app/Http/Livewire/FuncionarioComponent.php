<?php

namespace App\Http\Livewire;

use App\Models\Bitacora;
use App\Models\Funcionario;
use App\Models\Gestion;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class FuncionarioComponent extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $gestiones;
    public $gestion_id;

    protected $countPaginate = 10;

    public $funcionario_id;

    public $search;

    protected $queryString = [
        'mode' => ['except' => '', 'as' => 'm'],
        'funcionario_id' => ['except' => '', 'as' => 'f'],
        'gestion_id' => ['except' => '', 'as' => 'g'],
        'search' => ['except' => '', 'as' => 's'],
    ];

    public $show = true;
    public $mode = 'index'; // index, show

    public $listeners = ['show'];

    public function mount(){
        $this->gestiones = Gestion::where('estado', 1)->get();
        $this->gestion_id = $this->gestiones[0]->id;
    }

    public function entregar($funcionario_id) {
        $this->show = false;
        $this->emitTo('entrega-component', 'entregar', $funcionario_id);
    }

    public function setGestion($gestion_id) {
        $this->gestion_id = $gestion_id;
    }

    public function show() {
        $this->show = true;
    }

    public function showFuncionario($funcionario_id) {
        $this->funcionario_id = $funcionario_id;
        $this->mode = "show";
    }

    public function cancelShowFuncionario() {
        $this->mode = 'index';
    }

    public function importar() {

    }

    public function render()
    {
        $funcionarios = null;
        if (trim($this->search) <> ''){

            Bitacora::adicionar($this->search);

            $param = str_replace(' ', '%', $this->search);
            $funcionarios = Funcionario::where('gestion_id', $this->gestion_id)
                ->where('estado', 1)
                ->where(function (Builder $query) use ($param){
                    $query->orWhere('ci', 'LIKE', "%{$param}%")
                            ->orWhere(DB::raw("CONCAT(REPLACE(nombres, ' ', ' '), REPLACE(apellidos, ' ', ''))"), 'LIKE', "%{$param}%");
            })
            ->orderBy('nombres', 'ASC')->paginate($this->countPaginate);
        }

        $gestiones = $this->gestiones;
        $gestion = Gestion::find($this->gestion_id);
        $funcionario = null;
        $entrega = null;
        if ($this->mode=='show') {
            $funcionario = Funcionario::find($this->funcionario_id);
            // $entrega = $funcionario->ultima_entrega;
        }

        return view(
            'livewire.funcionario-component',
            compact(
                'funcionarios',
                'gestion',
                'gestiones',
                'funcionario',
                // 'entrega'
            )
        );
    }
}
