jQuery.noConflict();
jQuery(function() {
	const articlePrev = jQuery(".article-prev");
const articlePrevPic = jQuery(".article-prev .picture");
const articleStaple = jQuery(".article-prev .staple-content");
const scrollTopBtn = jQuery(".btn-to-top");
const headerBranding = jQuery(".main-header .branding");
const singlePostHeader = jQuery(".main-block.single-post .header");
const singlePostWrapper = jQuery(".main-block.single-post .wrapper");; // тут переменные
	// Отключение действий при нажатии на кнопки
function preventDefault() {
	// jQuery('.menu-item-has-children a[href=#]').on("click", function (event) {
	// 	event.preventDefault();
	// });
	jQuery('button').on("click", function (event) {
		event.preventDefault();
	});
}

// Рандомизируем оформление постов
function randomArticlePrev() {
	jQuery(articlePrev).each(function () {
		let randomBackground = Math.random() * 1 + 1;
		let bgType = randomBackground.toFixed();
		jQuery(this).addClass("bg-" + bgType);
	});

	jQuery(articlePrevPic).each(function () {
		let randomRotate = Math.random() * 16 - 11;
		jQuery(this).css({ transform: "rotate(" + randomRotate + "deg)" });

		let randomStaple = Math.random() * 4 + 1;
		let staplePos = randomStaple.toFixed();
		jQuery(this).addClass("staple-" + staplePos);
	});

	jQuery(articleStaple).each(function () {
		let randomLeft = Math.random() * 160 + 6;
		let randomBottom = Math.random() * 24 + 6;
		let randomRotate2 = Math.random() * 45 - 23;
		jQuery(this).css({
			left: +randomLeft + "px",
			bottom: +randomBottom + "px",
			transform: "rotate(" + randomRotate2 + "15deg)",
		});
	});
}

// Автоподгонка размера заголовка поста
function postTitleSize() {
	let postBrandingHeight = jQuery(headerBranding).height();
	jQuery(singlePostHeader).css({
		"min-height":
			"calc(" + postBrandingHeight + "px + (var(--section-padding))",
	});

	let postTitleHeight = jQuery(singlePostHeader).height();
	jQuery(singlePostWrapper).css({
		"padding-top":
			"calc((var(--section-padding) * 2) + " + postTitleHeight + "px)",
	});
}

// Плавная прокрутка к началу страницы
function scrollTop() {
	jQuery(scrollTopBtn).on("click", function () {
		let el = jQuery(this);
		let dest = el.attr("href");
		if (dest !== undefined && dest !== "") {
			jQuery("html").animate(
				{
					scrollTop: jQuery(dest).offset().top,
				},
				500
			);
		}
		return false;
	});
}

// Сворачивание длинного содержимого поста
function postContentCollapse() {}

// Добавление вложенным меню функционала и анимации
function menuChildDecktop() {
	jQuery(".menu-item-has-children>a").append(
		'<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg></span>'
	);
	jQuery(".menu-item-has-children>a").click(function () {
		if (jQuery(this).parent().hasClass("clicked")) {
			jQuery(".menu-item-has-children.clicked ul").hide(300);
			jQuery(".menu-item-has-children")
				.removeClass("clicked")
				.find("ul")
				.hide(300);
		} else {
			jQuery(".menu-item-has-children.clicked ul").hide(300);
			jQuery(".menu-item-has-children")
				.removeClass("clicked")
				.find("ul")
				.hide(300);
			jQuery(this).parent().addClass("clicked");
			jQuery(this).parent().find("ul").show(300);
		}
	});
}

// Функционал мобильного меню
function mobileMenuFunc() {
	jQuery("#mobile_menu_toggle .menu-toggle").click(function () { 
		jQuery("body").toggleClass("mobile-menu-open");
	});
	jQuery("#mobile_menu_toggle .up").click(function () { 
		jQuery('body,html').animate({
			scrollTop: 0
	  }, 400);
	});
}
; // все функции


// действия:
	preventDefault(); // отключаем кнопки
	menuChildDecktop(); // функционал вложенных меню
	postTitleSize(); // автоустановка размера заголовка поста
	scrollTop(); // плавная прокрутка к началу страницы
	mobileMenuFunc(); // функционал мобильного меню

	jQuery(window).on('load', function() {
// действия после загрузки:
	randomArticlePrev(); // рандомизирование оформления постов

	});

	jQuery(window).on('resize', function() {
// действия при ресайзе окна:

	});

});
