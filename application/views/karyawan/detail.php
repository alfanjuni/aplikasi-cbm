<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Karyawan
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama Karyawan : <?= $karyawan['nama_karyawan']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Departemen : <?= $karyawan['nama_departemen'] ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted">Kota : <?= $karyawan['kota'] ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal Masuk : <?= $karyawan['tgl_masuk'] ?></h6>
                    <a href="<?= base_url(); ?>karyawan" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>

</div> 