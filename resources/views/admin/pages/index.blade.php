@extends('admin.komponen.master')

@section('content')
<h1>Table Barang Saat Ini</h1>
<a href="/admin/create" class="btn btn-info">Tambah Barang</a>
<a href="/home" class="btn btn-danger">Logout</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Stok Barang</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        
            @foreach ($data as $item)
            <tr>
            <th>{{$item->id}}</th>
            <th>{{$item->nama_barang}}</th>
            <th>{{$item->jenis_barang}}</th>
            <th>{{$item->stok_barang}}</th>
            <th>{{$item->harga_barang}}</th>
            <th>
                <a href="{{url('admin/'.$item->id.'/edit')}}" class="btn btn-secondary">Edit</a>
                <form action="{{url('/admin/'.$item->id)}}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </th>
        </tr>
            @endforeach
        
        </thead>
   </table>
   {{$data->links()}}
@endsection