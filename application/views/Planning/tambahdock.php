<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add Dock Space</h1>
    <br>

    <div class="row">
        <div class="col-md-5">

            <form class="user" method="POST" action="<?= base_url('Planning/tambahdock'); ?>">

                <input type="hidden" id="idperusahaan" name="idperusahaan" value="<?= $perusahaan['id_perusahaan']; ?>">

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Dock Name" value="<?= set_value('nama'); ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <select class="form-select form-select-lg rounded-pill fs-6" id="tipe" name="tipe" aria-label="Default select example">
                        <option value="" <?= set_select('tipe', ''); ?>>Select Dock Type</option>
                        <option value="Floating Dock" <?= set_select('tipe', 'Floating Dock'); ?>>Floating Dock</option>
                        <option value="Graving Dock" <?= set_select('tipe', 'Graving Dock'); ?>>Graving Dock</option>
                        <option value="Rampway" <?= set_select('tipe', 'Rampway'); ?>>Rampway</option>
                        <option value="Helling Dock" <?= set_select('tipe', 'Helling Dock'); ?>>Helling Dock</option>
                    </select>
                    <?= form_error('tipe', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="panjang" name="panjang" placeholder="Length" value="<?= set_value('panjang'); ?>">
                    <?= form_error('panjang', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="lebar" name="lebar" placeholder="Width" value="<?= set_value('lebar'); ?>">
                    <?= form_error('lebar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="draft" name="draft" placeholder="Draft" value="<?= set_value('draft'); ?>">
                    <?= form_error('draft', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="dwt" name="dwt" placeholder="DWT" value="<?= set_value('dwt'); ?>">
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
