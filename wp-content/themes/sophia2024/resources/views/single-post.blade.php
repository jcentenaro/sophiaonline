@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @includeFirst([
      'partials.single.content-' . get_post_type().'-'.get_post_format(), 
      'partials.single.content-' . get_post_type(), 
      'partials.single.content'
    ])
  @endwhile
@endsection

@section('sidebar')
@endsection