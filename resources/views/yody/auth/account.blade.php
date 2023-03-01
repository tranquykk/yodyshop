@extends('templates.yody.master')

@section('content')

@include('templates.yody.inc.sidebar')

<style>
	.page-signup-title {
		font-weight: 700;
		font-family: 'SVN-Gilroy Bold';
	}

	.page-signup-title-yellow {
		color: #fcaf17 !important;
	}
	
	.page-signup-title-darkblue {
		color: #151560 !important;
	}

	.page-signup-error {
		margin-bottom: 24px !important;
		text-align: left;
	}
	
	.page-signup-field-error {
		border: 1px solid #F5222D !important;
	}
	
	.page-signup-error * {
		color: #F5222D !important;
	}

	.page-signup-actions {
		margin-bottom: 36px;
	}
	
	.page-signup-text {
		color: #595959;
		font-size: 16px;
	}
	
	.page-signup-or {
		border-top: 1px solid #DDE1E3;
	}
	
	.page-signup-or-item {
		color: #595959;
		margin-bottom: 32px;
		transform: translateY(-55%);
	}
	
	.page-signup-social-wrapper {
		margin-bottom: 32px;
	}
	
	.page-signup-social {
		padding: 0 12px;
	}
	
	.page-signup-social > a {
		height: unset !important;
	}
	
	.page-signup-redirect-login > a {
		color: #fcaf17 !important;
		font-weight: 700;
		height: unset !important;
	}

	.page-signup-redirect-login > a:hover {
		text-decoration: underline;
	}
	
	.page-signup-redirect-login > span {
		color: #595959;
	}

	.page-signup-loading {
		position: fixed;
		display: flex;
		background-color: rgba(255, 255, 255, 0.3);
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 1000;
	}
	.m992 p strong {
		display: inline-block;
		width: 109px;
		font-weight: initial;
		color: #7A7A9D;
	}
	#show {
		display: block;
	}
</style>
<section class="bread-crumb d-none d-md-block">
	<div class="container">
		<div class="row">
			<div class="col-12 a-left">
				<ul class="breadcrumb">
				<li class="home">
					<a href="/"><span>Trang chủ</span></a>
					<span class="mr_lr">&nbsp;/&nbsp;</span>
				</li>
				<li>
					<a href="/account"><span>Tài khoản</span></a>
				</li>
				<li class="last">
					<strong><span>Tài khoản</span></strong>
				</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="op_address"></div>
