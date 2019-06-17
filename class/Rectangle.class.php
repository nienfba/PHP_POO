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
    public function getLargeur()
    {
        return $this->width;
    }

    /**
     * Set largeur du rectancle
     *
     * @param  integer  $largeur  largeur du rectancle
     *
     * @return  self
     */ 
    public function setLargeur($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get hauteur du rectancle
     *
     * @return  integer
     */ 
    public function getHauteur()
    {
        return $this->height;
    }

    /**
     * Set hauteur du rectancle
     *
     * @param  integer  $hauteur  hauteur du rectancle
     *
     * @return  self
     */ 
    public function setHauteur($height)
    {
        $this->height = $height;

        return $this;
    }
}