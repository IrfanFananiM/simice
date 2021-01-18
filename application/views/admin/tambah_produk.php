<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Produk</h1>

    <div class="card mb-3" style="width: 50%">

        <?php echo form_open('admin/tambah_produk'); ?>
        <div class="form-group">
            <input class="form-control" type="text" id="kode" name="kode" placeholder="Kode Produk" required>
            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" id="nama" name="nama" placeholder="Nama Produk" required>
            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" id="harga_beli" name="harga_beli" placeholder="Harga Beli (Rp)" min="0" required>
            <?= form_error('harga_beli', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" id="harga_jual" name="harga_jual" placeholder="Harga Jual (Rp)" min="0" required>
            <?= form_error('harga_jual', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" id="stok" name="stok" placeholder="Stok" required>
            <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" id="satuan" name="satuan" placeholder="Satuan" required>
            <?= form_error('satuan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <a class="btn btn-danger" href="<?php echo base_url('admin/atur_produk') ?>" role="button">Cancel</a>
        <button class="btn btn-primary" type="submit">
            Tambah Produk
        </button>
        <?= form_close(); ?>
    </div>

</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->