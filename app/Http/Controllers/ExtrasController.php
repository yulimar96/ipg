<?php

namespace App\Http\Controllers;
use App\Models\Estados;
use App\Models\Municipios;
use App\Models\Parroquias;
use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    public function estados()
    {
        $data = Estados::get();
        return $data;
    }
    public function municipios()
    {
        $data = Municipios::get();
        return $data;
    }

    public function parroquias()
    {
        $data = Parroquias::get();
        return $data;
    }
}
