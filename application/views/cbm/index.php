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
                                <a href="<?= base_url() ?>cbm/detail/<?= $c['id']; ?>" class="badge badge-primary "><i class="fas fa-fw fa-eye"></i>detail</a>
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

                    <form action="<?= base_url('karyawan'); ?>" method="post">
                        <div class="form-group">
                            <label for="nama_karyawan">Nama Karyawan</label>
                            <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan">
                            <small class="form-text text-danger"><?= form_error('nama_karyawan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="dep_karyawan">Departemen</label>
                            <select class="form-control" id="dep_karyawan" name="dep_karyawan">
                                <?php foreach ($departemen as $dep) : ?>
                                <option value="<?= $dep['id_departemen']; ?>"><?= $dep['nama_departemen']; ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select class="form-control" id="jabatan" name="jabatan">
                            <option value="KARYAWAN">KARYAWAN</option>
                            <option value="MANDOR">MANDOR</option>
                            <option value="ASISTEN MANDOR">ASISTEN MANDOR</option>
                        
                        </select>
                    </div>
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input type="text" class="form-control" id="kota" name="kota">
                            <small class="form-text text-danger"><?= form_error('kota'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_masuk">Tanggal Masuk</label>
                            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk">
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