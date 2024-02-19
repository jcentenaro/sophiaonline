<div class="nota__head">
  <p class="nota__date">
    <time class="dt-published" datetime="{{ get_post_time('c', true) }}">{!! $fecha !!}</time>
  </p>
</div>
<div class="nota__heading">
  <h1 class="nota__title">{!! $titulo !!}</h1>
  <h4 class="nota__subtitle">{!! $bajada !!}</h4>
</div>
<div class="nota__tools">
  <div class="nota__share">
      <h6 class="nota__label">COMPARTÍ</h6>
      <div class="nota__social">
          <x-shared></x-shared>
      </div>
  </div>
  <div class="nota__comenta">
      <a href="#comenta" class="anchorLink">
        <strong>{!! $n_comentarios !!}</strong>
        <img src="@asset('images/icons/icono-comenta.svg')" width="20" height="21" alt="Comentá"/><span>Comentá</span>
      </a>
  </div>
  <div class="widget-area">
    <x-fbBtnLike></x-fbBtnLike>
  </div>
</div>
<div class="nota__articulo">
  <div class="nota__content">
      {!! $contentido !!}
  </div>
  <div class="content-widget-area">
      <x-fbComment></x-fbComment>
  </div>
</div>
