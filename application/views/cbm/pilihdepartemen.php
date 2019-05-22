<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>




    <!-- /.container-fluid -->
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <?php  $i=0;?>
        <?php foreach ($departemen as $d) : ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card <?=$color[$i];?> shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Departemen</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                
                                <?= $d['nama_departemen']; ?>

                            </div>
                            <a href="<?= base_url(); ?>cbm/inputbydepartemen/<?= $d['id_departemen']; ?>" class="badge badge-primary ">Input Cbm</a>
                        </div>
                        <div class="col-auto">
                            <i class="<?=$icon[$i];?> fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if($i>4):?>
        <?php $i=0;?>
        <?php else: ?>
        <?php $i++;?>
        <?php endif;?>

        <?php endforeach ?>
    </div>
    <!-- Content Row -->
</div>
<!-- End of Main Content -->
</div> 