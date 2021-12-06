<!doctype html>
<html lang="fr">
@extends('layouts.head')
<body>
<div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="">
            <img style="width: 10%; height: 10%;" src="img/logo.png" alt="logo"/> Moz-Art</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small w3-padding">
            <a href="/" class="w3-bar-item w3-button">Home</a>
            <a href="/services" class="w3-bar-item w3-button">Services</a>
            <a href="/sousmissions" class="w3-bar-item w3-button">Sousmissions</a>
            <a href="/contact" class="w3-bar-item w3-button">Contactez-nous</a>
            <a href="/login"><span class=" w3-bar-item glyphicon glyphicon-user"></span></a>
        </div>
    </div>
</div>
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image w3-opacity-min" src="img/R.png" alt="Car" width="1500" height="800">
    <div class="w3-display-middle w3-margin-top w3-center">
        <h1 class="w3-xxlarge w3-text-white">
            <span class="w3-padding w3-black w3-opacity-min"><b>L'art du polissage</b>
            </span> <br><br><span class="w3-hide-small w3-text-light-grey">Entreprise locale 100% québécoise!</span></h1>
    </div>
</header>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="/" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Voir plus haut</a>
    <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>



</body>
