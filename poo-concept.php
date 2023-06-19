<?php
/*
    POO
    -- Classe: entité qui englobe des objets
    -- Objet : une instance de classe
    Concepts de l'OO: (4 concepts)
        -- Encapsulation
            Camoufler les données sauf pour le développeur.
*/
$x = 5; // Varibles hors class

    class Personne{
        // Attributs
        // Modificateurs : public, private, protected
        protected $_prenom = "Paul";
        protected $_nom = "George";
        protected $_age = 89;
        protected $_fonction = "PDG";
        protected $_salaire = 1800;
        // Le constructeur: permet de créer des objets en assignant des valeurs.
        public function __construct($prenom,$nom,$age,$fonction,$salaire)
        {
            $this->_prenom = $prenom;
            $this->_nom = $nom;
            $this->_age = $age;
            $this->_fonction = $fonction;
            $this->_salaire = $salaire;
        }
        // GETTERS / SETTERS
        public function getPrenom(){return $this->_prenom;}
        public function getNom(){return $this->_nom;}
        public function getAge(){return $this->_age;}
        public function getFonction(){return $this->_fonction;}
        public function getSalaire(){return $this->_salaire;}


        public function setPrenom($newPrenom){$this->_prenom = $newPrenom;}
        public function setNom($newNom){$this->_nom = $newNom;}
        public function setAge($newAge){$this->_age = $newAge;}
        public function setFonction($newFonction){$this->_fonction = $newFonction;}
        public function setSalaire($newSalaire){$this->_salaire = $newSalaire;}

        // Méthodes
        public function afficherInfo(){
            echo "Je suis ". $this->getPrenom() . " ". $this->getNom();
        }
        public function reduireSalaire($pourcentage){
            $nouveauxSalaire = $this->getSalaire() - ( $this->getSalaire() * ( $pourcentage /100));
            $this->setSalaire($nouveauxSalaire);
            return $nouveauxSalaire;
        }
        public abstract function calculer();
    }
    //echo $_prenom; // FAUX
    // ATTENTION : On ne manipule pas les classes, il faut passer par un objet.
    $p1 = new Personne("Cherlock","Holmes",77,"Détective",5600); // instanciation par défaut de la classe Personne
    $p2 = new Personne("Naruto","Uzumaki",19,"Hokage",500);
    echo $p1->getPrenom() . "<br>";
    $p1->setPrenom("ABCD");
    echo $p1->getPrenom() . "<br>";
    echo $p1->getNom();
    echo "<br>";
    $p1->afficherInfo();  
    echo "<br>";
    $p2->afficherInfo();  
    echo "<br>";

        echo "Salaire actuel : ".$p1->getSalaire()."<br>";
    //Créer une fonction reduireSalaire($pourcentage)
    echo "Le nouveau salaire après sanction : ".$p1->reduireSalaire(20)."<br>";
    echo $p1->getSalaire();
    echo "<br>";
        class Homme extends Personne{
        // Attributs

        protected $serviceMilitaire = FALSE;
        // Le constructeur: permet de créer des objets en assignant des valeurs.
        public function __construct($prenom,$nom,$age,$fonction,$salaire,$serviceMilitaire)
        {
            parent::__construct($prenom,$nom,$age,$fonction,$salaire);
            $this->_service = $serviceMilitaire;
        }
        // GETTERS / SETTERS
        public function getServiceMilitaire(){return $this->_serviceMilitaire;}
        public function setService($newServiceMilitaire){$this->_serviceMilitaire = $newserviceMilitaire;}

        public function afficherInfos(){
            if($this->getServiceMilitaire()){
                $service = "!VALIDER!";
            }else{
                $service = "!NON VALIDER!";
            }
            return parent::afficherInfo() . ". Mes services militaires sont " . $service;
        }
    }
    $h1 = new Homme("Jean", "Dujardin", 56, "Acteur", 9900, true);
    $h1 ->afficherInfo();
    $h1 ->reduireSalaire(20);
    echo $h1 ->getSalaire();


            class Femme extends Personne{

        protected $conge = TRUE;
        // Le constructeur: permet de créer des objets en assignant des valeurs.
        public function __construct($prenom,$nom,$age,$fonction,$salaire,$conge)
        {
            parent::__construct($prenom,$nom,$age,$fonction,$salaire);
            $this->_conge = $conge;
        }

        public function getConge(){return $this->_conge;}
        public function setConge($newConge){$this->_conge = $newConge;}
    }