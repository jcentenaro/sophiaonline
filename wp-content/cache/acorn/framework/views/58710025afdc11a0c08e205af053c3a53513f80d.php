<!-- HEADER -->
<?php echo $__env->make('layouts.app.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- FIN HEADER -->

<!-- NAVIGATION -->
<?php echo $__env->make('layouts.app.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- FIN NAVIGATION -->

<!-- MAIN -->
<?php echo $__env->yieldContent('content'); ?>
<!-- FIN MAIN -->


<?php if (! empty(trim($__env->yieldContent('sidebar')))): ?>
<?php echo $__env->yieldContent('sidebar'); ?>
<?php endif; ?>

<!-- BANNER -->
<?php echo $__env->make('partials.banner.798x90', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- FIN BANNER -->

<!-- FOOTER -->
<?php echo $__env->make('layouts.app.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- FIN FOOTER -->

<!-- FIXED FOOTER -->
<?php echo $__env->make('layouts.app.fixed-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- FIN FIXED FOOTER --><?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/layouts/app.blade.php ENDPATH**/ ?>