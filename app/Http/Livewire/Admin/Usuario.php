<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class Usuario extends Component
{
    use WithPagination;
    protected $paginationTheme ='bootstrap';
    protected $listeners       =['EliminarUsuario'];
    protected $queryString     =['search' => ['except' => ''],
    'page','findrole' =>['except'=>''] ];

        public $perPage     = 10;
        public $search      = '';
        public $orderBy     = 'id';
        public $orderAsc    = true;
        public $findrole    = '';
        public $rol         = '';
        public $role        = '';
        public $estado      ='activo';
        public $permissions =[];
        public $roles       =[];
        public $allROles    =[];
        public $editMode    = false;




       
    public function render()
    {
        return view('livewire.admin.usuario');
    }
}
