<?php get_header(); ?>
<main class="main-block tags" id="top">
<div class="wrapper">
<section>
<header class="tags__header">
<h1><?php single_term_title(); ?></h1>
<div class="archive-meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
</div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>