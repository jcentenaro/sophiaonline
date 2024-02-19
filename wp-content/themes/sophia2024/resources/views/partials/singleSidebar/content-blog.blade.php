<a name="bio" id="bio" class="bio__target"></a>
<div class="blog-bio">
    <div class="blog-bio__head">
        <figure class="blog-bio__image"><img src="{{ $autor_imagen }}" width="120" height="120"  alt=""></figure>
        <div class="blog-bio__data">
            <h2 class="blog-bio__name">{!! $autor !!}</h2>
            <h3 class="blog-bio__title">Mini-Bio</h3>
        </div>
    </div>
    <div class="blog-bio__content">
        <p class="blog-bio__text">{!! $autor_desc !!}</p>
        <a href="mailto: {!! $autor_email !!}"><img src="@asset('images/icons/newsletter.svg')" alt="NEWSLETTER" width="25" height="25"/>Escribirle</a>
    </div>
</div>

<!-- BANNER -->
{{-- <?php include("inc_300x250-banner.php") ?> --}}

<div class="otros-blogs">
    <h2 class="otros-blogs__sectitle">Otros Blogs</h2>

    @foreach ($otros_blogs as $blog)
        <a href="{!! $blog['post_link'] !!}" class="otros-blogs__box">
            <div class="otros-blogs__item">
                @if (isset($blog['post_image']))
                    <figure class="otros-blogs__image"><img src="{!! $blog['post_image'] !!}" width="150" height="96"  alt=""></figure>
                @endif
                <div class="otros-blogs__data">
                    <h3 class="otros-blogs__title">{!! $blog['blog_name'] !!}</h3>
                    <h4 class="otros-blogs__date">{!! $blog['post_date'] !!}</h4>
                    <p class="otros-blogs__text">{!! $blog['post_title'] !!}</p>
                </div>
            </div>
        </a>
    @endforeach

    
</div>
