$(window).on('popstate', function(){
	location.reload(true);
});
var selectedSortby;
var tt = 'Thứ tự';
var selectedViewData = "data";
var check = false
var wDWs = $(window).width();
function toggleFilter(e) {
	_toggleFilter(e);
	renderFilterdItems();
	if (wDWs > 991) {
		doSearch(1);
	}
		
}
function _toggleFilterdqdt(e) {
	var $element = $(e);
	var group = 'Khoảng giá';
	var field = 'price_min';
	var operator = 'OR';	 
	var value = $element.attr("data-value");	
	filter.deleteValuedqdt(group, field, value, operator);
	filter.addValue(group, field, value, operator);
	renderFilterdItems();
	if (wDWs > 991) {
		doSearch(1);
	}
}

function _toggleFilterdqdtMB(e) {
	var group = 'Khoảng giá';
	var field = 'price_min';
	var operator = 'OR';	 
	var value = e;	
	filter.deleteValuedqdt(group, field, value, operator);
	filter.addValue(group, field, value, operator);
	renderFilterdItems();
	if (wDWs > 991) {
		doSearch(1);
	}
}

function _toggleFilter(e) {
	var $element = $(e);
	var group = $element.attr("data-group");
	var field = $element.attr("data-field");
	var text = $element.attr("data-text");
	var value = $element.attr("value");
	var operator = $element.attr("data-operator");
	var filterItemId = $element.attr("id");

	if (!$element.is(':checked')) {
		filter.deleteValue(group, field, value, operator);
	}
	else{
		filter.addValue(group, field, value, operator);
	}

	$(".catalog_filters li[data-handle='" + filterItemId + "']").toggleClass("active");
}
function filterItemInList(object) {
	q = object.val().toLowerCase();
	object.parent().next().find('li').show();
	if (q.length > 0) {
		object.parent().next().find('li').each(function() {
			if ($(this).find('label').attr("data-filter").indexOf(q) == -1)
				$(this).hide();
		})
	}
}
function renderFilterdItems() {
	var $container = $(".filter-container__selected-filter-list ul");
	$container.html("");
	$(".filter-container input[type=checkbox]").each(function(index) {
		if ($(this).is(':checked')) {
			var id = $(this).attr("id");
			var name = $(this).closest("label").text();
			addFilteredItem(name, id);
		}
	});
	if($(".aside-content input[type=checkbox]:checked").length > 0)
		$(".filter-container__selected-filter").show();
	else
		$(".filter-container__selected-filter").hide();
}
function addFilteredItem(name, id) {
	var filteredItemTemplate = "<li class='filter-container__selected-filter-item' for='{3}'><a href='javascript:void(0)' onclick=\"{0}\"><i class='fa fa-close'></i>{1}</a></li>";
	filteredItemTemplate = filteredItemTemplate.replace("{0}", "removeFilteredItem('" + id + "')");
	filteredItemTemplate = filteredItemTemplate.replace("{1}", name);
	filteredItemTemplate = filteredItemTemplate.replace("{3}", id);
	var $container = $(".filter-container__selected-filter-list ul");
	$container.append(filteredItemTemplate);
		check = false
}
function removeFilteredItem(id){$(".filter-container #" + id).trigger("click");}
function filterItemInList(object){
	q = object.val().toLowerCase();
	object.parent().next().find('li').show();
	if (q.length > 0){
		object.parent().next().find('li').each(function(){
			if ($(this).find('label').attr("data-filter").indexOf(q) == -1)
				$(this).hide();
		})
	}
}
function doSearch(page, options){
	if(!options) options = {};
	var collectItemLoading =  document.querySelector(".loading_collect")

	if(collectItemLoading != null){
		collectItemLoading.classList.remove('d-none')
	}
	var listCollect = document.querySelector(".list-collect")
	if(listCollect != null){
		listCollect.classList.add('d-none')
	}
	var list = document.querySelectorAll(".filter-item")
	for(let i = 0; i < list.length; i++){
		list[i].classList.add('active')
	}
			check = false
	$('.aside.aside-mini-products-list.filter').removeClass('active');
	filter.search({
		view: selectedViewData,
		page: page,
		sortby: selectedSortby,
		success: function (html) {
			check = true
			var url = new URL(window.location.href)
			var c = url.searchParams.get("q");
			if(c != null){
				var arrKey = c.split(":")
				if(arrKey.length > 3 ){
					check = false
				}else{
					check = true
				}
			}

			var collectItemLoading =  document.querySelector(".loading_collect")
			if(collectItemLoading != null){
				collectItemLoading.classList.add('d-none')
			}

			var listCollect = document.querySelector(".list-collect")
			if(listCollect != null){
				listCollect.classList.remove('d-none')
			}
			var list = document.querySelectorAll(".filter-item")
			for(let i = 0; i < list.length; i++){
				list[i].classList.remove('active')
			}
			var $html = $(html);
			var $categoryProducts = $($html[0]); 
			$(".category-products").html($categoryProducts.html());
			pushCurrentFilterState({sortby: selectedSortby, page: page});
			awe_lazyloadImage();
			initSwatchColor();
			resizeImage();
			$('.filter_container_wrap').removeClass('open');
			
			Ego.General = {
				init: function() {
					Ego.Wishlist.init();
				},
			}
			
			if ($('.main_container .section_sort').length > 0) {
				$('.category-products .section_sort').remove();
			}
			var number = $('.category-products-filter').attr('data-number');
			$('.section_sort .count').text(number +' sản phẩm');
			$('.end_fillter span.text').text(number +' sản phẩm');
			$('.add_to_cart').click(function(e){	
				e.preventDefault();		
				var $this = $(this);
				var form = $this.parents('form');
				$.ajax({
					type: 'POST',
					url: '/cart/add.js',
					async: false,
					data: form.serialize(),
					dataType: 'json',
					beforeSend: function() { },
					success: function(line_item) {
						$('.cart-popup-name').html(line_item.title).attr('href', line_item.url, 'title', line_item.title);
						ajaxCart.load();
						$('#popup-cart-desktops').addClass('active');
						$('.cart-drop').addClass('active');
						setTimeout(function(){
							check_number_gift_mb ()
						},1000);
						setTimeout(function(){
							$('.cart-drop').removeClass('active');
						}, 3000);
					},
					cache: false
				});
			});

			$('html, body').animate({
				scrollTop: $('.category-products').offset().top - 160
			}, 500);
			SwatchGrid();
			showmorefilter();

			resortby(selectedSortby);
			if (window.BPR !== undefined){
				return window.BPR.initDomEls(), window.BPR.loadBadges();
			}
			if(window.ABProdStats){
				window.ABProdStats.abInitProductStats()
			}
		}
	});
};
function sortby(sort) {			 
	switch(sort) {
		case "price-asc":
			selectedSortby = "price_min:asc";					   
			break;
		case "price-desc":
			selectedSortby = "price_min:desc";
			break;
		case "alpha-asc":
			selectedSortby = "name:asc";
			break;
		case "alpha-desc":
			selectedSortby = "name:desc";
			break;
		case "created-desc":
			selectedSortby = "created_on:desc";
			break;
		case "created-asc":
			selectedSortby = "created_on:asc";
			break;
		case "quantity-descending":
			selectedSortby = "quantity-descending";
			break;
		default:
			selectedSortby = "";
			break;
	}
	doSearch(1);
	if ($(window).width() < 768) {
		$('.sort-cate-left ul').hide()
	}
}

