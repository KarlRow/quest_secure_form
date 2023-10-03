<?php 

$name = $_POST['user_name'];
$surname = $_POST['user_surname'];
$phone = $_POST['user_phone'];
$subjectSelect = $_POST['subject'];
$mail = $_POST['user_mail'];
$message = $_POST['user_message'];
$errors = [];


if(empty($name) || empty($surname) || empty($phone) || empty($subjectSelect) || empty($mail) || empty($message))  {       
    $errors[] = "Erreur, tous les champs doivent être remplis";     
}
else {
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas conforme";     
    }
    else {
        echo "Bonjour Mr " . $surname . ' ' . $name . ' ' . " et merci de nous avoir contacté à propos de " . $subjectSelect . ". ";
        echo "Un de nos conseillers vous contactera soit à l’adresse " . $mail . " ou par téléphone au " . $phone . " dans les plus brefs délais pour traiter votre demande : ";
        echo $message;
    }
}

foreach ($errors as $error) {
    echo $error;
}

?>
<html>
    <a href="secure_form.php">Retourner au formulaire</a>
</html>

