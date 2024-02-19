<div class="site">
    <div class="simple-header">
        <div class="container">
            <div class="header__brand">
                <h1 class="header__logo"><a href="#"><img src="images/header/logo-sophia.svg" alt="Sophia, Despliega el alma" width="226" height="89"/></a></h1>
            </div>
            <span class="simple-header__separator"></span>
            <p class="simple-header__title"><img src="images/icons/newsletter.svg" alt="NEWSLETTER" width="32" height="32"/> NEWSLETTER</p>
        </div>
    </div>
    <!-- MAIN -->
    
    <div class="suscripcion">
        <div class="container">
            <div class="suscripcion__grid">
                <div class="suscripcion__data">
                    <img src="@asset('images/layout/suscripcion-image.jpg')" width="148" height="182" class="suscripcion__mobile-image">
                    <!-- content -->
                        @yield('content')
                    <!-- FIN content -->

                    {{-- <h1 class="suscripcion__title">¡Queremos estar cerca!</h1>
                    <h2 class="suscripcion__subtitle">Recibí lo mejor de Sophia cada semana</h2>
                    <div class="suscripcion__tags"><span>Espiritualidad</span><span>Psicología</span><span>Cultura</span><span>Vivir bien</span></div>
                    <form>
                        <div class="suscripcion__form">
                            <div class="suscripcion__field">
                                <input type="text" placeholder="E-mail">
                                <span class="error">Estilo de error</span>
                            </div>
                            <button type="submit" class="suscripcion__btn"><img src="images/icons/icon-submit-arrow.svg" width="24" height="25"><span>SUSCRIBIRME</span></button>
                        </div>
                    </form>
                    <h3 class="suscripcion__secondtitle">Todas las semanas recibirás:</h3>
                    <ul class="suscripcion__list">
                        <li class="suscripcion__list-item">Una selección de los mejores contenidos</li>
                        <li class="suscripcion__list-item">Novedades, eventos y cursos para que te puedas sumar</li>
                        <li class="suscripcion__list-item">Cartas de nuestros lectores y mucho más</li>
                    </ul> --}}
                </div>
                <div class="suscripcion__image">
                    <img src="@asset('images/temp/newsletter-01.jpg')" width="674" height="566" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- FIN MAIN -->
    <div class="simple-footer">
        <div class="container">
            <div class="footer-bot">
                <p class="footer-bot__copy">© 2023 Luz Editora S.A. · Todos los derechos reservados · Protegido por el derecho de Propiedad Intelectual</p>
                <h5 class="footer-bot__creator"><a href="https://www.linkedin.com/in/berniban/" target="_blank">Desarrollo Web</a></h5>
            </div>
        </div>        
    </div>
</div>