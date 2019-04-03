<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Departemen
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama Departemen : <?= $departemen['nama_departemen']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Kode :<?= $departemen['kode_departemen'] ?></h6>
                    <a href="<?= base_url(); ?>departemen" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>

</div> 