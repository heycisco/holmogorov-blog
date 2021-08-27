<section class="main-post-section">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="header">
	<div class="hwrapper">
		<h2>
		<?php the_title(); ?>
		</h2>
		<div class="post-meta">
			<div class="date">
				Опубликован: <span><?php echo get_the_date('j.n.Y'); ?></span>
			</div>

			<div class="tags">
				Теги: 
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
<div class="wrapper">
	<div class="post-content">
	<?php the_content(); ?>
	</div>
	</div>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</article>
</section>
