<?php

class Rectangle extends Form2D
{
    /**
     * @var integer largeur du rectancle
     */
    private $largeur;

    /**
     * @var integer hauteur du rectancle
     */
    private $hauteur;

     /**
     * Construct un rectangle
     * 
     *  @param integer $largeur largeur de la zone 
     *  @param integer $hauteur hauteur de la zone 
     *  @return  void
     */ 
    public function __construct($largeur = 10, $hauteur = 5)
    {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
        parent::__construct();
    }


    public function draw()
    {
        return '<rect '.$this->getStyleSvg().' x="'.$this->location->getX().'" y="'.$this->location->getY().'" width="'.$this->largeur.'" height="'.$this->hauteur.'" />';
    }


    /**
     * Get largeur du rectancle
     *
     * @return  integer
     */ 
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set largeur du rectancle
     *
     * @param  integer  $largeur  largeur du rectancle
     *
     * @return  self
     */ 
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get hauteur du rectancle
     *
     * @return  integer
     */ 
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set hauteur du rectancle
     *
     * @param  integer  $hauteur  hauteur du rectancle
     *
     * @return  self
     */ 
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;

        return $this;
    }
}