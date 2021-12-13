@extends('layouts.head')

<?php
$fnameError = $lnameError = $emailError = $phoneError = $typeError = $makeError = $modelError = $yearError = $serviceError ="";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $fname = $_POST["FirstName"];
    $lname = $_POST["LastName"];
    $email = $_POST["Email"];
    $phone = $_POST["PhoneNumber"];
    $type = $_POST['VehicleType'];
    $make = $_POST["Manufacturer"];
    $model = $_POST["VehicleModel"];
    $year = $_POST["VehicleYear"];
    $services = $_POST["ServicesDescription"];
    $valid = true;

    if(empty($fname)){
        $valid=false;
        $fnameError = "Prénom manquant";
    }

    if(empty($lname)){
        $valid=false;
        $lnameError = "Nom manquant";
    }

    if(empty($email)){
        $valid=false;
        $emailError = "Email manquant";
    }
    if(empty($phone)){
        $valid=false;
        $phoneNumberError = "Téléphone manquant";
    }

    if (!isset($type)){
        $valid=false;
        $emailError = "Type de véhicule manquant";
    }

    if (!isset($make)){
        $valid=false;
        $makeError = "Fabricant manquant";
    }

    if(empty($model)){
        $valid=false;
        $modelError = "Modèle manquant";
    }

    if(empty($year)){
        $valid=false;
        $yearError = "Année manquante";
    }

    if(empty($services)){
        $valid=false;
        $serviceError = "Service manquant";
    }


    if($valid){
        $dbhost = 'localhost:3306';
        $dbuser = 'webapp';
        $dbpass = 'wobeE7we2wMosRXwszPJ3pZYh3TBERSFZVtZoLtsGxcW';
        $db = 'clientFacingWeb';

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

        if (!$conn) {
            die("Could not connect: <br>");
        }
        echo "<p>Connected Successfully</p>";

        $sqlQuery = "INSERT INTO Quote_Requests (FirstName, LastName, Email, PhoneNumber, VehicleType, Manufacturer, VehicleModel, VehicleYear, ServicesDescription) VALUES ('$fname', '$lname', '$email', '$phone', '$type', '$make', '$model', '$year', '$services');";
        $result = $conn->query($sqlQuery);

        if ($conn->query($sqlQuery) === TRUE) {
            echo "<p>Votre sousmission a été créé!</p>";
        }

        mysqli_close($conn);
    }
}
?>

<header class="w3-display-container w3-content w3-center" style="max-width:1500px; justify-content: center;">
    <img class="w3-image" src="img/R.png" alt="background" style="min-width:1000px" width="1500" height="800">
    <div class="w3-display-middle w3-padding w3-col l6 m8">
        <div class="w3-container w3-black">
            <h2><i class="fa fa-car w3-margin-right"></i>Votre soumission</h2>
        </div>
        <div class="w3-container w3-white w3-padding-16">
            <form action="/action_page.php" target="_blank">
                <div class="w3-row-padding" style="margin:0 -16px;">
                    <div class="w3-half w3-margin-bottom">
                        <label><i class="fa"></i>Nom</label>
                        <input class="w3-input w3-border" type="text" placeholder="Nom" name="nom" required>
                    </div>
                    <div class="w3-half">
                        <label><i class="fa"></i>Prénom</label>
                        <input class="w3-input w3-border" type="text" placeholder="Prénom" name="prenom" required>
                    </div>
                </div>
                <div class="w3-row-padding" style="margin:8px -16px;">
                    <div class="w3-half w3-margin-bottom">
                        <label>Courriel</label>
                        <input class="w3-input w3-border" type="text" placeholder="Adresse courriel" name="email" required>
                    </div>
                    <div class="w3-half w3-margin-bottom">
                        <label>Numéro de téléphone</label>
                        <input class="w3-input w3-border" type="text" placeholder="Numéro de téléphone" name="phone" required>
                </div>
        </div>
                <div class="w3-row-padding" style="margin:8px -16px;">
                    <div class="w3-quarter">
                        <label for="exampleFormControlSelect1">Véhicule</label>
                        <select class="w3-input" id="exampleFormControlSelect1">
                            <option>Voiture</option>
                            <option>Bateau</option>
                            <option>Moto</option>
                            <option>Motorisé</option>
                        </select>
                    </div>
                    <div class="w3-quarter w3-margin-bottom">
                        <label>Année</label>
                        <input class="w3-input w3-border" type="text" placeholder="Année" name="year" required>
                    </div>
                    <div class="w3-quarter w3-margin-bottom">
                    <label>Marque</label>
                    <input class="w3-input w3-border" type="text" placeholder="Marque" name="year" required>
                    </div>
                    <div class="w3-quarter w3-margin-bottom">
                        <label>Modèle</label>
                        <input class="w3-input w3-border" type="text" placeholder="Modèle" name="year" required>
                    </div>
                </div>
                <div class="w3-row-padding" style="margin:8px -16px;">
                    <div class="w3-margin-bottom">
                        <label>Description des services demandés</label>
                        <textarea class="w3-input w3-border" type="text" name="description" required>
                        </textarea>
                    </div>
                </div>


                <button class="w3-button w3-black" type="submit"><i class="fa fa-send-o w3-margin-right"></i> Envoyer</button>
            </form>
        </div>
    </div>
</header>





@extends('layouts.foot')
