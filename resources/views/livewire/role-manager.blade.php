<div>
    <input type="text" wire:model="roleName" placeholder="Role Name" class="form-control">
    <br>
    <button wire:click="createRole" class="btn btn-primary">Add Role</button>
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
            @foreach ($roles as $role)
            <tr wire:key="{{$role->id}}">
                <th>{{$no++}}</th>
                <td>{{$role->name}}</td>
                <td>
                    <button wire:click="deleteRole({{ $role->id }})" class="btn btn-danger"
                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

{{-- <div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr wire:key="{{$user->id}}">
                <th scope="row">{{$loop -> index + $users->firstItem()  }}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->format('d F, Y')}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <x-pagination :items="$users"/>
</div> --}}