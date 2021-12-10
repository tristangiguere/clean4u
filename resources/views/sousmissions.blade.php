@extends('layouts.head')
<header class="w3-display-container w3-content w3-center" style="max-width:1500px; justify-content: center;">
    <img class="w3-image" src="img/R.png" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
    <div class="w3-display-middle w3-padding w3-col l6 m8">
        <div class="w3-container w3-blue-grey">
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
                    <div class="w3-half">
                        <label for="exampleFormControlSelect1">Sélectionnez le type de véhicule</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Voiture</option>
                            <option>Bateau</option>
                            <option>Moto</option>
                            <option>Motorisé</option>
                        </select>
                    </div>
                    <div class="w3-half w3-margin-bottom">
                        <label>Année</label>
                        <input class="w3-input w3-border" type="text" placeholder="Année" name="year" required>
                    </div>
                </div>
                <div class="w3-row-padding" style="margin:8px -16px;">
                    <div class="w3-margin-bottom">
                        <label>Description des services demandés</label>
                        <textarea class="w3-input w3-border" type="text" name="description" required>
                        </textarea>
                    </div>
                </div>


                <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-send-o w3-margin-right"></i> Envoyer</button>
            </form>
        </div>
    </div>
</header>





@extends('layouts.foot')
