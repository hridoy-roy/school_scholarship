@extends('admin.layouts.commonMaster' )

@section('layoutContent')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('admin._partials.notification')

        @include('admin.layouts.sections.menu.verticalMenu')

        <!-- Layout page -->
        <div class="layout-page">

            <!-- BEGIN: Navbar-->
            @include('admin.layouts.sections.navbar.navbar')
            <!-- END: Navbar-->


            <!-- Content wrapper -->
            <div class="content-wrapper">

                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    @yield('content')
                </div>
                <!-- / Content -->

                <!-- Footer -->
                @include('admin.layouts.sections.footer.footer')
                <!-- / Footer -->
                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->
@endsection