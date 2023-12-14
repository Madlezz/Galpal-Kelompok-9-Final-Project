<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update Dock Space</h1>
    <br>

    <div class="row">
        <div class="col-md-5">
            <form class="user" method="POST" action="">

                <input type="hidden" id="id" name="id" value="<?= $galangan['id_galangan']; ?>">
                <input type="hidden" id="idperusahaan" name="idperusahaan" value="<?= $perusahaan['id_perusahaan']; ?>">

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Dock Name" value="<?= $galangan['nama_galangan']; ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <select class="custom-select" id="tipe" name="tipe">
                        <option value="" <?= set_select('tipe', ''); ?>>Select Dock Type</option>
                        <option value="Type1" <?= set_select('tipe', 'Type1', ($galangan['tipe'] === 'Type1' || $galangan['tipe'] === '')); ?>>Type 1</option>
                        <option value="Type2" <?= set_select('tipe', 'Type2', ($galangan['tipe'] === 'Type2')); ?>>Type 2</option>
                        <option value="Type3" <?= set_select('tipe', 'Type3', ($galangan['tipe'] === 'Type3')); ?>>Type 3</option>
                        <option value="Type4" <?= set_select('tipe', 'Type4', ($galangan['tipe'] === 'Type4')); ?>>Type 4</option>
                        <option value="Type5" <?= set_select('tipe', 'Type5', ($galangan['tipe'] === 'Type5')); ?>>Type 5</option>
                        <option value="Type6" <?= set_select('tipe', 'Type6', ($galangan['tipe'] === 'Type6')); ?>>Type 6</option>
                        <option value="Type7" <?= set_select('tipe', 'Type7', ($galangan['tipe'] === 'Type7')); ?>>Type 7</option>
                        <option value="Type8" <?= set_select('tipe', 'Type8', ($galangan['tipe'] === 'Type8')); ?>>Type 8</option>
                    </select>
                    <?= form_error('tipe', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="panjang" name="panjang" placeholder="Length" value="<?= $galangan['panjang']; ?>">
                    <?= form_error('panjang', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="lebar" name="lebar" placeholder="Width" value="<?= $galangan['lebar']; ?>">
                    <?= form_error('lebar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="draft" name="draft" placeholder="Draft" value="<?= $galangan['draft']; ?>">
                    <?= form_error('draft', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="dwt" name="dwt" placeholder="DWT" value="<?= $galangan['dwt']; ?>">
                    <?= form_error('dwt', '<small class="text-danger pl-3">', '</small>'); ?>
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
