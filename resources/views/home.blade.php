@include('layouts.head')
<section class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" style="height: 95vh;background:url('img/R.png') rgba(0, 0, 0, 0.5);background-size:cover;background-blend-mode: multiply;">
    <div class="container d-flex d-lg-flex flex-column justify-content-center align-items-center align-content-center justify-content-lg-center">
        <h1 style="margin-bottom: 25px;font-family: 'Sora', sans-serif;color:white;font-size:60px;">L'art du polissage</h1>
        <h4 style="font-family: 'Epilogue', sans-serif; color:white;">Une entreprise locale 100% québécoise!</h4>
        
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


