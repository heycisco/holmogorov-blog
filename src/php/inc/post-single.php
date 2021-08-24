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
	<?php if ( has_post_thumbnail() ) : ?>
	<a href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); echo esc_url( $src[0] ); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
	<?php endif; ?>
	<div class="post-content">
	<?php the_content(); ?>
	</div>
	</div>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</article>
</section>
