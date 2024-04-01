<?php

namespace App\Observers;

use App\Models\Bitacora;

class BitacoraObserver
{
    /**
     * Handle the Bitacora "created" event.
     *
     * @param  \App\Models\Bitacora  $bitacora
     * @return void
     */
    public function created(Bitacora $bitacora)
    {
        //
    }

    /**
     * Handle the Bitacora "updated" event.
     *
     * @param  \App\Models\Bitacora  $bitacora
     * @return void
     */
    public function updated(Bitacora $bitacora)
    {
        //
    }

    /**
     * Handle the Bitacora "deleted" event.
     *
     * @param  \App\Models\Bitacora  $bitacora
     * @return void
     */
    public function deleted(Bitacora $bitacora)
    {
        //
    }

    /**
     * Handle the Bitacora "restored" event.
     *
     * @param  \App\Models\Bitacora  $bitacora
     * @return void
     */
    public function restored(Bitacora $bitacora)
    {
        //
    }

    /**
     * Handle the Bitacora "force deleted" event.
     *
     * @param  \App\Models\Bitacora  $bitacora
     * @return void
     */
    public function forceDeleted(Bitacora $bitacora)
    {
        //
    }
}
