<div class="col-12">
    <div class="card card-body">
        <h4 class="card-title"><?= $title; ?></h4>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <form action="tambahwalikelas" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail111" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Username" value="<?= set_value('name') ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail12" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?= set_value('email') ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail111" class="form-label">Kelas Binaan</label>
                        <select class="form-control" id="id_nama_kelas" name="id_nama_kelas" type="text">
                            <option value="">-- Pilih Kelas --</option>
                            <?php foreach ($kelas as $k) : ?>
                                <option value="<?= $k['id'] ?>"><?= $k['nama_kelas'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('id_nama_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-success me-2 text-white">Submit</button>
                    <a href="<?= site_url('walikelas') ?>" role="button" class="btn btn-dark">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>