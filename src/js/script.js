// jqs = jQuery.noConflict();
jQuery(function() {
	@@include('__const.js'); // тут переменные
	@@include('__functions.js'); // все функции


// действия:
	preventDefault(); // отключаем кнопки
	menuChildDecktop(); // функционал вложенных меню
	postTitleSize(); // автоустановка размера заголовка поста
	mobileMenuFunc(); // функционал мобильного меню

	$(window).on('load', function() {
// действия после загрузки:
	randomArticlePrev(); // рандомизирование оформления постов

	});

	$(window).on('resize', function() {
// действия при ресайзе окна:

	});

});
