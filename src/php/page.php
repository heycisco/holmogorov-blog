<?php get_header(); ?>
<main class="main-block page" id="top">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="content">
<article>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1>
</header>
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</article>
</section>
<?php endwhile; endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>