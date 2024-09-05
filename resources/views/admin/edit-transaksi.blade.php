@extends('admin/navbarad')
@section('content')
    <div class="mt-5">
        @if ($errors -> any)
        <ul>
            @foreach ($errors -> all() as $item)
                <li>$item</li>
            @endforeach
        </ul>
    @endif
    <form action="/update/transaksi/{{$order->id}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="status" class="form-label">Status Pengiriman</label>
            <select class="form-select w-75" id="status" name="status" required>
                <option value="" disabled>Pilih status pengiriman</option>
                <option value="packing" {{ $order->status == 'packing' ? 'selected' : '' }}>Packing</option>
                <option value="perjalanan" {{ $order->status == 'perjalanan' ? 'selected' : '' }}>Dikirim</option>
                <option value="selesai" {{ $order->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Ubah">
    </form>
    </div>
@endsection