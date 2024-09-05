@extends('admin/navbarad')
@section('content')
<div class="ms-5 ps-5">
    @if ($errors -> any)
        <ul>
            @foreach ($errors -> all() as $item)
                <li>$item</li>
            @endforeach
        </ul>
    @endif
    <form id="editProductForm" action="/update/user/{{$edit->id}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="d-flex" style="margin-left: -10%">

          <div class="one pe-5 me-5">
            <div class="dis" style="width: 200px"> 
                <div class="form-group " style="border: 1px solid black" style="width: 1px ; object-fit:cover">
                    <img src ="{{asset('storage/foto_user/'.$edit->foto)}}"  alt="Image 1"><br>
                    
                    {{-- @if($product->foto_product) --}}
                    {{-- <img src="{{ asset('storage/' . $product->foto_product) }}" alt="Product Photo" style="max-width: 150px; margin-top: 10px;"> --}}
                    {{-- @endif --}}
                </div>
                <input type="file" class="form-control-file" id="productPhoto" name="foto">
            </div>
          </div>
            <div class="two" style="margin-left: ">
                <div class="form-group">
                    <label for="productName">Nama</label>
                    {{-- <input type="text" name="" class="form-control" id=""> --}}
                    <input type="text" class="form-control" id="productName" name="name" value="{{$edit->name}}" required>
                </div>
                <div class="form-group">
                    <label for="productPrice">Email</label>
                    {{-- <input type="text" name="" class="form-control" id=""> --}}
                    <input type="email" class="form-control" id="productPrice" name="email" value="{{ $edit->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Pilih Role</label>
                    <select class="form-select" id="status" name="role" required>
                        <option value="" disabled>Pilih status Role</option>
                        <option value="admin" {{ $edit->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ $edit->role == 'user' ? 'selected' : '' }}>User</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection