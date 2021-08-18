<?php
session_start();
$login = 'fatima';
$mdp = '$2y$10$i3ZYsoktV2klMJexYQPcN.oPSDfMCWKnfN/SzjGZKHHmnpdlsZn2e';

if(isset($_GET['deconnexion'])){
    unset($_SESSION['login']);
    $_SESSION['message'] = ['class' => 'success', 'text' => 'Vous venez de vous déconnecter'];
}

if(isset($_POST['login'], $_POST['mdp']))
{
    if($_POST['login'] == $login && $_POST['mdp'] == password_verify($_POST['mdp'], $mdp))
    {
        $_SESSION['login'] = $_POST['login'];
        header('location: devis.php');
    }else{
        $_SESSION['message'] = ['class' => 'warning', 'text' => 'identifiants incorrects'];
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<h1>Systhème d'authentification</h1>
<?php 
        if(isset($_SESSION['message'])){
            echo '<div class="message ' . $_SESSION['message']['class'] . '">' . $_SESSION['message']['text'] . '</div>';
            unset($_SESSION['message']);
        }
    ?>
<form action="index.php" method="post">
    <div class="field">
        <label for="login"> Nom d'utilisateur</label>
        <input type="text" name="login" id="login">
    </div>
    <div class="field">
        <label for="mdp"> Mot de passe</label>
        <input type="password" name="mdp" id="mdp">
    </div>
    <input type="submit" value="Valider">
</form>
    
</body>
</html>