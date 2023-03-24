<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="{{ url('posts') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <span class="fs-2" style="color: white; font-family:'deathshead 3d', monospace;">Blog-Ana</span>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mx-4">
          <li><a href="{{ url('posts/create') }}" class="nav-link px-2 text-white fs-4" style="font-family:'deathshead laser', monospace">Buat Post</a></li>
          <li><a href="{{ url('posts/trash') }}" class="nav-link px-2 text-white fs-4" style="font-family:'deathshead laser', monospace">Riwayat Hapus</a></li>
          <!-- <li><a href="#" class="nav-link px-2 text-white" style="font-family:'product sans', monospace">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white" style="font-family:'product sans', monospace">About</a></li> -->
        </ul>

        <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search" style="font-family:'deathshead outline', monospace">
        </form> -->

        <div class="text-end">
          <a href="{{ url("login") }}"  class="btn btn-outline-light me-2" style="font-family:'futura-book', monospace">Login</a>
          <button type="button" class="btn btn-warning" style="font-family:'futura-book', monospace"">Sign-up</button>
        </div>
      </div>
    </div>
  </header>