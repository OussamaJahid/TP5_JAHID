<?php

require_once("connexion.php");

$sql = "INSERT INTO etudiant (nom, prenom, adresse, age) VALUES 
    ('JAHID', 'Ayla', 'Casablanca', 21),
    ('BAHAJ', 'Iyad', 'Metz', 21),
    ('GHAIB', 'Mouna', 'Agadir', 21),
    ('JAHID', 'Oussama', 'Agadir', 21),
    ('BAHAJ', 'Nail', 'Metz', 21),
    ('JAHID', 'Jalil', 'Casablanca', 21),
    ('BAAZIZI', 'Badr', 'Marrakech', 21)";

if(mysqli_query($connexion, $sql)){
    echo "L'ajout est réussi !!";
}   else{
    echo "Problème !!!!!!!!!! >> ".mysqli_error($connexion);
}
    
mysqli_close($connexion);

?>