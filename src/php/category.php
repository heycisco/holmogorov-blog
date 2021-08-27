<?php get_header(); ?>

<main class="main-block category" id="top">
	<div class="wrapper">
	<section>
<header class="category__header">
	<h1 class="category__header__title">
		<?php single_term_title(); ?>
	</h1>

<!-- Миниатюра категории -->
	<?php 
	$term_id = get_queried_object_id();
	$image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
	$image_url = wp_get_attachment_image_url( $image_id, 'full' );
	if ( $image_url ) : ?>
	<div class="category__header__image">
		<?php echo '<img src="'. $image_url .'">'; ?>
	</div>
	<?php endif; ?>


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