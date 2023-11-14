
<?php $__env->startSection('contentuts1'); ?>
<div class="row g-0 border rounded overflow-hidden flex-md-row mb-6 shadow-sm h-md-250 position-relative p-4 m-5">
        <div class="col-md-8 p-3 d-flex flex-column position-static order-md-last">
        <h3 class="font-semibold text-primary">Nim: <?php echo e($data['nim']); ?></h3>
        <h3 class="font-semibold text-primary">Nama: <?php echo e($data['nama']); ?></h3>
        <h3 class="font-semibold text-primary">Jurusan: <?php echo e($data['jurusan']); ?></h3>
        <h3 class="font-semibold text-primary">Alamat: <?php echo e($data['alamat']); ?></h3>
        <h3 class="font-semibold text-primary">No.Hp: <?php echo e($data['no_hp']); ?></h3>
        <h3 class="font-semibold text-primary">Hobi: <?php echo e($data['hobi']); ?></h3>
        <h3 class="font-semibold text-primary">Moto Hidup: <?php echo e($data['moto_hidup']); ?></h3>
        <div class="col-md-4 p-3 d-lg-block">
        <img class="img-fluid" width="300" height="350" src="<?php echo e(asset('asset-uts/lib/img/foto.jpeg')); ?>" role="img" alt="Foto">
        </div>
      </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('uts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LARAVEL9\example-app\resources\views/contentuts1.blade.php ENDPATH**/ ?>