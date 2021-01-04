<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pesan Produk</h1>

    <div class="card mb-3">
        <?= form_open_multipart('pesanan/tambah'); ?>

        <div class="form-group">
            <span>Order Jenis</span>
            <div class="form-group">
                <select name="barang" id="barang" class="form-control">
                    <option value="">Pilih jenis es</option>
                    <?php foreach ($barang as $b) : ?>
                        <option value="<?= $b['id_barang']; ?>"><?= $b['nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <span>Banyaknya es yang diorde (/pack)</span>
            <div class="form-group">
                <input type="number" name="jumlah" class="form-control" placeholder="Jumlah yang dipesan" value="1" min="1">
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Pesan</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->