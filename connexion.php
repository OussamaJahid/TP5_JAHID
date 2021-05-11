<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

$connexion = mysqli_connect($servername, $username, $password, $dbname);

if (!$connexion){
    die ("Connexion échoué !!".mysqli_connect_error());
}

?>