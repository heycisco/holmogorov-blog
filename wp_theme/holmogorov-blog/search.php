<?php get_header(); ?>
<main class="main-block page search">
<div class="wrapper">
<section class="content">
<?php if ( have_posts() ) : ?>
<header class="header">
<h1 class="entry-title"><?php printf( esc_html__( 'Результаты поиска: %s', 'starchenkov-dev' ), get_search_query() ); ?></h1>
</header>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article class="post no-results not-found">
<header class="header">
<h1 class="entry-title">Ничего не найдено</h1>
</header>
<div class="entry-content">
<p>Попробуем ещё?</p>
<?php get_search_form(); ?>
</div>
</article>
<?php endif; ?>
</section>
</div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>