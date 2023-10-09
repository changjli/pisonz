
<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">Payments Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Payment Method : <?php echo e($payments->method); ?></h5>
        <p class="card-text">Account Number : <?php echo e($payments->account_number); ?></p>
        <p class="card-text">Account Name : <?php echo e($payments->account_name); ?></p></br>
        <a class="btn btn-primary" href="<?php echo e(url('/payment')); ?>"> Back</a>
    </hr>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('payments.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jonas\Documents\Semester 5\Pisonz Store\pisonz\resources\views/payments/show.blade.php ENDPATH**/ ?>