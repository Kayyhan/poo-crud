<?php
class LivreManager{
    private $tabLivres;

    public function ajoutLivre($livre){
        //$livre est de type Livre
        $this->tabLivres[] = $livre;   
    }
    
    //Un simple getteur permmettant de récupérer les livres
    public function getLivres(){return $this->tabLivres;}
}
