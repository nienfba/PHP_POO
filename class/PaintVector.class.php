<?php

class PaintVector
{
    /**
     * @var integer largeur de la zone de dessin
     */
    private $width;
    /**
     * @var integer hauteur de la zone de dessin
     */
    private $height;

    /**
     * @var array containt objet Form2D. Collection d'objet Form2D
     * 
     */
    private $forms;

    /**
     * Construct the PaintVector
     * 
     *  @param integer $width largeur de la zone 
     *  @param integer $height hauteur de la zone 
     *  @param array $forms tableau permettant d'initialiser une zone de dessin avec des formes dès la création
     *  @return  void
     */ 
    public function __construct($width = 800, $height = 600,$forms = array())
    {
        $this->setWidth($width);
        $this->setHeight($height);

        foreach($forms as $form)
            $this->addForm($forms);
    }

    /** Ajoute une form2D à la collection 
     * 
     *  @param Form2D $form un objet de type Form2D
     * 
     *  @return self
    */
    public function addForm(Form2D $form)
    {
        $this->forms[] = $form;

        /** On retourne l'objet lui même pour permettre les appel chainée de méthode 
         * Voir : https://www.pierre-giraud.com/php-mysql/cours-complet/php-poo-chainage-methodes.php
        */
        return $this;
    }

     /** Retourne une chaine SVG pour rendre le résultat
     * 
     *  @param void
     * 
     *  @return string chaine SVG
    */
    public function render()
    {

        $svg = '<svg width="'.$this->width.'" height="'.$this->height.'">';

        foreach($this->forms as $form)
            $svg.= $form->draw();

        $svg.= '</svg>';

        return $svg;
    }

    /**
     * Get largeur de la zone de dessin
     *
     * @return  integer
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set largeur de la zone de dessin
     *
     * @param  integer  $width  largeur de la zone de dessin
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get hauteur de la zone de dessin
     *
     * @return  integer
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set hauteur de la zone de dessin
     *
     * @param  integer  $height  hauteur de la zone de dessin
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}