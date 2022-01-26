@include('admin.inc.head')

    <main class="page landing-page">
        <section style="padding-top: 15px;padding-bottom: 40px;padding-left: 10px;padding-right: 10px;">
            <div class="container" style="margin-bottom: 20px;padding-left: 0px;padding-right: 0px;">
                <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 30px;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 id="invoice-title" style="margin: 0px;">Invoice #{{$invoice->id}}</h1>
                    </div>
                    <div><button class="btn btn-primary quote-action-button" type="button">Edit</button><button class="btn btn-primary quote-action-button" type="button" style="margin-right: 10px;margin-left: 10px;background-color: #bc251a;border-color: #bc251a;">Archive</button><button class="btn btn-primary quote-action-button" type="button" style="background-color: black;border-color: black;">Download</button></div>
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
                                    <p class="customer-info-content">{{$invoice->name}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Email</p>
                                    <p class="customer-info-content">{{$invoice->email}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Phone Number</p>
                                    <p class="customer-info-content">{{$invoice->phone}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Company Name</p>
                                    <p class="customer-info-content">{{$invoice->company}}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Address</p>
                                    <p class="customer-info-content">{{$invoice->address}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">City</p>
                                    <p class="customer-info-content">{{$invoice->city}}</p>
                                </div>
                                <div class="d-flex">
                                    <div class="customer-info-section" style="margin-right: 30px;">
                                        <p class="customer-info-header">Province</p>
                                        <p class="customer-info-content">{{$invoice->province}}</p>
                                    </div>
                                    <div class="customer-info-section">
                                        <p class="customer-info-header">Postal Code</p>
                                        <p class="customer-info-content">{{$invoice->postal_code}}</p>
                                    </div>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Country</p>
                                    <p class="customer-info-content">{{$invoice->country}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-xl-5 customer-info-column">
                        <p style="position: absolute;margin-top: -33px;font-weight: bold;text-transform: uppercase;/*z-index: 10000;*/background-color: black;padding-left: 10px;padding-right: 10px;border-radius: 12px;font-size: 13px;letter-spacing: 1px;padding-top: 3px;padding-bottom: 3px;color: white;">INVOICE DETAILS</p>
                        <div class="row">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Date Created</p>
                                    <p class="customer-info-content">{{$invoice->created_date}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Status</p>
                                    @if ($invoice->status == 0)
                                    <p class="customer-info-content" style="color: var(--bs-red);">Unpaid</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Due Date</p>
                                    <p class="customer-info-content">{{$invoice->due_date}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Payment Terms</p>
                                    <p class="customer-info-content">
                                        @php
                                        if ($invoice->terms ==0){
                                            echo "On Receipt";
                                        }
                                        else if($invoice->terms ==30){
                                            echo "Net 30";
                                        }
                                        else if($invoice->terms ==60){
                                            echo "Net 60";
                                        }
                                        else if($invoice->terms ==90){
                                            echo "Net 90";
                                        }
                                        @endphp
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Notes</p>
                                    <p class="customer-info-content">{{$invoice->notes}}</p>
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
                                <p class="customer-info-header">{{$invoice->product_1}}</p>
                            </div>
                            <div class="col-md-3 col-lg-4 col-xl-4">
                                <p class="customer-info-header">{{$invoice->description_1}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$invoice->price_1}}$</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$invoice->qty_1}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$invoice->rowtotal_1}}$</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">@php echo number_format(($invoice->tax_amount_1 / $invoice->rowtotal_1 * 100), 3) . "%"; @endphp</p>
                            </div>
                        </div>
                        @if ($invoice->qty_2 > 0)
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>

                        <div class="row itemrow">
                            <div class="col-md-3 col-lg-3 col-xl-4">
                                <p class="customer-info-header">{{$invoice->product_2}}</p>
                            </div>
                            <div class="col-md-3 col-lg-4 col-xl-4">
                                <p class="customer-info-header">{{$invoice->description_2}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$invoice->price_2}}$</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$invoice->qty_2}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$invoice->rowtotal_2}}$</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">@php echo number_format(($invoice->tax_amount_2 / $invoice->rowtotal_2 * 100), 3) . "%"; @endphp</p>
                            </div>
                        </div>
                        @endif
                        @if ($invoice->qty_3 > 0)
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>

                        <div class="row itemrow">
                            <div class="col-md-3 col-lg-3 col-xl-4">
                                <p class="customer-info-header">{{$invoice->product_3}}</p>
                            </div>
                            <div class="col-md-3 col-lg-4 col-xl-4">
                                <p class="customer-info-header">{{$invoice->description_3}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$invoice->price_3}}$</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$invoice->qty_3}}</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">{{$invoice->rowtotal_3}}$</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">@php echo number_format(($invoice->tax_amount_3 / $invoice->rowtotal_3 * 100), 3) . "%"; @endphp</p>
                            </div>
                        </div>
                        @endif
                        




                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 customer-info-column">
                        <p style="position: absolute;margin-top: -33px;font-weight: bold;text-transform: uppercase;/*z-index: 10000;*/background-color: black;padding-left: 10px;padding-right: 10px;border-radius: 12px;font-size: 13px;letter-spacing: 1px;padding-top: 3px;padding-bottom: 3px;color: white;">INVOICE SUMMARY</p>
                        <div class="row" style="padding-top: 5px;">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Invoice Subtotal</p>
                                    <p class="customer-info-content">{{$invoice->subtotal}}$</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Tax Rate</p>
                                    <p class="customer-info-content">@php echo ($invoice->taxTotal / $invoice->subtotal * 100) . "%"; @endphp</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Tax</p>
                                    <p class="customer-info-content">@php echo number_format($invoice->taxTotal, 2) . "$"; @endphp</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Total</p>
                                    <p class="customer-info-content">@php echo number_format($invoice->total, 2) . "$"; @endphp</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@include('admin.inc.foot')