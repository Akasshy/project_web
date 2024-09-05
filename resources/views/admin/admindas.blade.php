@extends('admin/template')
@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6 ms-4">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-2">
                        <i class="pe-7s-cart"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class=""><span class="">{{$jual}}</span></div>
                            <div class="stat-heading">Terjual</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-4">
                        <i class="pe-7s-users"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class=""><span class="">{{$user}}</span></div>
                            <div class="stat-heading">User</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table Transaksi</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Produk</th>
                                    <th>Id User</th>
                                    <th>Nama Penerima</th>
                                    <th>Alamat</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Status</th>
                                    <th>Note</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @for ($i = 0; $i <= 100; $i++) --}}
                                @foreach ($transaksi  as $key => $item)    
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->id_produk}}</td>
                                    <td>{{$item->id_user}}</td>
                                    <td>{{$item->nama_penerima}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->metode_pembayaran}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->note}}</td>
                                    <td>{{$item->tanggal_transaksi}}</td>
                                    <td>
                                        <a href="/edit/transaksi/{{$item->id}}" class="btn btn-primary">Edit</a>
                                       
                                        <a href="/delete/transaksi/{{$item->id}}" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                                    
                                {{-- @endfor --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

@endsection