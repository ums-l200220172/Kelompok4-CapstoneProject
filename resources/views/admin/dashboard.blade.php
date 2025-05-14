<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Rekomendasi Pemupukan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        .glow:hover {
            box-shadow: 0 0 15px rgba(0, 153, 255, 0.5), 0 0 10px rgba(0, 153, 255, 0.3);
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full bg-gray-200 p-4 flex justify-between items-center shadow-md z-50">
        <h1 class="text-lg font-bold">Sistem Rekomendasi Pemupukan</h1>
        <button class="bg-blue-600 text-white px-4 py-2 rounded flex items-center">
            <span class="mr-2">Logout</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h8.586l-3.293-3.293a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L12.586 11H4a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
        </button>
    </nav>

    <!-- Hero Section -->
    <div class="flex justify-center pt-24">
        <img src="img/sawah.jpg" class="w-[1400px] h-[300px] object-cover rounded-lg shadow-lg transition transform hover:scale-105" alt="">
    </div>

    <!-- Section Fitur -->
    <section class="mt-10 flex flex-col md:flex-row justify-center gap-6 text-center">
        <!-- Fitur Manajemen Pengguna -->
        <a href="{{ url('/admin/pengguna') }}" class="bg-white rounded-lg shadow-lg p-6 max-w-xs md:max-w-[300px] transition transform hover:scale-105 glow">
            <h2 class="font-bold text-lg mb-2 text-blue-700 flex items-center justify-center gap-2">
                <i class="fas fa-users-cog text-green-500 text-xl mb-2"></i> Manajemen Pengguna
            </h2>
            <p class="text-gray-700 text-sm">
                Menampilkan jenis pupuk yang sesuai kebutuhan
            </p>
        </a>

        <!-- Fitur Manajemen Data Pupuk -->
        <a href="{{ url('/admin/pupuk') }}" class="bg-white rounded-lg shadow-lg p-6 max-w-xs md:max-w-[300px] transition transform hover:scale-105 glow">
            <h2 class="font-bold text-lg mb-2 text-blue-700 flex items-center justify-center gap-2">
                <i class="fas fa-database text-yellow-500 text-xl mb-2"></i> Manajemen Data Pupuk
            </h2>
            <p class="text-gray-700 text-sm">
                Memberikan dosis takaran pupuk dan metode pengaplikasian pupuk
            </p>
        </a>

        <!-- Fitur Manajemen Data Edukasi -->
        <a href="{{ url('/admin/edukasi') }}" class="bg-white rounded-lg shadow-lg p-6 max-w-xs md:max-w-[300px] transition transform hover:scale-105 glow">
            <h2 class="font-bold text-lg mb-2 text-blue-700 flex items-center justify-center gap-2">
                <i class="fas fa-book-open text-purple-500 text-xl mb-2"></i> Manajemen Data Edukasi
            </h2>
            <p class="text-gray-700 text-sm">
                Membandingkan isi kandungan pada pupuk agar sesuai kebutuhan
            </p>
        </a>
    </section>

    <!-- Informasi Pemupukan -->
    <div class="mt-12 text-center">
        <h2 class="text-2xl font-bold">Dashboard Admin</h2>
        <p class="text-gray-700 mt-4 max-w-2xl mx-auto">
            Pemupukan adalah proses penambahan unsur hara ke dalam tanah untuk meningkatkan kesuburan tanaman. Secara umum, pupuk terbagi menjadi dua jenis utama: pupuk kimia dan pupuk organik.
        </p>
    </div>

    <!-- Informasi Jenis Pupuk -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <!-- Pupuk Kimia -->
        <div class="bg-white shadow-lg p-6 rounded-lg transition transform hover:scale-105">
            <h3 class="text-xl font-semibold text-green-700 flex items-center gap-2 mb-2">
                <i class="fas fa-vial text-red-500"></i> Pupuk Kimia
            </h3>
            <p class="text-gray-600">
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
        <div class="bg-white shadow-lg p-6 rounded-lg transition transform hover:scale-105">
            <h3 class="text-xl font-semibold text-green-700 flex items-center gap-2 mb-2">
                <i class="fas fa-leaf text-green-500"></i> Pupuk Organik
            </h3>
            <p class="text-gray-600">
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

    <!-- Footer -->
    <footer class="bg-[#222222] text-white">
        <div class="max-w-6xl mx-auto px-6 py-12 relative flex flex-col items-center space-y-6">
            <a href="https://github.com/ums-l200220172/Kelompok4-CapstoneProject" target="_blank" rel="noopener noreferrer"
               class="bg-[#5a8a3a] w-12 h-12 rounded-full flex items-center justify-center text-white text-2xl hover:brightness-90 transition"
               aria-label="GitHub">
                <i class="fab fa-github"></i>
            </a>
            <p class="text-xs sm:text-sm text-gray-300 tracking-wide">
                © 2025 Kelompok 4 Capstone Project. All Right Reserved.
            </p>
            <button aria-label="Back to top"
                    class="absolute top-4 right-6 border border-white p-1.5 hover:bg-white hover:text-black transition"
                    onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
                <i class="fas fa-chevron-up fa-lg"></i>
            </button>
        </div>
        <div class="bg-[#5a8a3a] text-white text-center py-6 px-6">
            <p class="font-semibold text-sm sm:text-base tracking-widest">
                SOLUSI PEMUPUKAN YANG AKURAT DAN EFISIEN UNTUK MENDUKUNG PRODUKTIVITAS PERTANIAN
            </p>
        </div>
    </footer>
</body>
</html>
