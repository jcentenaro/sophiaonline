<?php $__env->startSection('content'); ?>

  <?php while(have_posts()): ?> <?php (the_post()); ?>
    <?php echo $__env->make('partials.single.content-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/page.blade.php ENDPATH**/ ?>