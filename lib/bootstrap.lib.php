<?php

/** autoloader de nos classes
 * @param string $class nom de la classe recherché
 */
function my_autoloader($class) {
    if(file_exists('class/' . $class . '.class.php'))
        include 'class/' . $class . '.class.php';
    elseif(file_exists('modeles/' . $class . '.class.php'))
        include 'modeles/' . $class . '.class.php';
    else
        throw(new Exception('Une classe est manquante : '.$class));
}

/** On dit à PHP qu'il appelle la fonction my_autoloader s'il ne trouve pas une classe */
spl_autoload_register('my_autoloader');