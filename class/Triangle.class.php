<?php

class Triangle extends Polygon
{
    public function __construct($x,$y,$x2,$y2,$x3,$y3)
    {
        $this->addPoint($x,$y);
        $this->addPoint($x2,$y2);
        $this->addPoint($x3,$y3);
        parent::__construct();
    }

}