<section class="address page_address">
	<div class="container">
		<div class="row">
			<div class="col-left-ac">
				<div class="block-account">
					<div class="info info-1">
						<img src="//bizweb.dktcdn.net/100/438/408/themes/894085/assets/account_ava.jpg?1675744576845" alt="{{Auth::user()->fullname}}">
						<p>{{Auth::user()->fullname}}</p>
						<a href="{{route('yody.auth.logout')}}">Đăng xuất</a>
					</div>
					<ul>
						<li>
							<a class="title-info active" disabled="disabled" href="/account">Tài khoản của tôi</a>
						</li>
						<li>
							<a class="title-info" href="/account/orders">Lịch sử mua hàng</a>
						</li>
						<li>
							<a class="title-info" href="/account/changepassword">Đổi mật khẩu</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-right-ac">
				<h1 class="title-head margin-top-0" style="text-align: left">
					Thông tin cá nhân
					<button class="btn-edit-addr btn btn-primarys btn-more" type="button">Chỉnh sửa thông tin</button>
				</h1>
				<div class="form-signup name-account m992" style="padding: 20px 30px;">
					<p><strong>Họ và tên:</strong> {{Auth::user()->fullname}}</p>
					<p><strong>Địa chỉ email:</strong> {{Auth::user()->username}}</p>
					@foreach ($arrMember as $item)
						@if(Auth::user()->customer_id > 0)
							<p> <strong>Số điện thoại: </strong>{{$item->phone}} </p>
							<p> <strong>Địa chỉ:</strong>{{$item->address}} </p>
						@endif
					@endforeach
				</div>
				<div id="add_address" class="form-list modal_address modal" style="display: none;">
					<div class="btn-close closed_pop"><i class="fa fa-times"></i></div>
					<h2 class="title_pop">Chỉnh sửa thông tin</h2>
					<form method="post" action="{{route('yody.auth.editInfo')}}" id="customer_address" accept-charset="UTF-8" data-gtm-form-interact-id="0">
						@csrf
						<input type="hidden" name="customer_id" value="{{Auth::user()->customer_id}}">
						<div class="pop_bottom">
							<div class="form_address">
								<div class="row">
									<div class="field col-md-6">
										<fieldset class="form-group">
											<input type="text" name="fullname" class="form-control has-content" data-validation-error-msg="Không được để trống" data-validation="required" value="{{Auth::user()->fullname}}">
											<label>Họ tên</label>
										</fieldset>
										<p class="error-msg"></p>
									</div>
									<div class="field col-md-6">
										<fieldset class="form-group">
											<input type="number" class="form-control has-content" id="Phone" pattern="\d+" name="phone" maxlength="12" value="{{Auth::user()->phone}}">
											<label>Số điện thoại</label>
										</fieldset>
									</div>
								</div>
								@php
									if(!empty($item->address)) {
										$pieces = explode(",", $item->address);
										$address = $pieces[0];
										$ward = $pieces[1];
										$district = $pieces[2];
										$province = $pieces[3];
									} else {
										$address = '';
										$ward = '';
										$district = '';
										$province = '';
									}
								@endphp
								<div class="field">
									<fieldset class="form-group">
										<input type="text" class="form-control has-content" name="address" value="{{$address}}">
										<label>Địa chỉ</label>
									</fieldset>
								</div>
								<div class="group-country">
									<fieldset class="form-group select-field not-vn">
										<select name="province" value="" class="form-control add has-content provinces" id="mySelect2" data-address-type="province" data-address-zone="billing" data-select2-id="select2-data-billingProvince" data-bind="billing.province" value="" data-address-type="province" data-address-zone="billing">
											<option value="">---</option>
											@foreach ($arrProvinces as $value)
                                                <option value="{{$value->province_id}}" {{strpos($province, $value->name) ? "selected" : ""}}>{{$value->name}}</option>
                                            @endforeach
										</select>
										<label>Tỉnh thành</label>
									</fieldset>
									<fieldset class="form-group select-field not-vn">
										<select name="district" class="form-control has-content add districts" id="mySelect3" data-address-type="district" data-address-zone="billing" data-select2-id="select2-data-billingDistrict" {{$address != '' ? "":"disabled"}}>
											<option value="">---</option>
											@if ($arrDistricts)
												@foreach ($arrDistricts as $value)
													<option value="{{$value->district_id}}" {{strpos($district, $value->name) ? "selected" : ""}}>{{$value->name}}</option>
												@endforeach
											@endif
										</select>
										<label>Quận huyện</label>
									</fieldset>
									<fieldset class="form-group select-field not-vn">
										<select name="ward" class="form-control has-content add wards" value="" id="mySelect4" data-address-type="ward" data-address-zone="billing" data-select2-id="select2-data-billingWard" {{$address != '' ? "":"disabled"}}>
											<option value="">---</option>
											@if ($arrWards)
												@foreach ($arrWards as $value)
													<option value="{{$value->ward_id}}" {{strpos($ward, $value->name) ? "selected" : ""}}>{{$value->name}}</option>
												@endforeach
											@endif
										</select>
										<label>Phường xã</label>
									</fieldset>
								</div>
							</div>
							<div class="btn-row">
								<button class="btn btn-lg btn-dark-address btn-outline article-readmore btn-close" type="button">HỦY</button>
								<button class="btn btn-lg btn-primarys btn-submit" id="addnew" type="submit">CẬP NHẬT</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection