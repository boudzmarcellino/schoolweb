<script language="php">
    class Cours
    {
        private $annee;
        private $genre;
        private $duree;
        private $matiere;;
        private $niveau;
        private $date;
        private $salle;
        public function __construct(string $annee, string $genre, integer $niveau, string $date, integer $ids)
        {
            $this->annee = $annee;
            $this->genre = $genre;
            $this->niveau = niveau;
            $this->date = $date;
            $this->salle = $salle;
        }
        
    }
</script>