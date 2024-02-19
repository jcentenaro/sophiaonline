<nav>
    <div class="container">
        <div class="navigation">

            <?php if(has_nav_menu('primary_navigation')): ?>
            <?php echo wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'menu_class' => 'primary-nav',
                'echo' => false,
                'container' => null,
                'walker' => new App\WalkerNavMenuTop('primary-nav')
            ]); ?>

            <?php endif; ?>

            <?php if(has_nav_menu('secondary_navigation')): ?>
            <?php echo wp_nav_menu([
                'theme_location' => 'secondary_navigation',
                'menu_class' => 'secondary-nav',
                'echo' => false,
                'container' => null,
                'walker' => new App\WalkerNavMenuTop('secondary-nav')
            ]); ?>

            <?php endif; ?>

            <div class="last-nav">
                <a href="#" class="last-nav__item">Círculo Sophia</a>
            </div>
            <div class="social__icons">
                <a href="#" class="social__icons-icon"><img src="<?= \Roots\asset('images/icons/facebook.svg'); ?>" alt="Facebook" width="25" height="25"/></a>
                <a href="#" class="social__icons-icon"><img src="<?= \Roots\asset('images/icons/instagram.svg'); ?>" alt="Instagram" width="25" height="25"/></a>
                <a href="#" class="social__icons-icon"><img src="<?= \Roots\asset('images/icons/youtube.svg'); ?>" alt="Youtube" width="25" height="25"/></a>
                <a href="#" class="social__icons-icon"><img src="<?= \Roots\asset('images/icons/spotify.svg'); ?>" alt="Spotify" width="25" height="25"/></a>
            </div>
        </div>
    </div>
</nav>


<?php /**PATH /home/customer/www/carolinaa8.sg-host.com/public_html/wp-content/themes/sophia2024/resources/views/layouts/app/navigation.blade.php ENDPATH**/ ?>