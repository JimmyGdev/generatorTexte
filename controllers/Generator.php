<?php

//récupérer toutes les valeurs envoyées

$checkbox1 ="";
$checkbox2 ="";
$checkbox3 ="";

$checkboxes = "";

if(isset($_GET["checkbox1"])){
    
    $checkbox1 = "checkbox1 ";
}
if(isset($_GET["checkbox2"])){
    $checkbox2= "checkbox2 ";
}
if(isset($_GET["checkbox3"])){
    $checkbox3= "checkbox3 ";
}

$select= $_GET["selection"];


$text= $_GET["text"];

$radio= $_GET["radio"];





file_put_contents("../fichiers-text/resultat.txt", "Réponse 1\n$checkbox1$checkbox2$checkbox3\nRéponse 2\n$select \nRéponse 3\n$text\nRéponse 4\n$radio");

?>

<p> <a href="../index.php">Retour au questionnaire</a></p>
<p><a href="../fichiers-text/resultat.txt" download> Télécharger le fichier généré</a> </p> 