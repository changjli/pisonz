
<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">Games Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Game Name : <?php echo e($games->name); ?></h5>
        <p class="card-text"><img src="<?php echo e($games->image); ?>" width="200px"></p></br>
        <a class="btn btn-primary" href="<?php echo e(url('/game')); ?>"> Back</a>
  </div>
    </hr>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('games.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jonas\Documents\Semester 5\Pisonz Store\pisonz\resources\views/games/show.blade.php ENDPATH**/ ?>