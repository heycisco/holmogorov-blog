<article id="post-<?php the_ID(); ?>" class="article-prev" <?php post_class(); ?>>
<div class="wrapper">
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-link"></a>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="picture">
		<?php the_post_thumbnail(); ?>
	</div>
<?php endif; ?>
<div class="content">
<img src="img/staple/01.svg" class="staple-content" />
<h2 class="title"><?php the_title(); ?></h2>
<div class="short-text">
<?php the_excerpt(); ?>

<div class="meta">
	<div class="tags">
		<span class="tag-label">Теги:</span>
		<div class="tag-items">
				<?php
				$posttags = get_the_tags();
				if( $posttags ){
					foreach( $posttags as $tag ){
						echo $tag->name . ' '; 
					}
				}
				?>
		</div>
	</div>
</div>

</div>
</div>
</div>
</article>