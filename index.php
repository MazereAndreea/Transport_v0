<?php

if(isset($_POST['submit']))
{
    $nume = $_POST['nume-si-prenume'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $incarcare = $_POST['relatie-de-transport'];

    $mailTo = "vitalro94@yahoo.com";
    $headers = "From: ".$email;
    $txt = "You have received an e-mail from ".$nume.".\n\n".$incarcare;

    mail($mailTo, $telefon, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>