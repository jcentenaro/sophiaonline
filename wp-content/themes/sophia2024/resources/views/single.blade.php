@extends('layouts.app')

@section('content')
  <h1>-------------- SINGLEE ------------</h1>
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.single.content-' . get_post_type(), 'partials.single.content'])
  @endwhile
@endsection

@section('sidebar')
@endsection