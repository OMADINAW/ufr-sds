<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFR-SDS</title>
    <link rel="stylesheet" href="style/style.css">
    
</head>
<body>
    <div class="circle3"><h1 class="h12">ENREGISTREMENT REUSSI</h1></div>



    <?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date_naissance=$_POST['date_naissance'];
$date_entree=$_POST['date_entree'];
$genre=$_POST['genre'];
$personne_a_prevenir=$_POST['personne_a_prevenir'];

include('connexion.php');
$reponse=$bdd->query("INSERT INTO `etudiants`(`nom`, `prenom`, `date_naissance`, `date_entree`, `genre`, `personne_a_prevenir`) VALUES ('$nom','$prenom','$date_naissance','$date_entree','$genre','$personne_a_prevenir')");
$reponse->closeCursor();

echo('Enregistrement effectué avec succès!');

?>


</body>
</html>
