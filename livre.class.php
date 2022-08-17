<?php
class Livre{
    private $id;
    private $titre;
    private $nbPages;
    private $image;



    public function __construct($id,$titre,$nbPages,$image){
        // La partie gauche fait référence à l'attribut et la partie droite aux paramètre de fonction
        $this->id = $id;
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->image = $image;
    } 

    //Les getteurs
    public function getId(){return $this->id;}
    public function getTitre(){return $this->titre;}
    public function getNbPages(){return $this->nbPages;}
    public function getImage(){return $this->image;}

    //Les setteurs
    public function setId($id){$this->id = $id;}
    public function setTitre($titre){$this->titre = $titre;}
    public function setNbPages($nbPages){$this->nbPages = $nbPages;}
    public function setImage($image){$this->image = $image;}


    
}
