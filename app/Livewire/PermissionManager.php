<?php
namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class PermissionManager extends Component
{
    public $permissions, $permissionName;

    public function mount()
    {
        $this->permissions = Permission::all();
    }

    public function createPermission()
    {
        $this->validate([
            'permissionName' => 'required',
        ]);

        Permission::create(['name' => $this->permissionName]);
        $this->permissions = Permission::all();
        $this->permissionName = '';
    }

    public function deletePermission($permissionId)
    {
        Permission::find($permissionId)->delete();
        $this->permissions = Permission::all();
    }

    public function render()
    {
        return view('livewire.permission-manager');
    }
}
