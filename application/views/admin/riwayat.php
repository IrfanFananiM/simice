<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Riwayat Transaksi</h1>

    <div class="card mb-3" style="width: 100%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <!-- <th scope="col">Tanggal</th> -->
                    <th scope="col">Pesanan</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($order as $b) : ?>
                    <tr>
                        <th scope="row"><?php echo $no ?></th>
                        <!-- <td>08/12/2020</td> -->
                        <td><?php echo $b["nama_barang"] ?></td>
                        <td><?php echo $b["jumlah"] ?></td>
                        <td><?php echo ($b["harga_jual"] * $b["jumlah"]) ?></td>
                        <td>Selesai</td>
                    </tr>
                    <?php $no++ ?>
                <?php endforeach ?>
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>08/12/2020</td>
                    <td>Baru</td>
                    <td>1.000.000</td>
                    <td>Selesai</td>
                </tr> -->
            </tbody>
        </table>
    </div>

</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->