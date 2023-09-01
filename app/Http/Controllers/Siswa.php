<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\sppModel;

class Siswa extends Controller
{
    public function index()
    {
        $pembayaran = sppModel::all();
        $data = [
            'title' => 'Spp | MyApp',
            'active' => 'Spp',
            'pembayaran' => $pembayaran

        ];
        return view('siswa.index', $data);
    }
}
