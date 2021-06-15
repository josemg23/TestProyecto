<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\User;

class Usuarios extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.usuarios');
    }


    
}
