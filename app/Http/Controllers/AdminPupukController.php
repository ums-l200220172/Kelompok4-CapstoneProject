<?php

namespace App\Http\Controllers;

use App\Models\Perbandingan;
use Illuminate\Http\Request;

class AdminPupukController extends Controller
{
    public function index()
    {
        $dataPupuk = Perbandingan::all();

        return view('admin.pupuk', compact('dataPupuk'));
    }
}
