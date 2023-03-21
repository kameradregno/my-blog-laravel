@extends('layouts.app')

@section('title', "Buat Blog Baru")

@section('content')

    <div class="container">

        <form method="post" action="{{ url('posts') }}" class="mt-5">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea class="form-control" id="content" rows="3" name="content" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="font-family:'pricedown', monospace">Simpan</button>

        </form>


    </div>

    @endsection