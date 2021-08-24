<?php
/*
Template Name: Домашнаяя страница
*/
?>
<?php get_header(); ?>
<main class="main-block homepage">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="homepage-content">
<article>
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</article>
</section>
<?php endwhile; endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>