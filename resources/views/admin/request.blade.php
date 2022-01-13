@include('admin.inc.head')

<main class="page landing-page">
        <section style="padding-top: 15px;padding-bottom: 40px;padding-left: 10px;padding-right: 10px;">
            <div class="container" style="margin-bottom: 20px;padding-left: 0px;padding-right: 0px;">
                <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 30px;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 id="invoice-title" style="margin: 0px;">Quotation request from {{$quoteRequest->first_name}} {{$quoteRequest->last_name}}</h1>
                    </div>
                    <div><button class="btn btn-primary quote-action-button" type="button">Reply</button><button class="btn btn-primary quote-action-button" type="button" style="margin-left: 10px;background-color: #bc251a;border-color: #bc251a;">Archive</button></div>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6 col-lg-6 col-xl-6 customer-info-column" style="margin-bottom: 40px;">
                        <p style="position: absolute;margin-top: -33px;font-weight: bold;text-transform: uppercase;/*z-index: 10000;*/background-color: black;padding-left: 10px;padding-right: 10px;border-radius: 12px;font-size: 13px;letter-spacing: 1px;padding-top: 3px;padding-bottom: 3px;color: white;">Requester INFORMATION</p>
                        <div class="row">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">First Name</p>
                                    <p class="customer-info-content">{{$quoteRequest->first_name}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Phone Number</p>
                                    <p class="customer-info-content"><strong>{{$quoteRequest->phone}}</strong></p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Date Submitted</p>
                                    <p class="customer-info-content"><strong>{{$quoteRequest->created_at}}</strong></p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Last Name</p>
                                    <p class="customer-info-content"><strong>{{$quoteRequest->last_name}}</strong><br></p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Email</p>
                                    <p class="customer-info-content"><strong>{{$quoteRequest->email}}</strong></p>
                                </div>
                                <div class="d-flex">
                                    <div class="customer-info-section">
                                        <p class="customer-info-header">Status</p>
                                        <p class="customer-info-content" style="color: var(--bs-green);">{{$quoteRequest->status}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-xl-5 customer-info-column">
                        <p style="position: absolute;margin-top: -33px;font-weight: bold;text-transform: uppercase;/*z-index: 10000;*/background-color: black;padding-left: 10px;padding-right: 10px;border-radius: 12px;font-size: 13px;letter-spacing: 1px;padding-top: 3px;padding-bottom: 3px;color: white;">VEHICLE DETAILS</p>
                        <div class="row">
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Vehicle type</p>
                                    <p class="customer-info-content">{{$quoteRequest->type}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Model</p>
                                    <p class="customer-info-content">{{$quoteRequest->model}}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Manufacturer</p>
                                    <p class="customer-info-content">{{$quoteRequest->make}}</p>
                                </div>
                                <div class="customer-info-section">
                                    <p class="customer-info-header">Production Year</p>
                                    <p class="customer-info-content">{{$quoteRequest->year}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 customer-info-column">
                        <p style="position: absolute;margin-top: -33px;font-weight: bold;text-transform: uppercase;/*z-index: 10000;*/background-color: black;padding-left: 10px;padding-right: 10px;border-radius: 12px;font-size: 13px;letter-spacing: 1px;padding-top: 3px;padding-bottom: 3px;color: white;">REQUEST MESSAGE</p>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <p class="customer-info-header"><strong>Message from {{$quoteRequest->first_name}}:</strong></p>
                            </div>
                        </div>
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row itemrow">
                            <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <p class="customer-info-header">{{$quoteRequest->services}}</p>
                            </div>
                        </div>
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@include('admin.inc.foot')