<?php
class film {
    public $titre;
    public $genre;
    public $duree;
    public $date_de_sortie;
    public $realisateur;
    public $distrbution;

    function set_name($name) {
        $this->titre = $name;
    }
}
?>