<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pupuk</title>
</head>
<body>
    <h1>Tambah Data Pupuk</h1>

    <form method="POST" action="{{ route('perbandingan.store') }}">
        @csrf
        <label>Nama Pupuk: <input type="text" name="nama_pupuk" required></label><br>
        <label>Nitrogen (%): <input type="number" name="nitrogen" min="0" max="100" required></label><br>
        <label>Fosfor (%): <input type="number" name="fosfor" min="0" max="100" required></label><br>
        <label>Kalium (%): <input type="number" name="kalium" min="0" max="100" required></label><br>
        <label>Manfaat: <textarea name="manfaat" required></textarea></label><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
