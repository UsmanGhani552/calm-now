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
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Create User</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Secondary button-->
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="{{ Route('users.index') }}" class="btn btn-sm fw-bold btn-primary">Back</a>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <form class="form d-flex flex-column flex-lg-row" action="{{ route('users.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @if (Session::has('error'))
                            <p class="alert alert-danger">{{ Session::get('error') }}</p>
                        @endif
                        <!--begin::Main column-->
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->

                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <div class="row">
                                            <!--begin::Label-->
                                            <div class="my-5 col-6">
                                                <label class="required form-label">First Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="first_name" class="form-control mb-2"
                                                    placeholder="First Name" value="" />
                                                @error('first_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="my-5 col-6">
                                                <label class="required form-label">Last Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="last_name" class="form-control mb-2"
                                                    placeholder="Last Name" value="" />
                                                @error('last_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-5 col-6">
                                                <label class="required form-label">Email</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="email" name="email" class="form-control mb-2"
                                                    placeholder="Email" value="" />
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>


                                        <div class="mb-5 col-6">
                                            <label class="required form-label">Phone Number</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" name="phone" class="form-control mb-2"
                                                placeholder="Contact Number" value="" />
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-5 col-6">
                                            <label class="required form-label">Image</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="file" name="image" class="form-control mb-2"
                                                placeholder="Contact Number" value="" />
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-5 col-6">
                                            <label class="required form-label">Password</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="password" name="password" class="form-control mb-2"
                                                placeholder="Password" value="" />
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-5 col-6">
                                        <label class="required form-label">Confirm Password</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="password" name="password_confirmation" class="form-control mb-2"
                                            placeholder="Password" value="" />
                                    </div>


                                    <!--begin::Input-->
                                    <div class="mt-5 d-flex justify-content-end">
                                        <!--begin::Button-->

                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" id="kt_ecommerce_add_category_submit"
                                            class="btn btn-primary">
                                            <span class="indicator-label">Save</span>
                                            <span class="indicator-progress">Please Wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->

                </div>
                <!--end::Main column-->
                </form>
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    @include('admin.layout.footer')
    <!--end::Footer-->
    </div>
@endsection
<!--end:::Main-->