function resortby(sort) {
	$('.sort-cate-left .btn-quick-sort').removeClass("active");
	switch(sort) {				  
		case "price_min:asc":
			tt = "Rẻ nhất";
			$('.sort-cate-left .price-asc').addClass("active");
			break;
		case "price_min:desc":
			tt = "Giá giảm dần";
			$('.sort-cate-left .price-desc').addClass("active");
			break;
		case "name:asc":
			tt = "Từ A → Z";
			$('.sort-cate-left .alpha-asc').addClass("active");
			break;
		case "name:desc":
			tt = "Từ Z → A";
			$('.sort-cate-left .alpha-desc').addClass("active");
			break;
		case "created_on:desc":
			tt = "Mới nhất";
			$('.sort-cate-left .created-desc').addClass("active");
			break;
		case "quantity-descending":
			tt = "Theo số lượng";
			$('.sort-cate-left .quantity-descending').addClass("active");
			break;
		default:
			tt = "Mặc định";
			$('.sort-cate-left .default').addClass("active");
			break;
	}			   
	$('.sort-cate-left .title .text').html(tt);
}


function _selectSortby(sort) {
	resortby(sort);
	switch(sort) {
		case "price-asc":
			selectedSortby = "price_min:asc";
			break;
		case "price-desc":
			selectedSortby = "price_min:desc";
			break;
		case "alpha-asc":
			selectedSortby = "name:asc";
			break;
		case "alpha-desc":
			selectedSortby = "name:desc";
			break;
		case "created-desc":
			selectedSortby = "created_on:desc";
			break;
		case "created-asc":
			selectedSortby = "created_on:asc";
			break;
		case "quantity-descending":
			selectedSortby = "quantity-descending";
			break;
		default:
			selectedSortby = sort;
			break;
	}
}
function toggleCheckbox(id){$(id).click();}
function pushCurrentFilterState(options){
	if(!options) options = {};
	var url = filter.buildSearchUrl(options);
	var queryString = url.slice(url.indexOf('?'));			  
	queryString = queryString + '&view=grid';				   
	pushState(queryString);
}
function pushState(url){
	window.history.pushState({
		turbolinks: true,
		url: url
	}, null, url)
}
function switchView(view){			  
	switch(view){
		case "list":
			selectedViewData = "data_list";					   
			break;
		default:
			selectedViewData = "data";
			break;
	}			   
	var url = window.location.href;
	var page = getParameter(url, "page");
	if(page != '' && page != null){
		doSearch(page);
	}else{
	if (wDWs > 991) {
		doSearch(1);
	}
	}
}
function selectFilterByCurrentQuery(){
	var isFilter = false;
	var url = window.location.href;
	var queryString = decodeURI(window.location.search);
	var filters = queryString.match(/\(.*?\)/g);
	var page = 0;
	if(queryString){
		isFilter = true;
		$.urlParam = function(name){
			var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
			return results[1] || 0;
		}
		page = $.urlParam('page');
	}
	if(filters && filters.length > 0){
		filters.forEach(function(item){
			item = item.replace(/\(\(/g, "(");
			var element = $(".aside-content input[value='" + item + "']");
			element.prop("checked", true);
			_toggleFilter(element);
		});
		isFilter = true;
	}
	var sortOrder = getParameter(url, "sortby");
	if(sortOrder){
		_selectSortby(sortOrder);
	}
	if(isFilter){
		doSearch(page);
		renderFilterdItems();
	}
}

function renderFillter(){
	var isFilter = false;
	var url = window.location.href;
	var queryString = decodeURI(window.location.search);
	var filters = queryString.match(/\(.*?\)/g);
	var page = 0;
	if(queryString){
		isFilter = true;
		$.urlParam = function(name){
			var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
			return results[1] || 0;
		}
		page = $.urlParam('page');
	}
	if(filters && filters.length > 0){
		filters.forEach(function(item){
			item = item.replace(/\(\(/g, "(");
			var element = $(".aside-content input[value='" + item + "']");
			element.prop("checked", true);
			_toggleFilter(element);
		});
		isFilter = true;
	}
	var sortOrder = getParameter(url, "sortby");
	if(sortOrder){
		_selectSortby(sortOrder);
	}
	if(isFilter){
		//doSearch(page);
		renderFilterdItems();
	}
}
function getParameter(url, name){
	name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
		results = regex.exec(url);
	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
$(document).ready(function(){
	showmorefilter();
	var urlx = window.location.href;
	if (!urlx.includes('?utm')) {
		selectFilterByCurrentQuery();
	}
	$('.filter-group .filter-group-title').click(function(e){
		$(this).parent().toggleClass('active');
	});

	$('.filter-mobile').click(function(e){
		$('.aside.aside-mini-products-list.filter').toggleClass('active');
	});

	$('#show-admin-bar').click(function(e){
		$('.aside.aside-mini-products-list.filter').toggleClass('active');
	});

	$('.filter-container__selected-filter-header-title').click(function(e){
		$('.aside.aside-mini-products-list.filter').toggleClass('active');
	});
});

$('.filter-item--check-box input').change(function(e){
	var $this = $(this);
	toggleFilter($this);
})
$('a#filter-value').click(function(e){
	var $this = $(this);
	_toggleFilterdqdt($this);
})
$('.dosearch').click(function(e){
	var $data = $(this).attr('data-onclick');
	doSearch($data);
})
$('.awe_sortby').on('click',function(e){
	var $data = $(this).attr('data-onclick');
	sortby($data);

})
function showmorefilter() {
	var stringmore = 'Xem thêm <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/more_filter.svg?1672124617708" alt="more"/>',
		stringless = 'Thu gọn <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/more_filter.svg?1672124617708" alt="more"/>';
	$(document).on('click', '.showmore.more', function(){
		$(this).removeClass('more').addClass('less').html(stringless);
		$(this).closest('.aside-content').find('ul').removeClass('maxheight');
	});
	$(document).on('click', '.showmore.less', function(){
		$(this).removeClass('less').addClass('more').html(stringmore);
		$(this).closest('.aside-content').find('ul').addClass('maxheight');
	});
}window.showmorefilter=showmorefilter;
$(document).on('change','#start',function(e){
	var val = parseInt($('#start input').val())-1;
	var val2 = parseInt($('#stop input').val())+1;
	$("#slider").slider("values",0,parseInt(val));
	$('#filter-value').attr('data-value','(>'+val+' AND <'+val2+')');
	var $this = $('#filter-value').attr('data-value');
		_toggleFilterdqdtMB($this)
});
$(document).on('change','#stop',function(e){
	var val = parseInt($('#start input').val())-1;
	var val2 = parseInt($('#stop input').val())+1;
	$("#slider").slider("values",1,parseInt(val2));
	$('#filter-value').attr('data-value','(>'+val+' AND <'+val2+')');
	var $this = $('#filter-value').attr('data-value');
	_toggleFilterdqdtMB($this)
});
if($(window).width() > 1200) {
	$('.aside-filter .aside-title').click(function(){
		$(this).toggleClass('active');
		$(this).next().slideToggle()
	})
}
else {
	$('.move-fillter .aside-item .aside-title').click(function(){
		$(this).toggleClass('active');
		$('.move-fillter .aside-item .aside-title').not(this).removeClass('active');
		$('.section_sort .sort-cate-left .title').removeClass('active');
		$('.section_sort .sort-cate-left>ul').hide();
	})
	$('.section_sort .sort-cate-left .title').click(function(){
		$(this).toggleClass('active');
		$(this).next().toggle();
		$('.move-fillter .aside-item .aside-title').not(this).removeClass('active');
	})
	
	$('.dqdt-sidebar .aside-filter .filter-mb .aside-title').click(function(){
		$(this).toggleClass('active');
		$(this).next().slideToggle()
	})
}
$.fn.extend({
	toggleText: function(a, b){
		return this.html(this.html() == b ? a : b);
	}
});

var height = $('.coll-desc').height();
if (height > 110) {
	$('.coll-desc').css({'height':'110px','padding-bottom':'0'}).append('<a href="javascript:;" class="view-more"><span>Xem thêm <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/more_filter.svg?1672124617708" alt="more"/></span></a>')
}
$(".coll-desc").on("click", ".view-more", function() {
	$(".coll-desc").toggleClass( "open" );
	$(this).toggleText('<span>Xem thêm <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/more_filter.svg?1672124617708" alt="more"/>','<span>Thu gọn <img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/more_filter.svg?1672124617708" alt="more"/>');
});

$('.close_and_search').on("click", function() {
	doSearch(1);
})
$('body').on("click",".opacity_menu",  function() {
	clearAllFiltered()
})

$('.close_filter').click(function() {
	clearAllFiltered()
	
})
$('.filter-container__clear-all').click(function() {
	clearAllFiltered()
})