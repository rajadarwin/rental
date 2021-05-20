<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('admin')}}">Admin panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('consoles')}}">Console</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('games')}}">Games</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('orders')}}">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('pricing')}}">Pricing</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Add new...
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('newgame')}}">Game</a></li>
                <li><a class="dropdown-item" href="{{route('newconsole')}}">Console</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <button class="btn btn-outline-danger" type="submit">Log out</button>
          </form>
        </div>
      </div>
    </nav>
    <br>
    <div class="container">
      <h2>@yield('title')</h2>
    </div>
    
    {{--content goes here--}}
    @yield('content')
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.js" charset="utf-8"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" charset="utf-8"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js" charset="utf-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  {{--yield da script--}}
  @yield('script')
</html>
