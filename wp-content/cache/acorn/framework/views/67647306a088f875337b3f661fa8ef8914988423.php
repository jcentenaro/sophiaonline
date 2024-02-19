<?php $__env->startSection('content'); ?>
<?php while(have_posts()): ?> <?php (the_post()); ?>
<div class="fotogaleria-hero">
    <div class="fotogaleria-hero__image">
        <?php if (isset($component)) { $__componentOriginaldcd067873dcb67db8d75805115d8dfc0e314b05e = $component; } ?>
<?php $component = App\View\Components\Imagen::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('imagen'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Imagen::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '1920','height' => '750']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldcd067873dcb67db8d75805115d8dfc0e314b05e)): ?>
<?php $component = $__componentOriginaldcd067873dcb67db8d75805115d8dfc0e314b05e; ?>
<?php unset($__componentOriginaldcd067873dcb67db8d75805115d8dfc0e314b05e); ?>
<?php endif; ?>
    </div>
    <div class="container">
        <div class="fotogaleria-hero__content">
            <h4 class="fotogaleria-hero__section">
                <a href="#" class="fotogaleria-hero__inner">
                    <span class="fotogaleria-hero__icon"><img src="<?= \Roots\asset('images/icons/fotogaleria.svg'); ?>" width="24" height="25" alt="FOTOGALERÍA"/></span>
                    FOTOGALERÍAS
                </a>
            </h4>
            <h1 class="fotogaleria-hero__title"><?php echo $titulo; ?></h1>
            <p class="fotogaleria-hero__by">POR <?php echo $autores; ?></p>
            <h5 class="fotogaleria-hero__date"><time class="dt-published" datetime="<?php echo e(get_post_time('c', true)); ?>"><?php echo $fecha; ?></time></h5>
        </div>
    </div>
</div>
<section class="nota fotogalerias con-relacionadas">
    <div class="container">
        <div class="nota__column">
            <div class="nota__tools">
                <div class="nota__share">
                    <h6 class="nota__label">COMPARTÍ</h6>
                    <div class="nota__social">
                        <?php if (isset($component)) { $__componentOriginaldada113763c8004e782cb2cc00191abaabb636a1 = $component; } ?>
<?php $component = App\View\Components\Shared::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shared'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Shared::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldada113763c8004e782cb2cc00191abaabb636a1)): ?>
<?php $component = $__componentOriginaldada113763c8004e782cb2cc00191abaabb636a1; ?>
<?php unset($__componentOriginaldada113763c8004e782cb2cc00191abaabb636a1); ?>
<?php endif; ?>
                    </div>
                </div>
                <div class="nota__comenta">
                    <a href="#comenta" class="anchorLink">
                        <strong><?php echo $n_comentarios; ?></strong>
                        <img src="<?= \Roots\asset('images/icons/icono-comenta.svg'); ?>" width="20" height="21" alt="Comentá"/><span>Comentá</span>
                    </a>
                </div>
                <div class="widget-area">
                    <?php if (isset($component)) { $__componentOriginal3576a57ecab682af1f33d2841705994e02c77582 = $component; } ?>
<?php $component = App\View\Components\FbBtnLike::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('fbBtnLike'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FbBtnLike::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3576a57ecab682af1f33d2841705994e02c77582)): ?>
<?php $component = $__componentOriginal3576a57ecab682af1f33d2841705994e02c77582; ?>
<?php unset($__componentOriginal3576a57ecab682af1f33d2841705994e02c77582); ?>
<?php endif; ?>
                </div>
            </div>
            <div class="outside-element"><hr class="nota__hline"></div>
            <div class="nota__articulo">
                <div class="nota__content">
                    <?php echo $contentido; ?>

                </div>
                <div class="content-widget-area">
                    <?php if (isset($component)) { $__componentOriginal746a8cbac0cbdc0082b97349c63bfc5500618c6a = $component; } ?>
<?php $component = App\View\Components\FbComment::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('fbComment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FbComment::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal746a8cbac0cbdc0082b97349c63bfc5500618c6a)): ?>
<?php $component = $__componentOriginal746a8cbac0cbdc0082b97349c63bfc5500618c6a; ?>
<?php unset($__componentOriginal746a8cbac0cbdc0082b97349c63bfc5500618c6a); ?>
<?php endif; ?>
                </div>
            </div>
        </div>

        <div class="nota__row-relacionadas">
            <?php echo $__env->first(['partials.relacionadas.content-' . get_post_type(), 'partials.relacionadas.content'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
            
    </div>
</section>

<?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/single-imagen.blade.php ENDPATH**/ ?>