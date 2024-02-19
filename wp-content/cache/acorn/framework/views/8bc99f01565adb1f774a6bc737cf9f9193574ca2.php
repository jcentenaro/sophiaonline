<div class="nota__relacionadas">
    <h3 class="nota__relacionadas__title">Más <span>Fotogalerías</span></h3>
    <div class="grid-type-3">
        <?php while($query->have_posts()): ?>
            <?php ($query->the_post()); ?>
            <?php echo $__env->first([
                'partials.masonry.items.content-' . get_post_type(), 
                'partials.masonry.items.content'
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endwhile; ?>
        <?php (wp_reset_postdata()); ?>
    </div>
</div><?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/partials/relacionadas/content-imagen.blade.php ENDPATH**/ ?>