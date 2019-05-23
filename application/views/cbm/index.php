<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- pesan error -->


    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Karyawan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
            <!-- MOdal button -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                <i class="fas fa-fw fa-plus"></i> Tambah Input CBM
            </button>
            <!-- MOdal button -->

        </div>
        <div class="card-body">
            <div class="table-responsive">
            
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Karyawan</th>
                            <th>cbm</th>
                            <th>Tanggal Input</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Karyawan</th>
                            <th>cbm</th>
                            <th>Tanggal Input</th>
                            <th>Action</th>

                        </tr>
                    </tfoot>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($cbm as $c) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= $c['nama_karyawan']; ?></td>
                            <td><?= $c['cbm']; ?></td>
                            <td><?= $c['tanggal']; ?></td>
                            <td>
                                <a href="<?= base_url() ?>cbm/ubah/<?= $c['id']; ?>" class="badge badge-success "><i class="fas fa-fw fa-edit"></i>ubah</a>
                                <a href="<?= base_url() ?>cbm/hapus/<?= $c['id']; ?>" class="badge badge-danger " onclick="return confirm('yakin?');"><i class="fas fa-fw fa-trash"></i>hapus</a>
                            </td>
                            <?php $i++; ?>
                                                                                    
                        </tr>

                        <?php endforeach; ?>
                    </tbody>

                </table>

            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Tambah Data Karyawan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?= base_url('cbm'); ?>" method="post">
                        <div class="form-group">
                            <label for="id_karyawan">Nama Karyawan</label>
                            <select class="form-control" id="id_karyawan" name="id_karyawan">
                                <?php foreach ($karyawan as $kar) : ?>
                                <option value="<?= $kar['id_karyawan']; ?>"><?= $kar['nama_karyawan']; ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div> 
                        <div class="form-group">
                            <label for="tanggal">Tanggal Bekerja</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="cbm">Cbm yang dihasilkan</label>
                            <input type="text" class="form-control" id="cbm" name="cbm">
                            <small class="form-text text-danger"><?= form_error('cbm'); ?></small>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Date picker --> 
