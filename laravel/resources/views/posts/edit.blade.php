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
            <button type="submit" class="btn btn-primary" style="font-family:'pricedown', monospace">Simpan</button>

        </form>

             {{-- * form hapus data --}}
             <form action="{{ url("posts/$post->id")}}" method="post">
                @method('DELETE')
                @csrf
    
                <button type="submit"class="btn btn-danger my-4" style="font-family:'pricedown', monospace">Hapus</button>
    
            </form>

        



    </div>


    @endsection