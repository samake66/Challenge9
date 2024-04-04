<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")

{
    
    $errors = array();
    if(empty($_POST['prenom']))
    {
        $errors['prenom']= " votre prenom ne peut pas être vide";
    }
 
    if(empty($_POST['nom']))
    {
        $errors['nom']= " votre nom ne peut pas être vide";
    }
    if(empty($_POST['mail']))
    {
        $errors['mail1']= " votre mail ne peut pas être vide";
    }
    if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $errors['mail2'] = "format de mail invalide";
      }
    if(empty($_POST['tel']))
    {
        $errors['tel']= " votre numero ne peut pas être vide";
    }

    if(count($errors) == 0)
    {

        echo 'Merci '.$_POST['prenom'].' '.$_POST['nom'].' de nous avoir contacté à propos de '.$_POST['sujet'];
        echo '</br>';
        echo 'Un de nos conseiller vous contactera soit à l’adresse '.$_POST['mail'].' ou par téléphone au '.$_POST['tel'].' dans les plus brefs délais pour traiter votre demande : ';
        echo '</br>';

        echo $_POST['message'];
    }
    else{
        var_dump($errors);
        //$errors['nom'] && $errors['prenom'] && $errors['mail'] && $errors['tel'];
    }
}
?>

