<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="{{ url('posts') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <span class="fs-2" style="color: white; font-family:'deathshead 3d', monospace;">Blog-Ana</span>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mx-4">
        @if(Request::path() == 'login' || Request::is('posts/*') || Request::path() == 'register')
        @php $hide = true; @endphp
        @endif
        @if(!isset($hide))
        <li class="nav-item"><a href="{{ url('posts/create') }}" class="nav-link px-2 text-white fs-4" style="font-family:'deathshead laser', monospace">Buat Post</a></li>
        <li class="nav-item"><a href="{{ url('posts/trash') }}" class="nav-link px-2 text-white fs-4" style="font-family:'deathshead laser', monospace">Riwayat Hapus</a></li>
        @endif
        </ul>


        @if(Request::path() == 'login' || Request::is('posts/*'))
        @php $hide = true; @endphp
        @endif
        @if(!isset($hide))
         <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search" style="font-family:'deathshead outline', monospace">
        </form>
        @endif
        



        <div class="text-end">
        @if (!Auth::check())
          <a href="{{ url("login") }}"  class="btn btn-outline-light me-2" style="font-family:'futura-book', monospace">Login</a>
          <a href="{{ url("register") }}"  class="btn btn-outline-warning me-2" style="font-family:'futura-book', monospace">Register</a>
        @else()
          <button type="button"  class="btn" style="color: white; background-color: black !important; border-color: white !important; font-family:'futura-book', monospace">{{ Auth::user()->name }}</button>
          <a href="{{ url("logout") }}"class="btn btn-warning" style="font-family:'futura-book', monospace">Logout</a>
        @endif
        </div>
      </div>
    </div>
  </header>