<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Member</h1>

    <div class="card mb-3" style="width: 50%">
        <form action="#" method="post">
            <div class="form-group">
                <input class="form-control" type="text" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <input class="form-control" type="text" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <input class="form-control" type="password" id="password1" name="password1" placeholder="Password">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <input class="form-control" type="password" id="password2" name="password2" placeholder="Repeat Password">
            </div>

            <button class="btn btn-primary" type="submit">
                Register Account
            </button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->