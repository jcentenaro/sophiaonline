<nav>
    <div class="container">
        <div class="navigation">

            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'menu_class' => 'primary-nav',
                'echo' => false,
                'container' => null,
                'walker' => new App\WalkerNavMenuTop('primary-nav')
            ]) !!}
            @endif

            @if (has_nav_menu('secondary_navigation'))
            {!! wp_nav_menu([
                'theme_location' => 'secondary_navigation',
                'menu_class' => 'secondary-nav',
                'echo' => false,
                'container' => null,
                'walker' => new App\WalkerNavMenuTop('secondary-nav')
            ]) !!}
            @endif

            <div class="last-nav">
                <a href="#" class="last-nav__item">Círculo Sophia</a>
            </div>
            <div class="social__icons">
                <a href="#" class="social__icons-icon"><img src="@asset('images/icons/facebook.svg')" alt="Facebook" width="25" height="25"/></a>
                <a href="#" class="social__icons-icon"><img src="@asset('images/icons/instagram.svg')" alt="Instagram" width="25" height="25"/></a>
                <a href="#" class="social__icons-icon"><img src="@asset('images/icons/youtube.svg')" alt="Youtube" width="25" height="25"/></a>
                <a href="#" class="social__icons-icon"><img src="@asset('images/icons/spotify.svg')" alt="Spotify" width="25" height="25"/></a>
            </div>
        </div>
    </div>
</nav>


