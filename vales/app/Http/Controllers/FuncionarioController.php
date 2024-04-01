<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use App\Models\Funcionario;
use App\Models\Gestion;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionarioController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth', 'user_active']);
    }

    public function index(Request $request){
        $search = $request->search;
        $gestion_id = $request->gestion_id;

        $funcionarios = null;

        if (trim($search) <> ''){
            $param = str_replace(' ', '%', $search);
            $funcionarios = Funcionario::where('gestion_id', 2)
                ->where('estado', 1)
                ->where(function (Builder $query) use ($param){
                    $query->orWhere('ci', 'LIKE', "%{$param}%")
                            ->orWhere(DB::raw("CONCAT(REPLACE(nombres, ' ', ' '), REPLACE(apellidos, ' ', ''))"), 'LIKE', "%{$param}%");
            })
            ->orderBy('nombres', 'ASC')->paginate(10);
        }

        // $gestiones = $this->gestiones;
        //     $gestion = Gestion::find($this->gestion_id);
        //     $funcionario = null;
        //     $entrega = null;
        //     if ($this->mode=='show') {
        //         $funcionario = Funcionario::find($this->funcionario_id);
        //         $entrega = $funcionario->ultima_entrega;
        //         // dd($entrega);
        //         // dd($funcionario);
        //     }

        $gestion = Gestion::find(2);

        return view(
            'funcionario.index',
            compact('funcionarios', 'gestion', 'search')
        );
    }

    public function show(Request $request, $id){
        $funcionario = Funcionario::find($id);
        $entrega = Entrega::where('funcionario_id', $funcionario->id)->first();
        //dd($funcionario);
        //    if ($request->ajax()) return $funcionario;
        return view('funcionario.show', compact('funcionario', 'entrega'));
    }

    public function getbyci(Request $request, $ci){
        if (isset($ci) && strlen($ci)>0)
        {
            $funcionario = Funcionario::where('ci', $ci)->first();
            if (isset($funcionario))
            {
                if ($request->ajax())
                    return response()->json($funcionario);

                return "vista no creada";
            } else {
                return "not";
            }
        } else {
            return "not";
        }
    }



    public function create() {
        return redirect()->route('funcionario.index');
    }

    public function edit($id) {
        return redirect()->route('funcionario.index');
    }

    public function store(Request $request, $id) {
        return redirect()->route('funcionario.index');
    }

}
