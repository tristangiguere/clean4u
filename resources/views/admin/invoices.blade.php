@include('admin.inc.head')

<main class="page landing-page">
        <section style="padding-top: 15px;padding-bottom: 40px;padding-left: 10px;padding-right: 10px;">
            <div class="container" style="margin-bottom: 20px;padding-left: 0px;padding-right: 0px;">
                <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 30px;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 id="invoice-title" style="margin: 0px;">Invoices</h1>
                    </div>
                    <div class="d-flex align-items-md-center align-items-xl-center">
                    <p class="customer-info-header" style="opacity: 50%;margin-right: 20px;font-size: 12px;"><a href="/admin/invoices/unpaid">Unpaid</a> |&nbsp; <a href="/admin/invoices/paid">Paid</a>&nbsp; |<strong>&nbsp; <a href="/admin/invoices">All</a></strong></p><a href="/admin/invoice/new"><button class="btn btn-primary quote-action-button" type="submit" style="background-color: black;border-color: black;">New</button></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-md-1 col-lg-1 col-xl-1">
                                <p class="customer-info-header"><strong>Invoice #</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-1 col-xl-1">
                                <p class="customer-info-header"><strong>Due Date</strong></p>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1">
                                <p class="customer-info-header"><strong>Status</strong></p>
                            </div>
                            <div class="col-md-1 col-lg-2 col-xl-1">
                                <p class="customer-info-header"><strong>Total</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <p class="customer-info-header"><strong>Customer</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-1 col-xl-2">
                                <p class="customer-info-header"><strong>Invoice Date</strong></p>
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
                        @foreach($invoices as $invoice)
                        <div class="row itemrow">
                            <div class="col-md-1 col-lg-1 col-xl-1">
                                <p class="customer-info-header">{{$invoice->id}}</p>
                            </div>
                            <div class="col-md-2 col-lg-1 col-xl-1">
                                <p class="customer-info-header">{{$invoice->due_date}}</p>
                            </div>

                            @if($invoice->status == 0)
                            <div class="col-md-1 col-lg-1 col-xl-1">
                                <p class="customer-info-header">Unpaid</p>
                            </div>
                            @elseif($invoice->status == 1)
                            <div class="col-md-1 col-lg-1 col-xl-1">
                                <p class="customer-info-header">Paid</p>
                            </div>
                            @endif
                            <div class="col-md-1 col-lg-2 col-xl-1">
                                <p class="customer-info-header">{{$invoice->total}}$</p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <p class="customer-info-header">{{$invoice->name}}</p>
                            </div>
                            <div class="col-md-2 col-lg-1 col-xl-2">
                                <p class="customer-info-header">{{$invoice->created_date}}</p>
                            </div>
                            <div class="col text-end d-md-flex d-xl-flex justify-content-md-end justify-content-xl-end">
                                <p class="customer-info-header" style="opacity: 50%;"><strong><a href="/admin/invoice/{{$invoice->id}}">View</a>&nbsp; |&nbsp; Archive&nbsp; |&nbsp; Print</strong></p>
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