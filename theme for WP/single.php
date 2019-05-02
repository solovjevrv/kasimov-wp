<?php
/*
Template Name: Шаблон страницы новость
Template Post Type: post
*/
?>

<?php get_header(); ?>

	<section class="hero-news">
	<div class="container">
		<h3 class="hero-news-title"><?php the_title() ?>
		</h3>
	</div>
	</section>

<section class="post-main-content">
<div class="container">
	<div class="row">
	<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>

<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">	
	<div class="col-md-12">
	<?php wp_get_attachment_image('full'); ?>
	</div>
	<?php the_content(); ?>
</div>

<?php } /* конец while */ ?>

<div class="row justify-content-center">
		<div class="col-md-12">
		<div class="single-post-buttons">
			<a href="<?php echo get_template_directory_uri() . ('/page-news.php'); ?>" class="single-post-btn">все новости</a>
			<a href="<?php next_posts_link(); ?>" class="single-post-btn">далее</a>
		</div>
		</div>
	</div>



<?php
} // конец if
else 
echo "<h2>Записей нет.</h2>"; ?>

	

</div>
</section>
<?php get_footer(); ?>

