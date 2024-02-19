<div <?php (post_class('frase')); ?>>
    <div class="frase__inner">
        <h2 class="frase__logo"><img src="<?= \Roots\asset('images/layout/frase-sophia.svg'); ?>" alt="Sophia: FRASE DEL DÍA" width="103" height="40" /></h2>
        <h3 class="frase__title">FRASE DEL DÍA</h3>
        <p class="frase__text">
            <?php echo e(strip_tags(get_the_content())); ?>

        </p>
        <h4 class="frase__autor"><?php (the_title()); ?></h4>
        <div class="newsbox__social">
            <?php if (isset($component)) { $__componentOriginaldada113763c8004e782cb2cc00191abaabb636a1 = $component; } ?>
<?php $component = App\View\Components\Shared::resolve(['type' => 'warning'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
</div>
<?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/partials/masonry/items/content-post-quote.blade.php ENDPATH**/ ?>