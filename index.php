<?php  
    class Employe {
        //Attributs, Propriéte ce sont des variables déclarés dans les class
        public $name;
        private $age;
        private $sexe;
        private $salaire;
        private $anneeEmbauche;
        private $contrat;

        //Méthodes, ce sont des fonctions déclarés dans les class
    public function __construct(
        $name,
        $age,
        $sexe,
        $salaire,
        $anneeEmbauche,
        $contrat
    ) {
        //Traitement de votre fonction
        $this->name = $name;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->salaire = $salaire;
        $this->anneeEmbauche = $anneeEmbauche;
        $this->contrat = $contrat;
    }
    public function getAll() {
        return $this->name;
        return $this->age;
        return $this->sexe;
        return $this->salaire;
        return $this->anneeEmbauche;
        return $this->contrat;
    }
    public function setName ($parametre) {
        $this->name = $parametre;
    }
    public function setage ($parametre) {
        $this->age = $parametre;
    }
    public function setSexe ($parametre) {
        $this->sexe = $parametre;
    }
    public function setSalaire ($parametre) {
        $this->salaire = $parametre;
    }
    public function setAnneeEmbauche ($parametre) {
        $this->anneeEmbauche = $parametre;
    }
    public function setContrat ($parametre) {
        $this->contrat = $parametre;
    }
    // Ici on affiche l'employee, ces attributs
    public function afficher_Employee(){ 
        echo "Prenom : ". $this->name ." \n";
        echo "Age : ". $this->age. " ans \n";
        echo "Sexe : ". $this->sexe. " \n";
        echo "Salaire : ". $this->salaire. " € \n";
        echo "Annee d'embauche : ". $this->anneeEmbauche. " \n";
        echo "Type de Contrat : ". $this->contrat. " \n";
        
    }

}