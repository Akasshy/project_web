@extends('admin/template')
@section('content')
<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>   
                </div>
                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" href="">Tambah Banner</a>
                <!-- Modal -->
                <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="backdrop-filter: blur(10px);">
                        <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Tambah Banner</h5>
                        </div>
                        <div class="modal-body">
                        <form action="/add/banner" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="mb-3">
                            <label for="photo" class="form-label">Foto Produk</label>
                            <input type="file" class="form-control" id="photo" name="foto_banner" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banner as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        <img src="{{asset('storage/foto_banner/'.$item->foto_banner)}}" width="80px" alt="">
                                    </td>
                                    <td>
                                        <a href="/delete/banner/{{$item->id}}" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection