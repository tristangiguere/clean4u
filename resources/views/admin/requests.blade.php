@include('admin.inc.head')

<main class="page landing-page">
        <section style="padding-top: 15px;padding-bottom: 40px;padding-left: 10px;padding-right: 10px;">
            <div class="container" style="margin-bottom: 20px;padding-left: 0px;padding-right: 0px;">
                <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 30px;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 id="invoice-title" style="margin: 0px;">Quotation Requests</h1>
                    </div>
                    <div class="d-flex align-items-md-center align-items-xl-center">
                        <p class="customer-info-header" style="opacity: 50%;font-size: 12px;">Pending&nbsp; |&nbsp; Completed&nbsp; |<strong>&nbsp; All</strong></p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-md-2 col-lg-1 col-xl-1">
                                <p class="customer-info-header"><strong>Request #</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <p class="customer-info-header"><strong>Date Received</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-1 col-xl-1">
                                <p class="customer-info-header"><strong>Status</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <p class="customer-info-header"><strong>Customer</strong></p>
                            </div>
                            <div class="col d-md-flex d-xl-flex justify-content-md-end justify-content-xl-end">
                                <p class="customer-info-header"><strong>Actions</strong></p>
                            </div>
                        </div>
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>

                        @foreach($quotationRequests as $quoteRequest)
                        <div class="row itemrow">
                            <div class="col-md-2 col-lg-1 col-xl-1">
                                <p class="customer-info-header"><a href="request/{{$quoteRequest->id}}">{{$quoteRequest->id}}</a></p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <p class="customer-info-header">{{$quoteRequest->created_at}}</p>
                            </div>
                            <div class="col-md-2 col-lg-1 col-xl-1">
                                <p class="customer-info-header">{{$quoteRequest->status}}</p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <p class="customer-info-header">{{$quoteRequest->first_name}} {{$quoteRequest->last_name}}</p>
                            </div>
                            <div class="col text-end d-md-flex d-xl-flex justify-content-lg-end justify-content-xl-end">
                                <p class="customer-info-header" style="opacity: 50%;"><strong><a href="request/{{$quoteRequest->id}}">View</a>&nbsp; |&nbsp; Archive</strong></p>
                            </div>
                        </div>
                        <div class="row itemrow">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    </main>
@include('admin.inc.foot')