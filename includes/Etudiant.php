<?php 
class Etudiant
{
    private $ide;
    private $nom;
    private $prenom;
    private $aEntree;
    private $nEntree;
    private $option;
    public function __construct($ide, $nom, $prenom, $aEntree, $nEntree, $option)
    {
        $this->ide = $ide;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->aEntree = $aEntree;
        $this->nEntree = $nEntree;
        $this->option = $option;
    }
    public function getIde(){return $this->ide;}
    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom = $nom;}
    public function getPrenom(){return $this->$nom;}
    public function setPrenom($prenom){$this->prenom = $prenom;}
    public function getOption(){return $this->option;}
    public function setOption($option){$this->option = $option;}

    public function __toString()
    {
        return $this->ide . " " . $this->nom . " " . $this->prenom . " " . $this->aEntree . " " . $this->nEntree ;         return $this->idp . " " . $this->nom . " " . $this->prenom . " " . $this->grade . " " . $this->specialite . " " .$this->option;
    }
}
?>