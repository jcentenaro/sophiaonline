@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.single.content-post', 'partials.single.content'])
  @endwhile
@endsection

@section('sidebar')
@endsection