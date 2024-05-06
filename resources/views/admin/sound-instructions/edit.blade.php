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
                            Edit Sound Instruction</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Secondary button-->
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="{{ Route('sound-instruction.index') }}" class="btn btn-sm fw-bold btn-primary">Back</a>
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
                    <form class="form d-flex flex-column flex-lg-row"
                        action="{{ route('sound-instruction.update', $soundInstruction->id) }}" method="POST"
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
                                                <label class="required form-label">Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="name" class="form-control mb-2"
                                                    placeholder="Name" value="{{ $soundInstruction->name }}" />
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="my-5 col-6">
                                                <label class="required form-label">Icon</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="file" name="icon" class="form-control mb-2"
                                                    placeholder="Contact Number" value="{{ $soundInstruction->icon }}" />
                                                @error('icon')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="required form-label">Sound</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select class="form-select" data-control="select2"
                                                    data-placeholder="Select an option" name="sound" id="sound">
                                                    <option></option>
                                                    @foreach ($sounds as $sound)
                                                        <option
                                                            {{ $soundInstruction->sound_id == $sound->id ? 'selected' : '' }}
                                                            value="{{ $sound->id }}">{{ $sound->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('sound')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
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
