<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data CBM
                </div>
                <div class="card-body">
                    <form action="<?= base_url('cbm/ubah'); ?>" method="post">
                        <input type="hidden" name="id" value="<?= $cbm['id']; ?>">
                        <input type="hidden" name="id_karyawan" value="<?= $cbm['id_karyawan']; ?>">
                        <div class="form-group">
                            <label for="nama_karyawan">Nama Karyawan</label>
                            <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="<?= $cbm['nama_karyawan']; ?>" readonly>
                           
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Bekerja</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $cbm['tanggal']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="cbm">Cbm yang dihasilkan</label>
                            <input type="text" class="form-control" id="cbm" name="cbm" value="<?= $cbm['cbm']; ?>">
                            <small class="form-text text-danger"><?= form_error('cbm'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

                    </form>
                </div>
            </div>




        </div>
    </div>
</div>
</div> 