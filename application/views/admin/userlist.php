<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data User <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role Id</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role Id</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <?php foreach ($users as $u) : ?>
                        <tr>
                            <td><?= $u['name']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td><?= $u['role_id']; ?></td>
                            <?php if($u['is_active'] == 0):?>
                            <td>Tidak Aktif</td>
                            <?php else : ?>
                            <td>Aktif</td>    
                            <?php endif; ?>
                            <td>
                                <a href="<?= base_url() ?>admin/setaktif/<?= $u['id']; ?>" class="badge badge-success "><i class="fas fa-fw fa-edit"></i>Set Active</a>
                                <a href="<?= base_url() ?>admin/hapususer/<?= $u['id']; ?>" class="badge badge-danger " onclick="return confirm('yakin?');"><i class="fas fa-fw fa-trash"></i>hapus</a>
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