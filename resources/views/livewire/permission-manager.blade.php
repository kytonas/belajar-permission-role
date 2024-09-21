<div>
    <input type="text" wire:model="permissionName" placeholder="Permission Name" class="form-control">
    <br>
    <button wire:click="createPermission" class="btn btn-primary">Add Permission</button>

        {{-- @foreach($permissions as $permission)
            <li>{{ $permission->name }} <button wire:click="deletePermission({{ $permission->id }})">Delete</button></li>
        @endforeach --}}

        <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        @php
            $no = 1;
        @endphp
        <tbody>
            @foreach ($permissions as $permission)
            <tr wire:key="{{$permission->id}}">
                <th>{{$no++}}</th>
                <td>{{$permission->name}}</td>
                <td>
                    <button wire:click="deletePermission({{ $permission->id }})" class="btn btn-danger"
                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>