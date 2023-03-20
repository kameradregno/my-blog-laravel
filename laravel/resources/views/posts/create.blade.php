<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Post</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="{{ url('posts/create') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <span class="fs-2" style="color: white; font-family:'deathshead 3d', monospace;">Buat Post Baru</span>
        </a>
</header>

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


    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>