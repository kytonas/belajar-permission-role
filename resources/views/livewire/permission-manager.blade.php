<div>
    <input type="text" wire:model="permissionName" placeholder="Permission Name">
    <button wire:click="createPermission">Add Permission</button>

    <ul>
        @foreach($permissions as $permission)
            <li>{{ $permission->name }} <button wire:click="deletePermission({{ $permission->id }})">Delete</button></li>
        @endforeach
    </ul>
</div>