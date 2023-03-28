@extends('layouts.app')

@section('title', 'Buat Blog Baru')

@section('content')

    <div class="container">

        <form method="post" action="{{ url('posts') }}" class="mt-5">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label" style="font-family:'futura-book', monospace">Judul</label>
                <input type="text" class="form-control" id="title" name="title"
                    style="font-family:'futura-book', monospace" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label" style="font-family:'futura-book', monospace">Konten</label>
                <textarea class="form-control" id="content" rows="3" name="content" style="font-family:'futura-book', monospace"
                    required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="font-family:'futura-book', monospace">Simpan</button>

        </form>


    </div>

@endsection
