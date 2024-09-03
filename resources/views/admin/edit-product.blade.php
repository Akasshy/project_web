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
    <form id="editProductForm" action="/update/product/{{$product->id}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="d-flex" style="margin-left: -10%">

          <div class="one pe-5 me-5">
            <div class="dis" style="width: 200px"> 
                <div class="form-group " style="border: 1px solid black" style="width: 1px ; object-fit:cover">
                    <img src ="{{asset('storage/foto/'.$product->foto_product)}}"  alt="Image 1"><br>
                    
                    {{-- @if($product->foto_product) --}}
                    {{-- <img src="{{ asset('storage/' . $product->foto_product) }}" alt="Product Photo" style="max-width: 150px; margin-top: 10px;"> --}}
                    {{-- @endif --}}
                </div>
                <input type="file" class="form-control-file" id="productPhoto" name="foto_product">
            </div>
          </div>
            <div class="two" style="margin-left: ">
                <div class="form-group">
                    <label for="productName">Nama Produk</label>
                    {{-- <input type="text" name="" class="form-control" id=""> --}}
                    <input type="text" class="form-control" id="productName" name="name_product" value="{{$product->name_product}}" required>
                </div>
            
                <div class="form-group">
                    <label for="productPrice">Harga</label>
                    {{-- <input type="text" name="" class="form-control" id=""> --}}
                    <input type="number" class="form-control" id="productPrice" name="harga" value="{{ $product->harga }}" required>
                </div>
            
                <div class="form-group">
                    <label for="productStock">Stok</label>
                    {{-- <input type="text" name="" class="form-control" id=""> --}}
                    <input type="number" class="form-control" id="productStock" name="stok" value="{{ $product->stok }}" required>
                </div>
                <div class="form-group">
                    <label for="productStock">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" style="height: 100px"  id="" cols="30" rows="10">{{$product->deskripsi}}</textarea>
                    {{-- <input type="number" class="form-control" id="productStock" name="stok" value="{{ $product->stok }}" required> --}}
                </div>
                <div class="form-group">
                    <label for="productStock">Kategori</label>
                    {{-- <input type="text" name="" class="form-control" id=""> --}}
                    <input type="text" class="form-control" id="productStock" name="kategori" value="{{ $product->stok }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>
        </div>
    </form>
</div>
@endsection