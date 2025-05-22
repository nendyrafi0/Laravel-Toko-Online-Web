<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $judul }}</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ccc;
        }
        table th, table td {
            padding: 6px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <td align="left">
            Perihal : {{ $judul }} <br>
            Tanggal Awal: {{ $tanggalAwal }} s/d Tanggal Akhir: {{ $tanggalAkhir }}
        </td>
    </tr>
</table>

<p></p>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cetak as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->email }}</td>
            <td>
                @if ($row->role == 1)
                    Super Admin
                @elseif($row->role == 0)
                    Admin
                @else
                    Lainnya
                @endif
            </td>
            <td>
                @if ($row->status == 1)
                    Aktif
                @elseif($row->status == 0)
                    NonAktif
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" align="center">Tidak ada data ditemukan dalam rentang tanggal tersebut.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<script>
    // Optional: aktifkan hanya jika browser mendukung inline script
    window.onload = function () {
        window.print();
    }
</script>

</body>
</html>
