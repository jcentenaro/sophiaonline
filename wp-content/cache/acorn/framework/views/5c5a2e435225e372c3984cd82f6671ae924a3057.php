<?php while($query->have_posts()): ?>
    <?php ($query->the_post()); ?>
    <?php echo $__env->first([
        'partials.masonry.items.content-' . get_post_type().'-'.get_post_format(), 
        'partials.masonry.items.content-' . get_post_type(), 
        'partials.masonry.items.content'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endwhile; ?>
<?php (wp_reset_postdata()); ?>
<?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/partials/singleSidebar/content.blade.php ENDPATH**/ ?>