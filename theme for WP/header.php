<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Касимовсетеснасть</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>

<body>
	<?php wp_head(); ?>
  <!-- < ---------- MENU ---------- > -->
  <section class="header">
    <div class="container">
      <div class="row menu-row">
        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(). '/img/logo.svg' ?>" alt="Логотип Касимовсетеснасть"></a>
        <?php wp_nav_menu( [
            'theme_location'  => 'primary',
            'menu'            => 'header_menu', 
            'container'       =>  'div', 
            'container_class' => 'desktop-nav', 
            'container_id'    => '',
            'menu_class'      => 'nav', 
            'menu_id'         => '',
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

        <div class="mobile-nav">
          <span class="menu-line-1"></span>
          <span class="menu-line-2"></span>
          <span class="menu-line-3"></span>
        </div>
        <!-- /.desktop-nav -->
        <div class="menu-contacts">
          <a href="tel:+79001234565">+7-900-123-45-67</a><br>
          <a href="mailto:setka@mail.com">setka@mail.com</a>
        </div>
        <div class="menu-button">
          <a href="#">Оставить заявку <img src="<?php echo get_template_directory_uri(). '/img/right-arrow.svg' ?>" alt=""></a>
        </div>

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section.header -->