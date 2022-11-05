<!doctype html>
<html lang="en">
  <head>
    <body>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>my blog @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
     crossorigin="anonymous">
     <link href="/resources/css/style.css" rel="stylesheet">
     <link href="/style.css" rel="stylesheet">
  </head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">Books World</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                    <a class="nav-link  {{Request::is('/') ? "active" : ""}}" aria-current="page" href="/home">Home</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link  {{Request::is('/books') ? "active" : ""}}" aria-current="page" href="/books">All Books</a>
                 </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is('/books/create') ? "active" : ""}}" href="/books/create">Add Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{Request::is('/mine') ? "active" : ""}}" href="/mine">My Account</a>
                </li>
            </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav ms-auto"> 
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                 @else                      
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}">
                            {{ __('Logout') }}
                        </a>
              @endguest   
        </ul>
        </form>
      </div>
    </div>
  </nav>
  @yield('contant')
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity=
  "sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>
</html>