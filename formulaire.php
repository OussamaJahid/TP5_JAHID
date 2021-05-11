<?php

require_once("connexion.php");

$nom = $prenom = $adresse = $age = "";

if  ($_SERVER["REQUEST_METHOD"] == "GET") {

    /*
    $nom = isset($_GET["nom"]) ? $_GET["nom"] : '';
                    ==
    if (isset($_GET["nom"])) {
            $nom = $_GET["nom"];
    } else {
        $nom = '';
    }  */
    $nom = isset($_GET["nom"]) ? $_GET["nom"] : '';
    $prenom = isset($_GET["prenom"]) ? $_GET["prenom"] : '';
    $adresse = isset($_GET["adresse"]) ? $_GET["adresse"] : '';
    $age = isset($_GET["age"]) ? $_GET["age"] : '';

}

$sql = "INSERT INTO etudiant (nom, prenom, adresse, age) VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($connexion, $sql);

mysqli_stmt_bind_param($stmt, "ssss", $param_nom, $param_prenom, $param_adresse, $param_age);

$param_nom = $nom;
$param_prenom = $prenom;
$param_adresse = $adresse;
$param_age = $age;

if (!empty($param_nom) && !empty($param_prenom) && !empty($param_adresse) && !empty($param_age)) {

    $stmt -> execute();
    header("location: affichage_etudiant.php");

}

#
mysqli_close($connexion);

?>

<html>

<link rel="stylesheet" href="https://l7encha.artizanly.com/cssforschool/styles.css">
<script src="https://l7encha.artizanly.com/cssforschool/styles.js"> </script>

<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');

body{
    font-family: 'Montserrat', sans-serif;
    text-align: center;
}


</style>
<body>

<div class='box'>
  <div class='box-form'>
    <div class='box-login-tab'></div>
    <div class='box-login-title'>
      <div class='i i-login'></div><h2>Ajouter un nouveau étudiant</h2>
    </div>
    <div class='box-login'>
      
      <form method="GET" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' >
      <div class='fieldset-body' id='login_form'>
        	<p class='field'>
          <label for='nom'>Nom</label>
          <input type='text' id='user' name='nom' title='nom' placeholder=" Nom *" value="<?php echo $nom; ?>" />
          <span id='valida' class='i i-warning'></span>
        </p>
      	  <p class='field'>
          <label for='prenom'>Prenom</label>
          <input type='text' id='pass' name='prenom' title='prenom' placeholder=" Prénom *" value="<?php echo $prenom; ?>" />
          <span id='valida' class='i i-close'></span>
        </p>
        <p class='field'>
          <label for='prenom'>Adresse</label>
          <input type='text' id='pass' name='adresse' title='adresse' placeholder=" Adresse *" value="<?php echo $adresse; ?>" />
          <span id='valida' class='i i-close'></span>
        </p>
        <p class='field'>
          <label for='prenom'>Age</label>
          <input type='numeric' id='pass' name='age' title='age' placeholder=" Age *" value="<?php echo $age; ?>" />
          <span id='valida' class='i i-close'></span>
        </p>

        	<input type='submit' id='do_login' name ='envoyer' value='Submit' title='Envoyer' />
        <input type='reset' id='do_login' name ='reset' value='Annuler' title='Reset' />
      </div>
    </div>
      </form>
  </div>
    
</body>
</html>