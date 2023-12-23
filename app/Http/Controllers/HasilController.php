<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class HasilController extends Controller
{
    public function index()
    {
        // Mengambil daftar NIM dari tabel mahasiswa
       
       $data= Pendaftaran::all();
       $akademik=Pendaftaran::where('jenis_beasiswa', 'akademik')->count();
       $nonakademik=Pendaftaran::where('jenis_beasiswa', 'nonakademik')->count();

        // Menampilkan halaman pendaftaran dengan data judul, dan daftar NIM
        return view('hasil', [
            'title' => 'Home',
            'data' =>$data,
            'akademik'=> $akademik,
            'nonakademik'=> $nonakademik,
        ]);
    }    
}
