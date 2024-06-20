@extends('admin.komponen.master')

@section('content')
<form action="{{'/admin/'.$data->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="nama_barang" class="form-label">Nama Barang</label>
      <input type="text" class="form-control" name="nama_barang"  value="{{$data->nama_barang}}">
    </div>
    <div class="mb-3">
      <label for="jenis_barang" class="form-label">jenis Barang</label>
      <input type="text" class="form-control" name="jenis_barang" value="{{$data->jenis_barang}}">
    </div>
    <div class="mb-3">
      <label for="stok_barang" class="form-label">stok Barang</label>
      <input type="text" class="form-control" name="stok_barang" value="{{$data->stok_barang}}">
    </div>
    <div class="mb-3">
      <label for="harga_barang" class="form-label">Harga Barang</label>
      <input type="number" class="form-control" name="harga_barang" value="{{$data->harga_barang}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection