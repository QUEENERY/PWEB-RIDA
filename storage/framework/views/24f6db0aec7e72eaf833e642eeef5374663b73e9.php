

<?php $__env->startSection('content'); ?>

<h4 class="text-center mb-5">≋Ｓｅｌａｍａｔ Ｄａｔａｎｇ Ｄｉ ｈａｌａｍａｎ Ｄａｓｈｂｏａｒｄ≋</h4>

<div class="row">
  <div class="col-lg-3 col-sm-12">
    <p class="text-center">𝗝𝘂𝗺𝗹𝗮𝗵 𝗗𝗮𝘁𝗮 𝗣𝗿𝗼𝗱𝘂𝗸</p>
    <div class="card">
      <div class="card-body text-center">
        <h5><?php echo e($total); ?></h5>
        <span>𝗣𝗿𝗼𝗱𝘂𝗸</span>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Amalia\project-properti\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>