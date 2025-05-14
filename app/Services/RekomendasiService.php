<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\DataLahan;

class RekomendasiService
{
    public function generate($dataLahan)
    {
        // Kirim data ke API Python untuk analisis AI
        try {
            $response = Http::post('http://127.0.0.1:5000/recommendation', [
                'jenis_tanah' => $dataLahan->jenis_tanah,
                'jenis_tanaman' => $dataLahan->jenis_tanaman,
                'kondisi_cuaca' => $dataLahan->kondisi_cuaca,
                'metode_pengairan' => $dataLahan->metode_pengairan,
            ]);

            // Pastikan respons berhasil
            if ($response->successful()) {
                return $response->json()['recommendation'];
            } else {
                return "Gagal mendapatkan rekomendasi, coba lagi.";
            }
        } catch (\Exception $e) {
            return "Kesalahan koneksi ke server AI: " . $e->getMessage();
        }
    }
}
