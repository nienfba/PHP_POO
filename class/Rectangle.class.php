<?php

class Rectangle extends Form2D
{
    /**
     * @var integer largeur du rectancle
     */
    private $width;

    /**
     * @var integer hauteur du rectancle
     */
    private $height;

     /**
     * Construct un rectangle
     * 
     *  @param integer $largeur largeur de la zone 
     *  @param integer $hauteur hauteur de la zone 
     *  @return  void
     */ 
    public function __construct($width = 10, $height = 5)
    {
        $this->setWidth($width);
        $this->setHeight($height);
        parent::__construct();
    }


    public function draw()
    {
        return '<rect '.$this->getStyleSvg().' x="'.$this->location->getX().'" y="'.$this->location->getY().'" width="'.$this->height.'" height="'.$this->height.'" />';
    }


    /**
     * Get largeur du rectancle
     *
     * @return  integer
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set largeur du rectancle
     *
     * @param  integer  $width  largeur du rectancle
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get hauteur du rectancle
     *
     * @return  integer
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set hauteur du rectancle
     *
     * @param  integer  $height  hauteur du rectancle
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}