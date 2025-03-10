<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="master/html/theme/dist/">
		<title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{ asset('master/html/theme/dist/assets/media/logos/favicon.ico') }}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('master/html/theme/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('master/html/theme/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="{{ route('landing.main.welcome') }}" class="mb-12">
						<img alt="Logo" src="{{ asset('master/html/theme/dist/assets/media/logos/logo-1.svg') }}" class="h-40px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" action="{{ route('login') }}" method="POST">
							@csrf

							<!--begin::Heading-->
							{{-- <div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Sign In to Metronic</h1>
								<!--end::Title-->
								<!--start::User Account-->
								<div class="card card-flush shadow-sm mb-5">
									<div class="card-header">
										<h3 class="card-title">Test Account</h3>
									</div>
									<div class="card-body py-5 text-start">
										<div class="mb-3">
											<h5>User Office</h5>
											<p>Email: <b>office@gmail.com</b></p>
											<p>Password: <b>office</b></p>
										</div>
										<div class="separator border-3 my-3"></div>
										<div class="mb-3">
											<h5>User Agen</h5>
											<p>Email: <b>agen@gmail.com</b></p>
											<p>Password: <b>agen</b></p>
										</div>
									</div>
								</div>
								<!--end::User Account-->
							</div> --}}
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Account Description-->
								<div class="row my-6">
									<h2 class="card-title text-bolder text-center w-100 mb-4">Trial Accounts</h2>
									<div class="col-12 mb-2">
										<div class="card card-dashed">
											<div class="card-header">
												<h3 class="card-title w-100 justify-content-center">Konsumen Account</h3>
											</div>
											<div class="card-body">
												<b>Username:</b> konsumen<br/>
												<b>Password:</b> konsumen1<br/>
											</div>
										</div>
									</div>
									<div class="col-12 mb-2">
										<div class="card card-dashed">
											<div class="card-header">
												<h3 class="card-title w-100 justify-content-center">Office Account</h3>
											</div>
											<div class="card-body">
												<b>Username:</b> office<br/>
												<b>Password:</b> office2<br/>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="card card-dashed">
											<div class="card-header">
												<h3 class="card-title w-100 justify-content-center">Agen Account</h3>
											</div>
											<div class="card-body">
												<b>Username:</b> agen<br/>
												<b>Password:</b> agen3<br/>
											</div>
										</div>
									</div>
								</div>
								<!--end::Account Description-->
								<!--begin::Label-->
								<label class="form-label fs-6 fw-bolder text-dark">Username</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid @error('username')is-invalid @enderror" type="text" name="username" autocomplete="off" value="{{ old('username') }}" />
								<!--end::Input-->
								<!--begin::Error-->
								@error('username')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
								<!--end::Error-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack mb-2">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
									<!--end::Label-->
									<!--begin::Link-->
									<a href="#" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid @error('password')is-invalid @enderror" type="password" name="password" autocomplete="off" />
								<!--end::Input-->
								<!--begin::Error-->
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
								<!--end::Error-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Continue</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<!--end::Submit button-->
								<!--begin::Separator-->
								{{-- <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div> --}}
								<!--end::Separator-->
								<!--begin::Google link-->
								{{-- <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3" />Continue with Google</a> --}}
								<!--end::Google link-->
								<!--begin::Google link-->
								{{-- <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-3" />Continue with Facebook</a> --}}
								<!--end::Google link-->
								<!--begin::Google link-->
								{{-- <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
								<img alt="Logo" src="{{ asset('master/html/theme/dist/assets/media/svg/brand-logos/apple-black.svg') }}" class="h-20px me-3" />Continue with Apple</a> --}}
								<!--end::Google link-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-10">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-bold fs-6">
						<a href="https://github.com/Eclipse-02" class="text-muted text-hover-primary px-2">About</a>
						<a href="mailto:rafaumar22@gmail.com" class="text-muted text-hover-primary px-2">Contact</a>
						<a href="#" class="text-muted text-hover-primary px-2">Follow</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Main-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('master/html/theme/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('master/html/theme/dist/assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('master/html/theme/dist/assets/js/custom/authentication/sign-in/general.js') }}"></script>
		@include('sweetalert::alert')
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>