<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/generated.css">
    <title>Document généré par formulaire</title>
</head>
<body >
    <div id='content'>

    <div class = "box-client">
        <h2>Client</h2>
        <p>Nom : $variable</p>
        <p>Prénom : $variable</p>
        <p>Adresse: $variable</p>


    </div>

    <div class = "box-technicien">
        <p>Technicien : $variable</p>
        <p>Date/heure: $variable</p>
        <p>Temps passé</p>

    </div>

    <div class = "intervention">
        <h2>Type d'intervention</h2>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <div class = "matériel">
        <h2>Matériel à prévoir</h2>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

    </div>

    <div class = "commentaires-box">
        <h2>Commentaires et observation</h2>
    </div>

    <div class = "footer-box">
        <div>Fait à</div>
        <div>Remarque client</div>
        <div>Signature client</div>

    </div>
    </div>

<div id = "editor">

</div>
    <button id = 'cmd'> generer le pdf</button>

<!-- <a href="./contrat-generer.php" download>download link</a> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="../javascript/generatePDF.js"></script>
</body>
</html>