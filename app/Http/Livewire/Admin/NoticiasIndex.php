<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Noticia;

use Livewire\WithPagination;

class NoticiasIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        // SOLO PARA VER LAS NOTICIAS DEL USUARIO CREADOR
        //  $noticias = Noticia::where('user_id', auth()->user()->id)
        //                 ->where('title', 'LIKE', '%' . $this->search . '%')
        //                 ->latest('id')
        //                 ->paginate();

        $noticias = Noticia::where('title', 'LIKE', '%' . $this->search . '%')
                        ->latest('id')
                        ->paginate();

        return view('livewire.admin.noticias-index', compact('noticias'));
    }
}
