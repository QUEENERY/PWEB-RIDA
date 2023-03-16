

<?php $__env->startSection('content'); ?>
    <h3 class="mb-5">Edit Produk</h3>

    <div class="col-6">
        <form action="/products/<?php echo e($product->id); ?>" method="POST" enctype="multipart/form-data">
            <?php echo method_field('put'); ?>
            <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="judulproduk" class="form-label">Nama Produk</label>
          <input type="text" name="judulproduk" id="judulproduk" value="<?php echo e($product->judulproduk); ?>" class="form-control" required>
         <?php $__errorArgs = ['judulproduk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
         <small class="text-danger"><?php echo e($message); ?></small>
         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="mb-3">
          <label for="nama-produk" class="form-label">Deskripsi Produk</label>
          <textarea rows="5" name="deskripsi" id="deskripsi" class="form-control" required><?php echo e($product->deskripsi); ?></textarea>
            <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="mb-3">
          <label for="harga" class="form-label">Harga Produk</label>
          <input type="number" name="harga" id="harga" value="<?php echo e($product->harga); ?>" class="form-control" required>
            <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Amalia\project-properti\resources\views/pages/produk/edit.blade.php ENDPATH**/ ?>