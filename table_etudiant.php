<?php

require_once("connexion.php");

$sql = "CREATE TABLE etudiant (
    id int(11) primary key NOT NULL AUTO_INCREMENT,
    nom varchar(100) NOT NULL,
    prenom varchar(100) NOT NULL,
    adresse varchar(255) NOT NULL,
    age int(10) NOT NULL)";

if (mysqli_query($connexion, $sql)){
    echo "la table etudiant a été crée avec succes";
}   else {
    echo "la creation de la table étudiant a rencontre un problème : ".mysqli_error($connexion);
}

mysqli_close($connexion);

?>