<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dasboard.css')}}">
<body>
    <script src="{{asset('asset/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed ; z-index: 100000 ;width:100% ;">
        <div class="container">
            <img src="{{asset('storage/image/logo.png')}}" alt="Logo" height="60px" width="60px" class="img-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white" aria-current="page" href="/home">Beranda</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/profile" style="color:white">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu bg-dark"  aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"  href="3">Jaket Bomber</a></li>
                            <li><a class="dropdown-item"  href="#">Jaket Denim</a></li>
                            <li><a class="dropdown-item"  href="#">Jaket Varsity</a></li>
                            <li><a class="dropdown-item"  href="#">Jaket Kulit</a></li>
                            <li><a class="dropdown-item"  href="#">Hoodie</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" style="background-color: #7A1CAC ; color:white" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
   <div style="padding: 6% 0% 0px 0% ;" class="container">
        @yield('content')
   </div>
</body>
</html>