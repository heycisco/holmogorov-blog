<?php get_header(); ?>

<main class="main-block category" id="top">
	<div class="wrapper">
	<section>
<header class="category__header">
	<h1 class="category__header__title">
		<?php single_term_title(); ?>
	</h1>




<!-- Описание категории -->
	<?php if ( get_the_archive_description() ) : ?>
	<div class="category__header__meta">
		<div class="description">
		<?php echo get_the_archive_description(); ?>
		</div>
	</div>
	<?php endif; ?>


</header>

<section class="category__posts">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
</section>

<?php get_template_part( 'nav', 'below' ); ?>
</section>
</div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>