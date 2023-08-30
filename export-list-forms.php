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
    <title><?php echo $language["Dashboard"]; ?> | Flotilla - Admin & Dashboard Template</title>
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
                $title = "Welcome !";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->
                <div class="col-lg-12">
                    <div class="card card-outline card-green">
                        <div class="card-header">
                            <div class="card-tools">
                                <a class="btn btn-block btn-sm btn-default btn-flat border-primaryy"
                                    style="border-color: #2ecc71;" href="./export-new-forms.php"><i
                                        class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                        <div class="card-body">
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


                                        <th class="text-center">BL Number</th>
                                        <th>Shipper Name</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                       while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<th scope="row">' . $row['bl_no'] . '</th>';
    echo '<td>' . $row['shippername'] . '</td>';
    echo '<td>
           <a href="http://localhost/flotilla%20logistic/Admin/flotilla%20logistic/assets/' . urlencode($row['bl_no']) . '.html"
            class="btn btn-success btn-sm btn-view"
            data-id="' . htmlspecialchars($row['bl_no']) . '">
            <i class="fas fa-eye"></i> View
            </a>
            
            <a href="?delete_id=' . $row['bl_no'] . '" class="btn btn-danger btn-sm">
            <i class="fas fa-trash"></i> Delete
            </a>
        </td>';
    echo '</tr>';
}

                                    ?>
                                </tbody>
                            </table>
                            <div id="contentDialog" class="dialog" title="View Document">
                                <iframe id="contentFrame" width="100%" height="500"></iframe>
                            </div>

                            <script>
                            $(document).ready(function() {
                                // Initialize the dialog
                                $("#contentDialog").dialog({
                                    autoOpen: false,
                                    modal: true,
                                    width: '80%',
                                    height: 'auto',
                                    buttons: {
                                        Close: function() {
                                            $(this).dialog('close');
                                        }
                                    }
                                });

                                // Handle the "View" button click
                                $(".btn-view").click(function() {
                                    var id = $(this).data("id");
                                    var location = "get_location.php?id=" +
                                        id; // Change this to your actual URL
                                    $("#contentFrame").attr("src", location);
                                    $("#contentDialog").dialog("open");
                                });
                            });
                            </script>
                        </div>
                    </div>
                </div>
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
</body>

</html>