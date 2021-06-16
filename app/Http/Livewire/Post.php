<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Post as Posts;

class Post extends Component
{

    public $titulo, $resumen;


    public function render()
    {
        $posts = Posts::paginate(5);
        return view('livewire.post', compact('posts'));
    }

    private function resetInputFields()
    {
        $this->titulo = null;
        $this->resumen = null;
    }

    public function NuevoPost (){

        $this->dispatchBrowserEvent('show-form');
        //dd("Hello");
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'titulo' => 'required',
            'resumen' => 'required',
        ]);

        Posts::create($validatedDate);

        session()->flash('message', 'Post Creado con Exito!.');

        $this->resetInputFields();

        $this->emit('postStore'); // Close model to using to jquery

    }
}
