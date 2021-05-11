<?php

$servername = "localhost";
$username = "root";
$password = "";

$connexion = mysqli_connect($servername, $username, $password);

if (!$connexion){
    die ("Connexion échoué !!".mysqli_connect_error());
}

$sql="CREATE DATABASE ecole";

if (mysqli_query($connexion, $sql)){
    echo "DB created succesfully";
}   else    {
    echo "DB encountered an error : ".mysqli_error($connexion);
}

mysqli_close($connexion);

?>