@include('admin.inc.head')

<main class="page landing-page">
        <section style="padding-top: 15px;padding-bottom: 40px;padding-left: 10px;padding-right: 10px;">
            <div class="container" style="margin-bottom: 20px;padding-left: 0px;padding-right: 0px;">
                <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 30px;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 id="invoice-title" style="margin: 0px;">Quotation #{{$quotation['id']}}</h1>
                    </div>
                    <div><!--<button class="btn btn-primary quote-action-button" type="button" style="background-color: black;border-color: black;">Download</button>--></div>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6 col-lg-6 col-xl-6 customer-info-column" style="margin-bottom: 40px;">
                        <p style="position: absolute;margin-top: -33px;font-weight: bold;text-transform: uppercase;/*z-index: 10000;*/background-color: black;padding-left: 10px;padding-right: 10px;border-radius: 12px;font-size: 13px;letter-spacing: 1px;padding-top: 3px;padding-bottom: 3px;color: white;">CUSTOMER INFORMATION</p>
                        <div class="row">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Name</p>
                                    <p class="customer-info-content">{{$quotation['name']}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Email</p>
                                    <p class="customer-info-content">{{$quotation['email']}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Phone Number</p>
                                    <p class="customer-info-content">{{$quotation['phone']}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Company Name</p>
                                    <p class="customer-info-content">{{$quotation['company']}}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Address</p>
                                    <p class="customer-info-content">{{$quotation['address']}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">City</p>
                                    <p class="customer-info-content">{{$quotation['city']}}</p>
                                </div>
                                <div class="d-flex">
                                    <div class="customer-info-section" style="margin-right: 30px;">
                                        <p class="customer-info-header">Province</p>
                                        <p class="customer-info-content">{{$quotation['province']}}</p>
                                    </div>
                                    <div class="customer-info-section">
                                        <p class="customer-info-header">Postal Code</p>
                                        <p class="customer-info-content">{{$quotation['postal_code']}}</p>
                                    </div>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Country</p>
                                    <p class="customer-info-content">{{$quotation['country']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-xl-5 customer-info-column">
                        <p style="position: absolute;margin-top: -33px;font-weight: bold;text-transform: uppercase;/*z-index: 10000;*/background-color: black;padding-left: 10px;padding-right: 10px;border-radius: 12px;font-size: 13px;letter-spacing: 1px;padding-top: 3px;padding-bottom: 3px;color: white;">QUOTATION DETAILS</p>
                        <div class="row">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Date Created</p>
                                    <p class="customer-info-content">{{substr($quotation['created_date'], 0, -14)}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Status</p>
                                    <p class="customer-info-content">{{$quotation['status']}}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Expiry Date</p>
                                    <p class="customer-info-content">{{substr($quotation['expiration_date'], 0, -14)}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Related Invoice</p>
                                    <p class="customer-info-content">N/A</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Vehicle Type</p>
                                    <p class="customer-info-content">{{$quotation['type']}}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Make</p>
                                    <p class="customer-info-content">{{$quotation['make']}}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Model</p>
                                    <p class="customer-info-content">{{$quotation['model']}}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Year</p>
                                    <p class="customer-info-content">{{$quotation['year']}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Notes</p>
                                    <p class="customer-info-content">{{$quotation['notes']}}</p>
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
                        
                        <div class="row itemrow">
                            <div class="col-md-3 col-lg-3 col-xl-4">
                                <p class="customer-info-header">{{$quotation['product_1']}}</p>
                            </div>
                            <div class="col-md-3 col-lg-4 col-xl-4">
                                <p class="customer-info-header">{{$quotation['description_1']}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$quotation['price_1']}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$quotation['qty_1']}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$quotation['rowtotal_1']}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">@php echo number_format(($quotation['tax_amount_1'] / $quotation['rowtotal_1'] * 100), 3) . "%"; @endphp</p>
                            </div>
                        </div>
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        @if($quotation['price_2'])
                        <div class="row itemrow">
                            <div class="col-md-3 col-lg-3 col-xl-4">
                                <p class="customer-info-header">{{$quotation['product_2']}}</p>
                            </div>
                            <div class="col-md-3 col-lg-4 col-xl-4">
                                <p class="customer-info-header">{{$quotation['description_2']}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$quotation['price_2']}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$quotation['qty_2']}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$quotation['rowtotal_2']}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$quotation['tax_amount_2']}}</p>
                            </div>
                        </div>
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        @endif
                        @if($quotation['price_3'])
                        <div class="row itemrow">
                            <div class="col-md-3 col-lg-3 col-xl-4">
                                <p class="customer-info-header">{{$quotation['product_3']}}</p>
                            </div>
                            <div class="col-md-3 col-lg-4 col-xl-4">
                                <p class="customer-info-header">{{$quotation['description_3']}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$quotation['price_3']}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$quotation['qty_3']}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$quotation['rowtotal_3']}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$quotation['tax_amount_3']}}</p>
                            </div>
                        </div>
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 customer-info-column">
                        <p style="position: absolute;margin-top: -33px;font-weight: bold;text-transform: uppercase;/*z-index: 10000;*/background-color: black;padding-left: 10px;padding-right: 10px;border-radius: 12px;font-size: 13px;letter-spacing: 1px;padding-top: 3px;padding-bottom: 3px;color: white;">QUOTE SUMMARY</p>
                        <div class="row" style="padding-top: 5px;">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Quote Subtotal</p>
                                    <p class="customer-info-content">{{$quotation['subtotal']}}$</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Tax Rate</p>
                                    <p class="customer-info-content">@php echo ($quotation['taxTotal'] / $quotation['subtotal'] * 100) . "%"; @endphp</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Tax</p>
                                    <p class="customer-info-content">@php echo number_format($quotation['taxTotal'], 2) . "$"; @endphp</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Total</p>
                                    <p class="customer-info-content">@php echo number_format($quotation['total'], 2) . "$"; @endphp</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@include('admin.inc.foot')