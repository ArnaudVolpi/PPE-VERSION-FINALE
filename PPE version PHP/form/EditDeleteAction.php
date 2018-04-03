<?php
include_once('../include/connection.php');


if ($_GET['action'] == "Delete") {
    //Delete
    /*  -- MODIFICATION A FAIRE UNIQUEMENT SUR LA REQUETE --*/
    $req = $connexion->prepare("DELETE  FROM club WHERE NUM_CLUB=:numClub");
    $req->execute(array(
        'numClub' => $_POST['numClub']
    ));


} else {
    //Edit
    /*  -- MODIFICATION A FAIRE UNIQUEMENT SUR LA REQUETE --*/
    $req = $connexion->prepare("UPDATE club SET NOM_CLUB=:nomClub WHERE  NUM_CLUB=:numClub");
    $req->execute(array(
        'nomClub' => $_POST['nomClub'],
        'numClub' => $_POST['numClub']
    ));


}

//Vérification si erreur ou non lors de la requete
/*  -- MODIFICATION A FAIRE UNIQUEMENT SUR LES PRINTS --
Ex:  ("success-Club supprimé")  devient ("success-Championat supprimé" )
 !!!NE SURTOUT PAS TOUCHER A TOUT CE QU IL Y A AVANT LE - !!!

--*/
if ($req && $_GET['action'] == "Delete") {
    print("success-Club supprimé");
} elseif ($req && $_GET['action'] == "Update") {
    print("success-Club modifié");

} else {
    print("Error-Erreur lors de la requête!");
}
