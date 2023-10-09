
<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">Products Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Product Name : <?php echo e($products->name); ?></h5>
        <p class="card-text">Category Name : <?php echo e($products->category->name); ?></p>
        <p class="card-text">Product Price : Rp <?php echo e($products->price); ?></p>
        <p class="card-text">Product Quantity : <?php echo e($products->quantity); ?></p>
        <p class="card-text">Product Notes : <?php echo e($products->notes); ?></p></br>
        <a class="btn btn-primary" href="<?php echo e(url('/product')); ?>"> Back</a>
    </hr>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jonas\Documents\Semester 5\Pisonz Store\pisonz\resources\views/products/show.blade.php ENDPATH**/ ?>