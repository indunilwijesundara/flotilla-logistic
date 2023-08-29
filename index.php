<?php include 'layouts/session.php';
?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Dashboard"]; ?> | Flotilla - Admin & Dashboard Template</title>

    <?php include 'layouts/head.php'; ?>
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />
    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = "Dashboard";
                $title = "Welcome !";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Sales</span>
                                        <h4 class="mb-3">
                                            $<span class="counter-value" data-target="354.5">0</span>k
                                        </h4>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+$20.9k</span>
                                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                                        </div>
                                    </div>

                                    <div class="flex-shrink-0 text-end dash-widget">
                                        <div id="mini-chart1" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Items</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="1256">0</span>
                                        </h4>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-danger text-danger">-29 Trades</span>
                                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 text-end dash-widget">
                                        <div id="mini-chart2" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Average Sales</span>
                                        <h4 class="mb-3">
                                            $<span class="counter-value" data-target="7.54">0</span>M
                                        </h4>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+ $2.8k</span>
                                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 text-end dash-widget">
                                        <div id="mini-chart3" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Order Delivery</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="18.34">0</span>%
                                        </h4>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+5.32%</span>
                                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 text-end dash-widget">
                                        <div id="mini-chart4" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row-->

                <div class="row">
                    <div class="col-xl-8">
                        <!-- card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center mb-4">
                                    <h5 class="card-title me-2">Market Overview</h5>
                                    <div class="ms-auto">
                                        <div>
                                            <button type="button" class="btn btn-soft-primary btn-sm">
                                                ALL
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                1M
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                6M
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm active">
                                                1Y
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-xl-8">
                                        <div>
                                            <div id="market-overview" data-colors='["#1c84ee", "#33c38e"]'
                                                class="apex-charts"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="p-4">
                                            <div class="mt-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm m-auto">
                                                        <span
                                                            class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                            1
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <span class="font-size-14">Mobile Phones</span>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span
                                                            class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+5.4%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm m-auto">
                                                        <span
                                                            class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                            2
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <span class="font-size-14">Smart Watch</span>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span
                                                            class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+6.8%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm m-auto">
                                                        <span
                                                            class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                            3
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <span class="font-size-14">Protable Acoustics</span>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span
                                                            class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-4.9%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm m-auto">
                                                        <span
                                                            class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                            4
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <span class="font-size-14">Smart Speakers</span>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span
                                                            class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+3.5%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm m-auto">
                                                        <span
                                                            class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                            5
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <span class="font-size-14">Camcorders</span>
                                                    </div>

                                                    <div class="flex-shrink-0">
                                                        <span
                                                            class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-0.3%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 pt-2">
                                                <a href="" class="btn btn-primary w-100">See All Balances <i
                                                        class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row-->

                    <div class="col-xl-4">
                        <!-- card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center mb-4">
                                    <h5 class="card-title me-2">Sales by Locations</h5>
                                    <div class="ms-auto">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted font-size-12">Sort By:</span> <span
                                                    class="fw-medium">World<i
                                                        class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#">USA</a>
                                                <a class="dropdown-item" href="#">Russia</a>
                                                <a class="dropdown-item" href="#">Australia</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="sales-by-locations" data-colors='["#33c38e"]' style="height: 253px"></div>

                                <div class="px-2 py-2">
                                    <p class="mb-1">USA <span class="float-end">75%</span></p>
                                    <div class="progress mt-2" style="height: 6px;">
                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                        </div>
                                    </div>

                                    <p class="mt-3 mb-1">Russia <span class="float-end">55%</span></p>
                                    <div class="progress mt-2" style="height: 6px;">
                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                            style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                                        </div>
                                    </div>

                                    <p class="mt-3 mb-1">Australia <span class="float-end">85%</span></p>
                                    <div class="progress mt-2" style="height: 6px;">
                                        <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                            style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row-->


            </div>
            <!-- end col -->


        </div>
        <!-- end col -->

        <!-- end card -->
    </div>
    <!-- end col -->
</div><!-- end row -->

</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

<?php include 'layouts/footer.php'; ?>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'layouts/right-sidebar.php'; ?>

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<!-- dashboard init -->
<script src="assets/js/pages/dashboard.init.js"></script>


</body>

</html>