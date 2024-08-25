<!DOCTYPE html>
<html>
<head>
    <title>Tambah Design</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Tambah Design</h1>
    
    <form action="{{ route('designs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Field yang sudah ada -->
        <label for="nama_design" class="text-red">Nama Design:</label><br>
        <input type="text" id="nama_design" name="nama_design"><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi"></textarea><br>

        <label for="harga">Harga:</label><br>
        <input type="text" id="harga" name="harga"><br>

        <label for="code_design">Code Design:</label><br>
        <input type="text" id="code_design" name="code_design"><br>

        <label for="pembuat_design">Pembuat Design:</label><br>
        <input type="text" id="pembuat_design" name="pembuat_design"><br><br>

        <!-- Field untuk upload gambar -->
        <label for="gambar">Upload Gambar:</label><br>
        <input type="file" id="gambar" name="gambar"><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
