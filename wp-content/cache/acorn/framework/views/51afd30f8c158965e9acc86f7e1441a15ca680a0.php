<?php $__env->startSection('content'); ?>
<h1 class="section-title section-title--mini section-title--columnistas"><a href="#">Columnistas</a></h1>
<div class="columnista--bio">
    <div class="container">
        <div class="columnista-bio-grid">
            <figure class="columnista--bio-image"><img src="<?php echo $autor_imagen; ?>" width="120" height="120" alt=""></figure>
            <div class="columnista--bio-data">
                <div class="columnista--bio-head">
                    <h2 class="columnista--bio-name"><?php echo $autor; ?></h2>
                    <h3 class="columnista--bio-title"><?php echo $desc_corta; ?></h3>
                </div>
                <p class="columnista--bio-text"><?php echo $autor_desc; ?></p>
                <div class="columnista--bio-cta">
                    
                    <?php if($autor_twitter != null): ?>
                        <a href="https://twitter.com/<?php echo $autor_twitter; ?>" target="_blank"><img src="<?= \Roots\asset('images/icons/share-twitter.svg'); ?>" width="24" height="24" alt="Twitter"/>@ <?php echo $autor_twitter; ?></a>
                    <?php endif; ?>
                    <?php if($autor_facebook != null): ?>
                        <a href="<?php echo $autor_facebook_link; ?>" target="_blank"><img src="<?= \Roots\asset('images/icons/share-facebook.svg'); ?>" width="24" height="24" alt="Twitter"/>@ <?php echo $autor_facebook; ?></a>
                    <?php endif; ?>
                    <?php if($autor_instagram != null): ?>
                        <a href="https://www.instagram.com/<?php echo $autor_instagram; ?>" target="_blank"><img src="<?= \Roots\asset('images/icons/icono-instagram.svg'); ?>" width="24" height="24" alt="Instagram"/>@ <?php echo $autor_instagram; ?></a>
                    <?php endif; ?>
                    
                    


                    
                    <a href="mailto:<?php echo $autor_email; ?>"><img src="<?= \Roots\asset('images/icons/newsletter.svg'); ?>" alt="NEWSLETTER" width="25" height="25"/>Escribirle</a>
                </div>
            </div>
        </div>
    </div>
</div>

<h2 class="section-subtitle">Últimas columnas</h2>

<section class="notas">
    <div class="container">
        <?php echo $__env->make('partials.masonry.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/author.blade.php ENDPATH**/ ?>