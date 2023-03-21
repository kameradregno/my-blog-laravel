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
        <a href="{{ url('posts') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <span class="fs-2" style="color: white; font-family:'deathshead 3d', monospace;">Blog-Ana</span>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mx-4">
          <li><a href="{{ url('posts/create') }}" class="nav-link px-2 text-white fs-4" style="font-family:'deathshead', monospace">Buat Post</a></li>
          <li><a href="{{ url('posts/trash') }}" class="nav-link px-2 text-white fs-4" style="font-family:'deathshead', monospace">Riwayat Hapus</a></li>
          <!-- <li><a href="#" class="nav-link px-2 text-white" style="font-family:'product sans', monospace">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white" style="font-family:'product sans', monospace">About</a></li> -->
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search" style="font-family:'deathshead outline', monospace">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2" style="font-family:'deathshead halftone', monospace">Login</button>
          <button type="button" class="btn btn-warning" style="font-family:'deathshead halftone', monospace"">Sign-up</button>
        </div>
      </div>
    </div>
  </header>

    <div class="container my-4">
        
    
        <!-- <a href="{{ url('posts/create') }}" class="btn btn-warning mx-3  mb-4" style="font-family:'pricedown', monospace">+ Buat Post</a>

        <a href="{{ url('posts/trash') }}" class="btn btn-danger mb-4" style="font-family:'pricedown', monospace">Riwayat Hapus</a> -->
            
       
        
        <p class="text-muted" style="font-family:'product sans', monospace">Total Postingan Aktif : <span class="badge bg-success">{{ $total_active }}</span>   Total postingan non Aktif : <span class="badge bg-warning">{{ $total_nonactive }}</span>   Total postingan dihapus : <span class="badge bg-danger">{{ $total_dihapus }}</span> </p>

        @foreach($posts as $p)

        <div class="card my-4">
            <div class="card-body">
                <h5 class="card-title" style="font-family:'itc avant garde gothic', monospace">{{ $p->title }}</h5>
                <p class="card-text" style="font-family:'sf pro', monospace">{{ $p->content }}</p>
                <p class="card-text" style="font-family:'clarendon-regular', monospace"><small class="text-muted">Created
                        {{ date("d M Y, H:i", strtotime($p->created_at)) }}
                    </small> </p>
                <a href="{{ url("posts/$p->slug") }}" class="btn btn-primary" style="font-family:'Futura LT', monospace">Selengkapnya</a>
                <a href="{{ url("posts/$p->slug/edit") }}" class="btn btn-warning" style="font-family:'Futura LT', monospace">Edit</a>
            </div>
        </div>

        @endforeach

    </div>

    <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted" style="font-family:'deathshead', monospace">2023 Company, Inc</p>
  </footer>


    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>
</body>

</html>