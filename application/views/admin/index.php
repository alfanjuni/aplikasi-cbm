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

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-5 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="panel panel-hash">
                                <div class="panel-heading"><h3><i class="fas fa-trophy alert-warning"></i> <span class="badge alert-primary">KARYAWAN TERBAIK</span></h3></div>
                                <?php if($topDemanded): ?>
                                    <table class="table table-striped table-responsive table-hover">
                                        <thead>
                                            <tr>
                                                <th>Ranking</th>
                                                <th>Nama Karyawan</th>
                                                <th>Total Cbm</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;?>
                                        <?php foreach($topDemanded as $get):?>
                                            <tr>
                                            <td><?=$i?></td>
                                                <td><?=$get->nama_karyawan?></td>
                                                <td><?=$get->totCbm?></td>
                                            </tr>
                                            <?php $i++;?>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <?php else: ?>
                                    No Data
                                    <?php endif; ?>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="panel panel-hash">
                                <div class="panel-heading"><h3><i class="fas fa-medal alert-warning"></i> <span class="badge alert-primary">KARYAWAN TERBAIK BY MONTH</span></h3></div>
                                <?php if($bulan): ?>
                                    <table class="table table-striped table-responsive table-hover">
                                        <thead>
                                            <tr>
                                                <th>Bulan</th>
                                                <th>Nama Karyawan</th>
                                                <th>Total Cbm</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;?>
                                        <?php foreach($bulan as $get):?>
                                            <tr>
                                                 <td><?=$get->month?></td>
                                                <td><?=$get->nama_karyawan?></td>
                                                <td><?=$get->totCbm?></td>
                                            </tr>
                                            <?php $i++;?>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <?php else: ?>
                                    No Data
                                    <?php endif; ?>
                                </div>
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