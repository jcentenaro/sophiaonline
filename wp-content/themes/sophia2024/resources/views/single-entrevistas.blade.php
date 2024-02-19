@extends('layouts.app')

@section('content')
<section class="nota multimedia">
    <div class="container">
        <div class="nota__grid">
            <div class="nota__column">
                @while(have_posts()) @php(the_post())
                    @includeFirst(['partials.single.content-' . get_post_type(), 'partials.single.content'])
                @endwhile
            </div>
            <div class="nota__sidecol">
                @includeFirst(['partials.singleSidebar.content-' . get_post_type(), 'partials.singleSidebar.content'])
            </div>
        </div>
    </div>
</div>
@endsection

@section('sidebar')
@endsection