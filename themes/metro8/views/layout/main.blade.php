<!DOCTYPE html>
<html lang="en">
@include('dashboard::layout.base.head')
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            @include('dashboard::layout.base.aside')
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                @include('dashboard::layout.base.header')
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Post-->
                    @yield('content')
                    <!--end::Post-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--begin::Footer-->
        @include('dashboard::layout.base.footer')
        <!--end::Footer-->
        <!--end::Page-->
    </div>
    <!--end::Root-->
    @yield('extras')

    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase.js"></script>

    <!--end::Main-->
    <!-- PHP To Js Params -->
    @isset($app_params)
    @javascript($app_params)
    @endisset
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    @include('dashboard::layout.base.scripts')

    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    @yield('pageScripts')
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    @include('dashboard::layout.partials.loader')
</body>
<!--end::Body-->

</html>