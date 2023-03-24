@extends('layouts.app')

@section('title', "$post->title")

@section('content')

        <article class="blog-post mt-5">
            <h2 class="blog-post-title mb-1" style="font-family:deathshead">{{ $post->title }}</h2>
            <p class="blog-post-meta" style="font-family:'futura-book', monospace">{{ date('d M Y H:i', strtotime($post->created_at))  }}</p>
            <p style="font-family:'futura-book', monospace"> {{ $post->content }}</p>

        </article>

        <p class="text-muted" style="font-family:'futura-book', monospace">{{ $total_comments }} Komentar</p>
        @foreach($comments as $comment)
        <div class="card mb-3">
            <div class="card-body">
                <p>{{ $comment->comment }}</p>
            </div>
        </div>
        @endforeach

        <a href="{{ url('posts') }}" class="btn btn-success" style="font-family:'futura-book', monospace">Kembali</a>

    </div>


@endsection