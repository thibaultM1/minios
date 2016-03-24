<?php

include __DIR__ . '/../top.php';

    // formulaire envoyé, on récupère tous les champs.
    $nom     = (isset($_POST['nom']))     ? ($_POST['nom'])     : '';
    $email   = (isset($_POST['email']))   ? ($_POST['email'])   : '';
    $prenom   = (isset($_POST['prenom']))   ? ($_POST['prenom'])   : '';
    $password = (isset($_POST['password'])) ? ($_POST['password']) : '';

include __DIR__ . '/../bottom.php';

?>