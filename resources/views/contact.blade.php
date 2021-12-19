@extends('layouts.head')
<br><br><br><br><br><br><br><br><br>
    <div class="w3-row w3-margin-top w3-large w3-section container justify-content-center">
        <div class="row m8 w3-panel center-block">
            <div class="w3-large col-lg-4 w3-margin-bottom text-black">
                <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right text-black"></i> Montréal, Qc<br>
                <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a class="text-black" href="tel:+5147305983"> 514-730-5983</a><br>
                <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a class="text-black" href="mailto:mozartpolissage@gmail.com"> mozartpolissage@gmail.com</a><br>
                <i class="fa fa-instagram fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a class="text-black" href="#"> @moz-art_polissage</a><br>
                <i class="fa fa-facebook fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a class="text-black" href="https://www.facebook.com/Moz-Art-polissage-102588678167635"> Moz-Art Polissage</a><br>
            </div>
            <div class="col-lg-8">
            <p>Envoyez-nous un message:</p>
            <form action="/action_page.php" target="_blank">
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Nom" required name="Name"/>
                    </div>
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"/>
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
</div>
@extends('layouts.foot')

