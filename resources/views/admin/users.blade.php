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
                    <strong class="card-title">Data Table Users</strong>
                </div>
             
                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" href="">Tambah User</a>
                <!-- Modal -->
                <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="backdrop-filter: blur(10px);">
                        <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Tambah User</h5>
                        </div>
                        <div class="modal-body">
                        <form action="/add/user" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                            <label for="price" class="form-label">Email</label>
                            <input type="email" class="form-control" id="price" name="email" required>
                            </div>
                            <div class="mb-3">
                            <label for="price" class="form-label">Password</label>
                            <input type="password" class="form-control" id="price" name="password" required>
                            </div>
                            <div class="mb-3">
                            <label for="stock" class="form-label">Role</label>
                            <select name="role" id="" class="form-control">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                            </div>
                            <div class="mb-3">
                            <label for="photo" class="form-label">Foto User</label>
                            <input type="file" class="form-control" id="photo" name="foto" required>
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
                                <th>Email</th>
                                <th>Role</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                @foreach ($user as $key => $item)      
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                        <div class="text" style="width:250px ; word-wrap:break-word ; white-space: normal ; overflow-wrap: break-word ">
                                            <h6 class="">{{$item->name}}</h6>
                                        </div>
                                    </td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->role}}</td>
                                    <td><img class="rounded" src="{{asset('storage/foto_user/'.$item->foto)}}" alt=""  style="width: 50px; object-fit: "></td>
                                    <td>
                                        <a href="/edit/product/{{$item->id}}" class="btn btn-primary">Edit</a>
                                       
                                        <a href="/delete/user/{{$item->id}}" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
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