<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    </center>
    <form action="{{ route('surat.store') }}" method="POST">
        @csrf
        

        <label for="nomor_surat">Nomor surat:</label><br>
        <input type="text" id="nomor_surat" name="nomor_surat" required><br><br>

        <label for="judul_surat">Judul surat:</label><br>
        <input type="text" id="judul_surat" name="judul_surat" required><br><br>

        <label for="instansi_pengirim">Instansi pengirim:</label><br>
        <input type="text" id="instansi_pengirim" name="instansi_pengirim"  required><br><br>

        <label for="penerima_surat">Penerima surat:</label><br>
        <input type="text" id="penerima_surat" name="penerima_surat"  required><br><br>

        <label for="tanggal_mengirim">Tanggal mengirim:</label><br>
        <input type="date" id="tanggal_mengirim" name="tanggal_mengirim"  required><br><br>

        <label for="nama_pengirim">Nama pengirim:</label><br>
        <input type="text" id="nama_pengirim" name="nama_pengirim"  required><br><br>

        <label for="no_telepon">No telepon:</label><br>
        <input type="text" id="no_telepon" name="no_telepon"required><br><br>

        <label for="kategori">Kategori:</label><br>
        <input type="text" id="kategori" name="kategori" required><br>

        <label for="alasan">alasan:</label><br>
        <input type="text" id="alasan" name="alasan" required><br><br>
        
        <label for="file_surat">file:</label><br>
        <input type="file" id="file_surat" name="file_surat" required><br><br>

        <button type="submit">Submit</button>

    </form>
    </center>
</body>
</html>