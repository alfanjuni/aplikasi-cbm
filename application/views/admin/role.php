<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?= form_error('role', '<div class="alert alert-danger" role="alert">
                    ', '
                  </div>'); ?>
    <?php if ($this->session->flashdata('flash')) : ?>
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        Role <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                        </div>
                                    </div>

                                                                <?php endif; ?>


    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">
                    ', '
                  </div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <div class="card">
                <div class="card-header py-3">

                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newRoleModal"><i class="fas fa-fw fa-plus"></i> Add New Role</a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($role as $r) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                <td><?= $r['role']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-warning "><i class="fas fa-fw fa-key"></i>access</a>
                                                <a href="<?= base_url('admin/ubahRole/') . $r['id']; ?>" class="badge badge-success "><i class="fas fa-fw fa-edit"></i>ubah</a>
                                                <a href="<?= base_url('admin/deleteRole/') . $r['id']; ?>" class="badge badge-danger " onclick="return confirm('yakin?');"><i class="fas fa-fw fa-trash"></i>hapus</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                                                            <?php endforeach ?>

                    </tbody>
                </table>


            </div>

        </div>
    </div>


    <!-- /.container-fluid -->
    <!-- Content Row -->

    <!-- Content Row -->
</div>
<!-- End of Main Content -->
</div>

<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">

                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>