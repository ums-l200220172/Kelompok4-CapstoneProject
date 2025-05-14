<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Rekomendasi Pupuk</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <div class="relative w-full h-screen">
        <img src="{{ asset('img/homegambar.jpg') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
            <h1 class="text-5xl font-bold">Sistem Rekomendasi Pupuk</h1>
            <p class="mt-2 text-lg">Solusi pemupukan yang akurat dan efisien untuk mendukung produktivitas pertanian</p>

            <div class="mt-6 flex space-x-4">
                <a href="{{ route('login') }}" class="px-6 py-2 bg-white text-black font-semibold rounded-lg shadow hover:bg-gray-200">Login</a>
                <a href="{{ route('register') }}" class="px-6 py-2 bg-black text-white font-semibold rounded-lg shadow hover:bg-gray-800">Daftar</a>
            </div>
        </div>
    </div>

</body>
</html>
