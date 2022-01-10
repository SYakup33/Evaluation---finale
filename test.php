<?php
    require './index.php';
    //Nouveau personnage avec ses stats
    $newEmploye = new Employe ("Yakup",27,"Masculin",3000,2022,"CDI");
    // var_dump($newEmploye);
    $newEmploye->afficher_Employee();