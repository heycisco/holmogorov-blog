jQuery((function(){const e=$(".article-prev"),n=$(".article-prev .picture"),t=$(".article-prev .staple-content"),i=$(".main-header .branding"),l=$(".main-block.single-post .header"),a=$(".main-block.single-post .wrapper");window.onscroll=function(){window.pageYOffset>300?$("#mobile_menu_toggle").addClass("scroll"):$("#mobile_menu_toggle").removeClass("scroll")},$(".menu-item-has-children a[href=#]").on("click",(function(e){e.preventDefault()})),$(".menu-item-has-children>a").append('<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg></span>'),$(".menu-item-has-children>a").click((function(){$(this).parent().hasClass("clicked")?($(".menu-item-has-children.clicked ul").hide(300),$(".menu-item-has-children").removeClass("clicked").find("ul").hide(300)):($(".menu-item-has-children.clicked ul").hide(300),$(".menu-item-has-children").removeClass("clicked").find("ul").hide(300),$(this).parent().addClass("clicked"),$(this).parent().find("ul").show(300))})),$(".sub-menu .current-menu-item, .sub-menu .current-menu-parent").parent().parent().addClass("clicked").find("ul").show(),function(){if($(window).width()>960){let e=$(i).height();$(l).css({"min-height":"calc("+e+"px + (var(--section-padding))"});let n=$(l).height();$(a).css({"padding-top":"calc((var(--section-padding) * 2) + "+n+"px)"})}}(),$("#mobile_menu_toggle .menu-toggle").click((function(){$("body").toggleClass("mobile-menu-open")})),$("#mobile_menu_toggle .up, .btn-to-top").click((function(){$("body,html").animate({scrollTop:0},400)})),$(window).on("load",(function(){$(e).each((function(){let e=(9*Math.random()+1).toFixed();$(this).addClass("bg-"+e)})),$(n).each((function(){let e=16*Math.random()-11;$(this).css({transform:"rotate("+e+"deg)"});let n=(4*Math.random()+1).toFixed();$(this).addClass("staple-"+n)})),$(t).each((function(){let e=160*Math.random()+6,n=18*Math.random()-6,t=45*Math.random()-23;$(this).css({left:+e+"px",bottom:+n+"px",transform:"rotate("+t+"15deg)"})}))})),$(window).on("resize",(function(){}))}));