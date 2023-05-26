@extends('dashboard::layout.main')

@section('pageHead')
<title>Dashboard | Sengine</title>
<meta name="description"
content="put description here" />
<meta name="keywords"
content="put key words here" />
@endsection

@section('pageStyle')
<link href="{{ asset('/themes/metro8/assets/plugins/datatables/datatables.bundle.css') }}" rel="stylesheet"
    type="text/css">
@endsection

@section('page_title')
<!--begin::Page title-->
<div data-kt-swapper="true" data-kt-swapper-mode="prepend"
    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_header_nav'}"
    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
    <!--begin::Title-->
    <h1 class="d-flex align-items-center fw-bolder fs-3 my-1 toolbar-main-title-color">Dashboard</h1>
    <!--end::Title-->
</div>
<!--end::Page title-->
@endsection

@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl container-full-width">
        <!--begin::Card-->
        <h1>Welcome {{ auth()->user()->name }}</h1>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
@endsection


@section('extras')
<!--begin::Scrolltop-->
@include('dashboard::layout.partials.scrollup')
<!--end::Scrolltop-->
<x-dashboard::dt-modal/>
@endsection

@section('pageScripts')


<script src="{{asset('/themes/metro8/assets/plugins/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('/themes/metro8/assets/js/bundle/datatable.js')}}"></script>
<script src="{{asset('/themes/metro8/assets/js/bundle/modal_form_validation.js')}}"></script>
<script src="{{asset('/themes/metro8/assets/modules/user/js/user.js')}}"></script>


@endsection