<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
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


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>departemen/tambah" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i> Departemen Baru</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>Nama Departemen</th>
                            <th>Kode Departemen</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nama Departemen</th>
                            <th>Kode Departemen</th>
                            <th>Action</th>

                        </tr>
                    </tfoot>

                    <tbody>
                        <?php foreach ($departemen as $dep) : ?>
                        <tr>
                            <td><?= $dep['id_departemen']; ?></td>
                            <td><?= $dep['nama_departemen']; ?></td>
                            <td><?= $dep['kode_departemen']; ?></td>
                            <td>
                                <a href="<?= base_url() ?>departemen/ubah/<?= $dep['id_departemen']; ?>" class="badge badge-success "><i class="fas fa-fw fa-edit"></i>ubah</a>
                                <a href="<?= base_url() ?>departemen/detail/<?= $dep['id_departemen']; ?>" class="badge badge-primary "><i class="fas fa-fw fa-eye"></i>detail</a>
                                <a href="<?= base_url() ?>departemen/hapus/<?= $dep['id_departemen']; ?>" class="badge badge-danger " onclick="return confirm('yakin?');"><i class="fas fa-fw fa-trash"></i>hapus</a>
                            </td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 