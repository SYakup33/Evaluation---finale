<style>
     .container {
  padding: 2px 16px;
  width:100%;
  height:40%;
  display:flex;
  flex-direction: column;
  justify-content:center;
  align-items:center;
  background-color : lightblue;
  
}
h2 {
    font-size : 1.3em;
}
hr {
    background-color: lightgreen;
    height : 1.5em;
}

</style>
<?php

//PDO : Initialiser la connection
$pdo = new PDO('sqlite:employee.db');

//Créer notre requête SQL
$requete = $pdo->query("SELECT * FROM Employee");

//Execution
$resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
// echo "test";
// var_dump($resultat);
echo "<h1> Nos employés </h1>" ;
foreach ($resultat as $resultat){
    echo "<div class='container'>";
        echo "<h2>". $resultat['Prenom'] ."</h2>";
        echo "<p>"." Age ". $resultat['Age'] . " ans". "</p>";
        echo "<p>"." Sexe ". $resultat['Sexe'] . "</p>";
        echo "<p>"." Salaire ". $resultat['Salaire'] . " €". "</p>";
        echo "<p>"." Début du Contrat ". $resultat['anneeEmbauche'] ."</p>";
        echo "<p>"." Type de Contrat ". $resultat['Contrat'] . "</p>";
    echo "</div>";
    echo "<hr>";
}
?>