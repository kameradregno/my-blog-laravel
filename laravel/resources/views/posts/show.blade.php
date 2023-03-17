<!DOCTYPE html>
<html>

<head>
    <title>{{ $post->title }}</title>

    <!-- css bootstrap local -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- self css -->
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">


</head>

<body>

    <div class="container">

        <article class="blog-post mt-5">
            <h2 class="blog-post-title mb-1" style="font-family:deathshead">{{ $post->title }}</h2>
            <p class="blog-post-meta" style="font-family:'clarendon-regular', monospace">{{ date('d M Y H:i', strtotime($post->created_at))  }}</p>
            <p style="font-family:'sf pro', monospace"> {{ $post->content }}</p>

        </article>

        <p class="text-muted">{{ $total_comments }} Komentar</p>
        @foreach($comments as $comment)
        <div class="card mb-3">
            <div class="card-body">
                <p>{{ $comment->comment }}</p>
            </div>
        </div>
        @endforeach

        <a href="{{ url('posts') }}" class="btn btn-success" style="font-family:'pricedown', monospace">Kembali</a>

    </div>


    <!-- javascript bootstrap local -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>