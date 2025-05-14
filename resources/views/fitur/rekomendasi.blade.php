<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Pupuk</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @vite('resources/css/app.css')
</head>
<body class="bg-white">

    <!-- Header -->
    <nav class="bg-gray-200 p-4 flex justify-between items-center">
        <div class="text-sm font-semibold">
            Sistem Rekomendasi Pemupukan &nbsp; > &nbsp; <span class="font-normal">rekomendasi pupuk</span>
        </div>
        <div class="flex items-center gap-2">
            <a href="{{ url('/home') }}" class="text-black">
                <!-- Icon Home -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0h4" />
                </svg>
            </a>
            <a href="{{ url('/login') }}"
               class="bg-blue-700 hover:bg-blue-800 text-white px-3 py-1 rounded-lg flex items-center gap-1">
                <!-- Icon Logout -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M3 10a1 1 0 011-1h8.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L12.586 11H4a1 1 0 01-1-1z"
                          clip-rule="evenodd" />
                </svg>
                Logout
            </a>
        </div>
    </nav>

    <!-- Content -->
    <div class="p-8">
        <h1 class="text-2xl font-bold mb-4">Daftar Data Lahan</h1>

        <!-- Pencarian dan Tambah -->
        <div class="flex justify-between mb-4">
            <form action="{{ route('fitur.rekomendasi') }}" method="GET" class="flex items-center gap-2">
                <input type="text" name="search" placeholder="Cari data" ... />
                <button type="submit" class="bg-blue-700 text-white px-3 py-1 rounded">Cari</button>
            </form>

            <button onclick="toggleModal()"
                    class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">
                Tambah Data Lahan
            </button>
        </div>

        <!-- Tabel Data Lahan -->
        <table class="table border-collapse table-bordered">
            <thead>
                <tr class="bg-gray-200">
                    <th>No</th>
                    <th>Jenis Tanah</th>
                    <th>Jenis Tanaman</th>
                    <th>Kondisi Cuaca</th>
                    <th>Metode Pengairan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dataLahan as $index => $lahan)
                    <tr class="border-b">
                        <td>{{ $index + 1 + ($dataLahan->currentPage() - 1) * $dataLahan->perPage() }}</td>
                        <td>{{ $lahan->jenis_tanah }}</td>
                        <td>{{ $lahan->jenis_tanaman }}</td>
                        <td>{{ $lahan->kondisi_cuaca }}</td>
                        <td>{{ $lahan->metode_pengairan }}</td>
                        <td>
                            <a href="{{ route('fitur.kalkulator', $lahan->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Detail</a>
                            <a href="{{ route('fitur.perbandingan', $lahan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('data_lahan.destroy', $lahan->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data ditemukan</td>
                        
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-end">
            {{ $dataLahan->links() }}
        </div>
    </div>

    <!-- Modal Input (kode sebelumnya tetap bisa dipakai) -->
    <!-- Modal Edit dan Detail juga bisa dipertahankan sesuai struktur awal -->

    <!-- Modal Script -->
    <script>
        function toggleModal() {
            document.getElementById('modal').classList.toggle('hidden');
        }

        function toggleEditModal() {
            document.getElementById('editModal').classList.toggle('hidden');
        }

        function openEditModal(tanah, tanaman, cuaca, pengairan) {
            document.getElementById('editTanah').value = tanah;
            document.getElementById('editTanaman').value = tanaman;
            document.getElementById('editCuaca').value = cuaca;
            document.getElementById('editPengairan').value = pengairan;
            toggleEditModal();
        }

        function toggleDetailModal() {
            document.getElementById('detailModal').classList.toggle('hidden');
        }

        function openDetailModal(tanah, tanaman, cuaca, pengairan, pupuk) {
            document.getElementById('detailTanah').textContent = tanah;
            document.getElementById('detailTanaman').textContent = tanaman;
            document.getElementById('detailCuaca').textContent = cuaca;
            document.getElementById('detailPengairan').textContent = pengairan;
            document.getElementById('detailPupuk').textContent = pupuk;
            toggleDetailModal();
        }
    </script>

</body>
</html>
