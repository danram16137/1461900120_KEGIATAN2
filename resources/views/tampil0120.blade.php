<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Buku</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border 1px solid #ddd;
        }
        thead {
        background-color:  #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
            padding: 8px 16px ;
            text-decoration: none ;
        }
    </style>
</head>
<body>
    <div style="overflow-x: auto">
    <a class="tambah" href="{{ route('buku.create')}}">Tambah Data</a>
    
    <table>
    <thead>
    <tr>
        <th>Kode Buku</th>
        <th>Kode Kategori</th>
        <th>Kode Penerbit</th>
        <th>Judul Buku</th>
        <th>Jumlah</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
    </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach ($databuku as $buku)
        <tr>
            <td>{{ $kode++}}</td>
            <td>{{ $buku->kode_kategori}}</td>
            <td>{{ $buku->judul_buku</td>
            <td>
                <a href="#">edit</a>
                <a href="#">hapus</a>
            </td>
        </tr>

                @endforeach
        </tbody>
    </table>
    </div>
</body>
