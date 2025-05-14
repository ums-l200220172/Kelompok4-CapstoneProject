<?php

namespace App\Http\Controllers;

use App\Models\Perbandingan;
use Illuminate\Http\Request;

class PerbandinganController extends Controller
{
    /**
     * Tampilkan semua data pupuk untuk perbandingan.
     */
    public function index()
    {
        $dataPupuk = Perbandingan::all();

        return view('fitur.perbandingan', compact('dataPupuk'));
    }

    /**
     * Bandingkan dua pupuk berdasarkan ID.
     */
    public function bandingkan(Request $request)
    {
        $request->validate([
            'pupuk1' => 'required|exists:data_pupuk,id',
            'pupuk2' => 'required|exists:data_pupuk,id|different:pupuk1',
        ]);

        $pupuk1 = Perbandingan::findOrFail($request->pupuk1);
        $pupuk2 = Perbandingan::findOrFail($request->pupuk2);

        return view('perbandingan.hasil', compact('pupuk1', 'pupuk2'));
    }

    public function getDataPupuk(Request $request)
    {
        $nama1 = $request->input('pupuk1');
        $nama2 = $request->input('pupuk2');

        $pupuk1 = \App\Models\Perbandingan::where('nama_pupuk', $nama1)->first();
        $pupuk2 = \App\Models\Perbandingan::where('nama_pupuk', $nama2)->first();

        return response()->json([
            'pupuk1' => $pupuk1,
            'pupuk2' => $pupuk2,
        ]);
    }


    public function search(Request $request)
    {
        $keyword = $request->input('query');

        $data = \App\Models\Perbandingan::where('nama_pupuk', 'LIKE', "%$keyword%")
                ->orWhere('manfaat', 'LIKE', "%$keyword%")
                ->get();

        return response()->json($data);
    }


}
