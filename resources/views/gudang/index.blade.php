@extends('main')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>id</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $barang)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$barang->nama_barang}}</td>
            <td>{{"Rp ".number_format($barang->harga, 2, ',', '.')}}</td>
            <td>{{$barang->stok}}</td>
            <td>created at : {{date('d/m/Y', strtotime($barang->created_at))}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection