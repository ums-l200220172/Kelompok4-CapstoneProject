<?php

namespace App\Http\Controllers;

use App\Models\DataLahan;
use Illuminate\Http\Request;

class DataLahanController extends Controller
{
    // Menampilkan daftar data lahan
    public function index(Request $request)
    {
        $query = DataLahan::query();
        
        // Tambahkan fitur pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('jenis_tanah', 'LIKE', "%{$search}%")
                  ->orWhere('jenis_tanaman', 'LIKE', "%{$search}%")
                  ->orWhere('kondisi_cuaca', 'LIKE', "%{$search}%")
                  ->orWhere('metode_pengairan', 'LIKE', "%{$search}%");
        }

        $dataLahan = $query->paginate(10); // Pagination
        return view('fitur.rekomendasi', compact('dataLahan'));
    }

    // Menyimpan data lahan baru
    public function store(Request $request)
    {
        $request->validate([
            'jenis_tanah' => 'required|string|max:255',
            'jenis_tanaman' => 'required|string|max:255',
            'kondisi_cuaca' => 'required|string|max:255',
            'metode_pengairan' => 'nullable|string|max:255',
        ]);

        DataLahan::create($request->all());

        return redirect()->route('fitur.rekomendasi')->with('success', 'Data lahan berhasil ditambahkan.');
    }

    // Menampilkan detail data
    public function show($id)
    {
        $dataLahan = DataLahan::findOrFail($id);

        // // Menggunakan service untuk mendapatkan rekomendasi
        // $rekomendasi = $this->rekomendasiService->generate($dataLahan);

        return view('fitur.rekomendasi', compact('dataLahan'));
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $dataLahan = DataLahan::findOrFail($id);
        return view('fitur.rekomendasi_edit', compact('dataLahan')); // Buatkan file blade ini jika belum ada
    }

    // Menyimpan perubahan data
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_tanah' => 'required|string|max:255',
            'jenis_tanaman' => 'required|string|max:255',
            'kondisi_cuaca' => 'required|string|max:255',
            'metode_pengairan' => 'nullable|string|max:255',

        ]);

        $dataLahan = DataLahan::findOrFail($id);
        $dataLahan->update($request->all());

        return redirect()->route('fitur.rekomendasi')->with('success', 'Data lahan berhasil diperbarui.');
    }

    // Menghapus data
    public function destroy($id)
    {
        $dataLahan = DataLahan::findOrFail($id);
        $dataLahan->delete();

        return redirect()->route('fitur.rekomendasi')->with('success', 'Data lahan berhasil dihapus.');
    }
}
