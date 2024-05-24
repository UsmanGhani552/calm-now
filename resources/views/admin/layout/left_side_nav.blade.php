<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="app-sidebar-logo" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a class="m-auto">
            <img alt="Logo" src="{{ asset('dashboard_style/assets/media/logos/main-logo.png') }}"
                class="h-25px app-sidebar-logo-default" />
            <img alt="Logo" src="{{ asset('dashboard_style/assets/media/logos/small-logo.png') }}"
                class="h-20px app-sidebar-logo-minimize" />
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn--color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true" data-kt-toggle-state="" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-2 rotate-180">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="currentColor" />
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                {{-- <div class="menu-item
                {{ '/' == request()->path() ? 'show' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link
                    {{ '/' == request()->path() ? 'active' : '' }}"
                        href="{{Route('admin.dashboard')}}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/graphs/gra010.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-2x"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.0021 10.9128V3.01281C13.0021 2.41281 13.5021 1.91281 14.1021 2.01281C16.1021 2.21281 17.9021 3.11284 19.3021 4.61284C20.7021 6.01284 21.6021 7.91285 21.9021 9.81285C22.0021 10.4129 21.5021 10.9128 20.9021 10.9128H13.0021Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M11.0021 13.7128V4.91283C11.0021 4.31283 10.5021 3.81283 9.90208 3.91283C5.40208 4.51283 1.90209 8.41284 2.00209 13.1128C2.10209 18.0128 6.40208 22.0128 11.3021 21.9128C13.1021 21.8128 14.7021 21.3128 16.0021 20.4128C16.5021 20.1128 16.6021 19.3128 16.1021 18.9128L11.0021 13.7128Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M21.9021 14.0128C21.7021 15.6128 21.1021 17.1128 20.1021 18.4128C19.7021 18.9128 19.0021 18.9128 18.6021 18.5128L13.0021 12.9128H20.9021C21.5021 12.9128 22.0021 13.4128 21.9021 14.0128Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                    <!--end:Menu link-->
                </div> --}}
                <!--end:Menu item-->
                {{-- <div
                    class="menu-item
                {{ 'index/adjustments' == request()->path() ? 'show' : '' }}
                {{ 'create/adjustments' == request()->path() ? 'show' : '' }}
                {{ 'edit/adjustments' == request()->path() ? 'show' : '' }}
                    ">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ 'index/adjustments' == request()->path() ? 'active' : '' }}
                        {{ 'create/adjustments' == request()->path() ? 'active' : '' }}
                        {{ 'edit/adjustments' == request()->path() ? 'active' : '' }}"
                        href="{{route('customers')}}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/ecommerce/ecm007.svg-->
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/ecommerce/ecm004.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-2x"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M18 10V20C18 20.6 18.4 21 19 21C19.6 21 20 20.6 20 20V10H18Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M11 10V17H6V10H4V20C4 20.6 4.4 21 5 21H12C12.6 21 13 20.6 13 20V10H11Z"
                                        fill="currentColor" />
                                    <path opacity="0.3" d="M10 10C10 11.1 9.1 12 8 12C6.9 12 6 11.1 6 10H10Z"
                                        fill="currentColor" />
                                    <path opacity="0.3" d="M18 10C18 11.1 17.1 12 16 12C14.9 12 14 11.1 14 10H18Z"
                                        fill="currentColor" />
                                    <path opacity="0.3" d="M14 4H10V10H14V4Z" fill="currentColor" />
                                    <path opacity="0.3" d="M17 4H20L22 10H18L17 4Z" fill="currentColor" />
                                    <path opacity="0.3" d="M7 4H4L2 10H6L7 4Z" fill="currentColor" />
                                    <path
                                        d="M6 10C6 11.1 5.1 12 4 12C2.9 12 2 11.1 2 10H6ZM10 10C10 11.1 10.9 12 12 12C13.1 12 14 11.1 14 10H10ZM18 10C18 11.1 18.9 12 20 12C21.1 12 22 11.1 22 10H18ZM19 2H5C4.4 2 4 2.4 4 3V4H20V3C20 2.4 19.6 2 19 2ZM12 17C12 16.4 11.6 16 11 16H6C5.4 16 5 16.4 5 17C5 17.6 5.4 18 6 18H11C11.6 18 12 17.6 12 17Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--end::Svg Icon-->
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Customers</span>
                    </a>
                    <!--end:Menu link-->
                </div> --}}
                <!--end:Menu item-->
                <!--end:Menu item-->
                <div class="menu-item
                    {{-- {{ Route::is('users.index') ? 'show' : '' }}
                    {{ Route::is('users.create') ? 'show' : '' }}
                    {{ Route::is('users.edit') ? 'show' : '' }} --}}
                    ">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ Route::is('users.index') ? 'active' : '' }}
                    {{ Route::is('users.create') ? 'active' : '' }}
                    {{ Route::is('users.edit') ? 'active' : '' }}"
                        href="{{ route('users.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/ecommerce/ecm007.svg-->
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/ecommerce/ecm004.svg-->
                            <i class="fa-solid fa-user"></i>
                            <!--end::Svg Icon-->
                            <!--end::Svg Icon-->
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Users</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--end:Menu item-->
                <div class="menu-item
                    {{-- {{ Route::is('exercise.index') ? 'show' : '' }}
                    {{ Route::is('exercise.create') ? 'show' : '' }}
                    {{ Route::is('exercise.edit') ? 'show' : '' }} --}}
                    ">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ Route::is('exercise.index') ? 'active' : '' }}
                    {{ Route::is('exercise.create') ? 'active' : '' }}
                    {{ Route::is('exercise.edit') ? 'active' : '' }}"
                        href="{{ route('exercise.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/ecommerce/ecm007.svg-->
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/ecommerce/ecm004.svg-->
                            <i class="fa-solid fa-person-walking"></i>
                            <!--end::Svg Icon-->
                            <!--end::Svg Icon-->
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Exercises</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--end:Menu item-->
                <div class="menu-item
                    {{-- {{ Route::is('sound.index') ? 'show' : '' }}
                    {{ Route::is('sound.create') ? 'show' : '' }}
                    {{ Route::is('sound.edit') ? 'show' : '' }} --}}
                    ">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ Route::is('sound.index') ? 'active' : '' }}
                    {{ Route::is('sound.create') ? 'active' : '' }}
                    {{ Route::is('sound.edit') ? 'active' : '' }}"
                        href="{{ route('sound.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/ecommerce/ecm007.svg-->
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/ecommerce/ecm004.svg-->
                            <i class="fa-solid fa-play"></i>
                            <!--end::Svg Icon-->
                            <!--end::Svg Icon-->
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Sounds</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--end:Menu item-->
                <div class="menu-item
                    {{-- {{ Route::is('sound-instruction.index') ? 'show' : '' }}
                    {{ Route::is('sound-instruction.create') ? 'show' : '' }}
                    {{ Route::is('sound-instruction.edit') ? 'show' : '' }} --}}
                    ">
                    <!--begin:Menu link-->
                    <a class="menu-link  {{ Route::is('sound-instruction.index') ? 'active' : '' }}
                    {{ Route::is('sound-instruction.create') ? 'active' : '' }}
                    {{ Route::is('sound-instruction.edit') ? 'active' : '' }}"
                        href="{{ route('sound-instruction.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/ecommerce/ecm007.svg-->
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/ecommerce/ecm004.svg-->
                            <i class="fa-solid fa-person-chalkboard"></i>
                            <!--end::Svg Icon-->
                            <!--end::Svg Icon-->
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Sound Instruction</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
    <!--begin::Footer-->
    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">

    </div>
    <!--end::Footer-->
</div>
