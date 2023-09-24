<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function profileData()
    {
        $data = [
            "nama" => "Deni",
            "domisili" => "Medan",
            "jurusan" => "Teknik Informatika",
            "universitas" => "Universitas Mikroskil",
            "kelas" => "Web Developer",
        ];

        return view('/profile', $data);
    }
}