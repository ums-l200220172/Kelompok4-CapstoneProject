<?php

namespace App\Http\Controllers;

use App\Models\Perbandingan;
use Illuminate\Http\Request;

class AdminEdukasiController extends Controller
{
    public function index()
    {
        $dataPupuk = Perbandingan::all();

        return view('admin.edukasi', compact('dataPupuk'));
    }
}
