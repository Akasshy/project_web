@extends('template/navbar')
@section('content')
<style>
    .card {
    border: 1px solid #ddd;
    border-radius: 8px;
    max-width: 450px;
}

</style>
<div class="row mt-4 ms-2" style="gap: 10px">
    <div class="col-md-4 ms-4">
        <div class="img" style="border: 1px solid #ddd ; border-radius: 10px">
            <img src="{{asset('storage/foto/'.$clik->foto_product)}}" class="" style="width: 350px ; border-radius: 10px" alt="">
        </div>
    </div>
    <div class="col-md-4 ">
        <div class="text">
            <div class="text" style="width:400px ; word-wrap:break-word ; white-space: normal ; overflow-wrap: break-word  ">
                <h4 class="fw-bold">{{$clik->name_product}}</h4>
                <h1 class="pt-4" style="color: #7A1CAC">Rp{{$clik->harga}}</h1>
                <h4 class="pt-5" style="border-bottom: 2px solid #7A1CAC ; width: 100px ; padding-bottom:10px ">Deskripsi</h4>
                <div class="des" style="width:250px ; word-wrap:break-word ; white-space: normal ; overflow-wrap: break-word ; object-fit: cover ">
                    <p class="pt-3" style="">{{$clik->deskripsi}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3" style=" margin: 200px 0px 0px 0px">
            <span>Stok Total: </span><span style="color:#7A1CAC">{{$clik->stok}}</span>
            <h5 class="mt-3">Subtotal <span id="subtotal">Rp{{$clik->harga}}</span></h5>
            <a type="button" href="/transaksi/{{$clik->id}}" class="btn btn-outline-success w-100">Beli</a>
        </div>
    </div>
</div>

@endsection