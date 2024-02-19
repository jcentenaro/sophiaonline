{{-- @include('partials.entry-meta') --}}
<div @php(post_class('newsbox general'))>
  {{ get_post_type() }} - 
  {{ get_post_format() }}
  
</div>