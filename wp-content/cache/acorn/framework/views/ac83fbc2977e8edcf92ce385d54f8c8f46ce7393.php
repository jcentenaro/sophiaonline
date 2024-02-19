<?php $__env->startSection('content'); ?>
<!-- MAIN -->
<?php if (isset($component)) { $__componentOriginald53f8bb331b61b27e1c8e51b4fa8e387332b6738 = $component; } ?>
<?php $component = App\View\Components\DestacadaImagen::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('destacadaImagen'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DestacadaImagen::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald53f8bb331b61b27e1c8e51b4fa8e387332b6738)): ?>
<?php $component = $__componentOriginald53f8bb331b61b27e1c8e51b4fa8e387332b6738; ?>
<?php unset($__componentOriginald53f8bb331b61b27e1c8e51b4fa8e387332b6738); ?>
<?php endif; ?>
<!-- NOTAS HOME -->
<section class="notas">
    <div class="container">
        <?php echo $__env->make('partials.masonry.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</section>

<section class="prefooter">
    <div class="container">
        <div class="grid-type-3">
            <div class="prefooter-item">
                <?php if(!dynamic_sidebar('sidebar-footer1')): ?>
                <?php if (isset($component)) { $__componentOriginal1d7a59fecce5fc48539e0b1b0c1ed5134ee2acf9 = $component; } ?>
<?php $component = App\View\Components\PopularPost::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('popularPost'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PopularPost::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d7a59fecce5fc48539e0b1b0c1ed5134ee2acf9)): ?>
<?php $component = $__componentOriginal1d7a59fecce5fc48539e0b1b0c1ed5134ee2acf9; ?>
<?php unset($__componentOriginal1d7a59fecce5fc48539e0b1b0c1ed5134ee2acf9); ?>
<?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="prefooter-item">
                <?php if(!dynamic_sidebar('sidebar-footer2')): ?>
                <h3 class="prefooter-item__title"><a href="#"><span>Carta</span> de la semana</a></h3>
                <div class="prefooter-item__content">
                    <div class="prefooter-item__content-grid">
                        <div class="prefooter-item__content-data">
                            <h5 class="prefooter-item__content-date">21.11.2023</h5>
                            <h4 class="prefooter-item__content-title"><a href="#">Desplegar ahora</a></h4>
                            <p class="prefooter-item__content-text">Y pasa la vida y pasan muchísimas cosas y decidís desplegar o no habrá más tiempo. Y lo pensás y lo ...</p>
                        </div>
                        <div class="prefooter-item__content-image">
                            <figure><a href="#"><img src="<?= \Roots\asset('images/temp/carta-semanal.jpg'); ?>" alt="" width="142" height="95"/></a></figure>
                            <a href="<?php echo e(App\helpers::linkSection('form_carta')); ?>" class="btn">¡ENVIÁ TU CARTA!</a>
                            <a href="<?php echo e(App\helpers::linkSection('cartas')); ?>" class="lnk">CARTAS ANTERIORES</a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="prefooter-item">
                <?php if(!dynamic_sidebar('sidebar-footer3')): ?>
                <h3 class="prefooter-item__title">Anunciá en <span>Sophia</span></h3>
                <div class="prefooter-item__content">
                    <div class="prefooter-item__content-grid">
                        <div class="prefooter-item__content-data">
                            <p class="prefooter-item__content-text">Si compartis el espiritu Sophia no dejes de descargar nuestro MEDIAKIT para conocer mas sobre nosotros y los espacios que tenemos para ofrecerle a tu marca.</p>
                        </div>
                        <div class="prefooter-item__content-image">
                            <figure><a href="<?php echo e(App\helpers::linkSection('pauta')); ?>"><img src="<?= \Roots\asset('images/temp/anuncie.jpg'); ?>" alt="" height="94" width="141"/></a></figure>
                            <a href="<?php echo e(App\helpers::linkSection('pauta')); ?>" class="btn">PAUTÁ EN SOPHIA</a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- FIN MAIN -->











  <?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/front-page.blade.php ENDPATH**/ ?>