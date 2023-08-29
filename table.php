<?php 
?>

<html>

<body>

    <style>
    table {
        font=family: ariel, sans-serief;
        border: 4px solid blue;
        border-collapse: collapse;
        width 100%;
    }

    td,
    th {
        border: 2px solid blue;
        text-align: left;
        padding: 8px;
    }
    </style>

    <table border="5">
        <thead>
            <tr>
                <th colspan="3">Purchase order:987654321</th>
                <th colspan="1">Tutorialbrain-10th oct 2020</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2">vendor:
                    <br>
                    ABC XYZ ltd.<br>
                    DUMMY STREET<br>
                    BUILDING 123<br>
                    HAZARIBAGH,JHARKHAND,825301
                </td>
                <td colspan="2">
                    SHIP TO::<br>
                    MS DHONI<br>
                    WILSON GARDEN<br>
                    SOUTHEAST BLOCK,RANCHI-834001<br>
                </td>


            </tr>
            <tr>
                <th><b>Qty.</b></th>
                <th><b>Item Code</b></th>
                <th><b>Description</b></th>
                <th><b>Unit Price</b></th>


            </tr>
            <tr>
                <td>100</td>
                <td>LABCDE</td>
                <td>Pencils</td>
                <td>20.00</td>


            </tr>
            <tr>
                <td>1000</td>
                <td>IN877</td>
                <td>Note books</td>
                <td>100.00</td>


            </tr>
            <tr>
                <td>500</td>
                <td>IP8675</td>
                <td>Pens</td>
                <td>70.00</td>


            </tr>
            </tr>
            <tr>
                <th colspan="3">SubTotal</th>
                <td colspan="1">190.00</td>

            </tr>
            <tr>
                <th colspan="2">GST</th>
                <td colspan="1">5%</td>
                <td colspan="1">9.50</td>

            </tr>
            <tr>
                <th colspan="3">Grand Total</th>
                <td colspan="1">$199.50</td>

            </tr>

        </tbody>

    </table>
</body>

</html>