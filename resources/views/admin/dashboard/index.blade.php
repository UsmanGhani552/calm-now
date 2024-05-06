@extends('admin.layout.master')
<!--begin::Header-->
@section('top_nav')
    @include('admin.layout.top_nav')
@endsection
<!--end::Header-->
<!--begin::Sidebar-->
@section('left_side_nav')
    @include('admin.layout.left_side_nav')
@endsection
<!--end::Sidebar-->
<!--begin::Main-->
@section('main_content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <!--begin::Page title-->

                    <!--end::Page title-->

                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-8">
                        <div class="col-md-3">
                            <!--begin::Statistics Widget 5-->
                            <a href="#" class="card bg-info hoverable card-xl-stretch mb-xl-8">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                    <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="8" y="9" width="3" height="10" rx="1.5"
                                                fill="currentColor" />
                                            <rect opacity="0.5" x="13" y="5" width="3" height="14"
                                                rx="1.5" fill="currentColor" />
                                            <rect x="18" y="11" width="3" height="8" rx="1.5"
                                                fill="currentColor" />
                                            <rect x="3" y="13" width="3" height="6" rx="1.5"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <div class="d-grid text-white justify-content-end ">
                                        <h1 class="text-white fw-bold mb-2 mt-5 text-end">500M$</h1>
                                        <h1 class="fw-semibold text-end fs-2 text-white">Sales</h1>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </a>
                            <!--end::Statistics Widget 5-->
                        </div>
                        <div class="col-xl-3">
                            <!--begin::Statistics Widget 5-->
                            <a href="#"
                                class="card bg-success hoverable card-xl-stretch mb-xl-8">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                                    <span class="text white svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                fill="currentColor" />
                                            <path
                                                d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                fill="currentColor" />
                                            <path
                                                d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <div class="d-grid justify-content-end">
                                        <h1 class="text-white fw-bold fs-2 mb-2 mt-5 text-end">+3000</h1>
                                        <h1 class="text-white fw-semibold text-end fs-2">Purchase
                                        </h1>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </a>
                            <!--end::Statistics Widget 5-->
                        </div>
                        <div class="col-xl-3">
                            <!--begin::Statistics Widget 5-->
                            <a href="#"
                                class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                    <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                fill="currentColor" />
                                            <path
                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <div class="d-grid justify-content-end">
                                        <h1 class="text-white fw-bold fs-2 mb-2 mt-5 text-end">$50,000</h1>
                                        <h1 class="fw-semibold text-white text-end fs-2">Sales Return
                                        </h1>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </a>
                            <!--end::Statistics Widget 5-->
                        </div>
                        <div class="col-xl-3">
                            <!--begin::Statistics Widget 5-->
                            <a href="#"
                                class="card bg-warning hoverable card-xl-stretch mb-5 mb-xl-8">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
                                    <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128Z"
                                                fill="currentColor" />
                                            <path
                                                d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <div class="d-grid justify-content-end">
                                        <h1 class="text-white fw-bold fs-2 mb-2 mt-5 text-end">$50,000</h1>
                                        <h1 class="fw-semibold text-white text-end fs-2">
                                            Purchase Return</h1>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </a>
                            <!--end::Statistics Widget 5-->
                        </div>
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    {{-- <div class="row g-5 g-xl-8">
                        <div class="col-xl-3">
                            <!--begin::Statistics Widget 5-->
                            <a href="#"
                                class="card bg-success hoverable card-xl-stretch mb-xl-8">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                    <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="8" y="9" width="3" height="10"
                                                rx="1.5" fill="currentColor" />
                                            <rect opacity="0.5" x="13" y="5" width="3"
                                                height="14" rx="1.5" fill="currentColor" />
                                            <rect x="18" y="11" width="3" height="8"
                                                rx="1.5" fill="currentColor" />
                                            <rect x="3" y="13" width="3" height="6"
                                                rx="1.5" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <div class="d-grid justify-content-end">
                                        <h1 class="text-white fw-bold fs-2 mb-2 mt-5 text-end">$50,000</h1>
                                        <h1 class="fw-semibold fs-2 text-end text-white">
                                            {{ __('messages.today_total_sales') }}</h1>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </a>
                            <!--end::Statistics Widget 5-->
                        </div>
                        <div class="col-xl-3">
                            <!--begin::Statistics Widget 5-->
                            <a href="#"
                                class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                                    <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                fill="currentColor" />
                                            <path
                                                d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                fill="currentColor" />
                                            <path
                                                d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <div class="d-grid justify-content-end">
                                        <h1 class="text-white fw-bold fs-2 mb-2 mt-5 text-end">$50,000</h1>
                                        <h1 class="fw-semibold fs-2 text-end text-white">
                                            {{ __('messages.today_total_received_sales') }}</h1>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </a>
                            <!--end::Statistics Widget 5-->
                        </div>
                        <div class="col-xl-3">
                            <!--begin::Statistics Widget 5-->
                            <a href="#"
                                class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                    <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                fill="currentColor" />
                                            <path
                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <div class="d-grid justify-content-end">
                                        <h1 class="text-white fw-bold fs-2 mb-2 mt-5 text-end">$50,000</h1>
                                        <h1 class="fw-semibold text-white fs-2 text-end">
                                            {{ __('messages.today_total_purchases') }}</h1>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </a>
                            <!--end::Statistics Widget 5-->
                        </div>
                        <div class="col-xl-3">
                            <!--begin::Statistics Widget 5-->
                            <a class="card bg-info
											 hoverable card-xl-stretch mb-5 mb-xl-8">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
                                    <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128Z"
                                                fill="currentColor" />
                                            <path
                                                d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <div class="d-grid justify-content-end">
                                        <h1 class="text-white fw-bold fs-2 mb-2 mt-5 text-end">$50,000</h1>
                                        <h1 class="fw-semibold text-white fs-2 text-end">
                                            {{ __('messages.today_total_expense') }}</h1>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </a>
                            <!--end::Statistics Widget 5-->
                        </div>
                    </div> --}}
                    <!--end::Row-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                                <!--begin::Page title-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--end::Toolbar-->

                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div class="row">
                                <div class="col-md-8">
                                    <!--begin::Products-->
                                    <div class="card card-flush">
                                        <!--begin::Card header-->
                                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                            <!--begin::Card title-->
                                            <h3 class="card-title align-items-start flex-column">
                                                <span
                                                    class="card-label fw-bold fs-3 mb-1">This week sales and purchase</span>
                                            </h3>
                                            <div class="card-title">
                                                <!--begin::lSearch-->

                                                <!--end::Search-->
                                            </div>
                                            <!--end::Card title-->

                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Table-->
                                            <div class="row g-5 g-xl-8">

                                                <div class="col-xl-8">
                                                    <!--begin::Charts Widget 5-->
                                                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                                                        <!--begin::Header-->

                                                        <div class="card-header border-0 pt-5">

                                                            <!--begin::Toolbar-->
                                                            <div class="card-toolbar" data-kt-buttons="true">
                                                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1"
                                                                    id="kt_charts_widget_6_sales_btn">Sales</a>
                                                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1"
                                                                    id="kt_charts_widget_6_expenses_btn">Expenses</a>
                                                            </div>
                                                            <!--end::Toolbar-->
                                                        </div>
                                                        <!--end::Header-->
                                                        <!--begin::Body-->
                                                        <div class="card-body">
                                                            <!--begin::Chart-->
                                                            <div id="kt_docs_google_chart_column"
                                                                style="height: 350px; width:800px"></div>
                                                            <!--end::Chart-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Charts Widget 5-->
                                                </div>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-flush">
                                        <!--begin::Card header-->
                                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                            <!--begin::Card title-->
                                            <h3 class="card-title align-items-start flex-column">
                                                <span
                                                    class="card-label fw-bold fs-3 mb-1">Top Selling Product (2023)</span>
                                            </h3>
                                            <div class="card-title">
                                                <!--begin::lSearch-->

                                                <!--end::Search-->
                                            </div>
                                            <!--end::Card title-->

                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Table-->
                                            <div class="row g-5 g-xl-4">

                                                <div class="col-xl-4">
                                                    <!--begin::Charts Widget 5-->
                                                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                                                        <!--begin::Header-->

                                                        <div class="card-header border-0 pt-5">

                                                            <!--begin::Toolbar-->
                                                            <div class="card-toolbar" data-kt-buttons="true">
                                                                <canvas id="kt_chartjs_3"
                                                                    class="mh-400px mw-400px"></canvas>


                                                            </div>
                                                            <!--end::Toolbar-->
                                                        </div>
                                                        <!--end::Header-->
                                                    </div>
                                                    <!--end::Charts Widget 5-->
                                                </div>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                </div>
                                <!--end::Products-->
                            </div>
                            <!--end::Content container-->
                        </div>

                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card card-flush">
                                        <!--begin::Card header-->
                                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <!--begin::Search-->
                                                <div class="d-flex align-items-center position-relative my-1">
                                                    <span class="fs-3">Top Selling Products</span>
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--end::Card title-->

                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 gy-5"
                                                id="kt_ecommerce_sales_table">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">


                                                        <th class="">Product</th>
                                                        <th class="min-w-30px">Quantity</th>
                                                        <th class=" min-w-20px">Grand Total</th>

                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="fw-semibold text-gray-600">
                                                    <!--begin::Table row-->
                                                    <tr>
                                                        <!--begin::Checkbox-->

                                                        <!--end::Checkbox-->
                                                        <!--begin::Order ID=-->
                                                        <td>
                                                            <span class="fs-5 ">oranges</span>
                                                        </td>
                                                        <!--end::Order ID=-->
                                                        <!--begin::Customer=-->

                                                        <!--end::Customer=-->
                                                        <!--begin::Status=-->
                                                        <td class=" pe-0" data-order="Completed">
                                                            <!--begin::Badges-->
                                                            <span class="fs-6 badge badge-light-success">360PE</span>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <!--end::Status=-->
                                                        <!--begin::Total=-->
                                                        <td class=" pe-0">
                                                            <span class="fs-5">$4106.97</span>
                                                        </td>
                                                        <!--end::Total=-->


                                                    </tr>
                                                    <!--end::Table row-->
                                                    <!--begin::Table row-->
                                                    <tr>
                                                        <!--begin::Checkbox-->

                                                        <!--end::Checkbox-->
                                                        <!--begin::Order ID=-->
                                                        <td>
                                                            <span class="fs-5 ">T-shirt</span>
                                                        </td>
                                                        <!--end::Order ID=-->
                                                        <!--begin::Customer=-->

                                                        <!--end::Customer=-->
                                                        <!--begin::Status=-->
                                                        <td class=" pe-0" data-order="Completed">
                                                            <!--begin::Badges-->
                                                            <span class="fs-6 badge badge-light-success">360PE</span>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <!--end::Status=-->
                                                        <!--begin::Total=-->
                                                        <td class=" pe-0">
                                                            <span class="fs-5">$4106.97</span>
                                                        </td>
                                                        <!--end::Total=-->


                                                    </tr>

                                                    <!--begin::Table row-->
                                                    <tr>
                                                        <!--begin::Checkbox-->

                                                        <!--end::Checkbox-->
                                                        <!--begin::Order ID=-->
                                                        <td>
                                                            <span class="fs-5 ">Mangoes</span>
                                                        </td>
                                                        <!--end::Order ID=-->
                                                        <!--begin::Customer=-->

                                                        <!--end::Customer=-->
                                                        <!--begin::Status=-->
                                                        <td class=" pe-0" data-order="Completed">
                                                            <!--begin::Badges-->
                                                            <span class="fs-6 badge badge-light-success">360PE</span>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <!--end::Status=-->
                                                        <!--begin::Total=-->
                                                        <td class=" pe-0">
                                                            <span class="fs-5">$4106.97</span>
                                                        </td>
                                                        <!--end::Total=-->


                                                    </tr>
                                                    <!--end::Table row-->
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-flush">
                                        <!--begin::Card header-->
                                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                            <!--begin::Card title-->
                                            <h3 class="card-title align-items-start flex-column">
                                                <span
                                                    class="card-label fw-bold fs-3 mb-1">Top Selling Products (2023)</span>
                                            </h3>
                                            <div class="card-title">
                                                <!--begin::lSearch-->

                                                <!--end::Search-->
                                            </div>
                                            <!--end::Card title-->

                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Table-->
                                            <div class="row g-5 g-xl-4">

                                                <div class="col-xl-4">
                                                    <!--begin::Charts Widget 5-->
                                                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                                                        <!--begin::Header-->

                                                        <div class="card-header border-0 pt-5">

                                                            <!--begin::Toolbar-->
                                                            <div class="card-toolbar" data-kt-buttons="true">
                                                                <canvas id="kt_chartjs_doughnout"
                                                                    class="mh-400px mw-400px"></canvas>


                                                            </div>
                                                            <!--end::Toolbar-->
                                                        </div>
                                                        <!--end::Header-->
                                                    </div>
                                                    <!--end::Charts Widget 5-->
                                                </div>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                </div>
                                <!--begin::Products-->

                                <!--end::Products-->

                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
                        </div>
                    </div>
                    <!--begin::Row-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->

                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <span class="fs-3">Recent Sales</span>
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--end::Card title-->

                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5"
                                    id="kt_ecommerce_sales_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

                                            <th class="">Reference</th>
                                            <th class="min-w-30px">Customer</th>
                                            <th class="">Status</th>
                                            <th class="">Grand Total</th>
                                            <th class="min-w-30px">Paid</th>
                                            <th class="min-w-30px">Due</th>
                                            <th class=" min-w-20px">Payment Status</th>

                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-semibold text-gray-600">
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Checkbox-->

                                            <!--end::Checkbox-->
                                            <!--begin::Order ID=-->
                                            <td>
                                                <span class="fs-6 ">SA_1112737</span>
                                            </td>
                                            <!--end::Order ID=-->
                                            <!--begin::Customer=-->
                                            <td>
                                                <span class="fs-6 ">test</span>
                                            </td>

                                            <!--end::Customer=-->
                                            <!--begin::Status=-->
                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6 badge badge-light-success">Received</span>
                                                <!--end::Badges-->
                                            </td>
                                            <!--end::Status=-->
                                            <!--begin::Total=-->
                                            <td class=" pe-0">
                                                <span class="fs-6">$416.97</span>
                                            </td>
                                            <td>
                                                <span class="fs-6">$416.97</span>
                                            </td>
                                            <td>
                                                <span class="fs-6">$0.00</span>
                                            </td>
                                            <!--end::Total=-->
                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6 badge badge-light-success">Paid</span>
                                                <!--end::Badges-->
                                            </td>

                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Checkbox-->

                                            <!--end::Checkbox-->
                                            <!--begin::Order ID=-->
                                            <td>
                                                <span class="fs-6 ">SA_1112737</span>
                                            </td>
                                            <!--end::Order ID=-->
                                            <!--begin::Customer=-->
                                            <td>
                                                <span class="fs-6 ">test</span>
                                            </td>

                                            <!--end::Customer=-->
                                            <!--begin::Status=-->
                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6 badge badge-light-success">Received</span>
                                                <!--end::Badges-->
                                            </td>
                                            <!--end::Status=-->
                                            <!--begin::Total=-->
                                            <td class=" pe-0">
                                                <span class="fs-6">$416.97</span>
                                            </td>
                                            <td>
                                                <span class="fs-6">$416.97</span>
                                            </td>
                                            <td>
                                                <span class="fs-6">$0.00</span>
                                            </td>
                                            <!--end::Total=-->
                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6 badge badge-light-success">Paid</span>
                                                <!--end::Badges-->
                                            </td>

                                        </tr>

                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Checkbox-->

                                            <!--end::Checkbox-->
                                            <!--begin::Order ID=-->
                                            <td>
                                                <span class="fs-6 ">SA_1112737</span>
                                            </td>
                                            <!--end::Order ID=-->
                                            <!--begin::Customer=-->
                                            <td>
                                                <span class="fs-6 ">test</span>
                                            </td>

                                            <!--end::Customer=-->
                                            <!--begin::Status=-->
                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6 badge badge-light-success">Received</span>
                                                <!--end::Badges-->
                                            </td>
                                            <!--end::Status=-->
                                            <!--begin::Total=-->
                                            <td class=" pe-0">
                                                <span class="fs-6">$416.97</span>
                                            </td>
                                            <td>
                                                <span class="fs-6">$416.97</span>
                                            </td>
                                            <td>
                                                <span class="fs-6">$0.00</span>
                                            </td>
                                            <!--end::Total=-->
                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6 badge badge-light-success">Paid</span>
                                                <!--end::Badges-->
                                            </td>

                                        </tr>
                                        <!--end::Table row-->
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Products-->

                        <!--end::Content container-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->

                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <span class="fs-3">Stock Alert</span>
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--end::Card title-->

                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5"
                                    id="kt_ecommerce_sales_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

                                            <th class="">Code</th>
                                            <th class="min-w-30px">Product</th>
                                            <th class="">Warehouse</th>
                                            <th class="">Quantity</th>
                                            <th class="min-w-30px">Alert Quantity</th>

                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-semibold text-gray-600">
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Checkbox-->

                                            <!--end::Checkbox-->
                                            <!--begin::Order ID=-->
                                            <td>
                                                <span class="fs-6 ">SA_1112737</span>
                                            </td>
                                            <!--end::Order ID=-->
                                            <!--begin::Customer=-->
                                            <td>
                                                <span class="fs-6 ">test</span>
                                            </td>

                                            <!--end::Customer=-->
                                            <!--begin::Status=-->
                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6">Received</span>
                                                <!--end::Badges-->
                                            </td>
                                            <!--end::Status=-->
                                            <!--begin::Total=-->


                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6 text-primary badge badge-light-success">3</span>
                                                <span class="fs-6 badge badge-light-success">Piece</span>
                                                <!--end::Badges-->
                                            </td>
                                            <!--end::Total=-->
                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6 badge badge-light-danger">5</span>
                                                <span class="fs-6 badge badge-light-success">Piece</span>
                                                <!--end::Badges-->
                                            </td>

                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Checkbox-->

                                            <!--end::Checkbox-->
                                            <!--begin::Order ID=-->
                                            <td>
                                                <span class="fs-6 ">SA_1112737</span>
                                            </td>
                                            <!--end::Order ID=-->
                                            <!--begin::Customer=-->
                                            <td>
                                                <span class="fs-6 ">test</span>
                                            </td>

                                            <!--end::Customer=-->
                                            <!--begin::Status=-->
                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6">Received</span>
                                                <!--end::Badges-->
                                            </td>
                                            <!--end::Status=-->
                                            <!--begin::Total=-->


                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6 text-primary badge badge-light-success">3</span>
                                                <span class="fs-6 badge badge-light-success">Piece</span>
                                                <!--end::Badges-->
                                            </td>
                                            <!--end::Total=-->
                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6 badge badge-light-danger">5</span>
                                                <span class="fs-6 badge badge-light-success">Piece</span>
                                                <!--end::Badges-->
                                            </td>

                                        </tr>

                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Checkbox-->

                                            <!--end::Checkbox-->
                                            <!--begin::Order ID=-->
                                            <td>
                                                <span class="fs-6 ">SA_1112737</span>
                                            </td>
                                            <!--end::Order ID=-->
                                            <!--begin::Customer=-->
                                            <td>
                                                <span class="fs-6 ">test</span>
                                            </td>

                                            <!--end::Customer=-->
                                            <!--begin::Status=-->
                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6">Received</span>
                                                <!--end::Badges-->
                                            </td>
                                            <!--end::Status=-->
                                            <!--begin::Total=-->


                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6 text-primary badge badge-light-success">3</span>
                                                <span class="fs-6 badge badge-light-success">Piece</span>
                                                <!--end::Badges-->
                                            </td>
                                            <!--end::Total=-->
                                            <td class=" pe-0" data-order="Completed">
                                                <!--begin::Badges-->
                                                <span class="fs-6 badge badge-light-danger">5</span>
                                                <span class="fs-6 badge badge-light-success">Piece</span>
                                                <!--end::Badges-->
                                            </td>

                                        </tr>
                                        <!--end::Table row-->
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Products-->

                        <!--end::Content container-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->

                    <!--end::Row-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
    <!--begin::Footer-->
    @include('admin.layout.footer')
    <!--end::Footer-->
@endsection
<!--end:::Main-->
@push('scripts')
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        // GOOGLE CHARTS INIT
        google.load('visualization', '1', {
            packages: ['corechart', 'bar', 'line']
        });

        google.setOnLoadCallback(function() {
            // COLUMN CHART
            var data = new google.visualization.DataTable();
            data.addColumn('timeofday', 'Time of Day');
            data.addColumn('number', 'Motivation Level');
            data.addColumn('number', 'Energy Level');

            data.addRows([
                [{
                    v: [8, 0, 0],
                    f: '8 am'
                }, 1, .25],
                [{
                    v: [9, 0, 0],
                    f: '9 am'
                }, 2, .5],
                [{
                    v: [10, 0, 0],
                    f: '10 am'
                }, 3, 1],
                [{
                    v: [11, 0, 0],
                    f: '11 am'
                }, 4, 2.25],
                [{
                    v: [12, 0, 0],
                    f: '12 pm'
                }, 5, 2.25],
                [{
                    v: [13, 0, 0],
                    f: '1 pm'
                }, 6, 3],
                [{
                    v: [14, 0, 0],
                    f: '2 pm'
                }, 7, 4],
                [{
                    v: [15, 0, 0],
                    f: '3 pm'
                }, 8, 5.25],
                [{
                    v: [16, 0, 0],
                    f: '4 pm'
                }, 9, 7.5],
                [{
                    v: [17, 0, 0],
                    f: '5 pm'
                }, 10, 10],
            ]);

            var options = {
                title: 'Motivation and Energy Level Throughout the Day',
                focusTarget: 'category',
                hAxis: {
                    title: 'Time of Day',
                    format: 'h:mm a',
                    viewWindow: {
                        min: [7, 30, 0],
                        max: [17, 30, 0]
                    },
                },
                vAxis: {
                    title: 'Rating (scale of 1-10)'
                },
                colors: ['#6e4ff5', '#fe3995']
            };

            var chart = new google.visualization.ColumnChart(document.getElementById(
                'kt_docs_google_chart_column'));
            chart.draw(data, options);
        });
    </script>
    <script>
        var ctx = document.getElementById('kt_chartjs_3');

        // Define colors
        var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
        var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
        var successColor = KTUtil.getCssVariableValue('--kt-success');
        var warningColor = KTUtil.getCssVariableValue('--kt-warning');
        var infoColor = KTUtil.getCssVariableValue('--kt-info');

        // Define fonts
        var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

        // Chart labels
        const labels = ['January', 'February', 'March', 'April', 'May'];

        // Chart data
        const data = {
            labels: [
                'Red',
                'Blue',
                'Yellow',
                'green',
                'purple',
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100, 40, 80],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(60, 179, 113)',
                    'rgb(143, 0, 246)',

                ],
                hoverOffset: 4
            }]
        };

        // Chart config
        const config = {
            type: 'pie',
            data: data,
            options: {
                plugins: {
                    title: {
                        display: false,
                    }
                },
                responsive: true,
            },
            defaults: {
                global: {
                    defaultFont: fontFamily
                }
            }
        };

        // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
        var myChart = new Chart(ctx, config);
    </script>
    <script>
        var ctx = document.getElementById('kt_chartjs_doughnout');

        // Define colors
        var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
        var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
        var successColor = KTUtil.getCssVariableValue('--kt-success');
        var warningColor = KTUtil.getCssVariableValue('--kt-warning');
        var infoColor = KTUtil.getCssVariableValue('--kt-info');

        // Define fonts
        var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

        // Chart labels
        const labels = ['January', 'February', 'March', 'April', 'May'];

        // Chart data
        const data = {
            labels: [
                'Red',
                'Blue',
                'Yellow'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };

        // Chart config
        const config = {
            type: 'doughnut',
            data: data,
            options: {
                plugins: {
                    title: {
                        display: false,
                    }
                },
                responsive: true,
            },
            defaults: {
                global: {
                    defaultFont: fontFamily
                }
            }
        };

        // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
        var myChart = new Chart(ctx, config);
    </script>
@endpush
