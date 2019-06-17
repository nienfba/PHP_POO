<?php

class Line extends Form2D
{

    /**
     * @var Point point de fin
     */
    private $startPoint;

    /**
     * @var Point point de fin
     */
    private $endPoint;

    /** Constructeur
     * @param int $x coord x de départ de la ligne
     * @param int $y coord y de départ de la ligne
     * @param int $x2 coord x de fin de la ligne
     * @param int $y2 coord Y de fin de la ligne
     * @return void
     */
    public function __construct($x=10, $y=10, $x2=50,$y2=50)
    {
        $this->setStartPoint($x, $y);
        $this->setEndPoint($x2, $y2);
    }

      /** Dessine une balise SVG pour une ligne
     * @param void
     * @return string chaine SVG de la ligne
     */
    public function draw()
    {
        return '<line '.$this->getStyleSvg().' x1="'.$this->getStartPoint()->getX().'" y1="'.$this->getStartPoint()->getY().'" x2="'.$this->getEndPoint()->getX().'" y2="'.$this->getEndPoint()->getY().'" >';
    }


    /**
     * Get point de départ
     *
     * @return Point
     */ 
    public function getStartPoint()
    {
        return $this->startPoint;
    }

    /**
     * Set point de départ
     * @param int $x position X du point
     * @param int $y position Y du point
     * @return  self
     */ 
    public function setStartPoint($x,$y)
    {
        $this->startPoint = new Point($x,$y);

        return $this;
    }

    /**
     * Get point de fin
     *
     * @return  Point
     */ 
    public function getEndPoint()
    {
        return $this->endPoint;
    }

    /**
     * Set point de fin
     * @param int $x position X du point
     * @param int $y position Y du point
     *
     * @return  self
     */ 
    public function setEndPoint($x,$y)
    {
        $this->endPoint = new Point($x,$y);

        return $this;
    }
}