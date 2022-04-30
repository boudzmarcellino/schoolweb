<?php 
    class Matiere
    {
        private $idm;
        private $nom;
        private $coefficient;
        private $idp;
        public function __construct($idm, $nom, $coefficient, $idp)
        {
            $this->idm = $idm;
            $this->nom = $nom;
            $this->coefficient = $coefficient;
            $this->idp = $idp;
        }
        public function getIdm(){return $this->idm;}
        public function getNom(){return $this->nom;}
        public function setNom($nom){$this->nom = $nom; }
        public function getCoefficient(){$this->coefficient = $coefficient;}
        public function setCoefficient($coefficient){$this->coefficient = $coefficient;}
        public function getIdp(){return $this->idp;}
        public function setIdp($idp){$this->idp = $idp;}
    }
?>