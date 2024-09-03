@extends('template/navbar')
@section('content')
<style>
    .card {
    border: 1px solid #ddd;
    border-radius: 8px;
    max-width: 250px;
}
.input-group .btn {
    width: 40px;
}
#quantity {
    max-width: 60px;
}

</style>
    <div class="d-flex pt-4" style="gap:20px">
        <div class="img">
            <img src="{{asset('storage/foto/'.$clik->foto_product)}}" class="" style="width: 400px ; border-radius: 10px" alt="">
        </div>
        <div class="text">
            <div class="text" style="width:400px ; word-wrap:break-word ; white-space: normal ; overflow-wrap: break-word  ">
                <h4 class="fw-bold">{{$clik->name_product}}</h4>
                <h1 class="pt-4" style="color: #7A1CAC">Rp{{$clik->harga}}</h1>
                <h4 class="pt-5" style="border-bottom: 2px solid #7A1CAC ; width: 100px ; padding-bottom:10px ">Deskripsi</h4>
                <div class="des" style="width:250px ; word-wrap:break-word ; white-space: normal ; overflow-wrap: break-word ; object-fit: cover ">
                    <hp class="pt-3" style="">{{$clik->deskripsi}}</hp>
                </div>
            </div>
        </div>
        <div class="card p-3" style="height: 150px ; margin: 200px 0px 0px 0px">
            {{-- <h6>Atur jumlah dan catatan</h6>
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="button" id="decrease">-</button>
                <input type="text" class="form-control text-center" id="quantity" value="1">
                <button class="btn btn-outline-secondary" type="button" id="increase">+</button>
            </div> --}}
            <div>
                <span>Stok Total: </span><span style="color:#7A1CAC">{{$clik->stok}}</span>
            </div>
            <h5 class="mt-3">Subtotal <span id="subtotal">Rp.{{$clik->harga}}</span></h5>
            {{-- <button class="btn btn-success w-100 mb-2">+ Keranjang</button> --}}
            <button class="btn btn-outline-success w-100">Beli</button>
            {{-- <div class="d-flex justify-content-between mt-2">
                <a href="#" class="text-muted">Chat</a>
                <a href="#" class="text-muted">Wishlist</a>
                <a href="#" class="text-muted">Share</a>
            </div> --}}
        </div>
        
    </div>
@endsection