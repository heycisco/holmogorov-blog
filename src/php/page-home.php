<?php
/*
Template Name: Домашнаяя страница
*/
?>
<?php get_header(); ?>
<main class="main-block homepage">
	<div class="wrapper">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section>
	<article class="content">
	<?php the_content(); ?>
	</article>
	</section>

	<section class="category-list__content content">
		<h2 class="entry-title">Разделы</h2>
<?php
// Настройка вывода категорий
$categories = get_categories(array(
	'orderby' => 'name',
	'type' => 'post',
	'orderby' => 'name',
	'hide_empty' => 1,
	'hierarchical' => 1,
	'pad_counts' => true,
	'order' => 'ASC'
));
foreach( $categories as $category ){
$image_id = get_term_meta( $category->term_id, '_thumbnail_id', 1 );
// Размер миниатюр
$image_url = wp_get_attachment_image_url( $image_id, 'medium' );

echo '<article class="category-list__content__article wrapper">';
echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Перейти в категорию %s" ), $category->name ) . '" ' . '></a>';
if ( $image_url ) {
	echo '<div class="image-wrapper"><img src="' . $image_url . '"></div>';
} else {
// Если нет картинки
	echo '<div class="image-wrapper"><img src="' . get_template_directory_uri() . '/img/placeholders/48x48.jpg"></div>';
}
echo '<div class="content-wrapper"><h3 class="title">' . $category->name.'</h3>';
if ( $category->description ) {
	echo '<div class="description">'. $category->description . '</div>';
}
	echo '<div class="post-counter">Записей: <span>'. $category->count . '</span></div>';
	echo '</div></article>';
}
?>
</section>

<?php endwhile; endif; ?>
</div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>