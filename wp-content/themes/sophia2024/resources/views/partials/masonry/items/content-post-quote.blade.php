<div @php(post_class('frase'))>
    <div class="frase__inner">
        <h2 class="frase__logo"><img src="@asset('images/layout/frase-sophia.svg')" alt="Sophia: FRASE DEL DÍA" width="103" height="40" /></h2>
        <h3 class="frase__title">FRASE DEL DÍA</h3>
        <p class="frase__text">
            {{ strip_tags(get_the_content()) }}
        </p>
        <h4 class="frase__autor">@php(the_title())</h4>
        <div class="newsbox__social">
            <x-shared type="warning"></x-shared>
        </div>
    </div>
</div>
