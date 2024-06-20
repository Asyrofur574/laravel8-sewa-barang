@extends('layout.app')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Stok Barang</th>
            <th>Harga</th>
            <th>Hubungi</th>
        </tr>
        
            @foreach ($data as $item)
            <tr>
            <th>{{$item->id}}</th>
            <th>{{$item->nama_barang}}</th>
            <th>{{$item->jenis_barang}}</th>
            <th>{{$item->stok_barang}}</th>
            <th>{{$item->harga_barang}}</th>
            <th><a href="wa.me/6285852298523">085852298523</a></th>
            
        </tr>
            @endforeach
        
        </thead>
   </table>
   {{$data->links()}}
@endsection
