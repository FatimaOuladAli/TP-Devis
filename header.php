<?php
session_start();
if(!isset($_SESSION['login'])){
    $_SESSION['message'] = ['class' => 'warning', 'text' => 'Merci de bien vouloir vous connecter'];
    header('location: index.php');
}

?>


<header>
        <div class="wrapper">
            <div class="haut_de_page">
                <div>
                    <img src="images/logo_devis.jpg" alt="logo" width="180">
                </div>
                <div>
                    <h1>Grossiste Libraire</h1>
                    <p>Vente réservée aux professionnels </p>
                </div>
                <div>
                    <a href="#">
                        <img src="images/login.png" alt="connexion" width="60">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="devis.php"> Demande de devis</a></li>
            <li><a href="index.php?deconnexion">Déconnexion</a></li>
        </ul>
    </nav>