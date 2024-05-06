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
                            Edit Sound</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Secondary button-->
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="{{ Route('sound.index') }}" class="btn btn-sm fw-bold btn-primary">Back</a>
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
                    <form class="form d-flex flex-column flex-lg-row" action="{{ route('sound.update', $sound->id) }}"
                        enctype="multipart/form-data" method="POST">
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
                                                <input type="text" name="name" class="form-control" placeholder="Name"
                                                    value="{{ $sound->name }}" />

                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="my-5 col-6">
                                                <label class="required form-label">Image</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="file" name="image" class="form-control"
                                                    placeholder="Upload File Here" value="{{ $sound->image }}" />
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="my-5 col-6">
                                                <label class="required form-label">Mp3</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="file" name="mp3" class="form-control"
                                                    placeholder="Upload File Here" value="{{ $sound->mp3 }}" />
                                                @error('mp3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="row">
                                            <!--begin::Label-->
                                            <div class="my-5 col-6">
                                                <label class="required form-label">Time</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="number" name="time" class="form-control" placeholder="Time"
                                                    value="{{ $sound->time }}" />
                                                @error('time')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="my-5 col-6">
                                                <label class="required form-label">Duration</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="number" name="duration[]" class="form-control"
                                                            placeholder="Duration 1" value="{{ $sound->duration[0] ?? '' }}" />
                                                        @error('duration.0')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="number" name="duration[]" class="form-control"
                                                            placeholder="Duration 2" value="{{ $sound->duration[1] ?? '' }}" />
                                                        @error('duration.1')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="number" name="duration[]" class="form-control"
                                                            placeholder="Duration 3" value="{{ $sound->duration[2] ?? '' }}" />
                                                        @error('duration.2')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <!--begin::Label-->
                                            <div class="my-5 col-6">
                                                <label class="required form-label">Exercise</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select class="form-select" data-control="select2"
                                                    data-placeholder="Select an option" name="exercise" id="exercise">
                                                    <option></option>
                                                    @foreach ($exercises as $exercise)
                                                        <option
                                                            {{ $sound->exercise_id == $exercise->id ? 'selected' : '' }}
                                                            value="{{ $exercise->id }}">{{ $exercise->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('exercise')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="my-5 col-6 d-none" id="soundTypeContainer">
                                                <label class="required form-label">Sound Type</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select class="form-select" data-control="select2"
                                                    data-placeholder="Select an option" name="sound_type">
                                                    <option></option>
                                                    @foreach ($sound_types as $sound_type)
                                                        <option
                                                            {{ $sound->sound_type_id == $sound_type->id ? 'selected' : '' }}
                                                            value="{{ $sound_type->id }}">{{ $sound_type->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('sound_type')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="my-5">
                                                <label class="required form-label">Description</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <textarea class="form-control" name="description" data-kt-autosize="true">{{ $sound->description }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
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
@push('scripts')
    <script>
        $(document).ready(function() {
            var soundTypeContainer = $('#soundTypeContainer');

            function toggleSoundTypeContainer(selectedExerciseId) {
                if (selectedExerciseId == 2) {
                    soundTypeContainer.removeClass('d-none');
                } else {
                    soundTypeContainer.addClass('d-none');
                }
            }
            // Initial check on page load
            toggleSoundTypeContainer($('#exercise').val());

            // Bind change event to #exercise select box
            $('#exercise').change(function() {
                var selectedExerciseId = $(this).val();
                toggleSoundTypeContainer(selectedExerciseId);
            });
        });
    </script>
@endpush
