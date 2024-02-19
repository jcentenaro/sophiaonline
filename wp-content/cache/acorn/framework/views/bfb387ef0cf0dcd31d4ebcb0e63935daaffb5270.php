<div <?php (post_class('newsbox general')); ?>>




    <div class="newsbox__group-container">
        <div class="newsbox__image">
            <a href="<?php echo e(get_permalink()); ?>"><?php if (isset($component)) { $__componentOriginaldcd067873dcb67db8d75805115d8dfc0e314b05e = $component; } ?>
<?php $component = App\View\Components\Imagen::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('imagen'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Imagen::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldcd067873dcb67db8d75805115d8dfc0e314b05e)): ?>
<?php $component = $__componentOriginaldcd067873dcb67db8d75805115d8dfc0e314b05e; ?>
<?php unset($__componentOriginaldcd067873dcb67db8d75805115d8dfc0e314b05e); ?>
<?php endif; ?></a>
        </div>
        <div class="newsbox__group">
            <div class="newsbox__content">
                <?php if (isset($component)) { $__componentOriginal0eeb8cba9e05bc9631db569fc99cbe0b6f44b463 = $component; } ?>
<?php $component = App\View\Components\TagCategoria::resolve(['class' => 'newsbox__inner'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('TagCategoria'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TagCategoria::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0eeb8cba9e05bc9631db569fc99cbe0b6f44b463)): ?>
<?php $component = $__componentOriginal0eeb8cba9e05bc9631db569fc99cbe0b6f44b463; ?>
<?php unset($__componentOriginal0eeb8cba9e05bc9631db569fc99cbe0b6f44b463); ?>
<?php endif; ?>
                <h3 class="newsbox__title"><a href="<?php echo e(get_permalink()); ?>"><?php (the_title()); ?></a></h3>
                <p class="newsbox__text"><?php (the_excerpt()); ?></p>
            </div>
            <div class="newsbox__share">
                <h6 class="newsbox__label">COMPARTÍ</h6>
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
    </div>
</div><?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/partials/masonry/items/content-post.blade.php ENDPATH**/ ?>