<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update User</h1>
    <br>

    <div class="row">
        <div class="col-md-5">
            <form class="user" method="POST" action="">
                <input type="hidden" id="id" name="id" placeholder="Id Kapal" value="<?= $user['id']; ?>">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Pengguna" value="<?= $user['nama']; ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Pengguna" value="<?= $user['email']; ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="notelp" name="notelp" placeholder="No Telp pengguna" value="<?= $user['no_telp']; ?>">
                    <?= form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat Pengguna" value="<?= $user['alamat']; ?>">
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <select class="form-select form-select-lg rounded-pill fs-6" id="jabatan" name="jabatan" aria-label="Default select example">
                        <option value="Superintendent" <?= set_select('jabatan', 'Superintendent', ($user['jabatan'] === 'Superintendent')); ?>>Superintendent</option>
                        <option value="Docking Monitoring" <?= set_select('jabatan', 'Docking Monitoring', ($user['jabatan'] === 'Docking Monitoring')); ?>>Docking Monitoring</option>
                        <option value="Ship Manager" <?= set_select('jabatan', 'Ship Manager', ($user['jabatan'] === 'Ship Manager')); ?>>Ship Manager</option>
                    </select>
                    <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Submit
                </button>
            </form>
            <br>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
