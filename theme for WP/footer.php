  <!-- < ---------- FOOTER ---------- > -->
<?php wp_footer(); ?>
  <section class="footer">
    <img src="<?php echo get_template_directory_uri(). '/img/Logo-black.svg' ?>" alt="Логотип">
    <?php wp_nav_menu( [
            'theme_location'  => 'secondary',
            'menu'            => 'footer_menu', 
            'container'       =>  'div', 
            'container_class' => 'footer-menu', 
            'container_id'    => '',
            'menu_class'      => 'footer-menu-list', 
            'menu_id'         => null,
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
          ] );
        ?>
    <p class="footer-text"> Все права защищены. © 2018</p>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
