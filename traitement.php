<?php 
if(!isset($_POST['nom'],
$_POST['prenom'], 
$_POST['organisme'], 
$_POST['phone'], 
$_POST['mail'],
$_POST['adresse'],
$_POST['cp'],
$_POST['ville'],
$_POST['plume'],
$_POST['bille'],
$_POST['papier'],
$_POST['gomme'])){

}else{
    if(empty($_POST['nom']) or empty($_POST['prenom']) or empty($_POST['organisme']) 
    or empty($_POST['phone']) or empty( $_POST['mail']) or empty($_POST['adresse'])
    or empty($_POST['cp']) or empty($_POST['ville'])){
        header("Location: devis.php");
    }else{
        $plume = 2.95 * $_POST['plume'];
        $bille = .90 * $_POST['bille'];
        $papier = .50 * $_POST['papier'];
        $gomme = .35 * $_POST['gomme'];
        $totalHT = $plume + $bille + $papier + $gomme;
        $TVA = $totalHT * 0.10;
        $totalTTC = $totalHT + $TVA;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Le devis</title>
</head>

  
<body>
<?= include "header.php" ?>
    <h2 class="devis">Devis</h2>
    <section>
        <h3 class="coor">Les coordonnées</h3>
        <div class="coordonnees">
            <div class="mon_adresse">
                Grossite libraire <br>
                120 rue de Périgueux,<br>
                16000 Angoulême. <br>
                Tél: 0625103048
            </div>
            <div class="adresse_client">
                <p><?= htmlspecialchars($_POST['organisme']) ?></p>
                <p><?= htmlspecialchars($_POST['prenom'])?> <?= htmlspecialchars($_POST['nom']) ?> </p>
                <p> <?= htmlspecialchars($_POST['adresse']) ?> <br>
                <?= htmlspecialchars($_POST['cp']) ?> <?= htmlspecialchars($_POST['ville']) ?>
                </p>
                <p>
                    Mail: <?= htmlspecialchars($_POST['mail']) ?> <br>
                    Tél: <?= htmlspecialchars( $_POST['phone']) ?>    
                </p>
            </div>
        </div>
    </section>
    <section>
        <h3 class="art">Les articles</h3>
    </section>
    <div class= "tableau">
    <table>
        <thead>
            <tr>
                <th>Articles</th>
                <th>Prix Unitaire HT (€)</th>
                <th>Quantité</th>
                <th>TVA</th>
                <th>Total HT (€) </th>
            </tr>
        </thead>
        
        <tr>
            <td>Stylo à plume</td>
            <td>2,95</td>
            <td><?= $_POST['plume'] ?> </td>
            <td>10 %</td>
            <td><?= number_format($plume, 2, ',', ' ') ?></td>
        </tr>
        <tr>
            <td>Stylo à bille</td>
            <td>0,90</td>
            <td><?= $_POST['bille'] ?></td>
            <td>10 %</td>
            <td><?= number_format($bille, 2, ',', ' ') ?></td>
        </tr>
        <tr>
            <td>Crayons à papier</td>
            <td>0,50</td>
            <td><?= $_POST['papier'] ?></td>
            <td>10 %</td>
            <td><?= number_format($papier, 2, ',', ' ') ?></td>
        </tr>
        <tr>
            <td>Gommes</td>
            <td>0,35</td>
            <td><?= $_POST['gomme'] ?></td>
            <td>10 %</td>
            <td><?= number_format($gomme, 2, ',', ' ') ?></td>
        </tr>
    </table>
    </div>
    <div class="tab2">
        <table >
            <tr>
                <td>
                     Total HT (€)
                </td>
                <td>
                    <?= number_format($totalHT, 2, ',', ' ') ?>
                </td>
            </tr>
            <tr>
                <td> 
                    Total TVA (€)
                </td>
                <td>
                <?= number_format($TVA, 2, ',', ' ') ?>
                </td>
            </tr>
            <tr>
                <td>
                    Total TTC (€)
                </td>
                <td>
                <?= number_format($totalTTC, 2, ',', ' ') ?>
                </td>
            </tr>
        </table>
    </div> 
</body>
</html>