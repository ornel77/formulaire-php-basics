<?php 
    $firstname = $_POST['user_firstname'];
    $lastname = $_POST['user_lastname'];
    $email = $_POST['user_email'];
    $phone = $_POST['phone_number'];
    $subject = $_POST['subject'];
    $message = $_POST['user_message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
</head>
<body>
    <h1>Merci</h1>
    <p>
        Merci <?= $firstname . " " . $lastname ?> de nous avoir contacté à propos de “<?= $subject ?>”.
    </p>
    <p>
        Un de nos conseillers vous contactera soit à l’adresse <?=  $email ?> ou par téléphone au <?=  $phone ?> dans les plus brefs délais pour traiter votre demande : 
    </p>
    <p>
    <?=  $message ?>
    </p>
</body>
</html>