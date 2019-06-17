<?php

class Ellipse extends Form2D
{
    /**
     * @var integer rayonX de l'ellipse
     */
    private $rayonX;

    /**
     * @var integer rayonY de l'ellipse
     */
    private $rayonY;


     /**
     * Construct une ellipse
     * 
     *  @param integer $rayonX rayonX de l'ellipse
     *  @param integer $rayonY rayonY de l'ellipse
     *  @return  void
     */ 
    public function __construct($rayonX,$rayonY)
    {
        $this->setRayonX($rayonX);
        $this->setRayonY($rayonY);
        parent::__construct();
    }

    public function draw()
    {
        return '<ellipse '.$this->getStyleSvg().' cx="'.$this->location->getX().'" cy="'.$this->location->getY().'" rx="'.$this->rayonX.'" ry="'.$this->rayonY.'" />';
    }


    /**
     * Get rayonX de l'ellipse
     *
     * @return  integer
     */ 
    public function getRayonX()
    {
        return $this->rayonX;
    }

    /**
     * Set rayonX de l'ellipse
     *
     * @param  integer  $rayonX  rayonX de l'ellipse
     *
     * @return  self
     */ 
    public function setRayonX($rayonX)
    {
        $this->rayonX = $rayonX;

        return $this;
    }

    /**
     * Get rayonY de l'ellipse
     *
     * @return  integer
     */ 
    public function getRayonY()
    {
        return $this->rayonY;
    }

    /**
     * Set rayonY de l'ellipse
     *
     * @param  integer  $rayonY  rayonY de l'ellipse
     *
     * @return  self
     */ 
    public function setRayonY($rayonY)
    {
        $this->rayonY = $rayonY;

        return $this;
    }
}