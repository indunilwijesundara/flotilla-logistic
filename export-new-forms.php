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
                            <div class="modal-dialog" style="max-width: 700px;">
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
                                        top: 20px;
                                        right: 20px;
                                        display: flex;
                                        align-items: center;
                                        gap: 5px;
                                        border: 1px solid grey;
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
                                    </style>
                                    <div class="m-3" id="invoiceModalContent">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td colspan="4">
                                                    <div class="shipper">
                                                        <label for="">SHIPPER</label>
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="Name">
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="Address">
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="Zip-code">
                                                    </div>
                                                </td>
                                                <td colspan="4" rowspan="2">
                                                    <div class="company-details">
                                                        <div class="BL-number">
                                                            <div> <label for="">BL NO</label></div>
                                                            <div> <input type="text" class="form-control-inline"></div>

                                                        </div>
                                                        <div class="logo1">
                                                            <div><img src="assets/images/logo.png" alt="" width="200px">
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
                                                            placeholder="Name">
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="Address">
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="Zip-code">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <div class="shipper">
                                                        <label for="">NOTIFY PARTY</label>
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="Company Name">
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="Address">
                                                        <input type="text" class="form-control-inline"
                                                            placeholder="Telephone No">
                                                    </div>
                                                </td>
                                                <td colspan="4" rowspan="2"> For delivery of goods please apply to:
                                                    <input type="text" class="form-control-inline"
                                                        placeholder="For delivery of goods please apply to" max-line=3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Place of Receipt</td>
                                                <td colspan="2"><input type="text" class="form-control-inline"
                                                        placeholder="Place of Receipt"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><input type="text" class="form-control-inline"
                                                        placeholder="Port of Loading"></td>
                                                <td colspan="2">Port of Loading</td>
                                                <td colspan="4" rowspan="2">For delivery of goods please apply to:<input
                                                        type="text" class="form-control-inline"
                                                        placeholder="For delivery of goods please apply to" max-line=3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Port of Discharge<input type="text"
                                                        class="form-control-inline" placeholder="enter"></td>
                                                <td colspan="2">Final Destination<input type="text"
                                                        class="form-control-inline" placeholder="enter"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> Container & Seal No</td>
                                                <td colspan="1"> Quality and Kind of Packages</td>
                                                <td colspan="3">Particulars Furnished By Merchant Description of Goods
                                                </td>
                                                <td colspan="2">Measurement(CBM) Gross Weight(KGS)</td>
                                            </tr>
                                            <tr style="height:300px">
                                                <td colspan="2"><input type="text" class="form-control-inline"
                                                        placeholder="enter"> </td>
                                                <td colspan="1"><input type="text" class="form-control-inline"
                                                        placeholder="enter"> </td>
                                                <td colspan="3"><input type="text" class="form-control-inline"
                                                        placeholder="enter"></td>
                                                <td colspan="2"><input type="text" class="form-control-inline"
                                                        placeholder="enter"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">FREIGHT & CHARGES</td>
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
                                                <td colspan="2">Payable at</td>
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
                                        <div class="text-end m-3">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary"
                                                onclick="printInvoice()">Print</button>
                                        </div>

                                    </div>


                                    <script>
                                    function printInvoice() {
                                        // var printWindow = window.open('', '_blank');

                                        // var tableHtml = document.getElementById('invoiceModalContent').innerHTML;

                                        // printWindow.document.open();
                                        // printWindow.document.write(
                                        //     '<html><head><title>Print Table</title></head><body>');
                                        // printWindow.document.write(tableHtml);
                                        // printWindow.document.write('</body></html>');
                                        // printWindow.document.close();

                                        // printWindow.print();
                                        var tableHtml = document.getElementById('invoiceModalContent').innerHTML;

                                        $.ajax({
                                            type: 'POST',
                                            url: 'generate_pdf.php',
                                            data: {
                                                invoiceHtml: tableHtml
                                            },
                                            success: function(response) {
                                                if (response.success) {
                                                    // Download the generated PDF
                                                    window.location.href =
                                                        'generated_invoice.pdf'; // Update with the correct path
                                                } else {
                                                    alert('PDF generation failed.');
                                                }
                                            },
                                            error: function() {
                                                alert('PDF generation failed!');
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
</body>

</html>