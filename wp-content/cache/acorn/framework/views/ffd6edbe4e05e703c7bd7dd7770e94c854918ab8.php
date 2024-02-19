    <section class="nota general con-relacionadas">
        <div class="container">
            <div class="nota__grid">
                <div class="nota__column">
                    <div class="nota__heading">
                    <h1 class="nota__title"><?php echo $titulo; ?></h1>
                    <h4 class="nota__subtitle"><?php echo $bajada; ?></h4>
                </div>
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
                <div class="nota__articulo">
                    <div class="nota__content">
                        <?php echo $contentido; ?>

                    </div>
                </div>
            </div>
            <div class="nota__sidecol">
                <?php echo $__env->first([
                    'partials.singleSidebar.content-' . get_post_type(), 
                    'partials.singleSidebar.content'
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/partials/single/content-page.blade.php ENDPATH**/ ?>