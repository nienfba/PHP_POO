<?php

class Square extends Rectangle
{
   /**
     * Construct un carre
     * 
     *  @param integer $width largeur du carre
     *  @return  void
     */ 
    public function __construct($width)
    {
        parent::__construct($width,$width);
    }

}