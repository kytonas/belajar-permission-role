<?php
namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleManager extends Component
{
    public $roles, $roleName;

    public function mount()
    {
        $this->roles = Role::all();
    }

    public function createRole()
    {
        $this->validate([
            'roleName' => 'required',
        ]);

        Role::create(['name' => $this->roleName]);
        $this->roles = Role::all();
        $this->roleName = '';
    }

    public function deleteRole($roleId)
    {
        Role::find($roleId)->delete();
        $this->roles = Role::all();
    }

    public function render()
    {
        return view('livewire.role-manager')->layout('layouts.admin', ['title' => 'Roles Manager']);
    }

}
