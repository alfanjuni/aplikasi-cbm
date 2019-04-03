<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>




    <!-- /.container-fluid -->
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Departemen</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php $i = 0; ?>
                                <?php foreach ($departemen as $d) : ?>
                                <?php $i++; ?>

                                <?php endforeach ?>
                                <?= $i; ?>

                            </div>
                            <a href="<?= base_url('departemen'); ?>" class="badge badge-primary ">Detail</a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tags fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Karyawan</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php $i = 0; ?>
                                <?php foreach ($karyawan as $k) : ?>
                                <?php $i++; ?>

                                <?php endforeach ?>
                                <?= $i; ?>

                            </div>
                            <a href="<?= base_url('karyawan'); ?>" class="badge badge-primary ">Detail</a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- Content Row -->
</div>
<!-- End of Main Content -->
</div> 