<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pesan Produk</h1>

    <div class="card mb-3">
        <?= form_open_multipart('pesanan/tambah'); ?>

        <div class="form-group">
            <span>Pilih Jenis Es</span>

            <div class="form-group">
                <select name="barang" id="barang" class="form-control">
                <?php if(isset($id_barang)){ ?>
                <option value="<?= $id_barang; ?>" selected><?= $nama_barang ?></option>
                
            <?php } ?>
                    <?php foreach ($barang as $b) : ?>
                        <option value="<?= $b['id']; ?>"><?= $b['nama_barang']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <span>Banyaknya es yang diorder (/pack)</span>
            <div class="form-group">
                <input type="number" name="jumlah" class="form-control" placeholder="Jumlah yang dipesan" value="<?php echo $jumlah ?>" min="1">
            </div>
        </div>

        <div class="form-group">
            <span>Alamat</span>
            <div class="form-group">
                <input type="text" name="alamat" class="form-control" placeholder="Jumlah yang dipesan" value="<?php echo $user['alamat'] ?>" readonly>
            </div>
        </div>

        <div class="form-group">
            <span>Pembayaran</span>
            <select class="form-control" id="exampleFormControlSelect1" name="pembayaran">
                <option value="COD">COD</option>
            </select>
        </div>

        <button class="btn btn-primary" type="submit">Pesan</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->