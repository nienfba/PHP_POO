<?php

abstract class Form2D
{
    /**
     * @var string chaine exadecimal de couleur ex: FFEE22
     */
    protected $color;
    
    /**
     * @var string chaine exadecimal de couleur ex: FFEE22
     */
    protected $colorStroke;

    /**
     * @var Point objet de type point représentant une coordonnées dans le shape SVG
     */
	protected $location;

    /**
     * @var float opacity comprise entre 0 et 1
     */
    protected $opacity;

     /**
     * @var float opacity du trait de contour comprise entre 0 et 1
     */
    protected $opacityStroke;

     /**
     * @var integer largeur du trait de contour entr e 1 et n
     */
    protected $widthStroke;


    /**
     * Méthode abstraite que tous les enfants (classes filles) devront définir
     *  @param void  
     * 
     *  @return  void
     */ 
	abstract public function draw();


    /**
     * Construct the Form2D with start default values for properties
     * 
     *  @param void  
     * 
     *  @return  void
     */ 
	public function __construct()
	{
		$this->color    = 'black';
        $this->location = new Point(0,0);
        $this->opacity  = 1;
        $this->widthStroke  = 0;
        $this->opacityStroke = 1;
    }
    
     /**
     * Retourne la chaine de style SVG correspondant aux propriétés d'une forme standard
     *
     * @return  string
     */
    public function getStyleSvg()
    {
        return 'style="fill:'.$this->color.';stroke:'.$this->colorStroke.';stroke-width:'.$this->widthStroke.';fill-opacity:'.$this->opacity.';stroke-opacity:'.$this->opacityStroke.'"';
    }

    /**
     * Get chaine exadecimal de couleur ex: FFEE22
     *
     * @return  string
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set chaine exadecimal de couleur ex: FFEE22
     *
     * @param  string  $color  chaine exadecimal de couleur ex: FFEE22
     *
     * @return  self
     */ 
    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get chaine exadecimal de couleur ex: FFEE22
     *
     * @return  string
     */ 
    public function getColorStroke()
    {
        return $this->colorStroke;
    }

    /**
     * Set chaine exadecimal de couleur ex: FFEE22
     *
     * @param  string  $colorStroke  chaine exadecimal de couleur ex: FFEE22
     *
     * @return  self
     */ 
    public function setColorStroke(string $colorStroke)
    {
        $this->colorStroke = $colorStroke;

        return $this;
    }

	/**
	 * Get objet de type point représentant une coordonnées dans le shape SVG
	 *
	 * @return  Point
	 */ 
	public function getLocation()
	{
		return $this->location;
	}

	/**
	 * Set objet de type point représentant une coordonnées dans le shape SVG
	 *
	 * @param  integer  $x  position x
     * @param  integer  $y  position y
	 *
	 * @return  self
	 */ 
	public function setLocation($x, $y)
	{
		$this->location = new Point($x,$y);

		return $this;
	}

    /**
     * Get opacity comprise entre 0 et 1
     *
     * @return  float
     */ 
    public function getOpacity()
    {
        return $this->opacity;
    }

    /**
     * Set opacity comprise entre 0 et 1
     *
     * @param  float  $opacity  opacity comprise entre 0 et 1
     *
     * @return  self
     */ 
    public function setOpacity(float $opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }

    /**
     * Get opacity du trait de contour comprise entre 0 et 1
     *
     * @return  float
     */ 
    public function getOpacityStroke()
    {
        return $this->opacityStroke;
    }

    /**
     * Set opacity du trait de contour comprise entre 0 et 1
     *
     * @param  float  $opacityStroke  opacity du trait de contour comprise entre 0 et 1
     *
     * @return  self
     */ 
    public function setOpacityStroke(float $opacityStroke)
    {
        $this->opacityStroke = $opacityStroke;

        return $this;
    }

    /**
     * Get largeur du trait de contour entr e 1 et n
     *
     * @return  integer
     */ 
    public function getWidthStroke()
    {
        return $this->widthStroke;
    }

    /**
     * Set largeur du trait de contour entr e 1 et n
     *
     * @param  integer  $widthStroke  largeur du trait de contour entr e 1 et n
     *
     * @return  self
     */ 
    public function setWidthStroke($widthStroke)
    {
        $this->widthStroke = $widthStroke;

        return $this;
    }
}