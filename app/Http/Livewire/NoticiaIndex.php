<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Noticia;
use App\Models\Category;
use App\Models\Tag;
use Livewire\WithPagination;

class NoticiaIndex extends Component
{

    use WithPagination;

    public $category_id = 1;
    public $tag_id = 1;

    public function render()
    {
        $categories = Category::all();

        $tags = Tag::all();
        $noticias = Noticia::where('status', 2)
                            ->category($this->category_id)
                            // ->where('tag_id', $this->tag_id)
                            ->latest('id')->paginate(4);

        return view('livewire.noticia-index', compact('noticias', 'categories', 'tags'));
    }

    public function resetFilters(){
        $this->reset(['category_id']);
    }
}
