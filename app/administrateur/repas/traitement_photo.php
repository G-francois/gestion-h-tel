<?php
$donnees = [];
$erreurs = [];
$message_erreur_global = "";
$message_success_global = "";



if (isset($_POST['change_photo'])) {

    if (check_password_exist(($_POST['password']), $_SESSION['utilisateur_connecter_admin']['id'])) {

        if (isset($_FILES["image"]) && !empty($_FILES["image"]["name"])) {

            if ($_FILES["image"]["size"] > 3000000) {
                $erreurs["image"] = "La taille de l'image est supérieure à 3 Mo. Veuillez télécharger une image plus petite.";
            } else {
                $dossierImage = "public/images/";

                // Vérifier si le dossier repas existe, sinon le creer
                $dossierRepas = $dossierImage . "repas/";
                if (!is_dir($dossierRepas)) {
                    mkdir($dossierRepas);
                }


                // Vérifier si le dossier categorie existe dans le dossier repas, sinon le creer
                $dossierCategorie = $dossierRepas . $donnees["categorie"] . "/";
                if (!is_dir($dossierCategorie)) {
                    mkdir($dossierCategorie);
                }

                // Le chemin de destination pour enregistrer l'image
                $image_path = $dossierCategorie . $_FILES["image"]["name"];

                // Vérifier le type de fichier (vous pouvez ajouter d'autres vérifications si nécessaire)
                $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
                $file_extension = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

                if (in_array($file_extension, $allowed_extensions)) {
                    // Déplacer le fichier téléchargé vers le dossier de destination
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $image_path)) {
                        // Ajoutez PATH_PROJECT au chemin de l'image
                        $image_path_with_project = PATH_PROJECT . $image_path;
                        $donnees["image_path"] = $image_path_with_project;

                        // Votre code supplémentaire pour la mise à jour de la photo de la chambre
                        if (!empty($params[3])) {
                            $cod_repas = $params[3];
                            $miseajour = mise_a_jour_photo_repas($cod_repas, $donnees["image_path"]);

                            if ($miseajour) {
                                $message_success_global = "La modification de la photo est effectuée avec succès.";
                            } else {
                                $message_erreur_global =  "La modification de la photo a échoué. Veuillez réessayer.";
                            }
                        } else {
                            $message_erreur_global = "Désolé, il n'y a pas de chambre disponible pour le moment.";
                        }
                    } else {
                        $message_erreur_global = "Oups ! Une erreur s'est produite lors de l'enregistrement de l'image.";
                    }
                } else {
                    $message_erreur_global = "L'extension de fichier n'est pas autorisée. Veuillez télécharger une image au format JPG, JPEG, PNG ou GIF.";
                }
            }
        } else {
            $message_erreur_global = "Veuillez télécharger une image pour la chambre.";
        }
    } else {
        $message_erreur_global = "La mise à jour à échouer. Vérifier votre mot de passe et réessayez.";
    }
}

$_SESSION['modification-photo-erreur'] = $message_erreur_global;

header('location:' . PATH_PROJECT . 'administrateur/repas/modifier-repas/' .  $params[3]);
