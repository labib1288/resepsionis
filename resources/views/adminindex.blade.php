<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Adnin</title>
</head>
<body>
    <center>
        <h1>Surat Detail</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Surat</th>
                <th>No Wa</th>
                <th>Aksi</th>
                <th>Alasan</th>
            </tr>
            @foreach ($resepsioniss as $rspsns)
            <tr>
                <td>{{ $rspsns->no }}</td>
                <td>{{ $rspsns->nama }}</td>
                <td>{{ $rspsns->Tanggal }}</td>
                <td>{{ $rspsns->kategori }}</td>
                <td>{{ $rspsns->no_wa }}</td>
                <td>{{ $rspsns->alasan }}</td>
                

                <td>
                    <a href="/admin/delete/{{ $rspnsns->id }}">Delete</a>
                </td>
            </tr>
            @endforeach
    </center>
    
</body>
</html>