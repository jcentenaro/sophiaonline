<div class="resultado-busqueda__item">
  @if ($cat_name != null)
  <h4 class="resultado-busqueda__item-cat"><a href="{{ $cat_link }}">{{ $cat_name }}</a></h4>
  @endif
  <h3 class="resultado-busqueda__item-title"><a href="{{ $link }}">{!! $title !!}</a></h3>
  <p class="resultado-busqueda__item-text">{!! $bajada !!}</p>
  <h5 class="resultado-busqueda__item-date"><time class="dt-published" datetime="{{ get_post_time('c', true) }}">{{ $fecha }}</time></h5>
</div>
