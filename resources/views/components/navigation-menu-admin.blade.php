<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('admin.dashboard')}}">Admin dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <x-nav-link href="{{route('roles')}}">Roles</x-nav-link>
        <x-nav-link href="{{route('permissions')}}">Permission</x-nav-link>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        @auth
        <form action="{{route('logout')}}" method="POST">
          @csrf
          <button class="btn btn-primary" type="submit">
            Log Out
          </button>
        </form>
        @else
        <x-nav-link href="{{route('login')}}">Login</x-nav-link>
        @endauth
      </ul>
    </div>
  </div>
</nav>