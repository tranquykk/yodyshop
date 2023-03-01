@extends('templates.yody.master')

@section('content')

@include('templates.yody.inc.sidebar')
{{-- <link rel="preload" as="style" type="text/css" href="/templates/yody/css/popupsale.scss3c85.css"> --}}
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
</style>
<div class="page-content-account">
   <div class="container">
      <div class="d-group position-relative">
         <div id="signupLoading" class="d-none page-signup-loading justify-content-center align-items-center">
            <img width="100" height="100" src="//bizweb.dktcdn.net/100/438/408/themes/890667/assets/rolling.svg?1672303543027" alt="loading">
         </div>
         <div class="right-col">
            <div class="group-login group-log">
				<div class="mb-5 d-block page-signup-text">
					Chào mừng bạn đến với Yody!
				</div>
				<h1 class="d-block">
					<span class="page-signup-title page-signup-title-darkblue">ĐĂNG</span>
					<span class="page-signup-title page-signup-title-yellow">KÝ</span>
				</h1>
				<form method="post" action="{{route('yody.auth.postRegister')}}" id="customer_register" accept-charset="UTF-8">
					@csrf
					<fieldset class="form-group">
						<input type="text" class="form-control form-control-lg mb-1" value="" name="fullname" id="first_name" placeholder="Họ và tên">
						<div class="page-signup-error px-1">
							@error('fullname')
								<div>{{$message}}</div>
							@enderror
						</div>
					</fieldset>
					<fieldset class="form-group">
						<input placeholder="Số điện thoại" type="text" id="phone" class="form-control form-control-comment mb-1 form-control-lg" name="phone">
						<div class="page-signup-error px-1">
							@error('phone')
								<div>{{$message}}</div>
							@enderror
						</div>
					</fieldset>
					<fieldset class="form-group">
						<input type="text" class="form-control form-control-lg mb-1" value="" name="email" id="iptEmail" placeholder="Địa chỉ email">
						<div class="page-signup-error px-1">
							@error('email')
								<div>{{$message}}</div>
							@enderror
						</div>
					</fieldset>
					<fieldset class="form-group">
						<input type="password" class="form-control form-control-lg mb-1" value="" name="password" id="password" placeholder="Mật khẩu">
						{{-- <span class="showpass"></span> --}}
						<div class="page-signup-error px-1">
							@error('password')
								<div>{{$message}}</div>
							@enderror
						</div>
					</fieldset>
					<div class="page-signup-actions">
						<button id="btnSubmit" class="btn-login btn-reg w-100" value="Đăng ký" type="submit">Đăng ký</button>
					</div>
					<div class="block social-login--facebooks d-block d-md-none">
						<div class="page-signup-redirect-login page-signup-text">
							<span>Bạn đã có tài khoản?</span>
							<a href="/login">Đăng nhập ngay!</a>
						</div>
					</div>
				</form>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection