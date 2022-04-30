<script language="php">
    class Evaluation
    {
        private $annee;
        private $genre;
        private $duree;
        private $matiere;
        private $niveau;
        private $date;
        private $salle;
        public function __construct(integer $idm, string $annee, string $genre, integer $niveau,string $duree, string $date, integer $ids)
        {
            $this->matiere = $idm;
            $this->annee = $annee;
            $this->genre = $genre;
            $this->duree = $duree;
            $this->niveau = niveau;
            $this->date = $date;
            $this->salle = $salle;
        }
    }
</script>