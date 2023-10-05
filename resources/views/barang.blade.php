@extends('templates.main')

@section('root')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga</th>
        <th scope="col">Stok</th>
        <th scope="col">ID Supplier</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data_barang as $barang)
        <tr>
            <th scope="row">{{ $barang->id }}</th>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ "Rp ". number_format($barang->harga, 2, ',', '.') }}</td>
            <td>{{ $barang->stok }}</td>
            <td>{{ $barang->id_supplier }}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
@endsection