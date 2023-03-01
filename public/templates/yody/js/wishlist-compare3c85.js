var Ego = {};
Ego.General = {
	init: function() {
		
		Ego.Wishlist.init();
		
	},
}
var urlspage = '/yeu-thich';
var urlmain = window.location.href;

Ego.Wishlist = {
	init: function() {
		this.setWishlistProductLoop();
		Ego.Wishlist.wishlistProduct();
	},
	setWishlistProductLoop: function() {
		$('body').on('click', '.remove-wishlist', function(e) {
			Ego.Wishlist.removeWishlist($(this).attr('data-wish'));
		})
		$('body').on('click', '.setWishlist', function(e) {
			//debugger;
			e.preventDefault();
			if ($(this).hasClass('active')) {
				$(this).parent().find('.like-text').text('Lưu trong danh sách yêu thích');
				Ego.Wishlist.removeWishlist($(this).attr('data-wish'));
				var InfoText = 'Bạn vừa bỏ sản phẩm ra khỏi mục yêu thích.';
				InfoNoti(InfoText);
			} else {
				var phand = [];
				var handle = $(this).attr('data-wish');
				if (document.cookie.indexOf('ego_wishlist_products') !== -1) {
					var las = Cookies.getJSON('ego_wishlist_products');
					if ($.inArray(handle, las) === -1) {
						phand = [handle];
						for (var i = 0; i < las.length; i++) {
							phand.push(las[i]);
							if (phand.length > 100) {
								break;
							}
						}
						Cookies.set('ego_wishlist_products', phand, {
							expires: 15,
							sameSite: 'None',
							secure: true
						});
					}
				} else {
					phand = [handle];
					Cookies.set('ego_wishlist_products', phand, {
						expires: 15,
						sameSite: 'None',
						secure: true
					});
				}
				$(this).parent().find('.like-text').text('Xóa khỏi danh sách yêu thích');
				Ego.Wishlist.wishlistProduct();
				var SuccessText = "Bạn vừa thêm 1 sản phẩm vào mục yêu thích thành công bấm <a style='color:#2196f3' href='/yeu-thich'>vào đây</a> để tới trang yêu thích";
				SuccessNoti(SuccessText);
			}
		})
	},
	wishlistProduct: function() {
		if ($('#sidebar-all .sidebar-all-wrap-right[data-type="wishlist"] .sidebar-all-wrap-right-main-list').length > 0) {
			if (document.cookie.indexOf('ego_wishlist_products') !== -1) {
				$('#sidebar-all .sidebar-all-wrap-right[data-type="wishlist"] .sidebar-all-wrap-right-main-list').html('')
				var last_wishlist_pro_array = Cookies.getJSON('ego_wishlist_products');
				Ego.Wishlist.activityWishlist();
				var recentview_promises = [];
				for (var i = 0; i < 100; i++) {
					if (typeof last_wishlist_pro_array[i] == 'string') {
						var promise = new Promise(function(resolve, reject) {
							$.ajax({
								url: '/products/' + last_wishlist_pro_array[i] + '?view=wish',
								async: false,
								success: function(product) {
									resolve({
										error: false,
										data: product
									});
								},
								error: function(err) {
									if (err.status === 404) {
										try {
											var u = ((this.url.split('?'))[0]).replace('/products/', '');
											resolve({
												error: true,
												handle: u
											});
										} catch (e) {
											resolve({
												error: false,
												data: ''
											})
										}
									} else {
										resolve({
											error: false,
											data: ''
										});
									}
								}
							})
						});
						recentview_promises.push(promise);

					}
				}
				Promise.all(recentview_promises).then(function(values) {
					if (values.length > 0) {
						$('.headerWishlistCount').removeClass('hidden-count')
						var x = [];
						setTimeout(function() {
							$('.headerWishlistCount').html(values.length)
						}, 500)
						$.each(values, function(i, v) {
							if (v.error) {
								x.push(v.handle);
							} else {
								$('#sidebar-all .sidebar-all-wrap-right[data-type="wishlist"] .page-wishlist').append(v.data);
								$('#sidebar-all .sidebar-all-wrap-right[data-type="wishlist"] .page-wishlist').show();
								awe_lazyloadImage();
								//theme.init(); // gọi lại ajax cart
							}
							//console.log(values.length);

						});
						if (x.length > 0) {
							var new_last_viewed_pro_array = [];
							$.each(last_wishlist_pro_array, function(i, v) {
								if ($.inArray(v, x) === -1) {
									new_last_viewed_pro_array.push(v);
								}

							})
							if (new_last_viewed_pro_array.length > 0) {
								Cookies.set('last_viewed_products', new_last_viewed_pro_array, {
									expires: 180,
									sameSite: 'None',
									secure: true
								});
							}
						}
						$('.nothing').addClass('d-none');
						if (urlmain.includes(urlspage)) {
							SwatchGrid();
						}
					} else {
						$('.headerWishlistCount').addClass('hidden-count')
						$('.headerWishlistCount').html('0')
						$('#sidebar-all .sidebar-all-wrap-right[data-type="wishlist"] .sidebar-all-wrap-right-main-list').append('<div class="sidebar-all-wrap-right-main-top-error col-12"><span>Danh sách yêu thích của bạn trống <a href="/collections/all">Mua sắm ngay bây giờ</a></span></div>')
						$('.nothing').removeClass('d-none');
					}
				});
			} else {
				$('#sidebar-all .sidebar-all-wrap-right[data-type="wishlist"] .sidebar-all-wrap-right-main-list').append('<div class="sidebar-all-wrap-right-main-top-error col-12"><span>Danh sách yêu thích của bạn trống <a href="/collections/all">Mua sắm ngay bây giờ</a></span></div>')
				jQuery('.nothing').removeClass('d-none');
			}
		} else {
			$('#sidebar-all .sidebar-all-wrap-right[data-type="wishlist"] .sidebar-all-wrap-right-main-list').append('<div class="sidebar-all-wrap-right-main-top-error col-12"><span>Danh sách yêu thích của bạn trống <a href="/collections/all">Mua sắm ngay bây giờ</a></span></div>')
			jQuery('.nothing').removeClass('d-none');
		}
	},
	activityWishlist: function() {
		var last_wishlist_pro_array = Cookies.getJSON('ego_wishlist_products');
		$.each(last_wishlist_pro_array, function(i, v) {
			$('.setWishlist[data-wish="' + v + '"]').html('<img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/hearted_ico.svg?1672124617708" alt="heart"/>').addClass('active').attr('title', 'Bỏ yêu thích');
			$('.setWishlist[data-wish="' + v + '"]').parent().find('.like-text').html('Xóa khỏi danh sách yêu thích');
		})
	},

	removeWishlist: function(handle) {
		var phand = [];

		$('a[data-wish="' + handle + '"]').html('<img src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/heart_ico.svg?1672124617708" alt="heart"/>').removeClass('active').attr('title', 'Thêm vào yêu thích');
		if (document.cookie.indexOf('ego_wishlist_products') !== -1) {
			var las = Cookies.getJSON('ego_wishlist_products');
			var flagIndex = $.inArray(handle, las);
			las.splice(flagIndex, 1)
			Cookies.set('ego_wishlist_products', las, {
				expires: 15,
				sameSite: 'None',
				secure: true
			});
		} else {
			phand = [handle];
			Cookies.set('ego_wishlist_products', phand, {
				expires: 15,
				sameSite: 'None',
				secure: true
			});
		}
		Ego.Wishlist.wishlistProduct(3, 5);
	}
}




Ego.Wishlist.init();