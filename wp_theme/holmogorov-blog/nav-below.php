<div class="post-nav">

	<div class="left">
		<?php
		$previous_post = get_previous_post();
		if( ! empty($previous_post) ){
			?>
		<a href="<?php echo get_permalink( $previous_post ); ?>" title="<?php echo esc_html($previous_post->post_title); ?>">
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
		<?php
		if(have_posts()) : while(have_posts()) : the_post();
			$cats = wp_get_post_categories($post->ID);
			if($cats) : foreach($cats as $cat) : $category = get_category($cat);
			?>
		<a href="<?php echo get_category_link($category->cat_ID); ?>" title="<?php echo $category->name ?>" class="btn-to-top">
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
		<?php
		endforeach;endif;
		endwhile;endif;
		?>
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



<div class="post-share">
<span>Поделиться:</span>
<a href="#" id="link_vk" title="Название ссылки">
	<svg
		aria-hidden="true"
		focusable="false"
		data-prefix="fab"
		data-icon="vk"
		class="svg-inline--fa fa-vk fa-w-18"
		role="img"
		xmlns="http://www.w3.org/2000/svg"
		viewBox="0 0 576 512"
	>
		<path
			fill="currentColor"
			d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"
		></path>
	</svg>
</a>
<a href="#" id="link_fb" title="Название ссылки">
	<svg
		aria-hidden="true"
		focusable="false"
		data-prefix="fab"
		data-icon="facebook-f"
		class="svg-inline--fa fa-facebook-f fa-w-10"
		role="img"
		xmlns="http://www.w3.org/2000/svg"
		viewBox="0 0 320 512"
	>
		<path
			fill="currentColor"
			d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
		></path>
	</svg>
</a>
<a href="#" id="link_insta" title="Название ссылки">
	<svg
		aria-hidden="true"
		focusable="false"
		data-prefix="fab"
		data-icon="instagram"
		class="svg-inline--fa fa-instagram fa-w-14"
		role="img"
		xmlns="http://www.w3.org/2000/svg"
		viewBox="0 0 448 512"
	>
		<path
			fill="currentColor"
			d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
		></path>
	</svg>
</a>
<a href="#" id="link_yandex" title="Название ссылки">
	<svg
		aria-hidden="true"
		focusable="false"
		data-prefix="fab"
		data-icon="yandex"
		class="svg-inline--fa fa-yandex fa-w-8"
		role="img"
		xmlns="http://www.w3.org/2000/svg"
		viewBox="0 0 256 512"
	>
		<path
			fill="currentColor"
			d="M153.1 315.8L65.7 512H2l96-209.8c-45.1-22.9-75.2-64.4-75.2-141.1C22.7 53.7 90.8 0 171.7 0H254v512h-55.1V315.8h-45.8zm45.8-269.3h-29.4c-44.4 0-87.4 29.4-87.4 114.6 0 82.3 39.4 108.8 87.4 108.8h29.4V46.5z"
		></path>
	</svg>
</a>
</div>