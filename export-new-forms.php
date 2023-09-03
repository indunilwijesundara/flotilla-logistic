<?php
require_once "layouts/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Establish database connection
    // Include your database connection file

    // Get BL No and Shipper's name from POST data
    $blNo = $_POST['blNo'];
    $shipperName = $_POST['shipperName'];
    $consigneeName = $_POST['consigneeName'];

    // Define the location
    $location = "http://localhost/flotilla%20logistic/Admin/flotilla%20logistic/assets/$blNo.html";

    // Prepare and execute SQL query to insert data
    $query = "INSERT INTO invoice_commercial(bl_no,shippername,consignee_name,location) VALUES (?, ?, ?,?)";
    $stmt = $link->prepare($query);
    $stmt->bind_param("ssss", $blNo, $shipperName,$consigneeName,$location);
    
    if ($stmt->execute()) {
        echo '<script>alert("Invoice Saved Successfully")</script>';
        echo "Data saved successfully.";
        header("Location: export-list-forms.php");

    } else {
        echo '<script>alert("Invoice Save Error")</script>';
        echo "Error saving data.";
    }

    // Close the database connection
    $stmt->close();
    $link->close();
}
?>

<?php include 'layouts/session.php';
?>
<?php include 'layouts/head-main.php'; ?>
<html>

<head>

    <title><?php echo $language["Dashboard"]; ?> | Flotilla - Admin & Dashboard </title>

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
                $maintitle = "Export New Forms";
                $title = "";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

                <div class="container">
                    <div class="row">
                        <!-- First set of elements -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-h-100" onclick="openModal('commercialInvoiceModal1')"
                                style="cursor: pointer; transition: box-shadow 0.3s ease;">
                                <div class="card-body"
                                    style="transition: box-shadow 0.3s ease; border: 3px solid #1c84ee; border-radius: 10px;"
                                    onmouseover="this.style.boxShadow='0 8px 16px 0 rgba(0,0,0,0.2)';"
                                    onmouseout="this.style.boxShadow='0 4px 8px 0 rgba(0,0,0,0.2)';">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="" style="font-weight:600;text-align:center">BILL OF
                                                LADING</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Second set of elements -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-h-100" onclick="navigateToModal()"
                                style="cursor: pointer; transition: box-shadow 0.3s ease;">
                                <div class="card-body"
                                    style="transition: box-shadow 0.3s ease; border: 3px solid #1c84ee; border-radius: 10px;"
                                    onmouseover="this.style.boxShadow='0 8px 16px 0 rgba(0,0,0,0.2)';"
                                    onmouseout="this.style.boxShadow='0 4px 8px 0 rgba(0,0,0,0.2)';">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="" style="font-weight:600;text-align:center">Second OF
                                                LADING</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>


                </div>
                <!-- Modals -->
                <div class="modal fade" id="commercialInvoiceModal1">
                    <?php include 'forms-models/commercialInvoiceModal.php'; ?>

                </div>

                <script>
                function openModal(modalId) {
                    // Hide all modals
                    $('.modal').modal('hide');

                    // Show the selected modal
                    $('#' + modalId).modal('show');
                }

                function navigateToModal() {
                    // Change the page location to commercialInvoiceModal.php
                    window.location.href = 'secondInvoiceModal.php';
                }
                </script>
                </script>





            </div>
            <!-- end row-->


        </div>
        <!-- end row-->


    </div>
    <!-- end col -->





    <?php include 'layouts/footer.php'; ?>


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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.js"
    integrity="sha512-Fd3EQng6gZYBGzHbKd52pV76dXZZravPY7lxfg01nPx5mdekqS8kX4o1NfTtWiHqQyKhEGaReSf4BrtfKc+D5w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="printThis.js"></script>
<script src="custom.js"></script>
<script src="printThis.js"></script>

</body>

</html>