@extends('layouts.app')

@section('content')
<section class="blog__head">
  <h1 class="blog__head-title">Blog: <span>{!! $blog_nombre !!}</span></h1>
  <h2 class="blog__head-bio">{!! $autor !!} <span>|</span> <a href="#bio" class="anchorLink">Minio Bio</a></h2>
</section>

<section class="blog">
  <div class="container">
    <div class="blog__grid">
      <div class="blog__notas">
        @include('partials.masonry.list')
      </div>
      <div class="blog__sidecol">
        @includeFirst(['partials.singleSidebar.content-blog', 'partials.singleSidebar.content'])
      </div>
    </div>
  </div>
</div>
@endsection

@section('sidebar')
@endsection
