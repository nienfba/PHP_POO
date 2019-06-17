<?php

class Polygon extends Form2D
{
    /**
     * @var Array collection de points
     */
    private $points;

    /** Construit un ojet Polygone
     * @param void
     * @return void
     */
    public function __construct()
    {
        $this->points = array();
    }

    /** Ajoute un point au Polygone
     * @param int $x position X du point
     * @param int $y position Y du point
     * @return void
     */
    public function addPoint($x,$y)
    {
        $this->points[] = new Point($x,$y);

        return $this;
    }

    /** Dessine une balise SVG pour un polygone
     * @param void
     * @return string chaine SVD du polygone
     */
    public function draw()
    {
        $svg = '<polygon  '.$this->getStyleSvg().' points="';
        foreach($this->points as $point)
        {
            $svg.= $point->getX().' '.$point->getY();
            if(next($this->points))
                $svg.=',';
        }
        $svg.= '"></polygon>';
        
        return $svg;
    }

}