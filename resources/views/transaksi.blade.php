@extends('template/navbar')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4 fw-bold" style="text-align: center">AYOK BAYAR</h2>
    <form method="post" action="/beli/{{$transaksi->id}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="alamat" class="form-label">Nama Penerima</label>
                    <textarea class="form-control" id="alamat" name="nama_penerima" rows="1" placeholder="Masukkan nama penerima"></textarea>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat Anda"></textarea>
                </div>
        
                <div class="mb-3">
                    <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                    <select class="form-select" id="metode_pembayaran" name="metode_pembayaran">
                        <option value="cod">COD (Cash on Delivery)</option>
                        <option value="dana">DANA</option>
                        <option value="bri">BRI</option>
                        <option value="indomaret">Indomaret</option>
                        <option value="alfamaret">Alfamaret</option>
                    </select>
                </div>
        
                <div class="mb-3">
                    <label for="catatan" class="form-label">Catatan</label>
                    <textarea class="form-control" id="catatan" name="note" rows="3" placeholder="Tambahkan catatan jika perlu"></textarea>
                </div>        
            </div>
            <div class="col-md-6">
                {{-- <form> --}}
                    <div class="card p-3" style=" margin: 0px 0px 0px 0px">
                        <h5>Ringkasan Belanja</h5>
                        <div>
                            <span>Jumlah Beli: </span><span style="color:#7A1CAC">1</span>
                        </div>
                        <h5 class="mt-3 mb-4 pb-2" style="border-bottom: 1px solid rgb(191, 191, 191)">Total Tagihan <span id="subtotal" style="color: #7A1CAC">{{$transaksi->harga}}</span></h5>
                        {{-- <button class="btn btn-success w-100 mb-2">+ Keranjang</button> --}}
                        <button type="submit"  class="btn btn-outline-success w-100">Beli</button>
                    </div>
                {{-- </form> --}}
            </div>
        </div>
    </form>
</div>
@endsection