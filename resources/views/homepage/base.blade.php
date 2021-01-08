<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-info shadow-sm">
        <div class="container-fluid">
        <a class="navbar-brand ml-5" href="/"><h4 class="text-white">Coaching Mgnt.System </h4></a>
        <form action="" method="GET" class="form-inline mx-auto">
            <div class="input-group ml-4">
                <input type="search" name="search" class="form-control ml-5" size="60">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-dark">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"  xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                          </svg>
                    </button>
                </div>
            </div>
        </form>
        <ul class="navbar-nav ml-auto mr-5">

            @auth
            <li class="nav-item"><a href="{{ route('apply') }}" class="nav-link">Apply for admission</a></li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" name="logout" value="Logout" class="btn btn-outline-dark">
            </form>
            @endauth


            @guest
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Signup</a></li>

            @endguest
                </ul>
        </div>
    </nav>
    @section('content')

    @show
</body>

</html>
