<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Departemen
                </div>
                <div class="card-body">
                    <form action="<?= base_url('departemen/ubah'); ?>" method="post">
                        <input type="hidden" name="id" value="<?= $departemen['id_departemen']; ?>">
                        <div class="form-group">
                            <label for="nama_departemen">Nama Departemen</label>
                            <input type="text" class="form-control" id="nama_departemen" name="nama_departemen" value="<?= $departemen['nama_departemen']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_departemen'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kode">Kode Departemen</label>
                            <input type="text" class="form-control" id="kode" name="kode" value="<?= $departemen['kode_departemen']; ?>">
                            <small class="form-text text-danger"><?= form_error('kode'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

                    </form>
                </div>
            </div>




        </div>
    </div>
</div>
</div> 