<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  </head>
<body> 
<?php echo $__env->make('uts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!--header-->
<?php echo $__env->make('uts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!--nav-->
  
<?php echo $__env->yieldContent('contentuts2'); ?>
<!--content jadwal-->

<?php echo $__env->make('uts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--footer-->
  
<?php /**PATH D:\LARAVEL9\example-app\resources\views/uts/jadwal.blade.php ENDPATH**/ ?>