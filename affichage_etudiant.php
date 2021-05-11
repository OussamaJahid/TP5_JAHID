<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');

body{
    font-family: 'Montserrat', sans-serif;
    text-align: center;
}
   
}
h1{
    font-family: 'Montserrat', sans-serif;
    text-align: center;
}

.zz{
    font-family: 'Montserrat', sans-serif;
    text-align: center;
    padding-left:400px;
    width:991px;
    height:400px !important;
    overflow:visible;
    
}

th, td {
  padding: 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #4CAF50;
  color: white;
}

tr:hover {background-color: #f5f5f5;}
tr:nth-child(even) {background-color: #f2f2f2;}

</style>
<body>

<h1>Liste des étudiants</h1>

<?php

require_once("connexion.php");

$sql = "SELECT * FROM etudiant";

$bb = mysqli_query($connexion, $sql);
if (mysqli_num_rows($bb) > 0){
    echo "<table class='zz'>";
        echo "<thead>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Nom</th>";
                echo "<th>Prénom</th>";
                echo "<th>Adresse</th>";
                echo "<th>Age</th>";
                echo "<th>Action</th>";
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_array($bb)){
            echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nom']."</td>";
                echo "<td>".$row['prenom']."</td>";
                echo "<td>".$row['adresse']."</td>";
                echo "<td>".$row['age']."</td>";
                echo "<td>
                            <i class='fa fa-eye'></i>
                            <i class='fa fa-edit'></i>
                            <i class='fa fa-trash'></i>  
                     </td>";
            echo "</tr>";
        }
        echo "</tbody>";
    echo "</table>";

    mysqli_free_result($bb);
}   else    {
        echo "Rien de rien";
}

mysqli_close($connexion);

?>

<br>

<input type="button" value="Ajouter un étudiant" onclick="self.location.href='formulaire.php'">

</body>
</html>