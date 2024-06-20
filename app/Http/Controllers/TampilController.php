<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class TampilController extends Controller
{
    public function index()
    {
        $data = Barang::paginate(5);
        return  view('home.stok', compact('data'));
    }
}
