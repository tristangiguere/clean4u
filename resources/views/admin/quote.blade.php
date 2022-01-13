@include('admin.inc.head')

<main class="page landing-page">
        <section style="padding-top: 15px;padding-bottom: 40px;padding-left: 10px;padding-right: 10px;">
            <div class="container" style="margin-bottom: 20px;padding-left: 0px;padding-right: 0px;">
                <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 30px;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 id="invoice-title" style="margin: 0px;">Quote #2413</h1>
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
                                    <p class="customer-info-content">James Arthur</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Email</p>
                                    <p class="customer-info-content">james@arthur.com</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Phone Number</p>
                                    <p class="customer-info-content">514-243-7713</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Company Name</p>
                                    <p class="customer-info-content">Bell Canada</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Address</p>
                                    <p class="customer-info-content">3213 rue Mont-Rose</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">City</p>
                                    <p class="customer-info-content">Montreal</p>
                                </div>
                                <div class="d-flex">
                                    <div class="customer-info-section" style="margin-right: 30px;">
                                        <p class="customer-info-header">Province</p>
                                        <p class="customer-info-content">Quebec</p>
                                    </div>
                                    <div class="customer-info-section">
                                        <p class="customer-info-header">Postal Code</p>
                                        <p class="customer-info-content">J5R 6C3</p>
                                    </div>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Country</p>
                                    <p class="customer-info-content">Canada</p>
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
                                    <p class="customer-info-content">2021/12/02</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Status</p>
                                    <p class="customer-info-content">Approved</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Expiry Date</p>
                                    <p class="customer-info-content">2021/12/22</p>
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
                                    <p class="customer-info-header">Notes</p>
                                    <p class="customer-info-content">Lorem ipsum dolor</p>
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
                                <p class="customer-info-header">Car Polishing</p>
                            </div>
                            <div class="col-md-3 col-lg-4 col-xl-4">
                                <p class="customer-info-header">Lorem Ipsum Dolor Sit Amet</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">149.99 $</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">1</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">149.99 $</p>
                            </div>
                            <div class="col">
                                <p class="customer-info-header">14.975 %</p>
                            </div>
                        </div>
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 customer-info-column">
                        <p style="position: absolute;margin-top: -33px;font-weight: bold;text-transform: uppercase;/*z-index: 10000;*/background-color: black;padding-left: 10px;padding-right: 10px;border-radius: 12px;font-size: 13px;letter-spacing: 1px;padding-top: 3px;padding-bottom: 3px;color: white;">QUOTE SUMMARY</p>
                        <div class="row" style="padding-top: 5px;">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Quote Subtotal</p>
                                    <p class="customer-info-content">149.99 $</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Tax Rate</p>
                                    <p class="customer-info-content">14.975 %</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Tax</p>
                                    <p class="customer-info-content">38.73 $</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Total</p>
                                    <p class="customer-info-content">188.72 $</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@include('admin.inc.foot')