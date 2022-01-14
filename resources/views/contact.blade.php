@include('layouts.head')
<br><br><br><br><br><br><br><br><br>
    <div class="w3-row w3-margin-top w3-large w3-section container justify-content-center">
        <div class="row m8 w3-panel center-block">
            <div class="w3-large col-lg-4 w3-margin-bottom text-black">
                <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right text-black"></i> Montreal, Qc<br>
                <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a class="text-black" href="#"> 514-730-5983</a><br>
                <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a class="text-black" href="#"> hello@clean4u.com</a><br>
                <i class="fa fa-instagram fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a class="text-black" href="#"> @clean4umtl</a><br>
                <i class="fa fa-facebook fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a class="text-black" href="#"> Clean4U Mtl</a><br>
            </div>
            <div class="col-lg-8">
            <p>Send us a message:</p>
            <form action="contact" method="POST">
            @csrf
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"/>
                    </div>
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"/>
                    </div>
                </div>
                <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                <button class="w3-button w3-black w3-right w3-section" type="submit">
                    <i class="fa fa-paper-plane"></i> LET'S GO!
                </button>
            </form>
        </div>
    </div>
</div>
</div>
@extends('layouts.foot')

