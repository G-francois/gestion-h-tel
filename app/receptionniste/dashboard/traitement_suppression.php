<?php
$_SESSION['suppression-erreurs'] = "";

$_SESSION['donnees-utilisateur'] = [];

$donnees = [];

$erreurs = [];

if (isset($_POST['suppression'])) {

    if (check_password_exist(($_POST['password']), $_SESSION['utilisateur_connecter_recept']['id'])) {
        if (supprimer_utilisateur($_SESSION['utilisateur_connecter_recept']['id'])) {
            session_destroy();
            header('location:' . PATH_PROJECT . 'receptionniste/connexion/index');
        } else {
            $_SESSION['suppression-erreurs'] = "La suppression à echouer. Veuiller réessayez.";  
        }
    } else {
        $_SESSION['suppression-erreurs'] = "La suppression à echouer. Vérifier votre mot de passe et réessayez.";
    }
} else {
    $_SESSION['suppression-erreurs'] = "La suppresion à echouer. Veuiller réessayez.";
}

$_SESSION['suppression-message-success-global'] = $message_success_global;
header('location:' . PATH_PROJECT . 'receptionniste/dashboard/profil');

