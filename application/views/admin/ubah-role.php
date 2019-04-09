<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Role
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/ubahRole'); ?>" method="post">
                        <input type="hidden" name="id" value="<?= $role['id']; ?>">
                        <div class="form-group">
                            <label for="role">Role</label>
                            <?= $role['id']; ?>
                            <input type="text" class="form-control" id="role" name="role" value="<?= $role['role']; ?>">
                            <small class="form-text text-danger"><?= form_error('role'); ?></small>
                        </div>


                        <button type="submit" name="ubahRole" class="btn btn-primary float-right">Ubah Data</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>