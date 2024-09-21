<div>
    <h1>Dashboard Penulis</h1>
    <p>Anda memiliki akses ke fitur penulisan konten.</p>
    <h1>
        <a class="btn btn-success" href="{{ route('posts.create') }}" role="button">+ Buat Postingan</a>
    </h1>

        @foreach ($posts as $data)
            <div class="card mb-3" style="width: 1000px">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->title }}</h5>
                    <p>{{ $data->content }}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a href="{{ route('posts.show', $data->id) }}" class="btn btn-primary">Selengkapnya</a>
                    <a href="{{ route('posts.edit', $data->id) }}" class="btn btn-warning">Ubah</a>
                </div>
            </div>
        @endforeach
</div>
