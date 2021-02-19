<?php

namespace App\Observers;

use App\Models\Noticia;

use Illuminate\Support\Facades\Storage;

class NoticiaObserver
{
    /**
     * Handle the Noticia "created" event.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return void
     */
    public function creating(Noticia $noticia)
    {
        if(! \App::runningInConsole()){
            $noticia->user_id = auth()->user()->id; 
        }
    }


    /**
     * Handle the Noticia "deleted" event.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return void
     */
    public function deleting(Noticia $noticia)
    {
        if($noticia->image){
            Storage::delete($noticia->image->url);
        }
    }

}
