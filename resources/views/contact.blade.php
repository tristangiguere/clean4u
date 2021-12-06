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
<br><br><br><br><br><br><br><br><br>
    <div class="w3-row w3-margin-top w3-large w3-section center-block">
        <div class="w3-col m8 w3-panel center-block">
            <div class="w3-large w3-margin-bottom">
                <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Montréal, Qc<br>
                <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a href="tel:+5147305983"> 514-730-5983</a><br>
                <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a href="mailto:mozartpolissage@gmail.com"> mozartpolissage@gmail.com</a><br>
                <i class="fa fa-instagram fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a href="#"> @moz-art_polissage</a><br>
                <i class="fa fa-facebook fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a href="https://www.facebook.com/Moz-Art-polissage-102588678167635"> Moz-Art Polissage</a><br>
            </div>
            <p>Envoyez-nous un message:</p>
            <form action="/action_page.php" target="_blank">
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Nom" required name="Name">
                    </div>
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                    </div>
                </div>
                <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                <button class="w3-button w3-black w3-right w3-section" type="submit">
                    <i class="fa fa-paper-plane"></i> ENVOYER LE MESSAGE
                </button>
            </form>
        </div>
    </div>
</div>
</body>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="/contact" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Voir plus haut</a>
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

