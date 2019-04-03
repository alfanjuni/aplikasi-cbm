<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Departemen Baru
                </div>
                <div class="card-body">
                    <form action="<?= base_url('departemen/tambah'); ?>" method="post">
                        <div class="form-group">
                            <label for="nama_departemen">Nama Departemen</label>
                            <input type="text" class="form-control" id="nama_departemen" name="nama_departemen">
                            <small class="form-text text-danger"><?= form_error('nama_departemen'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kode">Kode Departemen</label>
                            <input type="text" class="form-control" id="kode" name="kode">
                            <small class="form-text text-danger"><?= form_error('kode'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                        <a href="<?= base_url('departemen'); ?>"><button type="button" class="btn btn-secondary float">Close</button></a>

                    </form>
                </div>
            </div>




        </div>
    </div>
</div>
</div>
<!-- End of Main Content --> 