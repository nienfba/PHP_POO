<?php

class Circle extends Ellipse
{
   /**
     * Construct un cercle
     * 
     *  @param integer $rayon rayon du cercle
     *  @return  void
     */ 
    public function __construct($rayon)
    {
        parent::__construct($rayon,$rayon);
    }

}