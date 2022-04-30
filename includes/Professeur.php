<?php
class Professeur
{
    private $idp;
    private $nom;
    private $prenom; 
    private $grade;
    private $specialite;       
    public function __construct($idp, $nom, $prenom, $grade, $specialite)
    {
        $this->idp = $idp;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->grade = $grade;
        $this->specialite = $specialite;
    }
    public function getIdp(){return $this->idp;}
    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom = $nom;}
    public function getPrenom(){return $this->$nom;}
    public function setPrenom($prenom){$this->prenom = $prenom;}
    public function getGrade(){return $this->grade;}
    public function getSpecialite(){return $this->specialite;}
    public function setSpecialite($specialite){$this->specialite = $specialite;}
    public function setGrade($grade){$this->grade = $grade;}
    public function __toString()
    {
        return $this->idp . " " . $this->nom . " " . $this->prenom . " " . $this->grade . " " . $this->specialite ;
    }
}
?>
