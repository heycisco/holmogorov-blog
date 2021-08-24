<div class="post-nav">


	<div class="left">
		<?php
		$previous_post = get_previous_post();
		if( ! empty($previous_post) ){
			?>
		<a href="<?php echo get_permalink( $previous_post ); ?>" title="<?php echo esc_html($previous_post->post_title); ?>"
			<svg
				aria-hidden="true"
				focusable="false"
				data-prefix="fas"
				data-icon="chevron-up"
				class="svg-inline--fa fa-chevron-up fa-w-14"
				role="img"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 448 512"
			>
				<path
					fill="currentColor"
					d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"
				></path></svg
			>Предыдущий пост</a
		>
		<?php
		}
		?>
	</div>


	<div class="center-1">
		<a href="#top" title="Наверх" class="btn-to-top">
			<svg
				aria-hidden="true"
				focusable="false"
				data-prefix="fas"
				data-icon="chevron-up"
				class="svg-inline--fa fa-chevron-up fa-w-14"
				role="img"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 448 512"
			>
				<path
					fill="currentColor"
					d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"
				></path>
			</svg>
			Наверх
		</a>
	</div>
	<div class="center-2">
		<a href="#top" title="Наверх" class="btn-to-top">
			<svg
				aria-hidden="true"
				focusable="false"
				data-prefix="fas"
				data-icon="chevron-up"
				class="svg-inline--fa fa-chevron-up fa-w-14"
				role="img"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 448 512"
			>
				<path
					fill="currentColor"
					d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"
				></path>
			</svg>
			В категорию
		</a>
	</div>


	<div class="right">
		<?php
		$next_post = get_next_post();
		if( ! empty($next_post) ){
			?>

		<a href="<?php echo get_permalink( $next_post ); ?>" title="<?php echo esc_html($next_post->post_title); ?>"
			>Следующий пост<svg
				aria-hidden="true"
				focusable="false"
				data-prefix="fas"
				data-icon="chevron-up"
				class="svg-inline--fa fa-chevron-up fa-w-14"
				role="img"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 448 512"
			>
				<path
					fill="currentColor"
					d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"
				></path></svg
		></a>

		<?php
		}
		?>
	</div>

</div>