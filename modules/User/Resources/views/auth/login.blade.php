<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
    @include('dashboard::layout.base.head')
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-white">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url({{asset('public_assets/temp/progress-hd.png')}})">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="index.html" class="mb-12">
						{{-- <img alt="Logo" src="assets/media/logos/logo-2-dark.svg" class="h-45px" /> --}}
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" novalidate="novalidate" id="login_form" action="{{ route('user.login') }}" method="post">
                            @csrf
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">{{ __('user::auth.title') }}</h1>
								<!--end::Title-->
							</div>
							<!--begin::Heading-->
                            @if ($errors->any())
                            <div class="server_errors mb-8">
                                    <div class="d-flex flex-column">
                                    @foreach ($errors->all() as $message)
                                        <li class="d-flex align-items-center py-2">
                                            <span class="bullet me-2 bg-danger"></span> <span class="text-danger">{{ $message }}</span>
                                        </li>
                                    @endforeach
                                    </div>
                            </div>
                            @endif
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label control-label fs-6 fw-bolder">{{ __('user::auth.email') }}</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-lg" type="text" name="email" value="{{ old('email') }}" />
								<!--end::Input-->
							</div>



							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label control-label fw-bolder fs-6">{{ __('user::auth.password') }}</label>
                                <!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-lg" type="password" name="password" autocomplete="off" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<div class="mb-10">
								<label class="form-check form-check-custom form-check-solid">
									<input class="form-check-input" name="remember" type="checkbox"/>
									<span class="form-check-label">
										{{ __('user::auth.remember_me') }}
									</span>
								</label>
							</div>
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">{{ __('user::auth.connect') }}</span>
									<span class="indicator-progress">{{ __('user::auth.please_wait') }}...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<!--end::Submit button-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		@include('dashboard::layout.base.scripts')
		
		<script src="{{asset('/themes/metro8/assets/js/bundle/form_validation.js')}}"></script>
		<script src="{{asset('/themes/metro8/assets/modules/user/js/login.js')}}"></script>

	</body>
	<!--end::Body-->
</html>