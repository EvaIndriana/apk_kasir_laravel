<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kumpulan Data Print Master Barang</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        .page-break {
            page-break-after: always;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th {
            color: white;
            background-color: rgb(0, 0, 0);
        }

        th,
        td {
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>

<body>
    <center>
        <h3>Kumpulan Data Print Master Barang</h3>
        <hr style="width:75%">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div>
                <div style="overflow-x:auto;"">
                <table width=" 100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th >ID</th>
                            <th >Nama Suplier</th>
                            <th >Nama Barang</th>
                            <th >No Telp</th>
                            <th >Alamat</th>
                            <th>Waktu Dibuat</th>
                            <th>Waktu Diupdate</th>
                            <th >Aksi</th>

                        </tr>
                    <tfoot>
                        </thead>
                        <tbody>
                            @if($suplier)
                            @foreach ($suplier as $item )
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->nama_suplier}}</td>
                                <td>{{ $item->nama_barang}}</td>
                                <td>{{ $item->no_telp}}</td>
                                <td>{{ $item->alamat}}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                        @endforeach
                        @endif
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>
    <script>
        window.print()
    </script>
</body>

</html>
