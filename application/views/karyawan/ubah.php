<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Karyawan
                </div>
                <div class="card-body">
                    <form action="<?= base_url('karyawan/ubah'); ?>" method="post">
                        <input type="hidden" name="id_karyawan" value="<?= $karyawan['id_karyawan']; ?>">
                        <div class="form-group">
                            <label for="nama_karyawan">Nama Karyawan</label>
                            <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="<?= $karyawan['nama_karyawan']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_karyawan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="dep_karyawan">Departemen</label>
                            <select class="form-control" id="dep_karyawan" name="dep_karyawan">
                                <?php foreach ($departemen as $dep) : ?>

                                <?php if ($dep['id_departemen'] == $karyawan['dep_karyawan']) : ?>
                                <option value="<?= $dep['id_departemen']; ?>" selected><?= $dep['nama_departemen']; ?></option>
                                <?php else : ?>
                                <option value="<?= $dep['id_departemen']; ?>"><?= $dep['nama_departemen']; ?></option>
                                <?php endif; ?>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                                <select class="form-control" id="jabatan" name="jabatan">
                            <?php foreach( $jabatan as $j):?>
                            
                                <?php if($j == $karyawan['jabatan']):?>
                                    <option value="<?= $j?>" selected><?= $j?></option>
                                <?php else:?>
                                    <option value="<?= $j?>"><?= $j?></option>
                                <?php endif;?>
                            <?php endforeach;?>
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input type="text" class="form-control" id="kota" name="kota" value="<?= $karyawan['kota']; ?>">
                            <small class="form-text text-danger"><?= form_error('kota'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl_masuk">Tanggal Masuk</label>
                            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" value="<?= $karyawan['tgl_masuk']; ?>">
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
</div> 