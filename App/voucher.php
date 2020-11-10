<?php include('Navbar/navbar.html'); ?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
            }

            .table_border {
                border: 1px solid #080101;
                text-align: left;
                padding: 8px;
            }

            tr {
                height:35px;
            }

            .center {
                /* margin-left: 350px;  */
                margin: auto;
            }

            .ship_tbl{
                border: 1px solid #080101;
            }

            .ship_td {
                padding: 15px;
                width: 170px;
            }

            .ship_head_bg {
                background-color: #DF8931;
            }

            .ship_tr_bg {
                background-color: #ebed99;
            }

            .txt_cen {
                text-align:center;
            }

            .vch_price_td {
                width: 100px !important;
            }

            .bold{
                font-weight: bold;
            }
            .order-container{
                height: 200px;
                margin: auto;
                width: 715px;
            }

            .vou-header{
                letter-spacing: 2px;
                /* background: #df8931; */
                margin: auto;
                padding: 12px;
                width: 188px;
                color: #150c03;
                font-family: cursive;
                border: 2px solid #ef7900;
                text-align: center;
                border-radius: 29px;
                font-weight: bold;
            }

            .border-unset{
                border: unset;
            }

            .upload-div{
                background: #df8931;
                width: 270px;
                border: 1px solid black;
                height: 140px;
            }

            .avatar {
                width: 6em;
                height: 6em;
                background-image: url(/E_SHOP/assets/camera1.jpg);
                margin: .5em auto;
                position: relative;
                background-size: 96px;
                border-radius: 44px;
            }
            .avatar input {
            width: 100%;
            height: 100%;
            opacity: 0; /* Hide the button */
            cursor: pointer;
            }
        </style>
    </head>
    <body style="height: 100vh">
        <div class="order-container">
        <br><br>
            <h1><p class="vou-header">Order</p></h1><br><br>
            <div class="row" style="margin-left: 25px">
            <table class="ship_tbl">
                <tr class="ship_head_bg">
                    <td class="ship_td bold">Ship To:</td>
                    <td class="ship_td"></td>
                </tr>
                <tr class="ship_tr_bg">
                    <td class="ship_td bold">Name:</td>
                    <td class="ship_td"></td>
                </tr>
                <tr class="ship_tr_bg">
                    <td class="ship_td bold">Email:</td>
                    <td class="ship_td"></td>
                </tr>
                <tr class="ship_tr_bg">
                    <td class="ship_td bold">Phone:</td>
                    <td class="ship_td"></td>
                </tr>
                <tr class="ship_tr_bg">
                    <td class="ship_td bold">Address:</td>
                    <td class="ship_td"></td>
                </tr>
            </table>
            </div>
        <br><br>
        <div class="row">
            <table class="center">
                <tr style="background-color:black; color:white;">
                    <th class="table_border bold">Item Code</th>
                    <th class="table_border bold">Quantity</th>
                    <th class="table_border vch_price_td bold">Price</th>
                </tr>
                <tr>
                    <td class="table_border"></td>
                    <td class="table_border"></td>
                    <td class="table_border vch_price_td"></td>
                </tr>
                <tr>
                    <td class="table_border "></td>
                    <td class="table_border "></td>
                    <td class="table_border vch_price_td"></td>
                </tr>
                <tr>
                    <td class="table_border "></td>
                    <td class="table_border "></td>
                    <td class="table_border vch_price_td"></td>
                </tr>
                <tr>
                    <td class="table_border "></td>
                    <td class="table_border "></td>
                    <td class="table_border vch_price_td"></td>
                </tr>
                <tr>
                    <td class="table_border "></td>
                    <td class="table_border "></td>
                    <td class="table_border vch_price_td"></td>
                </tr>
                <tr>
                    <td class="table_border "></td>
                    <td class="table_border "></td>
                    <td class="table_border vch_price_td"></td>
                </tr>
                <tr>
                    <td class="table_border border-unset" style="width: 480px" rowspan="4">
                    <div class="upload-div">
                        <form action="upload.php" method="post"  class="avatar" enctype="multipart/form-data">
                                <input type="file" name="fileToUpload" id="fileToUpload">
                        </form>
                            <div style="color:white; text-align: center">Upload your payment screenshoot</div>
                    </div>
                        <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="fileToUpload" id="fileToUpload">
                                <span style="color:white;">Upload your payment screenshoot</span>
                        </form> -->
                        <!-- <img src="img_girl.jpg" alt="Girl in a jacket" width="500" height="600"> -->
                    </td>
                    <td class="table_border border-unset">Total</td>
                    <td class="table_border"></td>
                </tr>
                <tr>
                    <td class="table_border border-unset">Tax</td>
                    <td class="table_border"></td>
                </tr>
                <tr>
                    <td class="table_border border-unset">Shipping</td>
                    <td class="table_border"></td>
                </tr>
                <tr>
                    <td class="table_border border-unset">Total</td>
                    <td class="table_border"></td>
                </tr>
            </table>
            <br><br>
            <h2 class="txt_cen" style="font-family: cursive;">Thanks for shopping with us.</h2>
        </div>
        </div>
    </body>
</html>
