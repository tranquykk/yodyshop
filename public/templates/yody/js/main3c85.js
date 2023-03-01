window.awe = window.awe || {};
awe.init = function () {
	awe.showPopup();
	awe.hidePopup();	
};
document.addEventListener('DOMContentLoaded', function() {
	"use strict";
	awe_backtotop();
	awe_category();
	$(".cart-drop").mouseenter(function(e){
		$(".cart-drop").addClass('active');
	});
	$(".cart-drop").mouseleave(function(e){
		$(".cart-drop").removeClass('active');
	});
	setTimeout(function(){
		$('.CartHeaderContainer .ajaxcart__row').each(function(){
			var id = $(this).data('id');
			$('.module-content-buyxgety .item-product[data-product-id="'+id+'"] .btn-addtocart-buyxgety').addClass('added').text('Đã thêm vào giỏ hàng');
		})
	},2000);
});
function awe_convertVietnamese(str) { 
	str= str.toLowerCase();
	str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
	str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
	str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
	str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
	str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
	str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
	str= str.replace(/đ/g,"d"); 
	str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
	str= str.replace(/-+-/g,"-");
	str= str.replace(/^\-+|\-+$/g,""); 
	return str; 
} window.awe_convertVietnamese=awe_convertVietnamese;
function awe_category(){
	$('.nav-category .fa-plus').click(function(e){
		$(this).toggleClass('fa-minus fa-plus');
		$(this).parent().toggleClass('active');
	});
	$('.nav-category .fa-minus').click(function(e){
		$(this).toggleClass('fa-plus');
		$(this).parent().toggleClass('active');
	});
} window.awe_category=awe_category;


function awe_backtotop() { 
	$(window).scroll(function() {
		$(this).scrollTop() > 200 ? $('.backtop').addClass('show') : $('.backtop').removeClass('show')
	});
	$('.backtop').click(function() {
		return $("body,html").animate({
			scrollTop: 0
		}, 800), !1
	});
} window.awe_backtotop=awe_backtotop;


var wDWs = $(window).width();
if (wDWs < 1199) {
	$('.item_big li:has(ul)' ).one("click", function(e)     {
		e.preventDefault();
		return false;    
	});

	$('.ul_menu li:has(ul)' ).one("click", function(e)     {
		e.preventDefault();
		return false;    
	});
}

/********************************************************
# MENU MOBILE
********************************************************/
var wDW = $(window).width();

$(document).ready(function(){

	/*Footer*/
	if(wDW > 767){
		$('.toggle-mn').show();
	}else {
		$('.footer-click > .clicked').click(function(){
			$(this).toggleClass('open_');
			$(this).next('ul').slideToggle("fast");
			$(this).next('div').slideToggle("fast");
		});
	}
});

var SuccessNoti = function(SuccessText){
	$.notify({
		// options
		title: '<strong>Tuyệt vời</strong><br>',
		message: SuccessText,
		icon: 'glyphicon glyphicon-ok'
	},{
		// settings
		element: 'body',
		//position: null,
		type: "success",
		//allow_dismiss: true,
		//newest_on_top: false,
		showProgressbar: false,
		placement: {
			from: "top",
			align: "right"
		},
		offset: 20,
		spacing: 10,
		z_index: 999999,
		delay: 3300,
		timer: 1000,
		url_target: '_blank',
		mouse_over: null,
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutRight'
		},
		onShow: null,
		onShown: null,
		onClose: null,
		onClosed: null,
		icon_type: 'class',
	});
}
var InfoNoti = function(InfoText){
	$.notify({
		// options
		title: '<strong>Thông báo</strong><br>',
		message: InfoText,
		icon: 'glyphicon glyphicon-info-sign',
	},{
		// settings
		element: 'body',
		position: null,
		type: "info",
		allow_dismiss: true,
		newest_on_top: false,
		showProgressbar: false,
		placement: {
			from: "top",
			align: "right"
		},
		offset: 20,
		spacing: 10,
		z_index: 999999,
		delay: 3300,
		timer: 1000,
		url_target: '_blank',
		mouse_over: null,
		animate: {
			enter: 'animated bounceInDown',
			exit: 'animated bounceOutUp'
		},
		onShow: null,
		onShown: null,
		onClose: null,
		onClosed: null,
		icon_type: 'class',
	});
}
var ErrorNoti = function(ErrorText){
	$.notify({
		// options
		title: '<strong>Thông báo</strong><br',
		message: ErrorText,
		icon: 'glyphicon glyphicon-info-sign',
	},{
		// settings
		element: 'body',
		position: null,
		type: "warning",
		allow_dismiss: true,
		newest_on_top: false,
		showProgressbar: false,
		placement: {
			from: "top",
			align: "right"
		},
		offset: 20,
		spacing: 10,
		z_index: 1031,
		delay: 3300,
		timer: 1000,
		url_target: '_blank',
		mouse_over: null,
		animate: {
			enter: 'animated bounceInDown',
			exit: 'animated bounceOutUp'
		},
		onShow: null,
		onShown: null,
		onClose: null,
		onClosed: null,
		icon_type: 'class',
	});
}

