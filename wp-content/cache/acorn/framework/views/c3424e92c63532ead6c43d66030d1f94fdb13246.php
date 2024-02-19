<div class="grid-type-masonry">
    <!-- MASONRY SETUP -->
    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>
    <!-- FIN MASONRY SETUP -->
    <?php if($nota_destacada): ?>
        <?php if (isset($component)) { $__componentOriginal3046f8a17e4fffed71983972195162703fe413f9 = $component; } ?>
<?php $component = App\View\Components\DestacadaNota::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('destacadaNota'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DestacadaNota::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3046f8a17e4fffed71983972195162703fe413f9)): ?>
<?php $component = $__componentOriginal3046f8a17e4fffed71983972195162703fe413f9; ?>
<?php unset($__componentOriginal3046f8a17e4fffed71983972195162703fe413f9); ?>
<?php endif; ?>
    <?php endif; ?>
    <?php while(have_posts()): ?> <?php (the_post()); ?>
        <div class="grid-type-masonry__item">
            <?php if (isset($component)) { $__componentOriginalfe9f00730124a381c0e661d9fc59a12ed492b26c = $component; } ?>
<?php $component = App\View\Components\ItemMasonry::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('itemMasonry'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ItemMasonry::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe9f00730124a381c0e661d9fc59a12ed492b26c)): ?>
<?php $component = $__componentOriginalfe9f00730124a381c0e661d9fc59a12ed492b26c; ?>
<?php unset($__componentOriginalfe9f00730124a381c0e661d9fc59a12ed492b26c); ?>
<?php endif; ?>
            
        </div>
    <?php endwhile; ?>

</div>

<!-- MAS NOTAS -->
<div id="carga_mas" class="grid-type-masonry__cta" >
    <a data-paged="2" href="#" class="btn btn--big">+ <?php echo $btn_name; ?></a>
</div>


<?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/partials/masonry/list.blade.php ENDPATH**/ ?>