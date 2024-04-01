<?php

namespace App\Http\Livewire\Configuracion;

use App\Imports\FuncionariosImport;
use App\Models\Funcionario;
use App\Models\Gestion;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class ConfiguracionComponent extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $show = true;
    public $mode = 'index';// index, create;

    public $funcionario_id;
    public $search;

    public $gestion_id, $user_id, $year, $titulo, $descripcion, $count_funcionarios, $estado;

    public $file;

    public $onLoad = false;

    protected $queryString = [
        'mode' => ['except' => '', 'as' => 'm'],
        'gestion_id' => ['except' => '', 'as' => 'g'],
    ];

    protected function rules(){
        return [
            'user_id' => "required|exists:user,id",
            'year' => 'required|min:4|max:4',
            'titulo' => "required|string|min:2|max:128",
            'titulo' => "max:256",
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

    public function mount(){
        $this->user_id = Auth::user()->id;
        $this->estado = 1;
    }

    public function limpiarModelo(){
        $this->gestion_id = null;
        $this->user_id = Auth::user()->id;
        $this->titulo = null;
        $this->descripcion = null;
        $this->count_funcionarios = null;
        $this->estado = null;
        $this->resetErrorBag();
    }

    public function create() {
        $this->limpiarModelo();
        $this->mode = "create";
    }

    public function edit($gestion_id) {
        $this->gestion_id = $gestion_id;
        $this->mode = "edit";
    }

    public function store() {

        $this->validate();

        $gestion = null;
        $gestion = new Gestion();
        $gestion->user_id = $this->user_id;
        $gestion->year = $this->year;
        $gestion->titulo = $this->titulo;
        $gestion->descripcion = $this->descripcion;
        $gestion->save();
        $this->gestion_id = $gestion->id;

        session()->flash('message', ['alert' => 'info',  'message' => 'gestion creado con exito!']);

        $this->mode = 'edit';
    }

    public function obtenerGestion(){
        if ($this->gestion_id==null) return;

        $gestion = Gestion::find($this->gestion_id);
        $this->year = $gestion->year;
        $this->titulo = $gestion->titulo;
        $this->descripcion = $gestion->descripcion;
        $this->count_funcionarios = $gestion->count_funcionarios;
        $this->estado = 1;
    }
    public function update() {
        $this->validate();

        $gestion = Gestion::find($this->gestion_id);

        $gestion->year = $this->year;
        $gestion->titulo = $this->titulo;
        $gestion->descripcion = $this->descripcion;
        $gestion->save();

        session()->flash('message', ['alert' => 'info',  'message' => 'gestion actualizada con exito!']);

        $this->mode = 'edit';
    }

    public function cancelCreate() {
        $this->resetErrorBag();
        $this->mode = "index";
    }

    public function activar($gestion_id) {
        $gestion = Gestion::find($gestion_id);
        $gestion->estado = ($gestion->estado==1)? 0 : 1;
        $gestion->save();
        $estado_str = ($gestion->estado==1)? 'HABILITADA' : 'DESHABILITADA';
        session()->flash('message', ['alert' => 'info',  'message' => "Gestion {$gestion->id} {$estado_str}!!!"]);
    }

    public function actualizarCountFuncionarios($gestion_id) {
        Gestion::where('id', $gestion_id)->update( ['count_funcionarios' => Funcionario::where('gestion_id', $gestion_id)->get()->count()]);
    }

    public function importarFuncionarios($gestion_id) {
        if ( isset($this->file) ){
            $path = $this->file->getRealPath();
            $datos = Excel::toArray(new FuncionariosImport, $path);
            foreach ($datos[0] as $key => $funcionario_arr) {
                $funcionario = new Funcionario($funcionario_arr);
                // $funcionario->fill($funcionario_arr);
                $funcionario->gestion_id = $gestion_id;
                $funcionario->save();
            }
            $this->actualizarCountFuncionarios($gestion_id);
            session()->flash('message', ['alert' => 'success',  'message' => "Datos importados con exito!"]);
            //actualizar count_funciontarios

        } else {
            session()->flash('message', ['alert' => 'warning',  'message' => "Cargue un archivo!"]);
        }
    }

    public function render()
    {
        $gestiones = Gestion::paginate(10);
        if ($this->mode=='edit' && isset($this->gestion_id)) $this->obtenerGestion();
        return view('livewire.configuracion.configuracion-component', compact('gestiones'));
    }

}
