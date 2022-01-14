@include('layouts.head')
<section class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" style="height: 95vh;background:url('img/hero.jpg') rgba(0, 0, 0, 0.5);background-size:cover;background-blend-mode: multiply;">
    <div class="container d-flex d-lg-flex flex-column justify-content-center align-items-center align-content-center justify-content-lg-center">
        <h1 style="margin-bottom: 25px;font-family: 'Sora', sans-serif;color:white;font-size:60px;">A clean car is a happy car.</h1>
        <h4 style="font-family: 'Epilogue', sans-serif; color:white;">The best in the business, since 1990.</h4>
        
    </div>

    <div>
        <h1>
        <?php
$user = Auth::user();
echo $user;
?>
</h1>
    </div>

</section>
@extends('layouts.foot')


