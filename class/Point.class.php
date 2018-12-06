<?php

class Point
{
    /**
     * @var int ordonnée
     */
    private $x;

       /**
     * @var int abscisse
     */
    private $y;

    /**
     * Construct un point
     * 
     *  @param integer $x ordonnée
     *  @param integer $y abscisse
     *  @return  void
     */ 
    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Get ordonnée
     *
     * @return  int
     */ 
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set ordonnée
     *
     * @param  int  $x  ordonnée
     *
     * @return  self
     */ 
    public function setX(int $x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get abscisse
     *
     * @return  int
     */ 
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set abscisse
     *
     * @param  int  $y  abscisse
     *
     * @return  self
     */ 
    public function setY(int $y)
    {
        $this->y = $y;

        return $this;
    }
}