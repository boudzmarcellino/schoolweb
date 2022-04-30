<?php
class Salle
{
   private $ids;
   private $genre;
   private $nom;
   private $places;
   public function __construct(integer $ids, integer $genre, string $nom, integer $places)
   {
       $this->ids = $ids;
       $this->genre = $genre;
       $this->nom = $nom;
       $this->places = $places;
   }
   public function getIds(){return $this->ids;}
   public function getGenre(){return $this->genre;}
   public function setGenre($genre){$this->genre = $genre;}
   public function getNom(){return $this->nom;}
   public function setNom($nom){$this->nom = $nom;} 
}
?>  