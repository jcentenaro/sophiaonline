<div class="nota__head">
  <p class="nota__date">
    <time class="dt-published" datetime="<?php echo e(get_post_time('c', true)); ?>"><?php echo $fecha; ?></time>
  </p>
</div>
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
<?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/partials/single/content.blade.php ENDPATH**/ ?>