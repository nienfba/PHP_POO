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
        parent::__construct();
    }

    /** Ajoute un point au Polygone
     * @param int $x position X du point
     * @param int $y position Y du point
     * @return void
     */
    public function addPoint($x,$y)
    {
        if(!is_array($this->points))
             $this->points = [];
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
        $svg.= '" />';
        
        return $svg;
    }

}