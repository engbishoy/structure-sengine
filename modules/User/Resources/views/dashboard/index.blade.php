@extends('dashboard::layout.main')

@section('pageHead')
<title>{{ __('user::header.title') }} | Sengine</title>
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
    <h1 class="d-flex align-items-center fw-bolder fs-3 my-1 toolbar-main-title-color">{{ __('user::header.title') }}</h1>
    <!--end::Title-->
</div>
<!--end::Page title-->
@endsection

@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl container-full-width">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div id="header-container" class="card-header border-0 pt-6">
                <x-dashboard::dt-search dt-target="_datatable"/>
                <!--begin::Card toolbar-->
                <x-dashboard::dt-toolbar>

                    <!--begin::Add-->
                    <x-dashboard::dt-add-btn dt-target="_datatable" data-action-url="{{ route('users.create') }}"/>
                    <!--end::Add-->

                    <!--begin::Trashed-->
                    <x-dashboard::dt-trash-btn dt-target="_datatable" data-action-url="{{ route('users.trashed.datatable') }}"/>
                    <!--end::Trashed-->

                    <!--begin::Previous-->
                    <x-dashboard::dt-prv-btn dt-target="_datatable" data-action-url="{{ route('users.datatable') }}"/>
                    <!--end::Previous-->

                    <!--begin::Export-->
                    <x-dashboard::dt-export dt-target="_datatable"/>
                    <!--end::Export-->

                    <!--begin::ColumnFilter-->
                    <x-dashboard::dt-col-filter dt-target="_datatable"/>
                    <!--end::ColumnFilter-->

                    <!--begin::Refresh-->
                    <x-dashboard::dt-refresh dt-target="_datatable"/>
                    <!--end::Refresh-->

                    <!--begin::FullScrn-->
                    <x-dashboard::dt-full-scrn dt-target="_datatable"/>
                    <!--end::FullScrn-->

                    <!--begin::Group actions-->
                    <x-slot name="group">
                        <!--begin::Input group-->
                        <x-dashboard::dt-actn-grp>
                            <x-dashboard::dt-actn-grp-delete data-action-url="{{ route('users.destroy.many') }}" />
                        </x-dashboard::dt-actn-grp>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <x-dashboard::dt-trashed-actn-grp>
                            <x-dashboard::dt-actn-grp-restore data-action-url="{{ route('users.trashed.restore.many') }}" />

                            <x-dashboard::dt-actn-grp-delete data-action-url="{{ route('users.trashed.destroy.many') }}" />
                        </x-dashboard::dt-trashed-actn-grp>
                        <!--end::Input group-->
                    </x-slot>
                    <!--end::Group actions-->
                </x-dashboard::dt-toolbar>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <x-dashboard::data-table id="_datatable" data-url="{{ route('users.datatable') }}" 
                    data-order='[[ 1, "desc" ]]' data-page-length='25'>

                    <th>
                        {{ __('user::datatable.columns.name') }}
                    </th>

                    <th>
                        {{ __('user::datatable.columns.email') }}
                    </th>

                    <th>
                        {{ __('user::datatable.columns.creation_date') }}
                    </th>
                    
                </x-dashboard::data-table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
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

<script src="{{asset('/themes/metro8/assets/js/bundle/dt_media_query.js')}}"></script>

@endsection