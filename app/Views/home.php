<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-6 col-lg-4">
        <div class="widget-small primary coloured-icon"><i class="icon fas fa-baby fa-3x"></i>
            <div class="info">
                <h4>Jumlah Baptis</h4>
                <p><b><?= $baptis ?></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="widget-small info coloured-icon"><i class="icon fas fa-cross fa-3x"></i>
            <div class="info">
                <h4>Jumlah Sidi</h4>
                <p><b><?= $sidi ?></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="widget-small warning coloured-icon"><i class="icon fas fa-ring fa-3x"></i>
            <div class="info">
                <h4>Jumlah Nikah</h4>
                <p><b><?= $nikah ?></b></p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>