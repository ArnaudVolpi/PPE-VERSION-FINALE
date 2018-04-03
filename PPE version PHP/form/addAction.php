<?php
include_once('../include/connection.php');
//Ajout
/*  -- MODIFICATION A FAIRE UNIQUEMENT SUR LA REQUETE --*/
$req = $connexion->prepare("INSERT INTO club VALUE (:numClub, :nomClub)");
$req->execute(array(
    'numClub' => $_POST['numClub'],
    'nomClub' => $_POST['nomClub']
));


//Vérification si erreur ou non lors de la requete
/*  -- MODIFICATION A FAIRE UNIQUEMENT SUR LES PRINTS --
Ex:  ("success-Club ajouté")  devient ("success-Championat ajouté" )
 !!!NE SURTOUT PAS TOUCHER A TOUT CE QU IL Y A AVANT LE - !!!

--*/
if ($req) {

    print("success-Club ajouté");
} else {
    print("Error-Erreur lors de l'insertion!");
}

