<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Pupuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">

    <!-- Header -->
    <nav class="bg-gray-200 p-4 flex justify-between items-center">
        <div class="text-sm font-semibold">
            Sistem Rekomendasi Pemupukan &nbsp; > &nbsp; <span class="font-normal">rekomendasi pupuk</span>
        </div>
        <div class="flex items-center gap-2">
            <a href="{{ url('/home') }}" class="text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0h4" />
                </svg>
            </a>
            <a href="{{ url('/login') }}"
                class="bg-blue-700 hover:bg-blue-800 text-white px-3 py-1 rounded-lg flex items-center gap-1">
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
            <div class="flex items-center gap-2">
                <input type="text" placeholder="Cari data"
                    class="px-4 py-2 rounded border border-gray-300 focus:outline-none focus:ring focus:ring-blue-200" />
                <button class="bg-blue-700 text-white px-3 py-1 rounded">cari</button>
            </div>
            <button onclick="toggleModal()"
                class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">
                Tambah Data Lahan
            </button>
        </div>

        <!-- Tabel -->
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 text-sm text-left">
                <thead class="bg-gray-100 text-black font-semibold">
                    <tr>
                        <th class="border px-4 py-2">No.</th>
                        <th class="border px-4 py-2">Jenis Tanah</th>
                        <th class="border px-4 py-2">Jenis Tanaman</th>
                        <th class="border px-4 py-2">Kondisi Cuaca</th>
                        <th class="border px-4 py-2">Metode Pengairan</th>
                        <th class="border px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">Lempung</td>
                        <td class="border px-4 py-2">Gandum</td>
                        <td class="border px-4 py-2">Sawi</td>
                        <td class="border px-4 py-2">Irigasi Permukaan</td>
                        <td class="border px-4 py-2 space-x-1">
                            <button onclick="openDetailModal('Lempung', 'Gandum', 'Hujan', 'Irigasi permukaan', 
                            'Pupuk Aa, Pupuk Bb, Pupuk Cc')" class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded">Detail</button>
                            <button onclick="openEditModal('Lempung', 'Gandum', 'Sawi', 'Irigasi Permukaan')"
                            class="bg-yellow-400 hover:bg-yellow-500 text-white px-2 py-1 rounded">Edit</button>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-2 py-1 rounded">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- <table class="table table-bordered">
        <thead>
            <tr>
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
                <tr>
                    <td>{{ $index + 1 + ($dataLahan->currentPage() - 1) * $dataLahan->perPage() }}</td>
                    <td>{{ $lahan->jenis_tanah }}</td>
                    <td>{{ $lahan->jenis_tanaman }}</td>
                    <td>{{ $lahan->kondisi_cuaca }}</td>
                    <td>{{ $lahan->metode_pengairan }}</td>
                    <td>
                        {{-- <a href="{{ route('data_lahan.show', $lahan->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('data_lahan.edit', $lahan->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                        {{-- <form action="{{ route('data_lahan.destroy', $lahan->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data ditemukan</td>
                </tr>
            @endforelse
        </tbody>
    </table> --}} 

    <!-- Modal Input -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md">
            <h2 class="text-xl font-bold mb-4">Input Data Lahan</h2>
            <form>
                <div class="mb-4">
                    <label class="block mb-1">Jenis Tanah</label>
                    <input type="text" placeholder="Masukkan jenis tanah"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block mb-1">Jenis Tanaman</label>
                    <input type="text" placeholder="Masukkan jenis tanaman"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block mb-1">Kondisi Cuaca</label>
                    <input type="text" placeholder="Masukkan kondisi cuaca"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block mb-1">Metode Pengairan</label>
                    <input type="text" placeholder="Masukkan metode pengairan"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="toggleModal()"
                        class="mr-2 px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Batal</button>
                    <button type="submit"
                        class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal Edit -->
    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md">
            <h2 class="text-xl font-bold mb-4">Edit Data Lahan</h2>
            <form>
                <div class="mb-4">
                    <label class="block mb-1">Jenis Tanah</label>
                    <input type="text" id="editTanah"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block mb-1">Jenis Tanaman</label>
                    <input type="text" id="editTanaman"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block mb-1">Kondisi Cuaca</label>
                    <input type="text" id="editCuaca"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block mb-1">Metode Pengairan</label>
                    <input type="text" id="editPengairan"
                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="toggleEditModal()"
                        class="mr-2 px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Batal</button>
                    <button type="submit"
                        class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal Detail -->
    <div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-xl relative">
            <button onclick="toggleDetailModal()" class="absolute top-2 right-3 text-2xl font-bold">&times;</button>
            <h2 class="text-2xl font-semibold mb-2">Detail Rekomendasi</h2>
            <hr class="mb-4">
    
            <table class="w-full mb-4 border border-black text-sm">
                <thead>
                    <tr>
                        <th class="text-left border-b border-black px-2 py-1" colspan="2">Detail lahan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-2 py-1 font-semibold">Jenis lahan:</td>
                        <td id="detailTanah" class="px-2 py-1"></td>
                    </tr>
                    <tr>
                        <td class="px-2 py-1 font-semibold">Jenis tanaman:</td>
                        <td id="detailTanaman" class="px-2 py-1"></td>
                    </tr>
                    <tr>
                        <td class="px-2 py-1 font-semibold">Kondisi cuaca:</td>
                        <td id="detailCuaca" class="px-2 py-1"></td>
                    </tr>
                    <tr>
                        <td class="px-2 py-1 font-semibold">Metode pengairan:</td>
                        <td id="detailPengairan" class="px-2 py-1"></td>
                    </tr>
                </tbody>
            </table>
    
            <div class="bg-green-100 text-sm rounded px-4 py-3">
                <span class="font-semibold">Rekomendasi Pupuk:</span> <span id="detailPupuk"></span>
            </div>
        </div>
    </div>
    
    
        

    <!-- Modal Script -->
    <script>
        function toggleModal() {
            const modal = document.getElementById('modal');
            modal.classList.toggle('hidden');
        } 
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
