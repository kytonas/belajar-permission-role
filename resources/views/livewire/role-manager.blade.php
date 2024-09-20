<div>
    <input type="text" wire:model="roleName" placeholder="Role Name">
    <button wire:click="createRole">Add Role</button>

    <ul>
        @foreach($roles as $role)
            <li>{{ $role->name }} <button wire:click="deleteRole({{ $role->id }})">Delete</button></li>
        @endforeach
    </ul>
</div>