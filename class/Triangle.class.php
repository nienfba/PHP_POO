<?php

class Triangle extends Form2D
{
    /**
     * @var Point point d'ancrage 2 du polygone Triangle
     */
    private $location2;

    /**
     * @var Point point d'ancrage 3 du polygone Triangle
     */
    private $location3;


    public function __construct($x,$y,$x2,$y2,$x3,$y3)
    {
        $this->location = new Point($x,$y);
        $this->location2 = new Point($x2,$y2);
        $this->location3 = new Point($x3,$y3);
    }

    public function draw()
    {
        return '<polygon  '.$this->getStyleSvg().' points="'.$this->location->getX().' '.$this->location->getY().','.$this->location2->getX().' '.$this->location2->getY().','.$this->location3->getX().' '.$this->location3->getY().'" />';
    }

}