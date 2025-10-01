<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view ('beranda',['title' => "Home"]);
    }
        public function profil()
    {
            $data = [
            'nama' => 'Ghazy Abyu Pandega',
            'kelas' => 'XI PPLG 2',
            'sekolah' => 'SMK RUS'
        ];
        return view('profil',['title' => "Profil"], $data);
    }
    public function kontak()
    {
            $data = [
            'email' => 'abyupandega@gmail.com',
            'no' => '087718601129'
        ];
        return view('kontak',['title' => "Kontak"], $data);
    }
    public function home()
    {
        return view ('home',['title' => "Home"]);
    }

}
