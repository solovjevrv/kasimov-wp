<?php
/*
Template Name: Новости (основная)
*/
?>

<?php get_header(); ?>

<section class="hero-news">
    <div class="container">
      <h3 class="hero-news-title">Новости</h3>
    </div>
  </section>

  <!-- < ---------- POSTS ---------- > -->

  <section class="news">
    <div class="container">
      <div class="posts-row">
      <?php if ( have_posts()) :?>
        <?php while ( have_posts()) : the_post(); ?>

        <div class="post-prev">
        <?php if ( has_post_thumbnail()) { ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
          <?php the_post_thumbnail(); ?>
          </a>
          <?php } ?>
          <div class="post-prev-content">
            <h5 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
            <span class="post-data"><?php the_time('d/m/Y') ?></span>
            <div class="entry"> <?php the_excerpt(); ?> </div>
          </div>
          <a href="<?php the_permalink(); ?>" class="post-button">Читать далее</a>
        </div>
     

      <?php endwhile; else : ?>
        <p>Записей нет.</p>
      <?php endif; ?>
     
     
     
     <!-- <?php
      // параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => 3,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
 	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
  setup_postdata($post);
  ?>
  <div class="post-prev">
  <?php if ( has_post_thumbnail()) { ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
          <?php the_post_thumbnail(); ?>
          </a>
          <?php } ?>
          <div class="post-prev-content">
            <h5 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
            <span class="post-data"><?php the_time('d/m/Y') ?></span>
            <div class="entry"> <?php the_excerpt(); ?> </div>
          </div>
          <a href="<?php the_permalink() ?>" class="post-button">Читать далее</a>
        </div>
  <?php
    // формат вывода the_title() ...
}

wp_reset_postdata(); // сброс
?> -->
      <div class="pagination-block">
        <ul class="pagination">
          <li><a href="#">«</a></li>
          <li><a href="news.html">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div>
    </div>
  </section>
	
<?php get_footer(); ?>