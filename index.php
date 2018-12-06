<?php
include('lib/bootstrap.lib.php');

/** On créé une première forme */
$rectangle = new Rectangle(150,80);
$rectangle->setLocation(50,50);

/** Une deuxième forme 
 * Nos setters peuvent-être chainé car il retourne une instance de l'objet lui meême
 * Voir les setters dans le class Rectangle
 * Voir : https://www.pierre-giraud.com/php-mysql/cours-complet/php-poo-chainage-methodes.php
*/
$rectangle2 = new Rectangle(150,80);
$rectangle2->setLocation(200,250)->setColor('#FDEE33');
/** Si nos setters ne renvoyaient pas une instance de l'objet (return $this) on aurait du écrire:
 * $rectangle2->setLocation(200,250);
 * $rectangle2->setColor('#FDEE33');
 */

$ellipse1 = new Ellipse(150,80);
$ellipse1->setLocation(400,400)->setColor('#EEDD55');

$circle = new Circle(150);
$circle->setLocation(600,400)->setColor('#123432')->setWidthStroke(5)->setColorStroke('#DD3322')->setOpacity(0.5);

$triangle = new Triangle(20,20,20,150,80,40);
$triangle->setColor('#EEEEEE')->setWidthStroke(2)->setColorStroke('#DDDDDD')->setOpacity(0.5);

/** On appel notre class PaintVector qui va recevoir les objet Form2D et ensuite générer une chaine SVG 
 * La méthode addForm peut-être chainée car elle retourne une instance de l'objet
*/
$paint = new PaintVector(800,600);
$paint->addForm($rectangle)->addForm($rectangle2)->addForm($ellipse1)->addForm($circle)->addForm($triangle);


/** FOrme les reliques de la mort */
$relique1 = new Triangle(500,10,420,140,500,140);
$relique1->setColor('#FFFFFF')->setWidthStroke(1)->setColorStroke('#000000')->setOpacity(0);
/** FOrme les reliques de la mort */
$relique2 = new Triangle(500,10,580,140,500,140);
$relique2->setColor('#FFFFFF')->setWidthStroke(1)->setColorStroke('#000000')->setOpacity(0);

$relique3 = new Circle(44);
$relique3->setLocation(500,95)->setColor('#FFFFFF')->setWidthStroke(1)->setColorStroke('#000000')->setOpacity(0);
$paint->addForm($relique1)->addForm($relique2)->addForm($relique3);

/** On appel la méthode re rendu qui nus retourne une chaine de caractère correspondant à du SVG */
$svg = $paint->render();

/** On inclue notre vue dans laquelle on affichera $svg */
include('tpl/index.phtml');