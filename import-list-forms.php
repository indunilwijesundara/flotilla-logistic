<?php
// Include necessary files and database connection
require_once "layouts/config.php";
include 'layouts/session.php';
include 'layouts/head-main.php';

// Fetch data from the database (example)
$query = "SELECT * FROM invoice_commercial";
$result = mysqli_query($link, $query);

if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];

    // Prepare DELETE query and execute it
    $deleteQuery = "DELETE FROM invoice_commercial WHERE bl_no = '$deleteId'";
    if (mysqli_query($link, $deleteQuery)) {
        // Redirect back to the main page after successful deletion
        header("Location: export-list-forms.php");
        exit();
    } else {
        // Display an error message if deletion fails
        echo "Error deleting record: " . mysqli_error($link);
    }
}


?>

<head>
    <title><?php echo $language["Dashboard"]; ?> | Flotilla - Admin & Dashboard </title>
    <?php include 'layouts/head.php'; ?>
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />
    <?php include 'layouts/head-style.php'; ?>
</head>

<?php include 'layouts/body.php'; ?>

<div id="layout-wrapper">
    <?php include 'layouts/menu.php'; ?>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->

                <?php
                $maintitle = "Dashboard";
                $title = "";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->
                <div class="col-lg-12">
                    <div class="card card-outline card-green">
                        <div class="card-header">

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="text" id="searchInput" class="form-control"
                                        placeholder="Search BL Number">
                                </div>
                                <div class="col-md-6 d-flex justify-content-md-end align-items-center">
                                    <a class="btn btn-sm btn-default btn-flat border-primaryy"
                                        style="border-color: #2ecc71;" href="./export-new-forms.php"><i
                                            class="fa fa-plus"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <style>
                            table {
                                font-family: Arial, sans-serif;
                                border: 4px solid blue;
                                border-collapse: collapse;
                                width: 100%;
                            }

                            th {
                                border: 1px solid blue;
                                text-align: left;
                                padding: 8px;
                                font-size: 13px;
                                font-weight: 600;
                            }

                            td {
                                border: 1px solid blue;
                                text-align: left;
                                padding: 8px;
                                font-size: 12px
                            }
                            </style>
                            <table class="table tabe-hover table-bordered" id="list">
                                <!-- <colgroup>
					<col width="5%">
					<col width="15%">
					<col width="25%">
					<col width="25%">
					<col width="15%">
				</colgroup> -->
                                <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>BL Number</th>
                                        <th>Shipper Name</th>
                                        <th>Consignee Name</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $rowNumber = 1; 
                       while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $rowNumber . '</td>';
    echo '<th scope="row">' . $row['bl_no'] . '</th>';
    echo '<td>' . $row['shippername'] . '</td>';
    echo '<td>' . $row['consignee_name'] . '</td>';
    echo '<td>
            <a href="#" class="btn btn-success btn-sm btn-view"
                                                    data-id="' . htmlspecialchars($row['bl_no']) . '">
                                                    <i class="fas fa-eye"></i> View
                                                </a>
    <a href="#" class="btn btn-sm btn-print" data-id="' . htmlspecialchars($row['bl_no']) . '"
                                style="background-color:#3498db;color:white">
                                <i class="fas fa-print"></i> Print
                            </a>
            <a href="?delete_id=' . $row['bl_no'] . '" class="btn btn-danger btn-sm">
            <i class="fas fa-trash" ></i> Delete
            </a>
        </td>';
    echo '</tr>';
    $rowNumber++;
}

                                    ?>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>


                <!-- Modal dialog structure -->
                <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
                        <div class="modal-content" style="max-width: 800px;">
                            <div class="modal-header">

                                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> -->
                            </div>
                            <div class="modal-body" id="modalBody">
                                <!-- Content will be loaded here -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- JavaScript and jQuery libraries -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                <script>
                $(document).ready(function() {
                    // Event handler for the View button click
                    $('.btn-view').on('click', function() {
                        var blNumber = $(this).data(
                            'id'); // Get the BL number from data-id attribute
                        var url =
                            'http://localhost/flotilla%20logistic/Admin/flotilla%20logistic/assets/' +
                            encodeURIComponent(blNumber) + '.html';

                        // Load the HTML file into the modal using AJAX
                        $.get(url, function(data) {
                            $('#modalBody').html(
                                data); // Load the data into the modal's body
                            $('#viewModal').modal('show'); // Show the modal
                        });
                    });
                    // Search functionality
                    $('#searchInput').on('keyup', function() {
                        var searchText = $(this).val().toLowerCase();
                        $('#list tbody tr').filter(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -
                                1);
                        });
                    });
                    // Event handler for the Print button click
                    $('.btn-print').on('click', function(event) {
                        event.preventDefault();
                        var blNumber = $(this).data('id');
                        var url =
                            'http://localhost/flotilla%20logistic/Admin/flotilla%20logistic/assets/' +
                            encodeURIComponent(blNumber) + '.html';
                        $.get(url, function(data) {
                            var printWindow = window.open('', '_blank');
                            printWindow.document.write(data);
                            printWindow.document.close();
                            printWindow.print();
                        });
                    });
                });
                </script>
                <style>
                table td {
                    vertical-align: middle !important;
                }
                </style>

            </div>
        </div>
    </div>
</div>

<?php include 'layouts/footer.php'; ?>
<?php include 'layouts/right-sidebar.php'; ?>
<?php include 'layouts/vendor-scripts.php'; ?>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/js/pages/dashboard.init.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>