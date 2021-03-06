<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Clean4U | Admin Area</title>
    <link href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link href="{{ asset('admin/css/adminui.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top clean-navbar" style="padding: 8px;background-color: black;">
        <div class="container" style="padding-top:5px;padding-bottom:5px;"><div><a class="navbar-brand logo" href="<?php echo url('/admin/quotes');?>" style="color: white;"><strong>Clean4U</strong> Admin</a><p style="margin-bottom: 0px;color:white;font-size:14px;">Hello, <a href="/changepassword" style="color:white;">{{ Session::get('username') }}.</a> &nbsp;<a href="/logout" style="color:white;"><strong>Logout</strong></a></p></div><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo url('/admin/quotes');?>" style="color: white;">QUOTES</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo url('/admin/invoices');?>" style="color: white;">INVOICES</a></li>
                    <li class="nav-item" style="padding-right: 0;"><a class="nav-link" href="<?php echo url('/admin/requests');?>" style="color: white;">MESSAGES</a></li>
                </ul>
            </div>
        </div>
    </nav>