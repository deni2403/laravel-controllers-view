<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function universityData()
    {

        $data = [
            "kampusA" => "Jalan Thamrin No. 124 Medan - 20212",
            "kampusB" => "Jalan Thamrin No. 140 Medan - 20212",
            "kampusC" => "Jalan Thamrin No. 112 Medan - 20212",
            "telepon" => "(061) 4573767"
        ];

        return view('/university', $data);
    }
}