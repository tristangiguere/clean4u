<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
    update_Row1();
    update_Row2();
    update_Row3();

    function update_Row1(){
            var price_1 = $('#price_1').val();
            var qty_1 = $('#qty_1').val();
            var row_totalamt_1 = (price_1 * qty_1);
            console.log(row_totalamt_1);
            $('#rowtotaltext_1').text(row_totalamt_1.toFixed(2) + "$");
            $('#row_total_1').val(row_totalamt_1);
            var tax_rate_1 = $('#tax_rate_1').val();
            $('#tax_amt_1').val(tax_rate_1 * row_totalamt_1);
    };

    function update_Row2(){
            var price_2 = $('#price_2').val();
            var qty_2 = $('#qty_2').val();
            var row_totalamt_2 = (price_2 * qty_2);
            console.log(row_totalamt_2);
            $('#rowtotaltext_2').text(row_totalamt_2.toFixed(2) + "$");
            $('#row_total_2').val(row_totalamt_2);
            var tax_rate_2 = $('#tax_rate_2').val();
            $('#tax_amt_2').val(tax_rate_2 * row_totalamt_2);
    };

    function update_Row3(){
            var price_3 = $('#price_3').val();
            var qty_3 = $('#qty_3').val();
            var row_totalamt_3 = (price_3 * qty_3);
            console.log(row_totalamt_3);
            $('#rowtotaltext_3').text(row_totalamt_3.toFixed(2) + "$");
            $('#row_total_3').val(row_totalamt_3);
            var tax_rate_3 = $('#tax_rate_3').val();
            $('#tax_amt_3').val(tax_rate_3 * row_totalamt_3);
    };



    $(".invoice-field").change(function() {
        update_Row1();
        update_Row2()
        update_Row3()
    });
}); 






</script>

@include('admin.inc.head')

