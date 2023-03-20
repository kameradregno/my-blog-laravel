<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .body {
            padding: 6px;
            border-bottom: 2px solid red;
        }

        span {
            color: aqua;
        }
    </style>
</head>

<body>

<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="{{ url('posts/create') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <span class="fs-2" style="color: white; font-family:'deathshead 3d', monospace;">Blog-Ana</span>
        </a>
        <a href="{{ url('posts') }}" class="btn btn-outline-light me-2 mx-3" style="font-family:'deathshead halftone', monospace">Kembali</a>    
</header>

    <!-- <div class="container my-4">
        <h1 style="font-family:'deathshead 3D', monospace">
            Blog-Ana <a href="{{ url('posts') }}" class="btn btn-success mx-3" style="font-family:'pricedown', monospace"></a>
        </h1> -->

        @foreach($posts as $p)

        <div class="card my-4">
            <div class="card-body">
                <h5 class="card-title" style="font-family:'itc avant garde gothic', monospace">{{ $p->title }}</h5>
                <p class="card-text" style="font-family:'sf pro', monospace">{{ $p->content }}</p>
                <p class="card-text" style="font-family:'clarendon-regular', monospace"><small class="text-muted">Created At
                        {{ date("d M Y H:i", strtotime($p->created_at)) }}
                    </small> </p>

            {{-- * form hapus data --}}
             <form action="{{ url("posts/$p->id/permanent")}}" method="post">
                @method('DELETE')
                @csrf
    
                <button type="submit"class="btn btn-danger my-2" style="font-family:'pricedown', monospace">Hapus Permanen</button>
    
            </form>

            <form action="{{ url("posts/$p->id/restore")}}" method="post">
                @method('DELETE')
                @csrf
    
                <button type="submit"class="btn btn-warning my-4" style="font-family:'pricedown', monospace">Pulihkan</button>
    
            </form>
            </div>
        </div>

        @endforeach

    </div>



    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>
</body>

</html>