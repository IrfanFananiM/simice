<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Produk Simice</h1>
    <a class="btn btn-primary" href="<?php echo base_url() ?>admin/tambah_produk" role="button">Tambah Produk</a>
    <?= $this->session->flashdata('pesan'); ?>

    <div class="card mb-3" style="width: 100%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Beli (Rp.)</th>
                    <th scope="col">Harga Jual (Rp.)</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($list_barang as $b) {
                ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $b['kode_barang']; ?></td>
                        <td><?= $b['nama_barang']; ?></td>
                        <td><?= $b['harga_beli']; ?></td>
                        <td><?= $b['harga_jual']; ?></td>
                        <td><?= $b['stok']; ?></td>
                        <td><?= $b['satuan']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/ubah_produk/') . $b['id']; ?>" class="btn btn-success btn-sm"><i class="fa fa-pen"></i></a>
                            <a onclick="deleteConfirm('<?= base_url('admin/hapusProduk/') . $b['id']; ?>')" href="#!" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php $i++;
                } ?>

            </tbody>
        </table>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>

<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>