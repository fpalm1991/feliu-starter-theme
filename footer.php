
    <footer class="main-footer footer-area">
        <nav class="navbar footer-navigation">
            <?php
                if ( has_nav_menu( 'footer_menu' ) ) {
                    wp_nav_menu( [
                        'theme_location' => 'footer_menu',
                    ] );
                }
            ?>
        </nav>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>