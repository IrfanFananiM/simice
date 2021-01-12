<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update Member</h1>
    <div class="row">
        <div class="col-lg-6 pt-3">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Change Account</h6>
            </div>
            <div class="card mb-3">
                <?php echo form_open('admin/ubahMember'); ?>
                <input class="form-control" type="text" id="id" name="id" placeholder="id" value="<?= $user['id']; ?>" hidden>
                <div class="form-group">
                    <input class="form-control" type="text" id="name" name="name" placeholder="Nama Lengkap" value="<?= $user['name']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" id="email" name="email" placeholder="Email" value="<?= $user['email']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <a class="btn btn-danger" href="<?php echo base_url() ?>admin/index" role="button">Cancel</a>

                <button class="btn btn-primary" type="submit">
                    Update
                </button>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="col-lg-6 pt-3">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
            </div>
            <div class="card mb-3">
                <?php echo form_open('admin/ubahMemberPass'); ?>
                <input class="form-control" type="text" id="id" name="id" placeholder="id" value="<?= $user['id']; ?>" hidden>
                <div class="form-group">
                    <input class="form-control" type="password" id="password1" name="password1" placeholder="Password" value="">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" id="password2" name="password2" placeholder="Repeat Password" value="">
                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <a class="btn btn-danger" href="<?php echo base_url() ?>admin/index" role="button">Cancel</a>

                <button class="btn btn-primary" type="submit">
                    Update
                </button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->