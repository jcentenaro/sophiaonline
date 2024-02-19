<?php $__env->startSection('content'); ?>

<section class="nota columnistas">
    <div class="container">
        <div class="nota__grid">
            <div class="nota__column">
                <div class="nota__columnista--head">
                    <h5 class="nota__category"><a href="#">Columnistas</a></h5>
                    <figure class="nota__columnista--image"><a href="<?php echo $autor_link; ?>"><img src="<?php echo $autor_imagen; ?>" width="60" height="63" alt=""></a></figure>
                    <div class="nota__columnista--group">
                        <h2 class="nota__columnista--name"><a href="<?php echo $autor_link; ?>"><?php echo $autor; ?></a></h2>
                        <h3 class="nota__columnista--title"><a href="<?php echo $autor_link; ?>"><?php echo $desc_corta; ?></a></h3>
                    </div>
                </div>

                <?php while(have_posts()): ?> <?php (the_post()); ?>
                    <?php echo $__env->first(['partials.single.content-' . get_post_type(), 'partials.single.content'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endwhile; ?>
            </div>
                
            <div class="nota__sidecol">
                <?php echo $__env->first(['partials.singleSidebar.content-' . get_post_type(), 'partials.singleSidebar.content'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/single-columnistas.blade.php ENDPATH**/ ?>