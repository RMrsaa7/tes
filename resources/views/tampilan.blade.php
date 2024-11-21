<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <!-- Tambahkan file style.css -->
    <!-- @vite(['resources/css/style.css']) -->
    <style>
        body {
            background-color: #eeeeee;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        th,
        td {
            text-align: center;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1> PT. Wirdamae Indonesia</h1>
    <center>
        <table border="1">
            <tr>
                <th colspan="7">Tabel Karyawan</th>
            </tr>
            <tr>
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>No Handphone</th>
                <th>Email</th>
                <th>Status</th>
                <th>Jabatan</th>
                <th>Action</th>
            </tr>

            <!-- Looping data karyawan menggunakan Blade -->
            @foreach ($karyawans as $karyawan)
            <tr>
                <td>{{ $karyawan->nip }}</td>
                <td>{{ $karyawan->nama_pegawai }}</td>
                <td>{{ $karyawan->no_hp }}</td>
                <td>{{ $karyawan->email }}</td>
                <td>{{ $karyawan->status }}</td>
                <td>{{ $karyawan->jabatan }}</td>
                <td>
                    <a href="/karyawans/{{ $karyawan->id }}/edit">Edit</a> | 
                    <form action="/karyawans/{{ $karyawan->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
    </center>
</body>

</html>
