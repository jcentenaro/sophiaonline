@extends('layouts.app')

@section('content')
<section class="blog__head">
  <h1 class="blog__head-title">Blog: <span>{!! $blog_nombre !!}</span></h1>
  <h2 class="blog__head-bio">{!! $autor !!} <span>|</span> <a href="#bio" class="anchorLink">Minio Bio</a></h2>
</section>

<section class="nota blog">
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
</section>


















@endsection

@section('sidebar')
@endsection