<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data guru</title>
<style>
table{
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}
thead {
    background-color : #f2f2f2;
}
th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
    padding: 8px 16px;
    text-decoration: none;
}
</style>
<head>

<body>
    <div style="overflow-x: auto">
    <a class="tambah" href="{{ route('guru0121.create') }}">Tambah Data </a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mengajar</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($guru as $gr)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $gr->nama}}</td>
                <td>{{ $gr->mengajar}}</td>
                   </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</body>