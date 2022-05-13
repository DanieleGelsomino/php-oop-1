<?php
//phpinfo()
class Movie {
    public $title;
    public $genre;
    public $year;
    public $overview;
    public $director;
    public $cast;

    function __construct($_title, $_genre, $_year, $_director) {

        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->director = $_director;

    }

    // aggiungo un metodo per tagliare una parte di stringa nella overview

    public function getOverviewCutted($lenght = 100){
        return substr($this->overview, 0, $lenght)."...";
      }
    

}
?>