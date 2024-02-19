<footer>
    <div class="container">
        <div class="footer">
            <div class="footer-top">
                <div class="footer__brand">
                    <a href="#"><img src="@asset('images/footer/logo-sophia.svg')" alt="Sophia" width="103" height="40"/></a>
                </div>
                @if (has_nav_menu('tertiary_navigation'))
                {!! wp_nav_menu([
                    'theme_location' => 'tertiary_navigation',
                    'menu_class' => 'footer__nav',
                    'echo' => false,
                    'container' => null,
                    'walker' => new App\WalkerNavMenuTop('tertiary-nav')
                ]) !!}
                @endif
                <div class="footer__social">
                    <h5 class="footer__social-label">SEGUINOS</h5>
                    <div class="social__icons">
                        <a href="https://www.facebook.com/sophiarevista" class="social__icons-icon"><img src="@asset('images/icons/facebook.svg')" alt="Facebook" width="25" height="25"/></a>
                        <a href="https://www.instagram.com/revistasophia/" class="social__icons-icon"><img src="@asset('images/icons/instagram.svg')" alt="Instagram" width="25" height="25"/></a>
                        <a href="https://www.youtube.com/user/RevistaSophiaOnline" class="social__icons-icon"><img src="@asset('images/icons/youtube.svg')" alt="Youtube" width="25" height="25"/></a>
                        <a href="https://open.spotify.com/show/7zHcSaR6wS8JJG5kFCgq0e?si=ewIQuNC2RXu4sndWhjdUlA&nd=1" class="social__icons-icon"><img src="@asset('images/icons/spotify.svg')" alt="Spotify" width="25" height="25"/></a>
                    </div>
                </div>
            </div>
            <div class="footer-bot">
                <p class="footer-bot__copy">© {{ date('Y') }} Luz Editora S.A. · Todos los derechos reservados · Protegido por el derecho de Propiedad Intelectual</p>
                <h5 class="footer-bot__creator"><a href="https://www.linkedin.com/in/berniban/" target="_blank">Desarrollo Web</a></h5>
            </div>
        </div>
    </div>
</footer>