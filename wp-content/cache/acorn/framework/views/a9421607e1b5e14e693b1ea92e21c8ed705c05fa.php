<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php (the_post()); ?>
    <?php echo $__env->first([
      'partials.single.content-' . get_post_type().'-'.get_post_format(), 
      'partials.single.content-' . get_post_type(), 
      'partials.single.content'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/single-post.blade.php ENDPATH**/ ?>