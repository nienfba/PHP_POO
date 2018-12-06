<?php

class Carre extends Rectangle
{
   /**
     * Construct un carre
     * 
     *  @param integer $largeur largeur du carre
     *  @return  void
     */ 
    public function __construct($largeur)
    {
        parent::__construct($largeur,$largeur);
    }

}