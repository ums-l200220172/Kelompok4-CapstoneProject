<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rekomendasi Pupuk</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">

  <!-- Header -->
  <nav class="bg-gray-200 p-4 flex justify-between items-center">
    <div class="text-sm font-semibold">
      Sistem Rekomendasi Pemupukan &nbsp; > &nbsp; <span class="font-normal">Perbandingan Pupuk</span>
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
    <h1 class="text-2xl font-bold mb-4">Daftar Data Pupuk</h1>

    <!-- Pencarian dan Tambah -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
      <div class="flex items-center space-x-2 mb-4 md:mb-0">
        <input type="text" id="searchInput" placeholder="Cari data"
              class="px-4 py-2 rounded border border-gray-300 text-sm w-full md:w-auto focus:outline-none focus:ring focus:ring-blue-200" />
        <button onclick="handleSearch()" class="bg-blue-600 text-white px-3 py-2 rounded hover:bg-blue-700 text-sm">Cari</button>
      </div>

      <button onclick="toggleModal()"
        class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">Bandingkan Data Pupuk
      </button>
    </div>


  <!-- Tabel -->
  <div class="overflow-x-auto">
    <table class="w-full border border-gray-300 text-sm text-left">
      <thead class="bg-gray-100 text-black font-semibold">
        <tr>
          <th class="border px-4 py-2">Nama</th>
          <th class="border px-4 py-2">Nitrogen</th>
          <th class="border px-4 py-2">Fosfor</th>
          <th class="border px-4 py-2">Kalium</th>
          <th class="border px-4 py-2">Manfaat</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($dataPupuk as $d)
        <tr class="hover:bg-gray-50">
          <td class="border px-3 py-2">{{ $d->nama_pupuk }}</td>
          <td class="border px-3 py-2">{{ $d->nitrogen }}%</td>
          <td class="border px-3 py-2">{{ $d->fosfor }}%</td>
          <td class="border px-3 py-2">{{ $d->kalium }}%</td>
          <td class="border px-3 py-2">{{ $d->manfaat }}</td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  </div>



  <!-- Modal Input -->
  <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md relative">
      <!-- Tombol Close -->
      <button id="closeModal"
              class="absolute top-3 right-3 text-gray-500 hover:text-red-600 text-2xl font-bold focus:outline-none">
        &times;
      </button>

      <h2 class="text-xl font-bold mb-4">Bandingkan Data Pupuk</h2>
      <form onsubmit="compareFromDatabase(event)" class="flex items-start space-x-8">
        <div class="flex flex-col space-y-1">
          <select id="selectPupuk1" class="text-sm border rounded px-2 py-1" required>
            <option disabled selected hidden>Pupuk 1</option>
            @foreach ($dataPupuk as $d)
              <option value="{{ $d->nama_pupuk }}">{{ $d->nama_pupuk }}</option>
            @endforeach
          </select>
        </div>
        <div class="flex flex-col space-y-1">
          <select id="selectPupuk2" class="text-sm border rounded px-2 py-1" required>
            <option disabled selected hidden>Pupuk 2</option>
            @foreach ($dataPupuk as $d)
              <option value="{{ $d->nama_pupuk }}">{{ $d->nama_pupuk }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit"
          class="bg-lime-500 text-white px-4 py-2 rounded hover:bg-lime-600">Bandingkan
        </button>
      </form>
    </div>
  </div>


  <!-- Modal Detail -->
  <div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-11/12 max-w-lg p-6 relative"
         style="box-shadow: 4px 4px 8px rgba(0,0,0,0.3)">
      <header class="flex justify-between items-center mb-4">
        <h3 class="font-bold text-xl">Detail Perbandingan</h3>
        <button onclick="toggleDetailModal()" class="absolute top-3 right-3 text-gray-500 hover:text-red-600 text-2xl font-bold focus:outline-none">
          &times;
        </button>
      </header>
      <hr class="border-black border-t border-dotted mb-6" />
      <p id="detailPupuk1" class="text-center text-green-600 text-xs mb-12"></p>
      <p id="detailPupuk2" class="text-center text-xs"></p>
    </div>
  </div>

  <!-- Script -->
  <script>
    function toggleModal() {
      document.getElementById('modal').classList.toggle('hidden');
    }

    function toggleDetailModal() {
      document.getElementById('detailModal').classList.toggle('hidden');
    }

    // Close Modal Input
    document.getElementById('closeModal').addEventListener('click', function () {
      document.getElementById('modal').classList.add('hidden');
    });

    function compareFromDatabase(event) {
      event.preventDefault();

      const pupuk1 = document.getElementById('selectPupuk1').value;
      const pupuk2 = document.getElementById('selectPupuk2').value;

      fetch(`/get-data-pupuk?pupuk1=${pupuk1}&pupuk2=${pupuk2}`)
        .then(response => response.json())
        .then(data => {
          const p1 = data.pupuk1;
          const p2 = data.pupuk2;

          document.getElementById('detailPupuk1').textContent = `${p1.nama_pupuk} : Nitrogen ${p1.nitrogen}%, Fosfor ${p1.fosfor}%, Kalium ${p1.kalium}%`;
          document.getElementById('detailPupuk2').textContent = `${p2.nama_pupuk} : Nitrogen ${p2.nitrogen}%, Fosfor ${p2.fosfor}%, Kalium ${p2.kalium}%`;

          document.getElementById('modal').classList.add('hidden');
          toggleDetailModal();
        })
        .catch(error => {
          console.error('Gagal memuat data pupuk:', error);
          alert('Terjadi kesalahan saat mengambil data pupuk.');
        });
    }
  </script>

<script>
  const searchInput = document.getElementById('searchInput');
  let searchTimeout;

  searchInput.addEventListener('input', function () {
    clearTimeout(searchTimeout);
    searchTimeout = setTimeout(handleSearch, 300); // debounce
  });

  function handleSearch() {
    const keyword = searchInput.value.trim();
    fetch(`/search-pupuk?query=${encodeURIComponent(keyword)}`)
      .then(response => response.json())
      .then(data => {
        const tbody = document.querySelector('tbody');
        tbody.innerHTML = '';

        if (data.length === 0) {
          tbody.innerHTML = '<tr><td colspan="6" class="text-center py-4 text-gray-500">Data tidak ditemukan</td></tr>';
          return;
        }

        data.forEach(d => {
          const row = `
            <tr class="hover:bg-gray-50">
              <td class="border px-3 py-2">${d.nama_pupuk}</td>
              <td class="border px-3 py-2">${d.nitrogen}%</td>
              <td class="border px-3 py-2">${d.fosfor}%</td>
              <td class="border px-3 py-2">${d.kalium}%</td>
              <td class="border px-3 py-2">${d.manfaat}</td>
            </tr>`;
          tbody.innerHTML += row;
        });
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }
</script>




</body>
</html>
