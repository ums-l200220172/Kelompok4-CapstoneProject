<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Pengguna</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6 bg-gray-100">

    {{-- Navbar --}}
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-bold">Manajemen Pengguna</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">Logout</button>
        </form>
    </div>

    {{-- Filter --}}
    <form method="GET" action="{{ route('users.index') }}" class="flex items-center mb-4 space-x-2">
        <input type="text" name="search" placeholder="Search pengguna" class="border rounded px-2 py-1" value="{{ request('search') }}"/>
        <select name="status" onchange="this.form.submit()" class="border rounded px-2 py-1">
            <option value="">Semua</option>
            <option value="aktif" {{ request('status') === 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="nonaktif" {{ request('status') === 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
        </select>
    </form>

    {{-- Tabel Pengguna --}}
    <table class="min-w-full bg-white border border-gray-300 rounded">
        <thead class="bg-gray-200 text-gray-700">
            <tr>
                <th class="py-2 px-4 text-left">Nama</th>
                <th class="py-2 px-4">Email</th>
                <th class="py-2 px-4">Status</th>
                <th class="py-2 px-4">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr class="border-t">
                    <td class="py-2 px-4">{{ $user->name }}</td>
                    <td class="py-2 px-4 text-center">{{ $user->email }}</td>
                    <td class="py-2 px-4 text-center {{ $user->status === 'aktif' ? 'text-green-600' : 'text-red-600' }}">
                        {{ ucfirst($user->status) }}
                    </td>
                    <td class="py-2 px-4 text-center">
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:text-red-800">
                                🗑
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center py-4">Tidak ada data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>