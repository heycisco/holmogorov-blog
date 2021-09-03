<?php get_header(); ?>
<main class="main-block page 404">
<div class="wrapper">
	<section class="content">
<article class="post not-found">
<header class="header">
<h1 class="entry-title">404</h1>
</header>
<div class="entry-content">
<img src="<?php echo get_template_directory_uri();?>/img/404.png" class="404-img">
<p>Попробуем поиск?</p>
<?php get_search_form(); ?>
Или вернёмся <a href="<?php echo esc_url( home_url( '/' ) );?>">на главную</a>?
</div>
</article>
</section>
</div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>