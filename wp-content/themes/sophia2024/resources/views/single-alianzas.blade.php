@extends('layouts.app')

@section('content')
<section class="nota alianzas">
    <div class="container">
        <div class="nota__grid">
        
            <div class="nota__column">
                
                <div class="nota__alianza--head">
                    <figure class="nota__alianza--image">
                        <x-imagen url="{{ $alianza_imagen }}"></x-imagen>
                    </figure>
                    <div class="nota__alianza--group">
                        <h2 class="nota__alianza--name">Alianza</a></h2>
                        <h3 class="nota__alianza--title">{!! $alianza_nombre !!}</h3>
                    </div>
                </div>

                @while(have_posts()) @php(the_post())
                    @includeFirst(['partials.single.content-' . get_post_type(), 'partials.single.content'])
                @endwhile
            
            </div>
            
            <div class="nota__sidecol">
                @includeFirst(['partials.singleSidebar.content-' . get_post_type(), 'partials.singleSidebar.content'])
            </div>
        </div>
    </div>
</section>
@endsection

@section('sidebar')
@endsection