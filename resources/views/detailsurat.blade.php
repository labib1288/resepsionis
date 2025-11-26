<center>
        <h1>Arsip</h1>
        <a href="{{ route('surat.create') }}">Tambah Surat Masuk</a>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>No Telepon</th>
                 <th>Kategori</th>
                 <th>alasan</th>
                <th>Status</th>
                
            </tr>
            @foreach ($surat as $detailsurat)
            <tr>
                
                <td>{{ $detailsurat->id }}</td>
                <td>{{ $detailsurat->nama_pengirim }}</td>
                <td>{{ $detailsurat->tanggal_mengirim }}</td>
                <td>{{ $detailsurat->no_telepon}}</td>
                <td>{{$detailsurat->kategori}}</td>
                <td>{{$detailsurat->alasan}}</td>
                <td> <form action="{{ route('surat.updateStatus', $detailsurat->id) }}" method="POST">
            @csrf
            @method('PUT')

            <select name="status" onchange="this.form.submit()">
                <option value="pending"  {{ $detailsurat->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="diterima" {{ $detailsurat->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
                <option value="ditolak"  {{ $detailsurat->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
            </select>
        </form></td>
                
                
                

                
            </tr>
            @endforeach
    </center>