<?php get_header(); ?>
<main class="main-block single-post" id="top">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<div class="post-footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>