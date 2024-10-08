<?php $__env->startSection('judul'); ?>
Genre Data
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(auth()->guard()->check()): ?>
<a href="/genre/create" class="btn btn-sm btn-primary mb-3">add new cast</a>
<?php endif; ?>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
      </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $genre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($key + 1); ?></th>
                <td><?php echo e($item->nama); ?></td>
                <?php if(auth()->guard()->check()): ?>
                <td>
                    <form action="/genre/<?php echo e($item->id); ?>" method="POST">
                        <a href='/genre/<?php echo e($item->id); ?>' class="btn btn-primary btn-sm">Detail</a>
                        <a href='/genre/<?php echo e($item->id); ?>/edit' class="btn btn-warning btn-sm">Edit</a>  
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>
                </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>No Cast</p>
        <?php endif; ?>
      
    </tbody>
  </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mnurw\Downloads\project_backend_laravel_review_film-main\resources\views/genre/show.blade.php ENDPATH**/ ?>