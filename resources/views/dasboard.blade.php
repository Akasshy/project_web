@extends('template/navbar')
@section('content')
        <div  class="container ">
            <div class="container mt-5">
                <div class="row ">
                    <div class="col-12">
                        <div class="image-scroll-horizontal">
                            <img src="{{asset('storage/image/banner1.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <img src="{{asset('storage/image/banner2.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <img src="{{asset('storage/image/banner1.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <img src="{{asset('storage/image/banner2.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <img src="{{asset('storage/image/banner1.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <img src ="{{asset('storage/image/banner2.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <img src="{{asset('storage/image/banner1.jpg')}}" class="imgx-fluid mb-2" alt="Image 1">
                            <!-- Tambahkan gambar lainnya sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
            </div>    
            <div class="rekomendasi" >
                <h4 class="fw-bold pt-2" style="margin-left: 16px ;color:rgb(0, 0, 0)">Rekomendasi</h4>
                <div class="scroll-container">
                    @foreach ($product as $key => $item)      
                    <a href="/klicpr/{{$item->id}}" style="text-decoration: none">      
                        <div class="atas card">
                        <img src="{{asset('storage/foto/'.$item->foto_product)}}" class="card-img-top" alt="Card 1">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #7A1CAC">Rp.{{$item->harga}}</h5>
                                <div class="text" style="width:200px ; word-wrap:break-word ; white-space: normal ; overflow-wrap: break-word ">
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
@endsection
