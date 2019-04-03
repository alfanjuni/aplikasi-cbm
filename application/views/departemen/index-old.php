<div class="container-fluid">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Departemen <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>departemen/tambah" class="btn btn-primary">Tambah Departemen Baru</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="Cari departemen.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Departemen</h3>
            <?php if (empty($departemen)) : ?>
            <div class="alert alert-danger" role="alert">
                Data mahasiwa tidak di temukan
            </div>
            <?php endif; ?>

            <ul class="list-group">
                <?php foreach ($departemen as $dep) : ?>

                <li class="list-group-item">
                    <?= $dep['nama_departemen']; ?>
                    <a href="<?= base_url() ?>departemen/hapus/<?= $dep['id_departemen']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                    <a href="<?= base_url() ?>departemen/ubah/<?= $dep['id_departemen']; ?>" class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url() ?>departemen/detail/<?= $dep['id_departemen']; ?>" class="badge badge-primary float-right">detail</a>


                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>

</div> 