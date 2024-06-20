@extends('admin.komponen.master')

@section('content')
<form action="/admin" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nama_barang" class="form-label">Nama Barang</label>
      <input type="text" class="form-control" name="nama_barang" placeholder="Scoppy">
    </div>
    <div class="mb-3">
      <label for="jenis_barang" class="form-label">jenis Barang</label>
      <input type="text" class="form-control" name="jenis_barang" placeholder="Motor">
    </div>
    <div class="mb-3">
      <label for="stok_barang" class="form-label">stok Barang</label>
      <input type="text" class="form-control" name="stok_barang">
    </div>
    <div class="mb-3">
      <label for="harga_barang" class="form-label">Harga Barang</label>
      <input type="number" class="form-control" name="harga_barang" placeholder="50000">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection