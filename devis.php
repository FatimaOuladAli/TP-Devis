


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Demande de devis</title>
</head>

<body>
<?php require 'header.php'; ?> 

    <main>
        <div class="wrapper">
            <h2>Demande de devis</h2>
            <form action="traitement.php" method="post">
                <div class="renseignement">
                    
                    <div>
                        <div>
                            <label for="organisme"> Organisme *</label>
                            <input type="text" name="organisme" id="organisme">
                        </div>
                        <div>
                            <label for="nom"> Nom *</label>
                            <input type="text" name="nom" id="nom">
                        </div>
                        <div>
                            <label for="prenom"> Prénom *</label>
                            <input type="text" name="prenom" id="prenom">
                        </div>
                        <div>
                            <label for="tel"> Numéro de téléphone *</label>
                            <input type="tel" name="phone" id="phone">
                        </div>
                    </div>
                    <div>
                        
                        <div>
                            <label for="email"> Adresse mail *</label>
                            <input type="email" name="mail" id="mail">
                        </div>
                        <div>
                            <label for="adresse"> Adresse *</label>
                            <input type="text" name="adresse" id="adresse">
                        </div>
                        <div>
                            <label for="cp"> Code Postale *</label>
                            <input type="text" name="cp" id="cp">
                        </div>
                        <div>
                            <label for="ville"> Ville *</label>
                            <input type="text" name="ville" id="ville">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="produits">

                        <div>
                            <label for="produit"> Stylo à plume (prix unitaire HT 2.95 €) </label>
                            <input type="number" id="plume" name="plume" min="0" max="100">
                        </div>
                        <div>
                            <label for="produit"> Stylo à bille (prix unitaire HT 0.90 €)</label>
                            <input type="number" id="bille" name="bille" min="0" max="100">
                        </div>
                        <div>
                            <label for="produit"> Crayons à papier (prix unitaire HT 0.50 €)</label>
                            <input type="number" id="papier" name="papier" min="0" max="100">
                        </div>
                        <div>
                            <label for="produit"> Gommes (prix unitaire HT 0.35 €)</label>
                            <input type="number" id="gomme" name="gomme" min="0" max="100">
                        </div>
                    </div>
                    <div class="bouton">
                        <button type="submit"> Envoyer</button> 
                    </div>
                </div>

            </form>
        </div>
    </main>
</body>

</html>