@extends('template/navbar')
@section('content')
        <div  class="container mt-5">
            <div id="carouselExample" class="carousel slide ms-5" style="width: 1000px; height: 300px; object-fit: fill;" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    @foreach ($banner as $key => $item)
                        <div class="carousel-item @if($key == 0) active @endif">
                            <img src="{{ asset('storage/foto_banner/'. $item->foto_banner) }}" style="width: 1000px; height: 300px; border-radius: 20px;" alt="...">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #7A1CAC;"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #7A1CAC;"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>            
              
            <div class="rekomendasi" style="padding-top: 40%">
                <h4 class="fw-bold pt-2" style="margin-left: 16px ;color:rgb(0, 0, 0)">Rekomendasi</h4>
                <div class="scroll-container">
                    @foreach ($product as $key => $item)      
                    <a href="/klicpr/{{$item->id}}" style="text-decoration: none">      
                        <div class="atas card">
                        <img src="{{asset('storage/foto/'.$item->foto_product)}}" class="card-img-top" alt="Card 1">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #7A1CAC">Rp.{{$item->harga}}</h5>
                                <div class="text" style="width:150px ; word-wrap:break-word ; white-space: normal ; overflow-wrap: break-word ">
                                    <p class="card-text">{{$item->name_product}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="tersedia mt-5">
                <h4 class="fw-bold">Produk Yang Tersedia</h4>
                <div class="row">
                    @for ($i = 1; $i <=12; $i++)
                    <a href="" style="text-decoration: none" class="col-md-2 mt-3">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
