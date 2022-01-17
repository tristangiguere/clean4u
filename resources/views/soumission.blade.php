@include('layouts.head')

<header class="w3-display-container w3-content w3-center" style="max-width:100%; justify-content: center;">
    <img class="w3-image" src="img/quote.jpg" alt="background" style="min-width:1000px" width="1500" height="800">
    <div class="w3-display-middle w3-padding w3-col l6 m8">
        <div class="w3-container w3-black">
            <h2><i class="fa fa-car w3-margin-right"></i>Get a quote</h2>
        </div>
        <div class="w3-container w3-white w3-padding-16">
            <form action="quote" method="POST">
                @csrf
                <div class="w3-row-padding" style="margin:0 -16px;">
                    <div class="w3-half w3-margin-bottom">
                        <label><i class="fa"></i>Last Name</label>
                        <input class="w3-input w3-border" type="text" placeholder="Doe" name="last_name" required>
                    </div>
                    <div class="w3-half">
                        <label><i class="fa"></i>First Name</label>
                        <input class="w3-input w3-border" type="text" placeholder="John" name="first_name" required>
                    </div>
                </div>
                <div class="w3-row-padding" style="margin:8px -16px;">
                    <div class="w3-half w3-margin-bottom">
                        <label>Courriel</label>
                        <input class="w3-input w3-border" type="text" placeholder="Email address" name="email" required>
                    </div>
                    <div class="w3-half w3-margin-bottom">
                        <label>Numéro de téléphone</label>
                        <input class="w3-input w3-border" type="text" placeholder="Phone Number" name="phone" required>
                </div>
        </div>
                <div class="w3-row-padding" style="margin:8px -16px;">
                    <div class="w3-quarter">
                        <label for="exampleFormControlSelect1">Vehicle type</label>
                        <select name="type" class="w3-input">
                            <option>Car</option>
                            <option>Boat</option>
                            <option>Motorcycle</option>
                            <option>RV</option>
                        </select>
                    </div>
                    <div class="w3-quarter w3-margin-bottom">
                        <label>Year</label>
                        <input class="w3-input w3-border" type="text" placeholder="2021" name="year" required>
                    </div>
                    <div class="w3-quarter w3-margin-bottom">
                    <label>Make</label>
                    <input class="w3-input w3-border" type="text" placeholder="Audi" name="make" required>
                    </div>
                    <div class="w3-quarter w3-margin-bottom">
                        <label>Model</label>
                        <input class="w3-input w3-border" type="text" placeholder="S5 Sportback" name="model" required>
                    </div>
                </div>
                <div class="w3-row-padding" style="margin:8px -16px;">
                    <div class="w3-margin-bottom">
                        <label>Description of services requested</label>
                        <textarea class="w3-input w3-border" type="text" name="services" required>
                        </textarea>
                    </div>
                </div>


                <button class="w3-button w3-black" type="submit" name="send" id="submitbtn"><i class="fa fa-send-o w3-margin-right"></i> Submit</button>
            </form>
        </div>
    </div>
</header>





@extends('layouts.foot')
