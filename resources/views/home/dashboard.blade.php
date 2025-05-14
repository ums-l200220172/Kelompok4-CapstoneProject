<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Rekomendasi Pemupukan</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full bg-gray-200 p-4 flex justify-between items-center shadow-md z-50">
        <h1 class="text-lg font-bold">Sistem Rekomendasi Pemupukan</h1>
        <a href="{{ url('/login') }}"
                class="bg-blue-700 hover:bg-blue-800 text-white px-3 py-1 rounded-lg flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 10a1 1 0 011-1h8.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L12.586 11H4a1 1 0 01-1-1z"
                        clip-rule="evenodd" />
                </svg>
                Logout
            </a>
    </nav>
    
    
    <!-- Hero Section -->
    <div class="flex justify-center pt-24">
        <img src="img/bannerpetani.jpg" class="w-[1400px] h-[300px] object-cover rounded-lg shadow-lg" alt="">
    </div>
    
    <div class="flex justify-center pt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 text-center">
            <!-- Fitur Rekomendasi Pupuk -->
            <a href="{{ url('/rekomendasi') }}" class="bg-white shadow-xl p-8 rounded-lg w-80 cursor-pointer hover:bg-gray-100 transition transform hover:scale-105">
                <h3 class="text-2xl font-bold">Rekomendasi Pupuk</h3>
                <p class="text-gray-600 text-md">Menampilkan jenis pupuk yang sesuai kebutuhan</p>
            </a>
    
            <!-- Fitur Kalkulator Pupuk -->
            <a href="{{ url('/kalkulator') }}" class="bg-white shadow-xl p-8 rounded-lg w-80 cursor-pointer hover:bg-gray-100 transition transform hover:scale-105">
                <h3 class="text-2xl font-bold">Kalkulator Pupuk</h3>
                <p class="text-gray-600 text-md">Memberikan dosis takaran pupuk dan metode pengaplikasian pupuk</p>
            </a>
    
            <!-- Fitur Perbandingan Pupuk -->
            <a href="{{ url('/perbandingan') }}" class="bg-white shadow-xl p-8 rounded-lg w-80 cursor-pointer hover:bg-gray-100 transition transform hover:scale-105">
                <h3 class="text-2xl font-bold">Perbandingan Pupuk</h3>
                <p class="text-gray-600 text-md">Membandingkan isi kandungan pada pupuk agar sesuai kebutuhan</p>
            </a>
        </div>
    </div>
    
    

    <div class="mt-12 text-center">
        <h2 class="text-2xl font-bold">Informasi Pemupukan</h2>
        <p class="text-gray-700 mt-4 max-w-2xl mx-auto">
            Pemupukan adalah proses penambahan unsur hara ke dalam tanah untuk meningkatkan kesuburan tanaman. Secara umum, pupuk terbagi menjadi dua jenis utama: pupuk kimia dan pupuk organik.
        </p>
    </div>
    
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <!-- Pupuk Kimia -->
        <div class="bg-white shadow-lg p-6 rounded-lg">
            <h3 class="text-xl font-semibold text-green-700">Pupuk Kimia</h3>
            <p class="text-gray-600 mt-2">
                Pupuk kimia adalah pupuk yang dibuat melalui proses sintetis untuk menyediakan unsur hara spesifik dalam jumlah tinggi.
            </p>
            <h4 class="mt-4 font-semibold">Kelebihan:</h4>
            <ul class="list-disc list-inside text-gray-600">
                <li>Mengandung unsur hara dalam konsentrasi tinggi</li>
                <li>Hasil tanaman lebih cepat terlihat</li>
                <li>Mudah didapat dan diaplikasikan</li>
            </ul>
            <h4 class="mt-4 font-semibold">Kekurangan:</h4>
            <ul class="list-disc list-inside text-gray-600">
                <li>Dapat merusak struktur tanah jika digunakan berlebihan</li>
                <li>Berisiko mencemari lingkungan</li>
                <li>Memerlukan biaya lebih tinggi dibanding pupuk organik</li>
            </ul>
        </div>
    
        <!-- Pupuk Organik -->
        <div class="bg-white shadow-lg p-6 rounded-lg">
            <h3 class="text-xl font-semibold text-green-700">Pupuk Organik</h3>
            <p class="text-gray-600 mt-2">
                Pupuk organik berasal dari bahan alami seperti kompos, kotoran hewan, atau sisa tanaman yang terdekomposisi.
            </p>
            <h4 class="mt-4 font-semibold">Kelebihan:</h4>
            <ul class="list-disc list-inside text-gray-600">
                <li>Menjaga dan memperbaiki struktur tanah</li>
                <li>Lebih ramah lingkungan</li>
                <li>Meningkatkan aktivitas mikroorganisme tanah</li>
            </ul>
            <h4 class="mt-4 font-semibold">Kekurangan:</h4>
            <ul class="list-disc list-inside text-gray-600">
                <li>Kandungan hara lebih rendah dibanding pupuk kimia</li>
                <li>Proses dekomposisi membutuhkan waktu</li>
                <li>Memerlukan jumlah lebih banyak untuk hasil yang optimal</li>
            </ul>
        </div>
    </div>
    
</body>
</html>
