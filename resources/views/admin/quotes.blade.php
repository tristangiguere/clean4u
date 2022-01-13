@include('admin.inc.head')

<main class="page landing-page">
        <section style="padding-top: 15px;padding-bottom: 40px;padding-left: 10px;padding-right: 10px;">
            <div class="container" style="margin-bottom: 20px;padding-left: 0px;padding-right: 0px;">
                <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 30px;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 id="invoice-title" style="margin: 0px;">Quotes</h1>
                    </div>
                    <div class="d-flex align-items-md-center align-items-xl-center">
                        <p class="customer-info-header" style="opacity: 50%;margin-right: 20px;font-size: 12px;">Pending |&nbsp; Overdue&nbsp; |&nbsp; Partial&nbsp; |&nbsp; Paid&nbsp; |<strong>&nbsp; All</strong></p><button class="btn btn-primary quote-action-button" type="button" style="background-color: black;border-color: black;">New</button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-md-1 col-lg-1 col-xl-1">
                                <p class="customer-info-header"><strong>Quote #</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-1 col-xl-1">
                                <p class="customer-info-header"><strong>Date</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-1 col-xl-1">
                                <p class="customer-info-header"><strong>Status</strong></p>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1">
                                <p class="customer-info-header"><strong>Total</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <p class="customer-info-header"><strong>Customer</strong></p>
                            </div>
                            <div class="col-md-1 col-lg-2 col-xl-2">
                                <p class="customer-info-header"><strong>Exp.</strong></p>
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
                        <div class="row itemrow">
                            <div class="col-md-1 col-lg-1 col-xl-1">
                                <p class="customer-info-header">121231</p>
                            </div>
                            <div class="col-md-2 col-lg-1 col-xl-1">
                                <p class="customer-info-header">2021-12-02</p>
                            </div>
                            <div class="col-md-2 col-lg-1 col-xl-1">
                                <p class="customer-info-header">Approved</p>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1">
                                <p class="customer-info-header">2431.99 $</p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <p class="customer-info-header">James St-James</p>
                            </div>
                            <div class="col-md-1 col-lg-2 col-xl-2">
                                <p class="customer-info-header">2021-12-02</p>
                            </div>
                            <div class="col text-end d-md-flex d-xl-flex justify-content-md-end justify-content-xl-end">
                                <p class="customer-info-header" style="opacity: 50%;"><strong>View&nbsp; |&nbsp; Edit&nbsp; |&nbsp; Archive&nbsp; |&nbsp; Print</strong></p>
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