
    <footer class="main-footer">
        <nav class="navbar footer-navigation">
            <?php
                wp_nav_menu( [
                        'theme_location' => 'footer_menu',
                ] );
            ?>
        </nav>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>