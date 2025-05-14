<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Data Pupuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6 font-sans">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Manajemen Data Pupuk</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
        </form>
    </div>

    <!-- Search, Filter & Tambah -->
    <div class="flex flex-wrap items-center justify-between mb-4 gap-2">
        <form method="GET" action="{{ route('admin.pupuk') }}" class="flex gap-2">
            <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}"
                class="border rounded px-3 py-2 shadow-sm" />
            <select name="filter" class="border rounded px-3 py-2 shadow-sm">
                <option value="">Semua Jenis</option>
                <option value="Anorganik" {{ request('filter') === 'Anorganik' ? 'selected' : '' }}>Anorganik</option>
                <option value="Organik" {{ request('filter') === 'Organik' ? 'selected' : '' }}>Organik</option>
            </select>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Cari</button>
        </form>
        <a href=""
            class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 shadow">+ Tambah</a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full text-sm text-left">
            <thead class="bg-gray-200 text-gray-700 uppercase text-xs">
                <tr>
                    <th class="py-3 px-4">Nama Pupuk</th>
                    <th class="py-3 px-4 text-center">Nitrogen</th>
                    <th class="py-3 px-4 text-center">Fosfor</th>
                    <th class="py-3 px-4 text-center">Kalium</th>
                    <th class="py-3 px-4 text-center">Manfaat</th>
                    <th class="py-3 px-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataPupuk as $dataPupuk)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $dataPupuk->nama_pupuk }}</td>
                        <td class="py-3 px-4 text-center">{{ $dataPupuk->nitrogen }}%</td>
                        <td class="py-3 px-4 text-center">{{ $dataPupuk->fosfor }}%</td>
                        <td class="py-3 px-4 text-center">{{ $dataPupuk->kalium }}%</td>
                        <td class="py-3 px-4 text-center">{{ $dataPupuk->manfaat }}</td>
                        <td class="py-3 px-4 text-center flex gap-2 justify-center">
                            <a href="" title="Edit"
                                class="text-yellow-500 hover:text-yellow-600 text-lg">✏</a>
                            <form action="" method="POST"
                                    onsubmit="return confirm('Yakin hapus pupuk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Hapus" class="text-red-600 hover:text-red-700 text-lg">🗑</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-gray-500">Tidak ada data pupuk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- <!-- AI Label Form -->
    <form action="{{ route('fertilizers.labelAI') }}" method="POST" class="mt-6 bg-white rounded p-4 shadow flex items-center gap-2">
        @csrf
        <input type="checkbox" name="use_ai" checked class="h-4 w-4 text-green-500">
        <label class="text-sm text-gray-700 font-medium">Tambah Label AI:</label>
        <input type="text" name="label" class="border rounded px-3 py-1 w-64" placeholder="Masukkan label baru">
        <button type="submit" class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">Simpan</button>
    </form>

</body>
</html> --}}