<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>Dashboard | TOS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="admin-assets/images/favicon.ico">
    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/twitter-bootstrap-wizard/prettify.css') }}">

    <!-- select2 css -->
    <link href="{{ asset('admin-assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="{{ asset('admin-assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- plugin css -->
    <link href="{{ asset('admin-assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin-assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin-assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin-assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />


</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <x-utils.admin-header />

        <!-- ========== Left Sidebar Start ========== -->
        <x-utils.admin-sidebar />
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title">
                                    <h4>Dashboard</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="" class="btn btn-success">Add Widget</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="container-fluid">

                    <div class="page-content-wrapper">

                        {{ $slot }}



                    </div>


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Morvin.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="admin-assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="admin-assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch"
                        data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="admin-assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch"
                        data-appStyle="assets/css/app-rtl.min.css">
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>


            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>




    <script src="{{ asset('admin-assets/js/app.js') }}"></script>
    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin-assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('admin-assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('admin-assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script
        src="{{ asset('admin-assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
    </script>

    <script src="{{ asset('admin-assets/js/pages/dashboard.init.js') }}"></script>

    <!-- twitter-bootstrap-wizard js -->
    <script
        src="{{ asset('admin-assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.jsjquery.bootstrap.wizard.min.js') }}">
    </script>

    <script src="{{ asset('admin-assets/libs/twitter-bootstrap-wizard/prettify.js') }}"></script>

    <!-- select 2 plugin -->
    <script src="{{ asset('admin-assets/libs/select2/js/select2.min.js') }}"></script>

    <!-- dropzone plugin -->
    <script src="{{ asset('admin-assets/libs/dropzone/min/dropzone.min.js') }}"></script>




</body>

</html>
