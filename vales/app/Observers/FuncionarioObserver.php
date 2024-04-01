<?php

namespace App\Observers;

use App\Models\Funcionario;
use App\Models\Gestion;

class FuncionarioObserver
{
    /**
     * Handle the Funcionario "created" event.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return void
     */
    public function created(Funcionario $funcionario)
    {
        //
        // Gestion::where('id', $funcionario->gestion_id)
        //     ->update([
        //         'count_funcionarios' => Funcionario::where('gestion_id', $funcionario->gestion_id)->get()->count()
        //     ]);
    }

    /**
     * Handle the Funcionario "updated" event.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return void
     */
    public function updated(Funcionario $funcionario)
    {
        //
    }

    /**
     * Handle the Funcionario "deleted" event.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return void
     */
    public function deleted(Funcionario $funcionario)
    {
        //
    }

    /**
     * Handle the Funcionario "restored" event.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return void
     */
    public function restored(Funcionario $funcionario)
    {
        //
    }

    /**
     * Handle the Funcionario "force deleted" event.
     *
     * @param  \App\Models\Funcionario  $funcionario
     * @return void
     */
    public function forceDeleted(Funcionario $funcionario)
    {
        //
    }
}
