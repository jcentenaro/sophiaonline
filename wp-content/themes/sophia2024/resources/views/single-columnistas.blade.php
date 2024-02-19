@extends('layouts.app')

@section('content')

<section class="nota columnistas">
    <div class="container">
        <div class="nota__grid">
            <div class="nota__column">
                <div class="nota__columnista--head">
                    <h5 class="nota__category"><a href="#">Columnistas</a></h5>
                    <figure class="nota__columnista--image"><a href="{!! $autor_link !!}"><img src="{!! $autor_imagen !!}" width="60" height="63" alt=""></a></figure>
                    <div class="nota__columnista--group">
                        <h2 class="nota__columnista--name"><a href="{!! $autor_link !!}">{!! $autor !!}</a></h2>
                        <h3 class="nota__columnista--title"><a href="{!! $autor_link !!}">{!! $desc_corta !!}</a></h3>
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