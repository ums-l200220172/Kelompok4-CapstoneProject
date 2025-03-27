<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Rekomendasi Pupuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative w-full h-screen">
    <!-- Background Image -->
    <img src="{{ asset('img/homegambar.jpg') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black opacity-30"></div> 

    <!-- Register Form -->
    <div class="relative z-10 flex items-center justify-center h-full">
        <div class="bg-white bg-opacity-40 backdrop-blur-md rounded-lg shadow-lg p-8 w-96 border border-gray-200">
            <h2 class="text-2xl font-semibold text-center text-black">Register</h2>

            <form class="mt-4">
                <!-- Nama Lengkap -->
                <div class="mb-4">
                    <label for="name" class="block text-black font-normal">Nama Lengkap</label>
                    <input type="text" id="name" name="name"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white bg-opacity-70">
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-black font-normal">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white bg-opacity-70">
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-black font-normal">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white bg-opacity-70">
                </div>

                <!-- Konfirmasi Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-black font-normal">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white bg-opacity-70">
                </div>

                <!-- Buttons -->
                <div class="flex justify-between mt-6">
                    <button type="button"
                        class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition">
                        Daftar
                    </button>
                    <a href="{{ url('/login') }}"
                        class="px-6 py-2 bg-gray-800 text-white font-semibold rounded-lg shadow hover:bg-gray-900 transition">
                        Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
