@extends('admin/template')
@section('content')
<style>
    /* Blur background when modal is open */
    .modal-backdrop.show {
      backdrop-filter: blur(10px);
    }
  </style>
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table Product</strong>
                </div>
             
                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" href="">Tambah Product</a>
                <!-- Modal -->
                <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="backdrop-filter: blur(10px);">
                        <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Tambah Produk</h5>
                        </div>
                        <div class="modal-body">
                        <form action="/add/product" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="name" name="name_product" required>
                            </div>
                            <div class="mb-3">
                            <label for="price" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="price" name="harga" required>
                            </div>
                            <div class="mb-3">
                            <label for="stock" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="stock" name="stok" required>
                            </div>
                            <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="description" name="deskripsi" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            {{-- <input type="text" class="form-control" id="category" name="kategori" required> --}}
                            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                            <select class="form-select" id="metode_pembayaran" name="kategori">
                                <option value="varsity">Varsity</option>
                                <option value="hoodie">Hodie</option>
                                <option value="denim">Denim</option>
                                <option value="kulit">Kulit</option>
                                <option value="boomber">Boomber</option>
                            </select>
                            </div>
                            <div class="mb-3">
                            <label for="photo" class="form-label">Foto Produk</label>
                            <input type="file" class="form-control" id="photo" name="foto_product" required>
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
                                <th>Name</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                @foreach ($product as $key => $item)      
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        <div class="text" style="width:250px ; word-wrap:break-word ; white-space: normal ; overflow-wrap: break-word ">
                                            <h6 class="">{{$item->name_product}}</h6>
                                        </div>
                                    </td>
                                    <td>{{$item->harga}}</td>
                                    <td>{{$item->stok}}</td>
                                    <td>{{$item->kategori}}</td>
                                    <td><img class="rounded" src="{{asset('storage/foto/'.$item->foto_product)}}" alt=""  style="width: 50px; object-fit: "></td>
                                    <td>
                                        <a href="/edit/product/{{$item->id}}" class="btn btn-primary">Edit</a>
                                       
                                        <a href="/delete/product/{{$item->id}}" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
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