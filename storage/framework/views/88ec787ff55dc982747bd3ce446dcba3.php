
<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">Categories Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Category Name : <?php echo e($categories->name); ?></h5>
        <p class="card-text">Game Name : <?php echo e($categories->game->name); ?></p></br>
        <a class="btn btn-primary" href="<?php echo e(url('/category')); ?>"> Back</a>
    </hr>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('categories.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jonas\Documents\Semester 5\Pisonz Store\pisonz\resources\views/categories/show.blade.php ENDPATH**/ ?>