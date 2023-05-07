<a href="/penjualan/tambah">Tambah</a>
<table class="table table-bordered">
    <tr>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Jumlah Barang</th>
    </tr>
    @foreach ($datax['data'] as $data)
        <tr>
            <td>{{ $data['id_barang'] }}</td>
            <td>{{ $data['nama_barang'] }}</td>
            <td>{{ $data['harga_barang'] }}</td>
            <td>{{ $data['jumlah_barang'] }}</td>
            <td><a href="/penjualan/detail/{{ $data['id_penjualan'] }}" class="btn btn-sm btn-primary">Detail</a></td>
            <td><a href="/update" class="btn btn-sm btn-primary">Update</a></td>
            <td><a href="/delete" class="btn btn-sm btn-primary">Delete</a></td>
        </tr>
    @endforeach
</table>