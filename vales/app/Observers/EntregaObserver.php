<?php

namespace App\Observers;

use App\Models\Entrega;
use App\Models\Funcionario;

class EntregaObserver
{
    /**
     * Handle the Entrega "created" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function created(Entrega $entrega)
    {
        //
        Funcionario::where('id', $entrega->funcionario_id)->update(['entregado' => 1]);
    }

    /**
     * Handle the Entrega "updated" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function updated(Entrega $entrega)
    {
        //
    }

    /**
     * Handle the Entrega "deleted" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function deleted(Entrega $entrega)
    {
        //
    }

    /**
     * Handle the Entrega "restored" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function restored(Entrega $entrega)
    {
        //
    }

    /**
     * Handle the Entrega "force deleted" event.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return void
     */
    public function forceDeleted(Entrega $entrega)
    {
        //
    }
}
