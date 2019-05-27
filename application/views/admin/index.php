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
        <?php
            $queryApril = "SELECT  MONTHNAME(input_cbm.tanggal) AS 'month',karyawan.nama_karyawan,ROUND(SUM(input_cbm.cbm), 2) AS 'totCbm' FROM karyawan JOIN input_cbm ON input_cbm.id_karyawan = karyawan.id_karyawan WHERE MONTH(input_cbm.tanggal)=1  GROUP BY MONTH, karyawan.id_karyawan   ORDER BY totCbm DESC LIMIT 1
            ";
            $januari = $this->db->query($queryApril)->result_array();
            
            $queryApril = "SELECT  MONTHNAME(input_cbm.tanggal) AS 'month',karyawan.nama_karyawan,ROUND(SUM(input_cbm.cbm), 2) AS 'totCbm' FROM karyawan JOIN input_cbm ON input_cbm.id_karyawan = karyawan.id_karyawan WHERE MONTH(input_cbm.tanggal)=2  GROUP BY MONTH, karyawan.id_karyawan   ORDER BY totCbm DESC LIMIT 1
            ";
            $februari = $this->db->query($queryApril)->result_array();
            
            $queryApril = "SELECT  MONTHNAME(input_cbm.tanggal) AS 'month',karyawan.nama_karyawan,ROUND(SUM(input_cbm.cbm), 2) AS 'totCbm' FROM karyawan JOIN input_cbm ON input_cbm.id_karyawan = karyawan.id_karyawan WHERE MONTH(input_cbm.tanggal)=3  GROUP BY MONTH, karyawan.id_karyawan   ORDER BY totCbm DESC LIMIT 1
            ";
            $maret = $this->db->query($queryApril)->result_array();
            
            $queryApril = "SELECT  MONTHNAME(input_cbm.tanggal) AS 'month',karyawan.nama_karyawan,ROUND(SUM(input_cbm.cbm), 2) AS 'totCbm' FROM karyawan JOIN input_cbm ON input_cbm.id_karyawan = karyawan.id_karyawan WHERE MONTH(input_cbm.tanggal)=4  GROUP BY MONTH, karyawan.id_karyawan   ORDER BY totCbm DESC LIMIT 1
                        ";
            $april = $this->db->query($queryApril)->result_array();
            
            $queryApril = "SELECT  MONTHNAME(input_cbm.tanggal) AS 'month',karyawan.nama_karyawan,ROUND(SUM(input_cbm.cbm), 2) AS 'totCbm' FROM karyawan JOIN input_cbm ON input_cbm.id_karyawan = karyawan.id_karyawan WHERE MONTH(input_cbm.tanggal)=5  GROUP BY MONTH, karyawan.id_karyawan   ORDER BY totCbm DESC LIMIT 1
            ";
            $mei = $this->db->query($queryApril)->result_array();
            
            $queryApril = "SELECT  MONTHNAME(input_cbm.tanggal) AS 'month',karyawan.nama_karyawan,ROUND(SUM(input_cbm.cbm), 2) AS 'totCbm' FROM karyawan JOIN input_cbm ON input_cbm.id_karyawan = karyawan.id_karyawan WHERE MONTH(input_cbm.tanggal)=6  GROUP BY MONTH, karyawan.id_karyawan   ORDER BY totCbm DESC LIMIT 1
            ";
            $juni = $this->db->query($queryApril)->result_array();
            
            $queryApril = "SELECT  MONTHNAME(input_cbm.tanggal) AS 'month',karyawan.nama_karyawan,ROUND(SUM(input_cbm.cbm), 2) AS 'totCbm' FROM karyawan JOIN input_cbm ON input_cbm.id_karyawan = karyawan.id_karyawan WHERE MONTH(input_cbm.tanggal)=7  GROUP BY MONTH, karyawan.id_karyawan   ORDER BY totCbm DESC LIMIT 1
            ";
            $juli = $this->db->query($queryApril)->result_array();

            $queryApril = "SELECT  MONTHNAME(input_cbm.tanggal) AS 'month',karyawan.nama_karyawan,ROUND(SUM(input_cbm.cbm), 2) AS 'totCbm' FROM karyawan JOIN input_cbm ON input_cbm.id_karyawan = karyawan.id_karyawan WHERE MONTH(input_cbm.tanggal)=8  GROUP BY MONTH, karyawan.id_karyawan   ORDER BY totCbm DESC LIMIT 1
            ";
            $agustus = $this->db->query($queryApril)->result_array();

            $queryApril = "SELECT  MONTHNAME(input_cbm.tanggal) AS 'month',karyawan.nama_karyawan,ROUND(SUM(input_cbm.cbm), 2) AS 'totCbm' FROM karyawan JOIN input_cbm ON input_cbm.id_karyawan = karyawan.id_karyawan WHERE MONTH(input_cbm.tanggal)=9  GROUP BY MONTH, karyawan.id_karyawan   ORDER BY totCbm DESC LIMIT 1
            ";
            $september = $this->db->query($queryApril)->result_array();

            $queryApril = "SELECT  MONTHNAME(input_cbm.tanggal) AS 'month',karyawan.nama_karyawan,ROUND(SUM(input_cbm.cbm), 2) AS 'totCbm' FROM karyawan JOIN input_cbm ON input_cbm.id_karyawan = karyawan.id_karyawan WHERE MONTH(input_cbm.tanggal)=10  GROUP BY MONTH, karyawan.id_karyawan   ORDER BY totCbm DESC LIMIT 1
            ";
            $oktober = $this->db->query($queryApril)->result_array();

            $queryApril = "SELECT  MONTHNAME(input_cbm.tanggal) AS 'month',karyawan.nama_karyawan,ROUND(SUM(input_cbm.cbm), 2) AS 'totCbm' FROM karyawan JOIN input_cbm ON input_cbm.id_karyawan = karyawan.id_karyawan WHERE MONTH(input_cbm.tanggal)=11  GROUP BY MONTH, karyawan.id_karyawan   ORDER BY totCbm DESC LIMIT 1
            ";
            $november = $this->db->query($queryApril)->result_array();

            $queryApril = "SELECT  MONTHNAME(input_cbm.tanggal) AS 'month',karyawan.nama_karyawan,ROUND(SUM(input_cbm.cbm), 2) AS 'totCbm' FROM karyawan JOIN input_cbm ON input_cbm.id_karyawan = karyawan.id_karyawan WHERE MONTH(input_cbm.tanggal)=12  GROUP BY MONTH, karyawan.id_karyawan   ORDER BY totCbm DESC LIMIT 1
            ";
            $desember = $this->db->query($queryApril)->result_array();
         ?>
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="panel panel-hash">
                                <div class="panel-heading"><h3><i class="fas fa-medal alert-warning"></i> <span class="badge alert-primary">KARYAWAN TERBAIK BY MONTH</span></h3></div>
                                <?php if($bulan): ?>
                                    <table class="table table-bordered table-hover"  width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Bulan</th>
                                                <th>Nama Karyawan</th>
                                                <th>Total Cbm</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;?>
                                            <?php foreach($januari as $a):?>
                                            <tr>
                                                 <td><?=$a['month'];?></td>
                                                <td><?=$a['nama_karyawan'];?></td>
                                                <td><?=$a['totCbm'];?></td>
                                            </tr>
                                            <?php $i++;?>
                                        <?php endforeach; ?>
                                        
                                        <?php foreach($februari as $a):?>
                                            <tr>
                                                 <td><?=$a['month'];?></td>
                                                <td><?=$a['nama_karyawan'];?></td>
                                                <td><?=$a['totCbm'];?></td>
                                            </tr>
                                            <?php $i++;?>
                                        <?php endforeach; ?>
                                        
                                        <?php foreach($maret as $a):?>
                                            <tr>
                                                 <td><?=$a['month'];?></td>
                                                <td><?=$a['nama_karyawan'];?></td>
                                                <td><?=$a['totCbm'];?></td>
                                            </tr>
                                            <?php $i++;?>
                                        <?php endforeach; ?>

                                        <?php foreach($april as $a):?>
                                            <tr>
                                                 <td><?=$a['month'];?></td>
                                                <td><?=$a['nama_karyawan'];?></td>
                                                <td><?=$a['totCbm'];?></td>
                                            </tr>
                                            <?php $i++;?>
                                        <?php endforeach; ?>
                                        
                                        <?php foreach($mei as $a):?>
                                            <tr>
                                                 <td><?=$a['month'];?></td>
                                                <td><?=$a['nama_karyawan'];?></td>
                                                <td><?=$a['totCbm'];?></td>
                                            </tr>
                                            <?php $i++;?>
                                        <?php endforeach; ?>

                                        <?php foreach($juni as $a):?>
                                            <tr>
                                                 <td><?=$a['month'];?></td>
                                                <td><?=$a['nama_karyawan'];?></td>
                                                <td><?=$a['totCbm'];?></td>
                                            </tr>
                                            <?php $i++;?>
                                        <?php endforeach; ?>

                                        <?php foreach($juli as $a):?>
                                            <tr>
                                                 <td><?=$a['month'];?></td>
                                                <td><?=$a['nama_karyawan'];?></td>
                                                <td><?=$a['totCbm'];?></td>
                                            </tr>
                                            <?php $i++;?>
                                        <?php endforeach; ?>

                                        <?php foreach($agustus as $a):?>
                                            <tr>
                                                 <td><?=$a['month'];?></td>
                                                <td><?=$a['nama_karyawan'];?></td>
                                                <td><?=$a['totCbm'];?></td>
                                            </tr>
                                            <?php $i++;?>
                                        <?php endforeach; ?>

                                        <?php foreach($september as $a):?>
                                            <tr>
                                                 <td><?=$a['month'];?></td>
                                                <td><?=$a['nama_karyawan'];?></td>
                                                <td><?=$a['totCbm'];?></td>
                                            </tr>
                                            <?php $i++;?>
                                        <?php endforeach; ?>

                                        <?php foreach($oktober as $a):?>
                                            <tr>
                                                 <td><?=$a['month'];?></td>
                                                <td><?=$a['nama_karyawan'];?></td>
                                                <td><?=$a['totCbm'];?></td>
                                            </tr>
                                            <?php $i++;?>
                                        <?php endforeach; ?>

                                        <?php foreach($november as $a):?>
                                            <tr>
                                                 <td><?=$a['month'];?></td>
                                                <td><?=$a['nama_karyawan'];?></td>
                                                <td><?=$a['totCbm'];?></td>
                                            </tr>
                                            <?php $i++;?>
                                        <?php endforeach; ?>

                                        <?php foreach($desember as $a):?>
                                            <tr>
                                                 <td><?=$a['month'];?></td>
                                                <td><?=$a['nama_karyawan'];?></td>
                                                <td><?=$a['totCbm'];?></td>
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