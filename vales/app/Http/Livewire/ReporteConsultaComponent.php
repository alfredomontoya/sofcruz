<?php

namespace App\Http\Livewire;

use App\Models\Bitacora;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ReporteConsultaComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $show = true;

    // variable index = index / show
    public $mode = 'index';

    public $user_id;

    public function showBitacoraUsuario($user_id, $fecha) {
        $this->user_id = $user_id;
        $this->fecha = $fecha;
        $this->mode = 'show';
    }

    public function render()
    {
        $reporte_bitacora = null;
        $bitacoras = null;
        switch ($this->mode){
            case ('index'):
                $reporte_bitacora = Bitacora::select(
                                        DB::raw("DATE(created_at) as fecha"),
                                        'user_id',
                                        DB::raw("count(*) as count"),
                                    )
                                    ->where('user_id', '<>', 16)
                                    ->groupBy(DB::raw("DATE(created_at)"))
                                    ->groupBy('user_id')
                                    ->orderBy(DB::raw("DATE(created_at)"))
                                    ->orderBy("user_id")
                                    ->get();
                break;
            case ('show'):
                $bitacoras = Bitacora::where('user_id', $this->user_id)
                                ->where(DB::raw("DATE(created_at)"), $this->fecha)
                                ->orderBy('id', 'desc')->paginate(5);
                // dd($bitacoras);
                break;
        }
        return view('livewire.reporte.reporte-consulta-component', compact('reporte_bitacora', 'bitacoras'));
    }
}
