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
    <link rel="stylesheet" href="{{asset('asset/bootstrap/js/bootstrap.min.js')}}">
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
                        <a class="nav-link active" style="color: white" aria-current="page" href="#">Beranda</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" style="color:white">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"  href="#">Jaket Bomber</a></li>
                            <li><a class="dropdown-item"  href="#">Jaket Denim</a></li>
                            <li><a class="dropdown-item"  href="#">Jaket Varsity</a></li>
                            <li><a class="dropdown-item"  href="#">Jaket Kulit</a></li>
                            <li><a class="dropdown-item"  href="#">Hoodie</a></li>
                            <li><hr class="dropdown-divider" style="color: white"></li>
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
        <div style="padding: 6% 6% 0px 6% ;" class="container ">
            <div class="container mt-5">
                <div class="row ">
                    <div class="col-12">
                        <div class="image-scroll-horizontal">
                            <img src="{{asset('storage/image/banner1.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <img src="{{asset('storage/image/banner2.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <img src="{{asset('storage/image/banner1.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <img src="{{asset('storage/image/banner2.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <img src="{{asset('storage/image/banner1.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <img src="{{asset('storage/image/banner2.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <img src="{{asset('storage/image/banner1.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <!-- Tambahkan gambar lainnya sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
            </div>    
            <div class="rekomendasi" >
                <h4 class="fw-bold pt-2" style="margin-left: 16px ;color:rgb(0, 0, 0)">Rekomendasi</h4>
                <div class="scroll-container">
                    @for ($i = 1; $i <=6; $i++)     
                    <a href="#" style="text-decoration: none">      
                        <div class="atas card">
                            <img src="{{asset('storage/image/varsity1.jpg')}}" class="card-img-top" alt="Card 1">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #7A1CAC">RP.100.000</h5>
                                <div class="text" style="width:200px ; word-wrap:break-word ; white-space: normal ; overflow-wrap: break-word ">
                                    <p class="card-text">Jaket Varsity munkin </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endfor
                </div>
            </div>
            <div class="tersedia mt-5">
                <h4 class="fw-bold">Produk Yang Tersedia</h4>
                <div class="row">
                    @for ($i = 1; $i <=12; $i++)
                    <a href="" style="text-decoration: none" class="col-2 mt-3">
                        <div class="produk card">
                            <img src="{{asset('storage/image/varsity1.jpg')}}" class="card-img-top" alt="Card 1">
                            <div class="card-body">
                                <h6 class="card-title" style="color: #7A1CAC">RP.100.000</h6>
                                <div class="text" style="width:126px ; word-wrap:break-word ; white-space: normal ; overflow-wrap: break-word ;">
                                    <p style="font-size:small" class="card-text">Jaket Varsity keren parah </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endfor
                </div>
            </div>
        </div>
        <script>
            // Ambil elemen container
            const scrollContainer = document.querySelector('.image-scroll-horizontal');
        
            // Fungsi untuk menggeser scroll secara otomatis
            function autoScroll() {
                scrollContainer.scrollBy({
                    left: 1, // Jumlah piksel untuk menggeser
                    behavior: 'smooth'
                });
        
                // Jika sudah sampai akhir, kembalikan ke awal
                if (scrollContainer.scrollLeft + scrollContainer.clientWidth >= scrollContainer.scrollWidth) {
                    scrollContainer.scrollLeft = 0;
                }
            }
        
            // Mengatur interval untuk scroll otomatis
            setInterval(autoScroll, 20); // Sesuaikan kecepatan dengan mengubah nilai interval
        </script>
           
</body>
</html>