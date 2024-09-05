@extends('template/navbar')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

<style>
    /* Styling tambahan untuk foto profil */
    .profile-picture {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Styling tambahan untuk container */
    .img {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .edit-btn {
        margin-top: -40px;
    }
</style>
<div class="container mt-5 profile-container">
    <div class="row align-items-center" style="gap: 20px">
        <!-- Bagian kiri: Foto Profil -->
        <div class="img col-md-5 text-center mb-3">
            <img src="{{asset('storage/foto_user/'.$profile->foto)}}" class="profile-picture" alt="Foto Profil">
        </div>

        <!-- Bagian kanan: Detail Profil -->
        <div class="col-md-6">
            <!-- Tombol Edit Profile -->
            <div class="d-flex justify-content-end edit-btn">
                <button class="btn btn-primary mb- mt-4">
                    <i class="bi bi-pencil-square"></i> Edit Profile
                </button>
            </div>
            <!-- Nama dan Email -->
            <h3 class="mb-2">{{$profile->name}}</h3>
            <p class="mb-4"><strong>Email:</strong> {{$profile->email}}</p>

            <!-- Pesanan -->
            <h5>Daftar Pesanan</h5>
            <ul class="list-group">
                {{-- @foreach ($pesanan as $key => $item)         --}}
                <li class="list-group-item">
                    <p>{{$pesanan}}</p>
                </li>
                {{-- @endforeach --}}
              
            </ul>
        </div>
    </div>
</div>


@endsection

