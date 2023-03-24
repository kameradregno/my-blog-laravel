<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>

    <!-- local css -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- js -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        
</head>

<body>

  @include('layouts.app.header')

   <div class="container my-4">

    @yield('content')

  @include('layouts.app.footer')

  </div>


</body>

</html>