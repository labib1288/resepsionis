<h2> Arsip</h2>

<form method="GET" action="/arsip">
    <input type="text" name="cari" value="{{ $c }}" placeholder="Cari arsip">
    <button type="submit">Cari</button>
    <a href="/arsip">Refresh</a>
</form>

<table border="1" cellpadding="6" cellspacing="0" style="margin-top:10px; width:100%">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Tanggal</th>
        <th>Kategori</th>
        <th>Surat</th>
        <th>No wa</th>
        <th>Alasan</th>
    </tr>

    @foreach($surat as $arsip)
    <tr>
        <td>{{ $i+1 }}</td>
        <td>{{ $d->nama }}</td>
        <td>{{ $d->tanggal }}</td>
        <td>{{ $d->kategori }}</td>
        <td>
            <a href="/arsip/{{ $d->id }}">Lihat</a>
        </td>
        <td>{{ $d->no_telepon }}</td>
        <td>{{ $d->alasan }}</td>
    </tr>
    @endforeach
</table>