<header>
    <div class="container">
        <div class="header">
            <div class="header__menu-cta">
                <div class="header__menu-btn">
                    <button class="header__hamburguer">
                        <span class="header__hamburguer-bar"></span>
                        <span class="header__hamburguer-bar"></span>
                        <span class="header__hamburguer-bar"></span>
                    </button>
                    <label class="header__hamburguer-label">Menú</label>
                </div>
            </div>
            <div class="header__left">
                <div class="header__membresia">
                    <figure class="header__membresia-logo">
                        <img src="@asset('images/header/logo-iso-circulo-sophia.svg')" alt="Círculo Sophia" width="68" height="68"/>
                    </figure>
                    <div class="header__membresia-content">
                        <h4 class="header__membresia-title">Membresía digital</h4>
                        <div class="header__membresia-circulo"><img src="@asset('images/header/logo-circulo-sophia.svg')" alt="Círculo Sophia" width="165" height="30"/></div>
                        <div class="header__membresia-cta">
                            <a target="_blank" href="https://circulosophia.com/membresia/#Suscribirse">SUSCRIBIRME</a>
                            <span></span>
                            <a target="_blank" href="https://circulosophia.com/">INGRESAR</a>
                        </div>
                    </div>
                </div>
                <span class="header__vline"></span>
                <div class="header__social">
                    <div class="social__icons">
                        <a href="#" class="social__icons-icon"><img src="@asset('images/icons/facebook.svg')" alt="Facebook" width="25" height="25"/></a>
                        <a href="#" class="social__icons-icon"><img src="@asset('images/icons/instagram.svg')" alt="Instagram" width="25" height="25"/></a>
                        <a href="#" class="social__icons-icon"><img src="@asset('images/icons/youtube.svg')" alt="Youtube" width="25" height="25"/></a>
                        <a href="https://open.spotify.com/show/7zHcSaR6wS8JJG5kFCgq0e?si=ewIQuNC2RXu4sndWhjdUlA&nd=1" class="social__icons-icon"><img src="@asset('images/icons/spotify.svg')" alt="Spotify" width="25" height="25"/></a>
                    </div>
                </div>
            </div>
            <div class="header__brand">
                <h1 class="header__logo"><a href="{{ home_url('/') }}"><img src="@asset('images/header/logo-sophia.svg')" alt="{!! $siteName !!}" width="226" height="89"/></a></h1>
            </div>
            <div class="header__right">
                <div class="header__newsletter">
                    <div class="header__newsletter-box">
                        <figure class="header__newsletter-icon"><img src="@asset('images/icons/newsletter.svg')" alt="NEWSLETTER" width="25" height="25"/></figure>
                        <div class="header__newsletter-cta">
                            <a href="#">NEWSLETTER</a>
                            <a href="#">REGISTRARME</a>
                        </div>
                    </div>
                </div>
                <div class="header__search">
                    <button class="header__search-open">
                        <label class="header__search-open-label">Buscar</label>
                        <img src="@asset('images/icons/buscar.svg')" alt="Buscar" width="24" height="25"/>
                    </button>

                    <div class="header__search-group">
                        <form role="search" method="get" class="search-form" action="{{ home_url('/') }}">
                            <div class="header__search-box">
                                <input type="search" name="s" placeholder="BUSCAR" class="header__search-input">
                                <button type="submit" class="header__search-btn"><img src="@asset('images/icons/buscar.svg')" alt="Buscar" width="24" height="25"/></button>
                            </div>
                        </form>
                        <button class="header__search-close"><img src="@asset('images/icons/cerrar-buscar.svg')" alt="Cerrar" width="24" height="25"/></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>