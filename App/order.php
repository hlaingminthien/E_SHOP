<?php include('Navbar/navbar.html'); ?>

<!DOCTYPE html>
<html>
    <head>
        
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
            }

            .item_tr {
                height:150px;
            }

            .qty_tr {
                height:75px;
            }

            .center {
                margin-left: auto; 
                margin-right: auto;
            }

            .ship_tbl{
                border: 1px solid #DF8931;
                border-radius: 8px;
            }

            .ship_td {
                padding: 15px;
                width: 170px;
            }
            
            .txt_cen {
                text-align:center;
            }

            .bold{
                font-weight: bold;
            }

            .pay_select {
                width: 155px;
                height: 30px;
                border-color:#DF8931 !important;
            }

            .pay_select:focus {
                border-color:#DF8931;
            }

            .label_margin {
                margin-right: 14px;
            }

            .confirm_btn {
                border-radius: 5px;
                height: 30px;
                border-color: #DF8931;
                background-color: #DF8931;
                color:#fff;
            }

            .confirm_btn:focus {
                border-color: #DF8931;
                background-color: #DF8931;
            }

            
            .float-left {
                float: left;
            }

            .float-right {
                float: right;
            }

            .order-container{
                height: 200px;
                margin: auto;
                width: 715px;
            }

            .vou-header{
                letter-spacing: 2px;
                margin: auto;
                padding: 12px;
                width: 188px;
                color: #150c03;
                font-family: cursive;
                border: 2px solid #DF8931;
                text-align: center;
                border-radius: 29px;
                font-weight: bold;
            }

            .table_border {
                border: 1px solid #080101;
                text-align: left;
                padding: 8px;
            }

            tr {
                height:35px;
            }
        </style>
    </head>
    <body style="height: 100vh">
        <br><br>
        <div class="order-container">
            <h1><p class="vou-header">Your Order</p></h1><br><br><br>
            <!-- <div class="float-left ship_tbl">
                <table class="center">
                    <tr class="item_tr">
                        <td class="ship_td bold">Items:</td>
                        <td class="ship_td"></td>
                    </tr>
                </table>
            </div>
            <div class="float-right ship_tbl">
                <table class="center">
                    <tr class="qty_tr">
                        <td class="ship_td bold">QTY:</td>
                        <td class="ship_td"></td>
                    </tr>
                    <tr class="qty_tr">
                        <td class="ship_td bold">Total Price:</td>
                        <td class="ship_td"></td>
                    </tr>
                </table>
            </div> -->
            <table class="center" width="100%">
                <tr style="background-color:black; color:white;">
                    <th class="table_border bold">Item</th>
                    <th class="table_border bold">Item Code</th>
                    <th class="table_border bold">Quantity</th>
                    <th class="table_border bold">Price</th>
                    <th class="table_border bold">Subtotal</th>
                </tr>
                <tr>
                    <td class="table_border"></td>
                    <td class="table_border"></td>
                    <td class="table_border vch_price_td"></td>
                    <td class="table_border vch_price_td"></td>
                    <td class="table_border vch_price_td"></td>
                </tr>
                <tr>
                    <td class="table_border "></td>
                    <td class="table_border "></td>
                    <td class="table_border vch_price_td"></td>
                    <td class="table_border vch_price_td"></td>
                    <td class="table_border vch_price_td"></td>
                </tr>
                <tr>
                    <td class="table_border "></td>
                    <td class="table_border "></td>
                    <td class="table_border vch_price_td"></td>
                    <td class="table_border vch_price_td"></td>
                    <td class="table_border vch_price_td"></td>
                </tr>
                <tr>
                    <td class="table_border "></td>
                    <td class="table_border "></td>
                    <td class="table_border vch_price_td"></td>
                    <td class="table_border vch_price_td"></td>
                    <td class="table_border vch_price_td"></td>
                </tr>
                <tr>
                    <td class="table_border "></td>
                    <td class="table_border "></td>
                    <td class="table_border vch_price_td"></td>
                    <td class="table_border vch_price_td"></td>
                    <td class="table_border vch_price_td"></td>
                </tr>
                <tr>
                    <td class="table_border "></td>
                    <td class="table_border "></td>
                    <td class="table_border vch_price_td"></td>
                    <td class="table_border vch_price_td"></td>
                    <td class="table_border vch_price_td"></td>
                </tr>
                <tr>
                    <td class="table_border border-unset" colspan="4" style="text-align: center;">Total</td>
                    <td class="table_border" ></td>
                </tr>
            </table>
        </div>
        <br><br><br><br>
        <br><br><br><br>
        <div class="txt_cen" style="margin-top: 100px;"><button class="confirm_btn"><a href="/E_SHOP/App/voucher.php">Make Payment</a></button></div>
       <!--  <div class="order-container ">
            <label for="payment" class="label_margin">Select Payment  </label>
            <select class="pay_select" name="payment" id="payment">
                <option value="volvo">KBZ Card</option>
                <option value="saab">AYA Card</option>
                <option value="opel">CB Card</option>
                <option value="audi">KPay</option>
                <option value="audi">AYAPay</option>
                <option value="audi">CBPay</option>
            </select>
            <br><br>
            <label for="payment" class="label_margin">Select Delivery &nbsp;</label>
            <select class="pay_select" name="payment" id="payment">
                <option value="volvo">Post</option>
            </select> 
            
        </div>-->
        <br><br>
    </body>
</html>