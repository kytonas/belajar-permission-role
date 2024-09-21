<div class="container justify-content-center align-items-center ">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                Login
            </h5>
            <form wire:submit="login">
                <div class="mb-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" wire:model="form.email">
                    @error('form.email') 
                        <small class="d-block mt-1 text-danger">{{ $message }}</small>
                    @enderror    
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" wire:model="form.password">
                    @error('form.password') 
                        <small class="d-block mt-1 text-danger">{{ $message }}</small>
                    @enderror    
                </div>
                <button class="btn btn-primary" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>