<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profil Saya</h1>

    <div class="mb-3" style="max-width: 540px;">
        <form action="<?php echo base_url()?>/user/hasilEdit" method="post">
            Nama <input class="form-control" type="text" value="<?php echo $user['name'] ?>" name="name">
            Email <input class="form-control" type="text" value="<?php echo $user['email'] ?>" name="email" readonly>
            Alamat <input class="form-control" type="text" value="<?php echo $user['alamat'] ?>" name="alamat">
            <br><button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->