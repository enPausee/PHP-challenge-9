<?php
$errors = array();


    if(empty($_POST['nom']) | empty($_POST['prenom']) | empty($_POST['mail']) | empty($_POST['tel']) | empty($_POST['sujet']) | empty($_POST['message']))
    {
        echo "Il manque des informations";
    }

    else if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
    {
        echo "Format de l'email invalide";
    }
    else{
        echo ("Merci " . $_POST['prenom'] . " " . $_POST['nom'] . " de nous avoir contacté à propos de " . $_POST['sujet'] . ".  Un de nos conseiller vous contactera soit à l'adresse " . $_POST['mail'] . " ou par téléphone au " . $_POST['tel'] . " dans les plus bref délais pour traiter votre demande:" . $_POST['message'] . ".");
    }


?>