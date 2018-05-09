<?php
header('content-Type: application/json');
include ('./inc/pdo.php');
$error = array();
// Est ce que mon formulaire est soumis? Personnelement je pense qu'il est insoumis pluto que soumis mais aprés sa dépend de la vision de chacun . B(.)(.)BS

//faille XSS
$marque = trim(strip_tags($_POST['marque']));
$modele = trim(strip_tags($_POST['modele']));
$annee = trim(strip_tags($_POST['annee']));
$couleur = trim(strip_tags($_POST['couleur']));


// Validation

if(count($error) == 0) {
    //insert into
    // envoie mail
    //Protection des Injection Sql (INSERT/ UPDATE)
    $sql = "INSERT INTO voitures
                (marque,modele,annee,couleur)
                VALUES (:marque,:modele,:annee,:couleur)";

    $query = $pdo->prepare($sql);
    $query->bindValue(':marque',$marque,PDO::PARAM_STR);
    $query->bindValue(':modele',$modele,PDO::PARAM_STR);
    $query->bindValue(':annee',$annee,PDO::PARAM_INT);
    $query->bindValue(':couleur',$couleur,PDO::PARAM_STR);


    $query->execute();
    echo '<h2>Votre formulaire a bien été enregistré</h2>';
}
else {
    foreach ($error as $key => $value) {
        echo $value;
    };
}

?>