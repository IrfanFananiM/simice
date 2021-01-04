<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Member</h1>
    <a class="btn btn-primary" href="<?php echo base_url() ?>admin/tambah_member" role="button">Tambah member</a>
    <div class="card mb-3" style="width: 100%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date Since</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($list_user as $u) {
                ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $u['name']; ?></td>
                        <td><?= $u['email']; ?></td>
                        <td><?= date('d F Y', $u['date_created']); ?></td>
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
