<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ubah Produk</h1>

    <div class="card mb-3" style="width: 50%">

        <?php echo form_open('admin/ubahProduk'); ?>
        <input class="form-control" type="text" id="id" name="id" placeholder="id" value="<?= $barang['id']; ?>" hidden>
        <div class="form-group">
            <input class="form-control" type="text" id="nama" name="nama" placeholder="Nama Produk" value="<?= $barang['nama_barang']; ?>" required>
            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" id="harga_beli" name="harga_beli" placeholder="Harga Beli (Rp)" min="0" value="<?= $barang['harga_beli']; ?>" required>
            <?= form_error('harga_beli', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" id="harga_jual" name="harga_jual" placeholder="Harga Jual (Rp)" min="0" value="<?= $barang['harga_jual']; ?>" required>
            <?= form_error('harga_jual', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" id="stok" name="stok" placeholder="Stok" value="<?= $barang['stok']; ?>" required>
            <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" id="satuan" name="satuan" placeholder="Satuan" value="<?= $barang['satuan']; ?>" required>
            <?= form_error('satuan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>

        <a class="btn btn-danger" href="<?php echo base_url('admin/atur_produk') ?>" role="button">Cancel</a>
        <button class="btn btn-primary" type="submit">
            Ubah Produk
        </button>
        <?= form_close(); ?>
    </div>

</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->