//Menu mega vertical

var vw = $(window).width();
window.onload = function(e){ 
	var lil = $('.ul_menu .lev-1').length;
	if(lil < 10 && vw < 1500 && vw > 1200){
		$('li.hidden-lgg').remove();
	}
}


// grid product fnc

function resizeImage() {
	setTimeout(function(){
		$('.item_product_main').map(function(){
			var thumbset = $(this).find('.image_thumb');
		})
	},200);
}

//mobile
function initNavigation(){
	$('.header-mobile-menu').append($('[data-template="navmobile"]').html())
	awe_lazyloadImage()
}

window.addEventListener('DOMContentLoaded', (event) => {
	var swiper = new Swiper('.swiper-menu', {
		pagination: {
			el: '.swiper-menu .swiper-pagination',
			clickable: true,
		},
		slidesPerView: 1,
		centeredSlides: false,
		loop: false,
		grabCursor: true,
		spaceBetween: 0,
		roundLengths: true,
		slideToClickedSlide: false,
		autoplay: {
			delay: 4000,
			disableOnInteraction: false
		}
	});
})


function productsCallback() {
    if (window.BPR && window.BPR.loadBadges) {
        window.BPR.init()
    }
}

var is_renderd = 0

function renderLayout(){
	if(is_renderd) return 
	is_renderd = 1
	if(listSlide.length <= 1){
		var swiper = new Swiper('.section_slider .swiper-main', {
			pagination: {
				el: '.section_slider .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.section_slider .swiper-button-next',
				prevEl: '.section_slider .swiper-button-prev',
			},
				slidesPerView: 1,
							grabCursor: true,
							//spaceBetween: 30,
							centeredSlides: true,
							roundLengths: true,
							slideToClickedSlide: false,
							//loop: true,
							//effect: "fade",
			//autoplay: {
			//	delay: 4000,
			//	disableOnInteraction: false
			//}
		});
	}else{
			var swiper = new Swiper('.section_slider .swiper-main', {
			pagination: {
				el: '.section_slider .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.section_slider .swiper-button-next',
				prevEl: '.section_slider .swiper-button-prev',
			},
				slidesPerView: 1,
							grabCursor: true,
							//spaceBetween: 30,
							centeredSlides: true,
							roundLengths: true,
							slideToClickedSlide: false,
							loop: true,
							//effect: "fade",
			//autoplay: {
			//	delay: 4000,
			//	disableOnInteraction: false
			//}
		});
	}
	
	var swiperNewh = new Swiper('.slieproduct-flash', {
			slidesPerView: 5,
			autoplay: {
				delay: 4000
			},
			loop: false,
			spaceBetween: 20,
			autoplay: false,
			pagination: {
				el: '.slieproduct-flash .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.slieproduct-flash .swiper-button-next',
				prevEl: '.slieproduct-flash .swiper-button-prev',
			},
			breakpoints: {
				300: {
					slidesPerView: 3.4,
					spaceBetween: 10
				},
				500: {
					slidesPerView: 3.4,
					spaceBetween: 10
				},
				640: {
					slidesPerView: 2,
					spaceBetween: 7
				},
				768: {
					slidesPerView: 4,
					spaceBetween: 7
				},
				992: {
					slidesPerView:4,
					spaceBetween:14
				},
				1200: {
					slidesPerView:5,
					spaceBetween:20
				}
			}
		});
	
	productsCallback();
	//<![CDATA[ 
	function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByClassName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }
	loadCSS("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css");
	//]]> 
	var wDWs = $(window).width();
	$('.backScriptHeader').click(function(){window.history.back();});


	$('.filter-tag-style-1 .aside-content ul:not(.ul-color)').each(function(){
		if ($(this).height() > 133) {
			$(this).addClass('maxheight');
			$(this).next().show();
		}
	})
	$('.filter-tag-style-1 .aside-content ul.ul-color').each(function(){
		if ($(this).height() > 175) {
			$(this).addClass('maxheight');
			$(this).next().show();
		}
	})
	initNavigation();
	$(window).on('load resize', function () {
		resizeImage();
	});




	$('.header-nav li.has-child').mouseenter(function () {
		$('.header-mask').show();
	});
	$('.header-nav li.has-child').mouseleave(function () {
		$('.header-mask').hide();
	}).mouseleave();
	$('.header-mobile-menu ul.lv1>li .no-link').click(function(){
		$(this).parent().addClass('active');
	})
	$('.header-mobile-menu ul.lv1>li ul.lv2 .first').click(function(){
		$(this).parents('li').removeClass('active');
	})

	$('.cate-page ul.lv1>li:nth-child(1)').addClass('active');
	$('.cate-page ul.lv1>li').click(function(){
		$('.cate-page ul.lv1>li').not(this).removeClass('active');
		$(this).addClass('active');
	})


	$(window).scroll(function () {
		if ( $(this).scrollTop() > 130 && !$('.back-top').hasClass('show') ) {
			$('.back-top').addClass('show');
		} else if ( $(this).scrollTop() <= 130 ) {
			$('.back-top').removeClass('show');
		}
	});

	$(".back-top").click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});

	$(".footer h4").click(function() {
		$(this).next().slideToggle();
		$(this).toggleClass('active');
	});

	$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {   
		hidePopup('.awe-popup'); 	
		setTimeout(function(){
			$('.loading').removeClass('loaded-content');
		},500);
		return false;
	})
	function awe_showLoading(selector) {
		var loading = $('.loader').html();
		$(selector).addClass("loading").append(loading); 
	}  window.awe_showLoading=awe_showLoading;
	function awe_hideLoading(selector) {
		$(selector).removeClass("loading"); 
		$(selector + ' .loading-icon').remove();
	}  window.awe_hideLoading=awe_hideLoading;
	function awe_showPopup(selector) {
		$(selector).addClass('active');
	}  window.awe_showPopup=awe_showPopup;
	function awe_hidePopup(selector) {
		$(selector).removeClass('active');
	}  window.awe_hidePopup=awe_hidePopup;
	awe.hidePopup = function (selector) {
		$(selector).removeClass('active');
	}
	$(document).on('click','.overlay, .close-window, .btn-continue, .fancybox-close', function() {   
		awe.hidePopup('.awe-popup'); 
		return false;
	})

	// Create tab
	$(".not-dqtab").each( function(e){
		var $this1 = $(this);
		var datasection = $this1.closest('.not-dqtab').attr('data-section');
		$this1.find('.tabs-title li:first-child').addClass('current');
		$this1.find('.tab-content').first().addClass('current');
		$this1.find('.tabs-title.ajax li').click(function(){
			$("html, body").animate({
				scrollTop: $('.section-product-tab').offset().top - 137
			}, 500);
			var $this2 = $(this),
				tab_id = $this2.attr('data-tab'),
				url = $this2.attr('data-url');
			var etabs = $this2.closest('.e-tabs2');
			etabs.find('.tab-viewall').attr('href',url);
			etabs.find('.tabs-title li').removeClass('current');
			etabs.find('.tab-content').removeClass('current');
			$this2.addClass('current');
			etabs.find("."+tab_id).addClass('current');
			//Náº¿u Ä‘Ă£ load rá»“i thĂ¬ khĂ´ng load ná»¯a
			if(!$this2.hasClass('has-content')){
				$this2.addClass('has-content');		
				getContentTab(url,"."+ datasection+" ."+tab_id);
			}
		});
	});


	setTimeout(function(){
		$(function(){
			var lastScrollTop = 0, delta = 5;
			$(window).scroll(function(){

				var nowScrollTop = $(this).scrollTop();
				if(Math.abs(lastScrollTop - nowScrollTop) >= delta){
					if (nowScrollTop > lastScrollTop){
						if ($(window).width() > 1200) {
							//$('.header').addClass('scroll-down');
							//$('.header').removeClass('scroll-up');
						}
						
						
						$('.banner-show').addClass('scroll-down-search');
						$('.banner-show').removeClass('scroll-up-search');
						
						
							
								$('.section-product-tab').addClass('scroll-down-banner');
								$('.section-product-tab').removeClass('scroll-up-banner');
							if(document.querySelector('.section-product-tab')){
								//console.log('co tab')
								$('.section_sort').addClass('scroll-down-banner');
								$('.section_sort').removeClass('scroll-up-banner');
							}
							//console.log($('.section-product-tab'))
							if(document.querySelector('.section-product-tab') === null){
								//console.log('k co tab')
								$('.section_sort').addClass('scroll-down-banner-notTab');
								$('.section_sort').removeClass('scroll-up-banner-notTab');
							}
						
						
					} else {
						if ($(window).width() > 1200) {
							//$('.header').removeClass('scroll-down');
							//$('.header').addClass('scroll-up');
						}
						
						
							$('.section-product-tab').removeClass('scroll-down-banner');
							$('.section-product-tab').addClass('scroll-up-banner');
							if(document.querySelector('.section-product-tab')){
								//console.log('co')
								$('.section_sort').removeClass('scroll-down-banner');
								$('.section_sort').addClass('scroll-up-banner');
							}else{
								//console.log('k co')
								$('.section_sort').removeClass('scroll-down-banner-notTab');
								$('.section_sort').addClass('scroll-up-banner-notTab');
							}
						
						$('.banner-show').removeClass('scroll-down-search');
						$('.banner-show').addClass('scroll-up-search');
					}
					lastScrollTop = nowScrollTop;
				}
				if ( $(this).scrollTop() > 10 && !$('.header').hasClass('scroll') ) {
					$('.header').addClass('scroll');
					$('body').addClass('scroll');
				} else if ( $(this).scrollTop() <= 10 ) {
					$('.header').removeClass('scroll');
					$('body').removeClass('scroll');
				}
			});
		});
	},1500);
	if (wDWs < 1199) {
		/*Remove html mobile*/
		$('.quickview-product').remove();
	}

	function action(current,datasection){
		$('.'+datasection+' .tab-titlexs').attr('data-tab','tab-'+current);
		var text = '',
			url = '',
			tab_id='';
		$('.'+datasection+' ul.tabs.tabs-title.hidden-xs li').each(function(e){

			if($(this).attr('data-tab') == 'tab-'+current){
				var $this3 = $(this);
				title = $this3.find('span').text();
				url = $this3.attr('data-url');
				tab_id = $this3.attr('data-tab');	
				//Náº¿u Ä‘Ă£ load rá»“i thĂ¬ khĂ´ng load ná»¯a
				if(!$this3.hasClass('has-content')){
					$this3.addClass('has-content');	

					getContentTab(url,"."+ datasection+" ."+tab_id);				
				}
			}
		})
		$("."+ datasection+" .tab-titlexs span").text(title);
		$("."+ datasection+" .tab-content").removeClass('current');
		$("."+ datasection+" .tab-"+current).addClass('current');
	}
	// Get content cho tab
	function getContentTab(url,selector){
		url = url+"?view=ajaxload";
		//console.log(url);
		var dataLgg = $(selector).parent().find('.tab-1 .owl-carousel').attr('data-lgg-items');
		var loadding = '<div class="a-center"><svg height=30px style="enable-background:new 0 0 50 50"version=1.1 viewBox="0 0 24 30"width=24px x=0px xml:space=preserve xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink y=0px><rect fill=#333 height=10 opacity=0.2 width=4 x=0 y=10><animate attributeName=opacity attributeType=XML begin=0s dur=0.6s repeatCount=indefinite values="0.2; 1; .2"/><animate attributeName=height attributeType=XML begin=0s dur=0.6s repeatCount=indefinite values="10; 20; 10"/><animate attributeName=y attributeType=XML begin=0s dur=0.6s repeatCount=indefinite values="10; 5; 10"/></rect><rect fill=#333 height=10 opacity=0.2 width=4 x=8 y=10><animate attributeName=opacity attributeType=XML begin=0.15s dur=0.6s repeatCount=indefinite values="0.2; 1; .2"/><animate attributeName=height attributeType=XML begin=0.15s dur=0.6s repeatCount=indefinite values="10; 20; 10"/><animate attributeName=y attributeType=XML begin=0.15s dur=0.6s repeatCount=indefinite values="10; 5; 10"/></rect><rect fill=#333 height=10 opacity=0.2 width=4 x=16 y=10><animate attributeName=opacity attributeType=XML begin=0.3s dur=0.6s repeatCount=indefinite values="0.2; 1; .2"/><animate attributeName=height attributeType=XML begin=0.3s dur=0.6s repeatCount=indefinite values="10; 20; 10"/><animate attributeName=y attributeType=XML begin=0.3s dur=0.6s repeatCount=indefinite values="10; 5; 10"/></rect></svg></div>';

		$.ajax({
			type: 'GET',
			url: url,
			beforeSend: function() {
				$(selector).html(loadding);
			},
			success: function(data) {
				var content = $(data);
				$(selector).html(content.html());
				awe_lazyloadImage();
				SwatchGrid();
				//Fix app
				if(window.BPR)
					return window.BPR.initDomEls(), window.BPR.loadBadges();
			},
			dataType: "html"
		});
	}

	$('.not-dqtab .next').click(function(e){
		var count = 0
		$(this).parents('.content').find('.tab-content').each(function(e){
			count +=1;
		})
		var str = $(this).parent().find('.tab-titlexs').attr('data-tab'),
			res = str.replace("tab-", ""),
			datasection = $(this).closest('.not-dqtab').attr('data-section');
		res = Number(res);
		if(res < count){
			var current = res + 1;
		}else{
			var current = 1;
		}
		action(current,datasection);
	})
	$('.not-dqtab .prev').click(function(e){
		var count = 0
		$(this).parents('.content').find('.tab-content').each(function(e){
			count +=1;
		})

		var str = $(this).parent().find('.tab-titlexs').attr('data-tab'),
			res = str.replace("tab-", ""),
			datasection = $(this).closest('.not-dqtab').attr('data-section'),
			res = Number(res);	
		if(res > 1){
			var current = res - 1;
		}else{
			var current = count;
		}
		action(current,datasection);
	})


	$(document).on('click', '.buynowgrid', function(){
		var _variantIDs = $(this).closest('form').find('input').val();
		var quantity = 1;
		var params = {
			type: 'POST',
			url: '/cart/add.js',
			data: 'quantity=' + quantity + '&variantId=' + _variantIDs,
			dataType: 'json',
			success: function(line_item) {
				window.location = '/checkout';
			},
			error: function(XMLHttpRequest, textStatus) {
				Bizweb.onError(XMLHttpRequest, textStatus);
			}
		};
		jQuery.ajax(params);
	});


	var wDWs = $(window).width();
	if (wDWs < 1199 && wDWs > 992) {
		$('.ul_menu li:has(ul)' ).one("click", function(e) {
			e.preventDefault();
			return false;    
		});
	}
	$('.ul_menu li .fa').click(function(e){
		if($(this).hasClass('current')) {
			$(this).closest('.ul_menu').find('li, .fa').removeClass('current');
		} else {
			$(this).closest('.ul_menu').find('li, .fa').removeClass('current');
			$(this).closest('li').addClass('current');
			$(this).addClass('current');
		}
	});
	$('.item_big li .fa').click(function(e){
		if($(this).hasClass('current')) {
			$(this).closest('ul').find('li, .fa').removeClass('current');
		} else {
			$(this).closest('ul').find('li, .fa').removeClass('current');
			$(this).closest('li').addClass('current');
			$(this).addClass('current');
		}
	});
	$('.header-mobile-menu .menu-mobile li').click(function(){
		$('.header-mobile-menu .menu-mobile li').not(this).removeClass('active');
		$(this).addClass('active')
		var id = $(this).data('id');
		$('.header-mobile-menu ul.lv1').removeClass('active');
		$('.header-mobile-menu ul#'+id).addClass('active')
	})

	$('.cate-page .menu-cate li').click(function(){
		$('.cate-page .menu-cate li').not(this).removeClass('active');
		$(this).addClass('active')
		var id = $(this).data('id');
		$('.cate-page ul.lv1').removeClass('active');
		$('.cate-page ul#'+id).addClass('active');
		$('.cate-page ul#'+id+' li').removeClass('active');
		$('.cate-page ul#'+id+' li:nth-child(1)').addClass('active');
	})

	// show more less menu
	$('.xemthem').click(function(e){
		e.preventDefault();
		$('ul.ul_menu>li').css('display','block');
		$(this).hide();
		$('.thugon').show();
	})
	$('.thugon').click(function(e){
		e.preventDefault();
		$('ul.ul_menu>li').css('display','none');
		$(this).hide();
		$('.xemthem').show();
	})
	$('.ul_menu .lev-1').click(function(e){
		var lil = $('.ul_menu .lev-1').length;
		var divHeight = $('.list_menu_header').height();
		if(lil = 2){
			$('.ul_menu .ul_content_right_1').css('min-height', divHeight);
		}
	});

	$('.dropdown-toggle').click(function() {
		$(this).parent().toggleClass('open'); 	
	}); 
	$('.btn-close').click(function() {
		$(this).parents('.dropdown').toggleClass('open');
	}); 
	$(document).on('keydown','#qty, .number-sidebar',function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
	$(document).on('click','.qtyplus',function(e){
		e.preventDefault();   
		fieldName = $(this).attr('data-field'); 
		var currentVal = parseInt($('input[data-field='+fieldName+']').val());
		if (!isNaN(currentVal)) { 
			$('input[data-field='+fieldName+']').val(currentVal + 1);
		} else {
			$('input[data-field='+fieldName+']').val(0);
		}
	});
	$(document).on('click','.qtyminus',function(e){
		e.preventDefault(); 
		fieldName = $(this).attr('data-field');
		var currentVal = parseInt($('input[data-field='+fieldName+']').val());
		if (!isNaN(currentVal) && currentVal > 1) {          
			$('input[data-field='+fieldName+']').val(currentVal - 1);
		} else {
			$('input[data-field='+fieldName+']').val(1);
		}
	});


	$('.ul_collections li > .icon').click(function(){
		$(this).parent().toggleClass('current');
		$(this).toggleClass('icon-plus icon-minus');
		$(this).next('ul').slideToggle("fast");
		$(this).next('div').slideToggle("fast");
	});

	$('.quenmk').on('click', function() {
		$('.h_recover').slideToggle();
	});
	$('a[data-toggle="collapse"]').click(function(e){
		if ($(window).width() >= 767) { 
			// Should prevent the collapsible and default anchor linking 
			// behavior for screen sizes equal or larger than 768px.
			e.preventDefault();
			e.stopPropagation();
		}    
	});
}

$(document).ready(function ($) {
	$(window).one('mousemove touchstart load',renderLayout )
});
if ($(window).width() < 768) {
	$('body').on('click','.item_product_main .add_to_cart',function(){
		$('.notification-cart').addClass('active');
		setTimeout(function(){
			$('.notification-cart').removeClass('active');
		},3000);
	});
}