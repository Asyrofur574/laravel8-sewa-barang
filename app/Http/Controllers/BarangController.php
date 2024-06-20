<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barang::paginate(2);
        return  view('admin.pages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'stok_barang' => 'required|numeric',
            'harga_barang' => 'required|numeric',
        ],[
            'nama_barang.required' => 'Nama Barang Harus Diisi',
            'jenis_barang.required' => 'Jenis Barang Harus Diisi',
            'stok_barang.required' => 'Stok Barang Harus Diisi',
            'harga_barang.required' => 'Harga Barang Harus Diisi'
        ]);
        $data = [
            'nama_barang' => $request->input('nama_barang'),
            'jenis_barang' => $request->input('jenis_barang'),
            'stok_barang' => $request->input('stok_barang'),
            'harga_barang' => $request->input('harga_barang'),
        ];
        Barang::create($data);
        return redirect('/admin')->with('success', 'Berhasil Tambah Data Barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Barang::where('id', $id)->first();
        return view('admin.pages.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'stok_barang' => 'required|numeric',
            'harga_barang' => 'required|numeric',
        ],[
            'nama_barang.required' => 'Nama Barang Harus Diisi',
            'jenis_barang.required' => 'Jenis Barang Harus Diisi',
            'stok_barang.required' => 'Stok Barang Harus Diisi',
            'harga_barang.required' => 'Harga Barang Harus Diisi'
        ]);
        $data = [
            'nama_barang' => $request->input('nama_barang'),
            'jenis_barang' => $request->input('jenis_barang'),
            'stok_barang' => $request->input('stok_barang'),
            'harga_barang' => $request->input('harga_barang'),
        ];
        Barang::where('id', $id)->update($data);
        return redirect('/admin')->with('success', 'Berhasil Update Data Barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::where('id', $id)->delete();
        return redirect('/admin')->with('success', 'Berhasil Hapus Data Barang');
    }
}