<main class="page landing-page">
        <section style="padding-top: 15px;padding-bottom: 40px;padding-left: 10px;padding-right: 10px;">
            <div class="container" style="margin-bottom: 20px;padding-left: 0px;padding-right: 0px;">
                <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 30px;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 id="invoice-title" style="margin: 0px;">New Invoice</h1>
                    </div>
                    <form action="new" method="POST">
                    @csrf
                    <div><button class="btn btn-primary quote-action-button" type="submit" style="background-color: black;border-color: black;">Create</button></div>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6 col-lg-6 col-xl-6 customer-info-column" style="margin-bottom: 40px;">
                        <p style="position: absolute;margin-top: -33px;font-weight: bold;text-transform: uppercase;/*z-index: 10000;*/background-color: black;padding-left: 10px;padding-right: 10px;border-radius: 12px;font-size: 13px;letter-spacing: 1px;padding-top: 3px;padding-bottom: 3px;color: white;">CUSTOMER INFORMATION</p>
                        <div class="row">


                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Name</p><input type="text" class="invoice-field" name="name">
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Email</p><input type="text" class="invoice-field" name="email">
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Phone Number</p><input type="text" class="invoice-field" name="phone">
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Company Name</p><input type="text" class="invoice-field" name="company">
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Address</p><input type="text" class="invoice-field" name="address">
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">City</p><input type="text" class="invoice-field" name="city">
                                </div>
                                <div class="d-flex">
                                    <div class="customer-info-section" style="margin-right: 10%;max-width: 50%;">
                                        <p class="customer-info-header">Province</p><input type="text" class="invoice-field" style="max-width: 30%;max-width: 100%;" name="province">
                                    </div>
                                    <div class="customer-info-section">
                                        <p class="customer-info-header">Postal Code</p><input type="text" class="invoice-field" style="max-width: 100px;" name="postal">
                                    </div>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Country</p><select class="invoice-field" style="padding-left: 3px!important;" name="country">
                                        <option value="CAN" selected="">Canada</option>
                                        <option value="US">United States</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-xl-5 customer-info-column">
                        <p style="position: absolute;margin-top: -33px;font-weight: bold;text-transform: uppercase;/*z-index: 10000;*/background-color: black;padding-left: 10px;padding-right: 10px;border-radius: 12px;font-size: 13px;letter-spacing: 1px;padding-top: 3px;padding-bottom: 3px;color: white;">INVOICE DETAILS</p>
                        <div class="row">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Due Date</p><input class="invoice-field" type="date" name="due_date">
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Payment Terms</p><select class="invoice-field" style="padding-left: 3px!important;" name="terms">
                                        <option value="0" selected="">On Receipt</option>
                                        <option value="30">Net 30</option>
                                        <option value="60">Net 60</option>
                                        <option value="90">Net 90</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Notes</p><textarea class="invoice-field" style="width: 100%;" name="notes"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 customer-info-column">
                        <p style="position: absolute;margin-top: -33px;font-weight: bold;text-transform: uppercase;/*z-index: 10000;*/background-color: black;padding-left: 10px;padding-right: 10px;border-radius: 12px;font-size: 13px;letter-spacing: 1px;padding-top: 3px;padding-bottom: 3px;color: white;">PRODUCTS &amp; SERVICES</p>
                        <div class="row">
                            <div class="col-md-3 col-lg-3 col-xl-4">
                                <p class="customer-info-header"><strong>Product / Service</strong></p>
                            </div>
                            <div class="col-md-3 col-lg-4 col-xl-4">
                                <p class="customer-info-header"><strong>Description</strong></p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header"><strong>Price</strong></p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header"><strong>Qty</strong></p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header"><strong>Total</strong></p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header"><strong>Tax</strong></p>
                            </div>
                        </div>
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>

                        <!-- ITEM 1 -->
                        <div class="row itemrow">
                            <div class="col-md-3 col-lg-3 col-xl-4"><textarea class="invoice-field" style="width: 100%;" name="product_1" id="product_1"></textarea></div>
                            <div class="col-md-3 col-lg-4 col-xl-4"><textarea class="invoice-field" style="width: 100%;" name="description_1" id="description_1"></textarea></div>
                            <div class="col"><input type="text" class="invoice-field" style="width: 100%;" name="price_1" id="price_1"></div>
                            <div class="col"><input type="number" class="invoice-field" min=0 style="max-width: 50px;" name="qty_1" id="qty_1"></div>
                            <input type="hidden" name="tax_amt_1" id="tax_amt_1"></input>
                            <input type="hidden" name="row_total_1" id="row_total_1"></input>
                            <div class="col">
                                <p class="customer-info-header" id="rowtotaltext_1">0.00$</p>
                            </div>
                            <div class="col"><select class="invoice-field" style="padding-left: 3px!important;" name="tax_rate_1" id="tax_rate_1">
                                    <option value="0.0975" selected="">QST</option>
                                    <option value="0.05">HST</option>
                                    <option value="0.14975">Both</option>
                                    <option value="0">None</option>
                                </select></div>
                        </div>
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>

                        <!-- ITEM 2 -->
                        <div class="row itemrow">
                            <div class="col-md-3 col-lg-3 col-xl-4"><textarea class="invoice-field" style="width: 100%;" name="product_2" id="product_2"></textarea></div>
                            <div class="col-md-3 col-lg-4 col-xl-4"><textarea class="invoice-field" style="width: 100%;" name="description_2" id="description_2"></textarea></div>
                            <div class="col"><input type="text" class="invoice-field" style="width: 100%;" name="price_2" id="price_2"></div>
                            <div class="col"><input type="number" min=0 class="invoice-field" style="max-width: 50px;" name="qty_2" id="qty_2"></div>
                            <input type="hidden" name="tax_amt_2" id="tax_amt_2"></input>
                            <input type="hidden" name="row_total_2" id="row_total_2"></input>
                            <div class="col">
                                <p class="customer-info-header" id="rowtotaltext_2">0.00$</p>
                            </div>
                            <div class="col"><select class="invoice-field" style="padding-left: 3px!important;" name="tax_rate_2" id="tax_rate_2">
                                    <option value="0.0975" selected="">QST</option>
                                    <option value="0.05">HST</option>
                                    <option value="0.14975">Both</option>
                                    <option value="0">None</option>
                                </select></div>
                        </div>
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>

                        <!-- ITEM 3 -->
                        <div class="row itemrow">
                            <div class="col-md-3 col-lg-3 col-xl-4"><textarea class="invoice-field" style="width: 100%;" name="product_3" id="product_3"></textarea></div>
                            <div class="col-md-3 col-lg-4 col-xl-4"><textarea class="invoice-field" style="width: 100%;" name="description_3" id="description_3"></textarea></div>
                            <div class="col"><input type="text" class="invoice-field" style="width: 100%;" name="price_3" id="price_3"></div>
                            <div class="col"><input type="number" min=0 class="invoice-field" style="max-width: 50px;" name="qty_3" id="qty_3"></div>
                            <input type="hidden" name="tax_amt_3" id="tax_amt_3"></input>
                            <input type="hidden" name="row_total_3" id="row_total_3"></input>
                            <div class="col">
                                <p class="customer-info-header" id="rowtotaltext_3">0.00$</p>
                            </div>
                            <div class="col"><select class="invoice-field" style="padding-left: 3px!important;" name="tax_rate_3" id="tax_rate_3">
                                    <option value="0.0975" selected="">QST</option>
                                    <option value="0.05">HST</option>
                                    <option value="0.14975">Both</option>
                                    <option value="0">None</option>
                                </select></div>
                        </div>
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>

                </form>

                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 customer-info-column">
                        <p style="position: absolute;margin-top: -33px;font-weight: bold;text-transform: uppercase;/*z-index: 10000;*/background-color: black;padding-left: 10px;padding-right: 10px;border-radius: 12px;font-size: 13px;letter-spacing: 1px;padding-top: 3px;padding-bottom: 3px;color: white;">INVOICE SUMMARY</p>
                        <div class="row" style="padding-top: 5px;">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Quote Subtotal</p>
                                    <p class="customer-info-content" id="subtotal">24.99$</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Tax Rate</p>
                                    <p class="customer-info-content" id="taxrate">14.975 %</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Tax</p>
                                    <p class="customer-info-content" id="taxtotal">3.74$</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Total</p>
                                    <p class="customer-info-content" id="finaltotal">28.73$</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@include('admin.inc.foot')
