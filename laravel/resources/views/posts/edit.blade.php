@extends('layouts.app')

@section('title', "Edit Blog")

@section('content')

    <div class="container">

        <form method="post" action="{{ url("posts/$post->slug") }}">
            @method('patch')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" value="{{ $post->title }}" name="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea class="form-control" id="content" rows="3" name="content" value="{{ $post->content }}"
                    required>{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="font-family:'deathshead', monospace">Simpan</button>
            <button type="button"class="btn btn-danger my-4" style="font-family:'deathshead', monospace" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</button>

            </form>

            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family:'deathshead', monospace">Hapus Blog</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin ingin menghapus postingan <span class="fw-bold text-danger">"{{ $post->title }}"?</span></p>
      </div>
      <div class="modal-footer">
      
      <form action="{{ url("posts/$post->id")}}" method="post">
                @method('DELETE')
                @csrf
    
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-family:'deathshead', monospace">Tidak</button>
            <button type="submit" class="btn btn-danger" style="font-family:'deathshead', monospace">Ya</button>
        </form>
      
       </div>
    </div>
  </div>
</div>


    @endsection