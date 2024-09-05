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
                        <a class="nav-link" href="/user/profile" style="color:white">Profile</a>
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
                <a href="/logout">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-box-arrow-left ms-3" style="color:white ; " viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                    </svg>
                </a>
            </div>
        </div>
    </nav>
   <div style="padding: 6% 0% 0px 0% ;" class="container">
        @yield('content')
   </div>
</body>
</html>