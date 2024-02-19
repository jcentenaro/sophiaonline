@extends('layouts.app')

@section('content')
<section class="resultado-busqueda__head">
  <div class="container">
      <h1 class="resultado-busqueda__title">Resultado de la búsqueda</h1>
      <div class="resultado-busqueda__filters">
          <p class="resultado-busqueda__filter-title">MOSTRAR SOLO RESULTADOS DE</p>
          <form id="search_result_form" role="search" method="get" class="search-form" action="{{ home_url('/') }}">
            <input type="hidden" name="s" value="{{ get_search_query() }}">
            <div class="resultado-busqueda__filter-options">
                <label><input type="checkbox" name="filter_all" class="filter_all" id="filter_all" value="1" @if (App\searchCustom::hasOption('filter_all')) checked="checked" @endif ><span class="checkbox"></span>Todo el sitio</label>
                <label><input type="checkbox" name="filter_posts" class="filter" id="filter_posts" value="1" @if (App\searchCustom::hasOption('filter_posts')) checked="checked" @endif ><span class="checkbox"></span>Notas</label>
                <label><input type="checkbox" name="filter_entrevistas" class="filter" id="entrevistas" value="1" @if (App\searchCustom::hasOption('filter_entrevistas')) checked="checked" @endif ><span class="checkbox"></span>Entrevistas</label>
                <label><input type="checkbox" name="filter_alianzas" class="filter" id="alianzas" value="1" @if (App\searchCustom::hasOption('filter_alianzas')) checked="checked" @endif ><span class="checkbox"></span>Alianzas</label>
                <label><input type="checkbox" name="filter_cursos" class="filter" id="cursos" value="1" @if (App\searchCustom::hasOption('filter_cursos')) checked="checked" @endif ><span class="checkbox"></span>Cursos</label>
                <label><input type="checkbox" name="filter_columnistas"  class="filter" id="columnistas" value="1" @if (App\searchCustom::hasOption('filter_columnistas')) checked="checked" @endif ><span class="checkbox"></span>Columnistas</label>
                <label><input type="checkbox" name="filter_multimedia" class="filter" id="multimedia" value="1" @if (App\searchCustom::hasOption('filter_multimedia')) checked="checked" @endif ><span class="checkbox"></span>Multimedia</label>
                <label><input type="checkbox" name="filter_blogs" class="filter" id="filter_blogs" value="1" @if (App\searchCustom::hasOption('filter_blogs')) checked="checked" @endif ><span class="checkbox"></span>Blogs</label>
              </div>
        </form>
      </div>
  </div>
</section>

<section class="resultado-busqueda__results general">
  <div class="container">
      <p class="resultado-busqueda__info"><strong>{{ App\searchCustom::nResult() }}</strong> resultados para <strong>“{{ get_search_query() }}“</strong></p>
  </div>
</section>




<section class="resultado-busqueda">
    <div class="container">
        @if (! have_posts())
            <x-alert type="warning">
              {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>
            {!! get_search_form(false) !!}
        @else
            @while(have_posts()) @php(the_post())
                @include('partials.content-search')
            @endwhile
        @endif
  
    
        <div class="pager">
            
            {{-- <span class="pager__actual">1</span>
            <a href="#" class="pager__item">2</a>
            <a href="#" class="pager__item">3</a>
            <a href="#" class="pager__item">4</a> --}}
            
            {{-- {!! get_the_posts_navigation() !!} --}}
            {!! App\searchCustom::paginate() !!}
        </div>

    </div> 
</section>



<script>
(function($) {
  jQuery( document ).ready( function( $ ) {

  $('#search_result_form').submit(function(e){
    if($('#search_result_form input[name="s"]').val() == ''){
      e.preventDefault();
    }
  });

  $('.filter' ).click(function(e){
    //e.preventDefault();
    $('#filter_all').removeAttr('checked');
    $('#search_result_form').submit();
  });
  $('.filter_all' ).click(function(e){
    $('.filter').removeAttr('checked');
    $('#search_result_form').submit();
  });
  });

})(jQuery)
</script>

  
@endsection
