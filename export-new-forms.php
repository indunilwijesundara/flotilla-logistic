<?php
require_once "layouts/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Establish database connection
    // Include your database connection file

    // Get BL No and Shipper's name from POST data
    $blNo = $_POST['blNo'];
    $shipperName = $_POST['shipperName'];

    // Define the location
    $location = "http://localhost/flotilla%20logistic/Admin/flotilla%20logistic/assets/$blNo.html";

    // Prepare and execute SQL query to insert data
    $query = "INSERT INTO invoice_commercial(bl_no,shippername,location) VALUES (?, ?, ?)";
    $stmt = $link->prepare($query);
    $stmt->bind_param("sss", $blNo, $shipperName, $location);
    
    if ($stmt->execute()) {
        echo '<script>alert("Invoice Saved Successfully")</script>';
        echo "Data saved successfully.";
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
                $maintitle = "Export New Forms";
                $title = "Welcome !";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

                <div class="row">
                    <!-- Commercial Invoice Form strt -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-h-100" data-toggle="modal" data-target="#commercialInvoiceModal" style="cursor: pointer;
            transition: box-shadow 0.3s ease;">
                            <div class="card-body" style="transition: box-shadow 0.3s ease;"
                                onmouseover="this.style.boxShadow='0 8px 16px 0 rgba(0,0,0,0.2)';"
                                onmouseout="this.style.boxShadow='0 4px 8px 0 rgba(0,0,0,0.2)';">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Commercial
                                            Invoice</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="modal fade" id="commercialInvoiceModal">
                            <div class="modal-dialog" style="max-width: 800px;">
                                <div class="modal-content">

                                    <style>
                                    table {
                                        font-family: Arial, sans-serif;
                                        border: 4px solid blue;
                                        border-collapse: collapse;
                                        width: 100%;
                                    }

                                    td,
                                    th {
                                        border: 1px solid blue;
                                        text-align: left;
                                        padding: 8px;
                                        font-size: 12px
                                    }

                                    /* Style for the input fields */
                                    .form-control-inline {
                                        border: none;
                                        padding: 0;
                                        width: 100%;
                                    }

                                    .company-details {
                                        gap: 20px;
                                    }

                                    .BL-number {
                                        position: absolute;
                                        top: 32px;
                                        right: 32px;
                                        display: flex;
                                        align-items: center;
                                        gap: 5px;
                                        border: 1px solid rgb(178, 190, 181);
                                        padding: 0px 10px 0px 10px;

                                    }

                                    .BL-number label {
                                        margin-top: 10px
                                    }

                                    .BL-number input {
                                        width: 100px;
                                    }

                                    .logo1 {
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: center;
                                        text-align: center;
                                        margin-top: 50px;
                                    }

                                    .shipper {
                                        display: flex;
                                        flex-direction: column;
                                    }

                                    @media print {


                                        body * {
                                            visibility: hidden;

                                        }

                                        .print-container {
                                            transform: scale(0.9);
                                            /* Adjust the scale as needed */
                                            transform-origin: top left;
                                        }

                                        .print-container,
                                        .print-container * {
                                            visibility: visible;

                                        }

                                    }
                                    </style>
                                    <form method="post" id="invoiceForm" class="print-container m-3">
                                        <div class="print-container m-3" id="invoiceModalContent">

                                            <table class="table table-bordered">
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="shipper">
                                                            <label for="">SHIPPER</label>
                                                            <input id="shipperName" type="text" name="shipperName"
                                                                class="form-control-inline" placeholder="Name">
                                                            <input id="shipperAddress" type="text"
                                                                class="form-control-inline" placeholder="Address">
                                                            <input id="shipperZipCode" type="text"
                                                                class="form-control-inline" placeholder="Zip-code">
                                                        </div>
                                                    </td>
                                                    <td colspan="4" rowspan="2">
                                                        <div class="company-details">
                                                            <div class="BL-number">
                                                                <div> <label for="">BL NO</label></div>
                                                                <div> <input id="blNo" type="text" name="blNo"
                                                                        class="form-control-inline" placeholder="Enter">
                                                                </div>

                                                            </div>
                                                            <div class="logo1">
                                                                <div><img src="logo.png" alt="" width="200px">
                                                                </div>

                                                                <label for=""
                                                                    style="font-size:10px;line-height: 12px;color:blue">167,
                                                                    Maharagama Road,
                                                                    Dehiwala, <br>Tel: (+94) 112
                                                                    724
                                                                    485<br> Mobile: (+94) 777 876 582<br> Email:
                                                                    info@flotillalogistics.com Web:
                                                                    www.flatillalogistics.com</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="shipper">
                                                            <label for="">CONSIGNEE</label>
                                                            <input id="consigneeName" type="text"
                                                                class="form-control-inline" placeholder="Name">
                                                            <input id="consigneeAddress" type="text"
                                                                class="form-control-inline" placeholder="Address">
                                                            <input id="consigneeZipCode" type="text"
                                                                class="form-control-inline" placeholder="Zip-code">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="shipper">
                                                            <label for="">NOTIFY PARTY</label>
                                                            <input id="notifyPartyName" type="text"
                                                                class="form-control-inline" placeholder="Company Name">
                                                            <input id="notifyPartyAddress" type="text"
                                                                class="form-control-inline" placeholder="Address">
                                                            <input id="notifyTelephoneNo" type="text"
                                                                class="form-control-inline" placeholder="Telephone No">
                                                        </div>
                                                    </td>
                                                    <td colspan="4" rowspan="2"> For delivery of goods please apply to:
                                                        <input id="forDelivery" type="text" class="form-control-inline"
                                                            placeholder="For delivery of goods please apply to"
                                                            max-line=3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Place of Receipt</td>
                                                    <td colspan="2"><input id="placeReceipt" type="text"
                                                            class="form-control-inline" placeholder="Place of Receipt">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><input id="portLoading" type="text"
                                                            class="form-control-inline" placeholder="Port of Loading">
                                                    </td>
                                                    <td colspan="2">Port of Loading</td>
                                                    <td colspan="4" rowspan="2">xyz
                                                        to:<input id="xyz" type="text" class="form-control-inline"
                                                            placeholder="For delivery of goods please apply to"
                                                            max-line=3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Port of Discharge<input id="portDischarge"
                                                            type="text" class="form-control-inline" placeholder="enter">
                                                    </td>
                                                    <td colspan="2">Final Destination<input id="finalDestination"
                                                            type="text" class="form-control-inline" placeholder="enter">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Container & Seal No</td>
                                                    <td colspan="1"> Quality and Kind of Packages</td>
                                                    <td colspan="3">Particulars Furnished By Merchant Description of
                                                        Goods
                                                    </td>
                                                    <td colspan="2">Measurement(CBM) Gross Weight(KGS)</td>
                                                </tr>
                                                <tr style="height:300px">
                                                    <td colspan="2">Total Number of containers of packages(in
                                                        words)<input id="containerSeal" type="text"
                                                            class="form-control-inline" placeholder="enter"> </td>
                                                    <td colspan="1"><input id="qualityPackages" type="text"
                                                            class="form-control-inline" placeholder="enter"> </td>
                                                    <td colspan="3"><input id="description" type="text"
                                                            class="form-control-inline" placeholder="enter"></td>
                                                    <td colspan="2"><input id="measurement" type="text"
                                                            class="form-control-inline" placeholder="enter"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><input id="freightCharges" type="text"
                                                            class="form-control-inline" placeholder="enter">FREIGHT &
                                                        CHARGES</td>
                                                    <td colspan="1">Revenue Tons</td>
                                                    <td colspan="1"> </td>
                                                    <td colspan="1">Rate</td>
                                                    <td colspan="1">Prepaid</td>
                                                    <td colspan="2">Collect</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Service Type</td>
                                                    <td colspan="1">Exchange Rate</td>
                                                    <td colspan="2"> </td>
                                                    <td colspan="1">Prepaid at</td>
                                                    <td colspan="2"><input id="payable" type="text"
                                                            class="form-control-inline" placeholder="enter">Payable at
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="8"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td colspan="2"></td>
                                                    <td colspan="4" rowspan="2"></td>
                                                </tr>




                                            </table>
                                            <!-- Add Print button -->

                                        </div>
                                        <div class="text-end m-3">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" id="" class="btn btn-primary"
                                                onclick="printInvoice()">Print</button>
                                        </div>
                                    </form>
                                    <script>
                                    function printInvoice() {
                                        var invoiceContent = document.getElementById('invoiceModalContent').innerHTML;

                                        // Create a new window for printing
                                        var printWindow = window.open('', '_blank');

                                        // Write the HTML content with inline styles for printing
                                        printWindow.document.write('<html><head><title>Print Invoice</title>');
                                        printWindow.document.write(
                                            '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">'
                                        );
                                        printWindow.document.write('<style>' +
                                            'body { font-family: Arial, sans-serif; }' +

                                            'table { font-family: Arial, sans-serif; border: 1px solid black; border-collapse: collapse; width: 100%;heigt:1000px; }' +
                                            'td, th { border: 1px solid black; text-align: left; padding: 8px; font-size: 14px; }' +
                                            '.form-control-inline { border: none; padding: 0; width: 100%; }' +
                                            '.company-details { gap: 20px; }' +
                                            '.BL-number { position: absolute; top: 20px; right: 20px; display: flex; align-items: center; gap: 5px; border: 1px solid grey; padding: 0px 10px 0px 10px; }' +
                                            '.BL-number label { margin-top: 10px; }' +
                                            '.BL-number input { width: 100px; }' +
                                            '.logo1 { display: flex; flex-direction: column; justify-content: center; text-align: center; margin-top: 50px; }' +
                                            '.shipper { display: flex; flex-direction: column; }' +
                                            '/* Add more CSS styles here */' +
                                            '</style></head><body>');


                                        // Create printable content with input values
                                        var shipperName = document.getElementById('shipperName').value;
                                        var shipperAddress = document.getElementById('shipperAddress').value;
                                        var shipperZipCode = document.getElementById('shipperZipCode').value;
                                        var blNo = document.getElementById('blNo').value;
                                        var consigneeName = document.getElementById('consigneeName').value;
                                        var consigneeAddress = document.getElementById('consigneeAddress').value;
                                        var consigneeZipCode = document.getElementById('consigneeZipCode').value;
                                        var notifyPartyName = document.getElementById('notifyPartyName').value;
                                        var notifyPartyAddress = document.getElementById('notifyPartyAddress').value;
                                        var notifyTelephoneNo = document.getElementById('notifyTelephoneNo').value;
                                        var forDelivery = document.getElementById('forDelivery').value;
                                        var placeReceipt = document.getElementById('placeReceipt').value;
                                        var portLoading = document.getElementById('portLoading').value;
                                        var xyz = document.getElementById('xyz').value;
                                        var portDischarge = document.getElementById('portDischarge').value;
                                        var finalDestination = document.getElementById('finalDestination').value;
                                        var containerSeal = document.getElementById('containerSeal').value;
                                        var qualityPackages = document.getElementById('qualityPackages').value;
                                        var description = document.getElementById('description').value;
                                        var measurement = document.getElementById('measurement').value;
                                        var freightCharges = document.getElementById('freightCharges').value;
                                        var payable = document.getElementById('payable').value;

                                        var printableContent = `
        <html>
        <head>
            <title>Print Invoice</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <style>
                /* Your CSS styles here */
            </style>
        </head>
        <body>
        <div class="main-div">
            <div class="print-container" style="">
            <table class="table table-bordered">
                                            <tr>
                                                <td colspan="4">
                                                    <div class="shipper">
                                                        <label for="">SHIPPER</label>
                                                        <input id="shipperName" type="text" name="shipperName"  class="form-control-inline"
                                                            placeholder="${shipperName}">
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="${shipperAddress}">
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="${shipperZipCode}">
                                                    </div>
                                                </td>
                                                <td colspan="4" rowspan="2">
                                                    <div class="company-details">
                                                        <div class="BL-number">
                                                            <div> <label for="">BL NO</label></div>
                                                            <div> <input type="text" name="blNo" class="form-control-inline" placeholder="${blNo}"></div>

                                                        </div>
                                                        <div class="logo1">
                                                            <div><img src="logo.png" alt="" width="200px">
                                                            </div>

                                                            <label for=""
                                                                style="font-size:10px;line-height: 12px;color:blue">167,
                                                                Maharagama Road,
                                                                Dehiwala, <br>Tel: (+94) 112
                                                                724
                                                                485<br> Mobile: (+94) 777 876 582<br> Email:
                                                                info@flotillalogistics.com Web:
                                                                www.flatillalogistics.com</label>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <div class="shipper">
                                                        <label for="">CONSIGNEE</label>
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="${consigneeName}">
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="${consigneeAddress}">
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="${consigneeZipCode}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <div class="shipper">
                                                        <label for="">NOTIFY PARTY</label>
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="${notifyPartyName}">
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="${notifyPartyAddress}">
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="${notifyTelephoneNo}">
                                                    </div>
                                                </td>
                                                <td colspan="4" rowspan="2"> For delivery of goods please apply to:
                                                    <input type="text" class="form-control-inline"
                                                        placeholder="${forDelivery}" max-line=3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Place of Receipt</td>
                                                <td colspan="2"><input type="text" class="form-control-inline"
                                                        placeholder="${placeReceipt}"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><input type="text" class="form-control-inline"
                                                        placeholder="${portLoading}"></td>
                                                <td colspan="2">Port of Loading</td>
                                                <td colspan="4" rowspan="2">For delivery of goods please apply to:<input
                                                        type="text" class="form-control-inline"
                                                        placeholder="${xyz}" max-line=3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Port of Discharge<input type="text"
                                                        class="form-control-inline" placeholder="${portDischarge}"></td>
                                                <td colspan="2">Final Destination<input type="text"
                                                        class="form-control-inline" placeholder="${finalDestination}"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> Container & Seal No</td>
                                                <td colspan="1"> Quality and Kind of Packages</td>
                                                <td colspan="3">Particulars Furnished By Merchant Description of Goods
                                                </td>
                                                <td colspan="2">Measurement(CBM) Gross Weight(KGS)</td>
                                            </tr>
                                            <tr style="height:300px">
                                                <td colspan="2">Total Number of containers of packages(in
                                                        words)<input type="text" class="form-control-inline"
                                                        placeholder="${containerSeal}"> </td>
                                                <td colspan="1"><input type="text" class="form-control-inline"
                                                        placeholder="${qualityPackages}"> </td>
                                                <td colspan="3"><input type="text" class="form-control-inline"
                                                        placeholder="${description}"></td>
                                                <td colspan="2"><input type="text" class="form-control-inline"
                                                        placeholder="${measurement}"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><input type="text" class="form-control-inline" placeholder="${freightCharges}">FREIGHT & CHARGES</td>
                                                <td colspan="1">Revenue Tons</td>
                                                <td colspan="1"> </td>
                                                <td colspan="1">Rate</td>
                                                <td colspan="1">Prepaid</td>
                                                <td colspan="2">Collect</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Service Type</td>
                                                <td colspan="1">Exchange Rate</td>
                                                <td colspan="2"> </td>
                                                <td colspan="1">Prepaid at</td>
                                                <td colspan="2"><input type="text" class="form-control-inline"
                                                        placeholder="${payable}">Payable at</td>
                                            </tr>
                                            <tr>
                                                <td colspan="8"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="2"></td>
                                                <td colspan="4" rowspan="2"></td>
                                            </tr>




                                        </table>
            </div>
            </div>
        </body>
        </html>
    `;


                                        printWindow.document.write(printableContent);


                                        printWindow.document.write('</div>');
                                        printWindow.document.write('<div class="shipper">');

                                        // printWindow.document.write(invoiceContent);
                                        printWindow.document.write('</body></html>');
                                        printWindow.document.close();

                                        // Print the content in the new window
                                        printWindow.print();

                                        // Now, send the data to the server using AJAX
                                        $.ajax({
                                            type: 'POST',
                                            url: 'save_printed_content.php', // Update with the correct PHP script path
                                            data: {
                                                content: printWindow.document.documentElement.innerHTML,
                                                filename: blNo
                                            },
                                            success: function(response) {
                                                console.log('File saved successfully.');
                                            },
                                            error: function() {
                                                console.log('Error saving file.');
                                            }
                                        });

                                    }
                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- end Commercial Invoice Form -->





                </div>
                <!-- end row-->


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